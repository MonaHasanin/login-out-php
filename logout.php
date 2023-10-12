<?php
 
session_start(); //session ID
echo "GoodBuy " .$_SESSION['username']. "! "."<br>" ;
//unset($_SESSION['username']);
//unset($_SESSION['password']);
 //حل تاني
 $_SESSION=array();
 
 $cookie_name = "user";
 setcookie("user", $_COOKIE['user'], time() -(86400*30) , "/"); // السلاش مقصود بيها كل صفحات الويب سايت وهنا اللوكال هوست

session_destroy(); //delete session ID
echo  " You are logged out.";

?>