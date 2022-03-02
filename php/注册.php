<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "webpage";

//创建连接
$db = mysqli_connect($servername, $username, $password, $dbname);
//检测连接
if (!$db) {
	die("数据库连接失败：" . mysqli_connect_error());
}
$username = addslashes($username);
$password = addslashes($password);
$email = addslashes($email);

$q = "INSERT INTO users( name, password, email) values ('$username', $password, $email)";

if(!mysqli_query($db,$q)){
	echo "注册失败：";
} else {
	echo "注册成功！";
	header('Refresh:3,Url=http://localhost/ttones/登录.html');
};

mysqli_close($db);
?>