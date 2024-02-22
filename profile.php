<?php 
require ("session.php");
require ('functionsDB.php');
include ('config.php');


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require __DIR__ . '/vendor/autoload.php';
use \YooKassa\Client;

$products = getProducts($conn);
$subscription = checkSubscription($conn, $_SESSION['id_user']);
if($subscription){
    $message = 'У вас оформлена подписка до ' . $subscription;
} else {
    $message = checkTestPeriod($conn, $_SESSION['id_user']);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    if($id){
        $price = getPrice($conn, $id);
        if($price){
            $customer = [
                'price' => $price,
                'email' => $_POST['email'],
                'name' => $_POST['name'],
                'id_user' => $_SESSION['id_user']
            ];
        $order_id = makeOrder($conn, $customer);
        $client = new Client();
        $client->setAuth(SHOP_ID, API_KEY);
                    $response = $client->createPayment(
                            array(
                                'amount' => array(
                                    'value' => $price,
                                    'currency' => 'RUB',
                                ),
                                'confirmation' => array(
                                    'type' => 'redirect',
                                    'return_url' => SUCCESS_URL,
                                ),
                                'capture' => true,
                                'description' => 'Заказ №' . $order_id,
                                'metadata' => [
                                    'orderNumber' => $order_id
                                ],
                            ),
                            uniqid('', true)
                        );
                $confirmationUrl = $response->getConfirmation()->getConfirmationUrl();
               // var_dump($confirmationUrl);
                header("Location: {$confirmationUrl}");
                die;
        }
        else{
            echo '<h3 class="card-title">Неверная цена.</h3>';
        }
    } else{
        echo '<h3 class="card-title">Товар не найден.</h3>';
    }


}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
    <link href="/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container mt-5">
<h1>Профиль</h1> <a href='./index.php'>Главная</a>
<h3>Добро пожаловать, <?php echo $_SESSION['name']; ?></h3>
<?php
if($message){
    echo $message;
}
?>
<h4><a href='./promocode.php'>Активация промокода</a></h4>
<h2 class="card-title mt-2">Тарифные планы</h2>
    <div class="row mt-1">
        <?php
        foreach ($products as $product){
        echo '
            <div class="col-lg-3">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">'. $product['name'] .'</h5>
                        <p class="card-text">'. $product['price'] .' рублей</p>
                        <a href="?id='. $product['id'] .'" class="btn btn-primary buy-product" data-bs-toggle="modal"
                           data-bs-target="#buy" data-id="'. $product['id'] .'">Купить</a>
                    </div>
                </div>
            </div>';
            }
        ?>
    </div>




<!-- Modal -->
<div class="modal fade" id="buy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Введите данные</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Имя">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email почта</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="email@example.com">
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" id="productId">
                        <button type="submit" class="btn btn-primary">Оформить</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    let buttons = document.querySelectorAll('.buy-product');
    buttons.forEach(item => {
        item.addEventListener('click', (e) => {
            document.getElementById('productId').value = item.dataset.id;
        });
    });
</script>

</body>
</html>
