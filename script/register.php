<?php
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$password = $_POST['password'];
$telephone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
var_dump($_POST);

if (2 > strlen($name)) {
    die('имя должно быть длиннее 2 симбволов');
}

$link = mysql_connect('127.0.0.1:3306', 'root','')
  or die('error' . mysql_error());
echo "ловушка джокера";

mysql_select_db('registration') or die('джокушка ловушкера');

$query = "INSERT INTO `users` (`id`, `name`, `last_name`, `surname`, `login`, `password`, `telephone`, `address`, `emailio`) VALUES (NULL, '$name', '$last_name', '$surname', '$login', '$password', '$telephone', '$address', '$email')";

$result = mysql_query($query) or die(mysql_error());
?>