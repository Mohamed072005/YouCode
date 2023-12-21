<?php
include_once "../config/DataBase.php";
include_once "../Models/User.php";

if(isset($_POST['log_in'])){
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    echo "<h1>Hello, World</h1>";
    $obj = new User();
    $obj->getUser($user_email, $user_password);
}
?>