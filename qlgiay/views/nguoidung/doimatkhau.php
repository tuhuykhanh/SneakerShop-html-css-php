<?php

?>
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
		float:right;
	}

	.image
	{
		
		height: 200px;
		margin: 3rem 0;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction:column;
	}
	.image .box-image
	{
		width: 200px;
		height: 200px;
		border-radius:50%;
		margin-bottom: 1rem;

	}
	.image img
	{
		width: 100%;
		height: 100%;
		object-fit:cover;
		border-radius:50%;
	}

</style>
<div class="card">
	<h4 class="card-header center">Thay đổi thông tin người dùng</h4>
	<div class="card-body">
		<form action="index.php?action=nguoidung_dmk_xuly" method="post">
			<div class="image">
					<input type="hidden" id="ID" name="ID" value="<?php echo $nguoidung['ID']; ?>" />
					<div class="box-image">
						<img class="anhdaidien" src="storage\images\avata\<?php echo $nguoidung['Avata']; ?>">
					</div>
					<!-- <label for="Anh">Ảnh đại diện</label> -->
					<div class="form-group ">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><a href="#upload" onclick="BrowseServerAnh()">Chọn hình ảnh</a></span>
							</div>
							<input type="text" class="form-control" id="Avata" name="Avata" />
						</div>
					</div>
			</div>
			<div class="form-group">
				<label for="HoVaTen"> Họ Tên Khách Hàng </label>
				<input type="text" class="form-control" id="HoVaTen" name="HoVaTen" value="<?php echo $nguoidung['HoVaTen']; ?>" required />
			</div>
			
			<div class="form-group">
				<label for="MatKhau"> Mật Khẩu </label>
				<input type="text" class="form-control" id="MatKhau" name="MatKhau" value="<?php echo $nguoidung['MatKhau']; ?>" required />
			</div>
		
			<button type="submit" class="btn btn-outline-secondary button"> Cập nhật thông tin</button>
		</form>
	</div>
</div>

