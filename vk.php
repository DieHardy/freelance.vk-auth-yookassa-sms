<?php
session_start();
require('validate.php');
require('functionsDB.php');



if (!isset($_GET['code'])) {
    exit('Ошибка подтверждения.');
}



include 'config.php';

$token = json_decode(file_get_contents
('http://oauth.vk.com/access_token?client_id='.ID.'&client_secret='.
SECRET.'&redirect_uri='.URL.'&code='.$_GET['code']), true);

if (!$token){
exit('Неправильный токен.');
}



//https://dev.vk.com/method/users.get
$data = json_decode(file_get_contents
('https://api.vk.com/method/users.get?access_token='.$token['access_token'].'&user_ids='.
$token['user_id'].'&fields=first_name,sex,city,bdate,last_name,photo_200_orig&name_case=nom&v=5.131'), true);

if (!$data){
exit('Ошибка получения данных.');
} else{
$user_data = array(
    'id' => isset($data['response'][0]['id']) ? test_input($data['response'][0]['id']) : null,
    'name' => isset($data['response'][0]['first_name']) && isset($data['response'][0]['last_name']) ? 
              test_input($data['response'][0]['first_name']) . ' ' . test_input($data['response'][0]['last_name']) : null,
    'city' => isset($data['response'][0]['city']['title']) ? test_input($data['response'][0]['city']['title']) : null,
    'birthday' => isset($data['response'][0]['bdate']) ? test_input($data['response'][0]['bdate']) : null,
    'gender' => isset($data['response'][0]['sex']) ? test_input($data['response'][0]['sex']) : null
);



    switch ($user_data['gender']) {
        case 0:
            $user_data['gender'] = 'Не указан';
            break;
        case 1:
            $user_data['gender'] = 'Женский';
            break;
        case 2:
            $user_data['gender'] = 'Мужской';
            break;
        default:
            $user_data['gender'] = 'Неизвестно';
    }
// echo'<pre>';
// var_dump($user_data); 
// echo'</pre>';
}

$user = checkUser($conn, $user_data);

if($user){
    updateUser($conn, $user_data);
    $_SESSION['id_user'] = $user_data['id'];
    $_SESSION['name'] = $user_data['name'];
    $_SESSION['logged_in'] = true;
    header("Location: profile.php");
    exit(); 
}
else {
    insertUser($conn, $user_data);
    $_SESSION['id_user'] = $user_data['id'];
    $_SESSION['name'] = $user_data['name'];
    $_SESSION['logged_in'] = true;
    header("Location: profile.php");
    exit(); 
}


?>