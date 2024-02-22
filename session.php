<?php
session_start();
include 'config.php';
$oauthUrl = "https://oauth.vk.com/authorize?client_id=" . ID . "&display=page&redirect_uri=" . URL . "&scope=photos&response_type=code&v=5.131";

if (isset($_SESSION['logged_in']) != true) {
    header("Location: " .$oauthUrl);
    exit();
}
if(isset($_SESSION['logged_in']) == true){
    echo "<form method='post' action='./logout.php'>
    <button type='submit'>Выйти из аккаунта</button></form>
    <a href='profile.php'>Профиль</a>
    ";
}

function checkAccess($conn)
{
    $sql = "SELECT * FROM users WHERE id = :id_user";
    $currentDate = new DateTime(); // Use DateTime object for the current date and time

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_user', $_SESSION['id_user']);
    $stmt->execute();
    $user = $stmt->fetch();

    $subscription = ($user['subscription'] !== '0000-00-00 00:00:00') ?
        new DateTime($user['subscription']) : null;

    if ($user['test_period'] === '0000-00-00 00:00:00') {
        // Handle the case when test_period is the default date for no subscription
        $testPeriod = null;  // or any other handling logic
    } else {
        $testPeriod = ($user['test_period'] !== null) ? new DateTime($user['test_period']) : null;
    }

    if ($testPeriod !== null && $currentDate < $testPeriod) {
        return 1;
    } else {
        if ($subscription !== null && $currentDate < $subscription){
            return 1;
        }
        else {
            return 0;
        }
    }



}

