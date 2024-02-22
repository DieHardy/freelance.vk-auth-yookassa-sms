<?php
require ("session.php");
require ('functionsDB.php');
require('validate.php');
if(checkPhone($conn, $_SESSION['id_user'])){
    header('Location: profile.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Подтверждение телефона</title>
</head>
<body>
<h2>Подтверждение телефона</h2>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $code ='';
    if(isset($_POST['sendCode'])){
        $number = test_input($_POST['userPhone']);
        if(isPhoneUsed($conn, $number)){
            echo "<p>Данный телефон уже используется.</p>";
            echo '
            <form method="post" action="">
                <label for="userPhone">Введите номер телефона: <b>+7</b></label>
                <input type="tel" id="userPhone" name="userPhone" pattern="[0-9]{10}" 
                placeholder="пример: 9031234567" required autocomplete="off">
                <button type="submit" name="sendCode">Отправить код</button>
            </form>';
        } else{
            if(isMessageDelivered($conn, $_SESSION['id_user'])){
                echo "<p>Вы уже запрашивали запрос на подтверждение телефона. Повторите попытку через 5 минут.</p>";
                echo '
                <form method="post" action="">
                    <label for="userPhone">Введите номер телефона: <b>+7</b></label>
                    <input type="tel" id="userPhone" name="userPhone" pattern="[0-9]{10}" 
                    placeholder="пример: 9031234567" required autocomplete="off">
                    <button type="submit" name="sendCode">Отправить код</button>
                </form>';
            } else{
            saveTry($conn, $_SESSION['id_user']);
            $_SESSION['userPhone'] = $number;
            printPhoneConfirmationForm();
            $_SESSION['confirmation_code'] = sendMessage("7" . $number);
            }
        }
    }

   if (isset($_POST['confirmCode'])) {
        $code = isset($_SESSION['confirmation_code']) ? $_SESSION['confirmation_code'] : '';
        if ($code == test_input($_POST['code'])) {
            if(confirmPhone($conn)){
                echo '<p>Вы успешно подтвердили свой номер телефона и получили доступ к тестовому периоду на 1 день.</p>
            <a href="profile.php">Вернуться в профиль</a>';
            }
        }
        else{
            echo "<p>Вы ввели неверный код</p>";
            printPhoneConfirmationForm();
        }
    }


}
else{
echo '
 <form method="post" action="">
    <label for="userPhone">Введите номер телефона: <b>+7</b></label>
    <input type="tel" id="userPhone" name="userPhone" pattern="[0-9]{10}" 
    placeholder="пример: 9031234567" required autocomplete="off">
    <button type="submit" name="sendCode">Отправить код</button>
</form>';
}


?>
</body>
</html>
