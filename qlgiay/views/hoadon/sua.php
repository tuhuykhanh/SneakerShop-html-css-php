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
		background:#FF512F;
		border-radius:10px;
		border: none;
	}
	
</style>
<div class="card">
	<h4 class="card-header center">Sửa Hóa Đơn</h4>
	<div class="card-body">
		<form action="index.php?action=hoadon_sua_xuly" method="post">
			<input type="hidden" id="ID" name="ID" value="<?php echo $hoadon['ID']; ?>" />
		
			
			
			<div class="form-group">
				<label for="TinhTrang">Tình Trạng</label>
				<select class="custom-select" id="TinhTrang" name="TinhTrang" required>
					<option value="">-- Chọn --</option>
					<?php						
								echo "<option value=0 selected>Đang Xử Lí</option>";							
								echo "<option value=1 selected>Đã Xác Nhận</option>";
								echo "<option value=2 selected>Đang Giao Hàng</option>";
								echo "<option value=3 selected>Đã Giao Hàng</option>";														
					?>
				</select>
			</div>
		

			
			<button type="submit" class="btn btn-primary button"> Cập nhật</button>
		</form>
	</div>
</div>