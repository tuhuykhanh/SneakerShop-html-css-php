<style>
	.card{
		width:60%;
		margin: 0 auto;
		margin-bottom: 20px;
		background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    	border-radius: 20px;
   		border:1px solid rgba(255, 255, 255, 0.18);
    	box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
		
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
		float:right;
	}
</style>
<div class="card">
	<h4 class="card-header center">Thêm Giày</h4>
	<div class="card-body">
		<form action="index.php?action=giay_them_xuly" method="post">
			<div class="form-group">
				<label for="TenGiay">Tên Giày</label>
				<input type="text" class="form-control" id="TenGiay" name="TenGiay" required />
			</div>
			
			<div class="form-group">
				<label for="MaLoai">Loại Giày</label>
				<select class="custom-select" id="MaLoai" name="MaLoai" required>
					<option value="">-- Chọn --</option>
					<?php
						foreach($loaigiay as $value)
						{
							echo "<option value='{$value['ID']}'>{$value['TenLoai']}</option>";
						}
					?>
				</select>
			</div>
			
			<div class="form-group">
				<label for="MaNCC">Hãng Cung Cấp</label>
				<select class="custom-select" id="MaNCC" name="MaNCC" required>
					<option value="">-- Chọn --</option>
					<?php
						foreach($nhacungcap as $value)
						{
							echo "<option value='{$value['ID']}'>{$value['TenNCC']}</option>";
						}
					?>
				</select>
			</div>
			
			<div class="form-group">
				<label for="DonGiaBan">Đơn giá</label>
				<input type="text" class="form-control" id="DonGiaBan" name="DonGiaBan" required />
			</div>
			
			<div class="form-group">
				<label for="SoLuong">Số lượng</label>
				<input type="text" class="form-control" id="SoLuong" name="SoLuong" required />
			</div>
			
			<div class="form-group">
				<label for="HinhAnh">Hình ảnh bìa</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><a href="#upload" onclick="BrowseServer()">Chọn hình ảnh</a></span>
					</div>
					<input type="text" class="form-control" id="HinhAnh" name="HinhAnh" />
				</div>
			</div>
			
			<div class="form-group">
				<label for="MoTa">Mô tả</label>
				<textarea class="form-control" id="GhiChu" name="GhiChu"></textarea>
			</div>
			<div class="form-group">
				<label for="BaoHanh">Bảo Hành</label>
				<textarea class="form-control" id="BaoHanh" name="BaoHanh"></textarea>
			</div>
			
			<button type="submit" class="btn btn-outline-secondary button"> Thêm </button>
		</form>
	</div>
</div>