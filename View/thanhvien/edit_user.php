<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa thành viên -Quản lý thành viên</title>
</head>
<body>
	<div class="container">
		<div class="row">	

			<div class="col-2 col-md-2"></div>
			<div class="col-8 col-md-8">
				<div class="content">
						<h3 class="text-center">Thêm thành viên</h3>
						<form action="" method="POST">
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Tên thành viên:</label>
						   <input class="form-control" type="text" name="hoten"  value="<?php echo $dataID['hoten']; ?>" placeholder="Tên thành viên">
						  </div> 
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Năm sinh:</label>
						   <td><input type="number" class="form-control" name="namsinh"  value="<?php echo $dataID['namsinh']; ?>" placeholder="Năm sinh">
						  </div>
						 
						   <div class="form-group">
						    <label for="exampleFormControlSelect1">Quê quán:</label>
						   <input class="form-control" type="text" name="quequan" value="<?php echo $dataID['quequan']; ?>" placeholder="Quê quán">
						  </div>	
						  <div class="form-group">
						  	<a href="index.php?controller=thanh-vien&action=list" class="list">Danh sách thành viên </a>
						    <button type="submit" class="btn btn-primary"  name="update_user">Cập nhật</button>
						    
						  </div>
						</form>
						<!-- <?php
								if(isset($thanhcong) && in_array('add_success',$thanhcong)){
									echo "<h5 style='color:green; text-align:center;'>Thêm thành công!</h5>";
								}
						?>  -->
				</div>

			</div>
			<div class="col-2 col-md-2"></div>
		</div>
	</div>
	
	
</body>
</html>