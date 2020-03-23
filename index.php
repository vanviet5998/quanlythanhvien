<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý thành viên</title>
	<link rel="icon" href="View/images/Capture.PNG" type="image/png">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="bootstrap.css" type="text/css">
</head>
<body>
	
</body>
</html>
<?php 
	 include "Model/DBConfig.php";
	 $db =new Database;
	 $db->connect();

	 if(isset($_GET['controller'])){
	 	$controller =$_GET['controller'];
	 }else{
	 	$controller = '';

	 }

	 switch ($controller) {
	 	case 'thanh-vien':
	 		require_once('Controller/thanhvien/index.php');
	 		
	 }



?>