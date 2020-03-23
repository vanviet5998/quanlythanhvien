<div class="container">
	
	<div class="col-12 col-md-12">
		<div class="timkiem">
			<nav class="navbar navbar-light bg-light">
			  <form class="form-inline" action="" method="GET">
			  	<input type="hidden" name="controller" value="thanh-vien">
			     <a class="navbar-brand">Tìm kiếm thành viên: </a><input class="form-control mr-sm-2" name="tukhoa" type="search" placeholder="Nhập từ khóa" aria-label="Search">
			    <button class="btn btn-primary my-2 my-sm-0" type="submit">Tìm</button>
			    <input type="hidden" name="action" value="search">
			  </form>
			</nav>
		
		</div>
		<div class="danhsach">
			<h3>Danh sách thành viên - Quản lý thành viên</h3>
			<table class="table table-bordered table-striped text-center">
				<thead>
					<tr >
						<th>STT</th>
						<th>Tên thành viên</th>
						<th>Năm sinh</th>
						<th>Quê quán</th>
						<th>Quản lý</th>
					</tr>
				</thead>
				<tbody >
					<?php
					
						$stt=1;
						foreach ($data as $value) {
							
					?>
					<tr>
						<td><?php echo $stt; ?></td>
						<td><?php echo $value['hoten']; ?></td>
						<td><?php echo $value['namsinh']; ?></td>
						<td><?php echo $value['quequan']; ?></td>
						<td>
							<a  onclick="return confirm('Bạn có chắc chắn muốn thêm không ?')" href="index.php?controller=thanh-vien&action=add">Add</a>||
							<a  onclick="return confirm('Bạn có chắc chắn muốn sửa không ?')" href="index.php?controller=thanh-vien&action=edit&id=<?php echo $value['id'];?>">Edit</a>||
							<a  onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" href="index.php?controller=thanh-vien&action=delete&id=<?php echo $value['id'];?>">Delete</a>
						</td>
					</tr>
					<?php
						$stt++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	

</div>
