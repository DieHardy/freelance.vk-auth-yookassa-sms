<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=this;charset=utf8mb4', 'try', 'this');
    // echo "Connection is successful.";
} catch (PDOException $e) {
    echo "Connection is failed: " . $e->getMessage();
}
