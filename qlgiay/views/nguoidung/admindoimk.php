<style>
	.card{
			
		width:60%;
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
		text-align: center;
	}
</style>
<div class="card">
	<h4 class="card-header center">Cập Nhật Thông Tin Người Dùng</h4>
	<div class="card-body">
		<form action="index.php?action=nguoidung_admindoimk_xuly" method="post">
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
				<label for="MatKhau">Mật Khẩu </label>
				<input type="text" class="form-control" id="MatKhau" name="MatKhau" value="<?php echo $nguoidung['MatKhau']; ?>" required />
			</div>
			
		
			<button type="submit" class="btn btn-primary"><i class="fad fa-save"></i> Cập nhật</button>
		</form>
	</div>
</div>

