<?php 
require ("session.php");
require ('connectDB.php');
if(!checkAccess($conn)){
    header('Location: profile.php');
    exit;
}
 