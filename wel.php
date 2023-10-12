<?php 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   //collect value of input field
// $username = $_REQUEST['username'];
// $password = $_REQUEST['pwd'];
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //collect value of input field
    $username = ($_POST["username"]);
    $password = ($_POST["pwd"]);
if (empty ($user_name) || empty ($password)) {
    echo "Enter your name and password";
} else {
    echo "Hello " .$user_name
    . "<br>" .
    " Your Password is " .$password;;
}
}
  ?>