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
	<h4 class="card-header center">Sửa tên hãng</h4>
	<div class="card-body">
		<form action="index.php?action=nhacungcap_sua_xuly" method="post">
			<input type="hidden" id="ID" name="ID" value="<?php echo $nhacungcap['ID']; ?>" />
			<div class="form-group">
				<label for="TenNCC">Tên hãng</label>
				<input type="text" class="form-control" id="TenNCC" name="TenNCC" value="<?php echo $nhacungcap['TenNCC']; ?>" required />
			</div>
			
			<button type="submit" class="btn btn-outline-secondary button"> Cập nhật</button>
		</form>
	</div>
</div>