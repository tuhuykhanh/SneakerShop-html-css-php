<style>
	.card{
		width:60%;
		overflow: hidden;		
		margin: 0 auto;
		margin-bottom: 20px;
		background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    	border-radius: 20px;
   		border:1px solid rgba(255, 255, 255, 0.18);
    	box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
		overflow:hidden;
	}
	.center
	{
		text-align:center;
	}
	.button
	{
		color:black;
		background:white;
		border-radius:10px;
		border: none;
	
	}
</style>
<div class="card">
	<h4 class="card-header center">Cập Nhật Thông Tin</h4>
	<div class="card-body">
		<form action="index.php?action=nguoidung_sua_xuly" method="post">
			<input type="hidden" id="ID" name="ID" value="<?php echo $nguoidung['ID']; ?>" />
			<div class="form-group">
				<label for="HoVaTen">Tên Người Dùng</label>
				<input type="text" class="form-control" id="HoVaTen" name="HoVaTen" value="<?php echo $nguoidung['HoVaTen']; ?>" required />
			</div>
			
			<div class="form-group">
				<label for="TenDangNhap">Tài Khoản</label>
				<input type="text" class="form-control" id="TenDangNhap" name="TenDangNhap" value="<?php echo $nguoidung['TenDangNhap']; ?>" required />
			</div>
			
					
			<div class="form-group">
				<label for="QuyenHan">Quyền Hạn</label>
				<select class="custom-select" id="QuyenHan" name="QuyenHan" required>
					<option value="">-- Chọn --</option>
					<?php						
								echo "<option value=1 selected>ADMIN</option>";							
								echo "<option value=2 selected>USER</option>";
													
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="Khoa">Tình Trạng</label>
				<select class="custom-select" id="Khoa" name="Khoa" required>
					
					<?php						
								echo "<option value=0 selected>Cho phép truy cập</option>";							
								echo "<option value=1 selected>Khóa truy cập</option>";
													
					?>
				</select>
			</div>
			
		
			<button type="submit" class="btn btn-outline-secondary button"> Cập nhật</button>
		</form>
	</div>
</div>

