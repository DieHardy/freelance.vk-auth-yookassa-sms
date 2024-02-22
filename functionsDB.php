<?php
require('connectDB.php');

function checkUser($conn, $user_data){
    $sql = "SELECT * FROM `users` WHERE `id` = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $user_data['id']);
    $stmt->execute();
    $user = $stmt->fetch();
    return $user;
}
function insertUser($conn, $user_data){
    $sql = "INSERT INTO `users`(`id`, `name`, `phone`, `verified_phone`,
     `test_period`, `sex`, `birth_date`, `city`) VALUES
      (:id,:name,'','','',:gender,:birth_day,:city)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $user_data['id']);
    $stmt->bindParam(':name', $user_data['name']);
    $stmt->bindParam(':gender', $user_data['gender']);
    $converted_date = date("Y-m-d", strtotime($user_data['birthday']));
    $stmt->bindParam(':birth_day', $converted_date);
    $stmt->bindParam(':city', $user_data['city']);
    $stmt->execute();
}
function updateUser($conn, $user_data){
    $sql = "UPDATE `users` SET `name`=:name,
    `sex`=:gender,`birth_date`=:birth_day,`city`=:city WHERE `id`=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $user_data['id']);
    $stmt->bindParam(':name', $user_data['name']);
    $stmt->bindParam(':gender', $user_data['gender']);
    $converted_date = date("Y-m-d", strtotime($user_data['birthday']));
    $stmt->bindParam(':birth_day', $converted_date);
    $stmt->bindParam(':city', $user_data['city']);
    $stmt->execute();
}
function checkPeriod($conn, $user_id){
    $sql = 'SELECT `phone`, `verified_phone`, `test_period` FROM `users` WHERE `id` = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    $user = $stmt->fetch();
  //  var_dump($user);

    return $user;
}
function getProducts($conn){
    $sql = 'SELECT * FROM `products`';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();
    return $products;
}
function getPrice($conn, $id){
    $sql = 'SELECT `price` FROM `products` WHERE `id` = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $price = $stmt->fetch();
    return $price[0];
}
function makeOrder($conn, $customer){
    $sql = 'INSERT INTO `orders`(`name`, `price`, `status`, `email`, `id_user`) 
    VALUES (:name,:price,0,:email, :id_user)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $customer['name']);
    $stmt->bindParam(':price', $customer['price']);
    $stmt->bindParam(':email', $customer['email']);
    $stmt->bindParam(':id_user', $customer['id_user']);
    if($stmt->execute()){
        $order_id = $conn->lastInsertId();
        return $order_id;
    } else {
        echo "<h3>Ошибка при создании заказа</h3>";
        return false; // Return false to indicate failure
    }

}
function getUserFromOrder($conn, $payment_order_id){
        $sql = "SELECT id_user FROM orders WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $payment_order_id);
        $stmt->execute();
        $user_id = $stmt->fetch();
        return $user_id[0];
}
function checkSubscription($conn, $user_id){
    $sql = "SELECT subscription FROM users WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    $date = $stmt->fetch();
    $dateTimeObject = new DateTime($date[0]);
    $currentDateTime = new DateTime();
    if ($dateTimeObject > $currentDateTime) {
        
        return $date[0];
    } elseif ($dateTimeObject <= $currentDateTime) {
        return 0;
    } 
}
function checkTestPeriod($conn, $user_id){
    $sql = "SELECT test_period FROM users WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    $date = $stmt->fetchColumn(); 
    if ($date === false || empty($date)) {
        // Handle case where no rows are found
        // Handle case where test period is not set
        return "<p>Пользователь не найден</p>";
    }
    $testPeriod = new DateTime($date);
    $currentDateTime = new DateTime();
    $zeroDate = new DateTime('0000-00-00 00:00:00');
    if ($testPeriod > $currentDateTime) {
        // Test period is active
        return "<p>У вас активен тестовый период до " . $date. "</p>";
    } elseif ($testPeriod <= $currentDateTime) {
        if ($testPeriod == $zeroDate) {
            // Test period hasn't started yet
            return "<p>
            <a href='confirm.php'>Подтвердите </a>номер телефона, чтобы получить тестовый период на 1 день.
            </p>";
        }
        // Test period has ended
        return "<p>Ваш тестовый период истек. Пожалуйста, оформите подписку.</p>";
    }
}
function updateOrder($conn, $payment_order_id, $correct_amount, $id_user){
    $sql = "UPDATE orders SET status = 1, final_date = :data WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $days = defineSubscription($conn, $correct_amount);

    $getSubscriptionSql = "SELECT `subscription` FROM `users` WHERE `id` = :id_user";
    $getStmt = $conn->prepare($getSubscriptionSql);
    $getStmt->bindParam(':id_user', $id_user);
    $getStmt->execute();
    $subscription = $getStmt->fetch();
    
    $currentDate = date('Y-m-d H:i:s');

    if($subscription[0] != '0000-00-00 00:00:00' && $currentDate < $subscription[0]){
        $subscriptionDate = date('Y-m-d H:i:s', strtotime($subscription[0] . ' + ' . $days . ' days'));
    } else{
        $subscriptionDate = date('Y-m-d H:i:s', strtotime($currentDate . ' + ' . $days . ' days'));
    }

    $stmt->bindParam(':id', $payment_order_id);
    $stmt->bindParam(':data', $subscriptionDate);
    $stmt->execute();
    return $subscriptionDate;
}
function defineSubscription($conn, $price){
    $sql = "SELECT days FROM products WHERE price=:price";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':price', $price);
    $stmt->execute();
    $days= $stmt->fetchColumn();
    return $days;
}
function updateSubscription($conn,$user_id, $subscriptionDate){
    $sql = "UPDATE users SET subscription = :subscriptionDate WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    $stmt->bindParam(':subscriptionDate', $subscriptionDate);
    $stmt->execute();
}
function printPhoneConfirmationForm(){
    if($_SESSION['userPhone']){
       echo '<p>На номер 7'.$_SESSION['userPhone'].' должен поступить звонок с кодом подтверждения.</p>'; 
    }

    echo ' <form method="post" action="">
    <label for="code">Код подтверждения:</label>
    <input type="number" id="code" name="code" 
    placeholder="Код подтверждения" required autocomplete="off">
    <button type="submit" name="confirmCode">Подтвердить</button>
</form>';
}
function confirmPhone($conn){
    $sql = "UPDATE `users` SET `test_period` = :date, `verified_phone` = 1, `phone` = :phone WHERE `users`.`id` = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_SESSION['id_user']);
    $number = "7" . $_SESSION['userPhone'];
    $stmt->bindParam(':phone', $number);
    $currentDate = date('Y-m-d H:i:s');
    $testPeriod = date('Y-m-d H:i:s', strtotime($currentDate . ' + 1 days'));
    $stmt->bindParam(':date', $testPeriod);
    if($stmt->execute()){
            return  1;
    } else{
        echo "<p>Произошла ошибка. Попробуйте авторизоваться еще раз.</p>";
    }
}
function sendMessage($number){
    $code = rand(1000, 9999);
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://vk.cc/cuRIYZ',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
        "apiKey": "tryThiss -_-",
        "sms": [
            {
                "channel": "digit",
                "text": "Здравствуйте! Ваш код подтверждения '.$code.' .",
                "phone":"'.$number.'"
            }
        ]
    }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    return $code;
}
function isPhoneUsed($conn, $phone){
    $sql = "SELECT phone FROM users WHERE phone=:phone";
    $stmt = $conn->prepare($sql);
    $phone = "7" . $phone;
    $stmt->bindParam(':phone', $phone);
    $stmt->execute();
    $phone= $stmt->fetch();
    return $phone;
}
function isMessageDelivered($conn, $user_id){
    $sql = "SELECT verification_try FROM users WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    $try = $stmt->fetch();
    if ($try[0]) {
        $tryTime = new DateTime($try[0]);
        $currentDateTime = new DateTime();
        $difference = $tryTime->getTimestamp() - $currentDateTime->getTimestamp();
        $differenceInMinutes = $difference / 60;
        if (abs($differenceInMinutes) > 5) {
            return 0;
        } else {
            return 1;
        }
    }    
}
function saveTry($conn, $user_id){
    $sql = "UPDATE `users` SET `verification_try` = :date WHERE `id` = :id";
    $stmt = $conn->prepare($sql);
    $currentDate = date('Y-m-d H:i:s');
    $stmt->bindParam(':id', $user_id);
    $stmt->bindParam(':date', $currentDate);
    $stmt->execute();
}
function checkPhone($conn, $user_id){
    $sql = "SELECT verified_phone FROM users WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    $verifiedPhone = $stmt->fetch();
    return $verifiedPhone[0];
}

function getPromo($conn, $code){
    $sql = "SELECT * FROM promocodes WHERE code=:code";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':code', $code);
    $stmt->execute();
    $isCode = $stmt->fetch();

    return $isCode;
}
function activateCode($conn, $days, $id_code, $id_user){

    $getSubscriptionSql = "SELECT `subscription` FROM `users` WHERE `id` = :id";
    $getStmt = $conn->prepare($getSubscriptionSql);
    $getStmt->bindParam(':id', $id_user);
    $getStmt->execute();
    $subscription = $getStmt->fetch();
    
    $currentDate = date('Y-m-d H:i:s');
    $updateSql = "UPDATE `users` SET `subscription`=:subscription WHERE `id` = :id";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bindParam(':id', $id_user);
    if($subscription[0] != '0000-00-00 00:00:00' && $currentDate < $subscription[0]){
        $subscriptionDate = date('Y-m-d H:i:s', strtotime($subscription[0] . ' + ' . $days . ' days'));
    } else{
        $subscriptionDate = date('Y-m-d H:i:s', strtotime($currentDate . ' + ' . $days . ' days'));
    }
    $updateStmt->bindParam(':subscription', $subscriptionDate);
    $updateStmt->execute();

    $deleteSql = "DELETE FROM `promocodes` WHERE `id_code`=:id";
    $deleteStmt = $conn->prepare($deleteSql);
    $deleteStmt->bindParam(':id', $id_code);
    $deleteStmt->execute();

    return 1;
}

function checkPaymentStatus($conn, $payment_order_id){
    $sql = "SELECT `id` FROM `orders` WHERE  `status` = 1 AND `id` =:id_payment";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_payment', $payment_order_id);
    $stmt->execute();
    return $stmt->rowCount() > 0;
}