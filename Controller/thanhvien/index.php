<?php
	//include "Model/DBConfig.php";

	 if(isset($_GET['action'])){
	 	$action =$_GET['action'];
	 }else{
	 	$action = '';

	 }

	 $thanhcong =array();
	 switch ($action) {
	 	case 'add':
	 		if(isset($_POST['add_user'])){
	 			$hoten = $_POST['hoten'];
	 			$namsinh =$_POST['namsinh'];
	 			$quequan = $_POST['quequan'];
	 			if($db->InsertData($hoten,$namsinh,$quequan)){
	 				$thanhcong[] = 'add_success';
	 				//echo "<p style='color:green'>Them thanh cong</p>";
	 			}
	 		}
	 		require_once('View/thanhvien/add_user.php');
	 		break;
	 	case 'edit':
	 		if(isset($_GET['id'])){
	 			$id = $_GET['id'];
	 			$tblTable ="thanhvien";

	 			$dataID = $db->getDataID($tblTable,$id);

	 			if(isset($_POST['update_user'])){
	 				//lay du lieu tu view
	 				$hoten = $_POST['hoten'];
	 				$namsinh = $_POST['namsinh'];
	 				$quequan = $_POST['quequan'];

	 				//truyen sdu lieu tu view sang model
	 				if($db->UpdateData($id,$hoten,$namsinh,$quequan)){
	 					header('location: index.php?controller=thanh-vien&action=list');
	 				}else{
	 					header('location: index.php?controller=thanh-vien&action=list');
	 				}

	 			}
	 		}
	 		require_once('View/thanhvien/edit_user.php');
	 		break;
	 	
	 	case 'delete':
	 		if(isset($_GET['id'])){
	 			$id =$_GET['id'];
	 			$tblTable = "thanhvien";

	 			if($db->Delete($id,$tblTable)){
	 				header('location: index.php?controller=thanh-vien&action=list');
	 			}
	 		}else{
	 			header('location: index.php?controller=thanh-vien&action=list');
	 		}
	 		//require_once('View/thanhvien/delete_user.php');
	 		break;
	 	case 'list':
	 		$tblTable = "thanhvien";
	 	
	 		$data = $db->getAllData($tblTable);
	 		require_once('View/thanhvien/list.php');
	 		break;
	 	case 'search':
	 		if(isset($_GET['tukhoa'])){
	 			$key = $_GET['tukhoa'];
	 			$tblTable = "thanhvien";

	 			//lay du lieu tu model:file DBconfig.php
	 			$data_Search = $db->SearchData($tblTable,$key);

	 		}
	 		require_once('View/thanhvien/search_user.php');
	 		break;
	 	default:
	 		require_once('View/thanhvien/list.php');
	 		break;

	 }

?>