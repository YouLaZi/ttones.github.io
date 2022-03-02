<?php

$conn=mysqli_connect('localhost', 'root', '123456', 'webpage') or die(mysqli_error());

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select * from users where username='$username' and password='$password'";
	
	$rs=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($rs) == 1){
		echo '登陆失败';
		
	} else {
		echo '登陆成功！';
		header('refresh:1,url="http://localhost/ttones/index.html")');
	}
	mysqli_close($conn);
}


?>