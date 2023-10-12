<?php
session_start();
    //Step1: enerate random session ID

    $msg = "";
    if (isset($_POST['login'])) { //check login button is clicked
// if ($_SERVER["REQUEST_METHOD"] == "POST")    //create session variable

if(!empty($_POST['username']) && !empty($_POST['pwd'])) { //check form data not empty
//session_start(); //step1: generate random session ID
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['pwd'];

$cookie_name = "user";
$cookie_value = $_POST['username'];
setcookie($cookie_name, $cookie_value, time()+(86400*30) , "/"); // السلاش مقصود بيها كل صفحات الويب سايت وهنا اللوكال هوست

//use session variable
//$msg = "Welcome ".$_SESSION['username'];
$msg = "Welcome ".$_COOKIE['user'];

} else {
  $msg = "Enter your name and password";
}
}
?>