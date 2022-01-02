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
	.login
	{
		text-align:center;
	}
	.button
	{
		background-color: #fff;
		color:black;
		border-radius:5px;
		border: none;
		float:right;
	}
	.inputt
	{
		border: none;
		
	}


</style>
<div class="card">
	<h4 class="card-header login">Đăng nhập</h4>
	<div class="card-body">
		<form action="index.php?action=dangnhap_xuly" method="post">
			<div class="form-group">
				<label for="TenDangNhap">Tên đăng nhập</label>
				<input type="text" class="form-control inputt" id="TenDangNhap" name="TenDangNhap" required />
			</div>
			<div class="form-group">
				<label for="MatKhau">Mật khẩu</label>
				<input type="password" class="form-control inputt" id="MatKhau" name="MatKhau" required />
			</div>
			
			<button type="submit" class="btn btn-dark button"> Đăng nhập</button>
		</form>
	</div>
</div>