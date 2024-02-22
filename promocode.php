<?php 
require ("session.php");

require ("functionsDB.php");
require ("validate.php");

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Активация промокода</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    if(isset($_POST['activatePromo'])){

    $code = test_input($_POST['promocode']);
    $_SESSION['promocode'] = $code;
    $isCode = getPromo($conn, $code);
    if($isCode){

        if(activateCode($conn, $isCode['days'], $isCode['id_code'], $_SESSION['id_user'])){
                echo '<p>Промокод активирован.</p>';
        }
        // update sub and delete code
    } else{
        echo '<p>Промокод не найден.</p>';
        echo '
            <form method="post" action="">
                <label for="promocode">Введите промокод: </label>
                <input type="text" id="promocode" name="promocode" 
                placeholder="промокод" required autocomplete="off">
                <button type="submit" name="activatePromo">Активировать промокод</button>
            </form>';
    }
    }


}
else{
echo '
 <form method="post" action="">
    <label for="promocode">Введите промокод: </label>
    <input type="text" id="promocode" name="promocode" 
    placeholder="промокод" required autocomplete="off">
    <button type="submit" name="activatePromo">Активировать промокод</button>
</form>';
}

?>
</body>
</html>
