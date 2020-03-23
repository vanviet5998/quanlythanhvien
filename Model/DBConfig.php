<?php
	class Database{
		private $hostname ='localhost';
		private $username = 'root';
		private $pass ='';
		private $dbname ='quanlythanhvien_mvc';

		private $conn =NULL;
		private $result = NULL;

		public function connect()
		{
			$this->conn = new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
			if(!$this->conn){
				echo "Kết nối thất bại";
				exit();
			}else{
				mysqli_set_charset($this->conn,'utf8');
				//tạo định dạnng tiếng việt
			}
			return $this->conn;
		}

		//thuc thi cau lenh truy van

		public function execute($sql){
			$this->result = $this->conn->query($sql);
			return $this->result;
		}

		//phuong thuc lay du lieu 
		public function getData(){
			// $sql = "SELECT * FROM $table";
			// $this->execute($sql);
			if($this->result){
				$data = mysqli_fetch_array($this->result);
			}else{
				$data =0;
			}
			return $data;
		}
		// 	public function execute($sql){
		// 	$this->result = $this->conn->query($sql);
		// 	return $this->result;
		// }

		//phuong thuc lay du lieu can sua theo ID
		public function getDataID($table, $id){
			 $sql = "SELECT * FROM $table WHERE id = '$id'";
			 $this->execute($sql);
			if($this->num_rows()!=0){
				$data = mysqli_fetch_array($this->result);
			}else{
				$data =0;
			}
			return $data;
		}

		//phương thức lấy toàn bộ dữ liệu láy danh sách ứng viên
		public function getAllData($table){
			$sql ="SELECT * FROM $table";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data =0;
			}else{
				//th ket noi duoc voi CSDL
				while($datas =$this->getData()){
					$data[] = $datas;
					//mang ko tuan tu
				}
			}
			return $data;
		}

		//phuong thuc dem so ban ghi
		 public function num_rows(){
		 	if($this->result){
		 		$num = mysqli_num_rows($this->result);

		 	}else{
		 		$num = 0;
		 	}
		 	return $num;
		 } 

		//phuong thuc dem so du lieu
		public function InsertData($hoten, $namsinh, $quequan)
		{
			
			$sql = "INSERT INTO thanhvien(id, hoten, namsinh, quequan)VALUES(null,'$hoten','$namsinh','$quequan')";
			 return $this->execute($sql);
		}		

		//phuonng thuc sua du lieu
		public function UpdateData($id,$hoten, $namsinh,$quequan){
			$sql ="UPDATE thanhvien SET hoten ='$hoten',namsinh='$namsinh',quequan ='$quequan' WHERE id='$id'";

			return $this->execute($sql);
		}

		//phuong thuc xoa
		public  function Delete($id,$table){
			$sql ="DELETE FROM $table WHERE id='$id'";
			return $this->execute($sql);
		}

		//phuong thuc tim kiem du lieu
		public function SearchData($table, $key){
			 $sql ="SELECT * FROM $table WHERE hoten REGEXP '$key' ORDER BY id DESC";
			//lay ra hoten rùi so sánh với gía trị nhập theo thu tu giam dan
			
			$this->execute($sql);
			if($this->num_rows()==0){
				$data =0;
			}else{
				//th ket noi duoc voi CSDL
				while($datas =$this->getData()){
					$data[] = $datas;
					//mang ko tuan tu
				}

			}
			return $data;
		}

	}


 ?>