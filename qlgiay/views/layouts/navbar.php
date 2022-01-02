
<style>
	.h1{
		color:red;
	}
	.navbar{
		background: white;
		background: linear-gradient( to right bottom,rgba(255,255,255,0.8), rgba(255,255,255,0.4));
		border: none;
		border-radius: 1rem;
		color:red;
		margin-top: 1rem;
		transition: all .2s linear;
		display:flex;
		align-items:center;
		justify-content:space-between;
		padding: 2rem 9%;
		list-style: none;
	
	}
	.navbar .word-color{
		color:white;
		font-size:1.4rem;
		text-decoration:none;
		padding:.5rem 1rem;
		font-family: 'Poppins', sans-serif;
		transition: all .2s linear;
		border-radius:.6rem;
		margin-left: 0.5rem;
		background-color: #232350;	
		
	}
	.navbar .word-color:hover{
		
		background: linear-gradient( to right,#4776E6 , #8E54E9);
		color:white;
		
	}
	.word-right{
		font-size:1.5rem;
		color:black;
		font-size:1.2rem;
		margin:0 .5rem;	
		background-color: white;
		border-radius:.6rem;	
			
	}

	.sign-up
	{
		background-color: #36C6FF;
		color:white;
	}
	.sign-out
	{
		background-color: #ff2740;
		
	}

	.word-right:hover
	{
	
	}

	.navbar .navbar-left{
		display:flex;
	}
	.navbar .navbar-right{
		display:flex;
	}
	
	.navbar .visible
	{
		position: absolute;
	}

	
	
</style>


<nav class="navbar">

		
		<div class="visible" id="tele-up"></div>
		<div class="navbar-left">
			<a class="word-color" href="index.
			php">Home</a>
			<a class=" word-color " href="#teleport">Shop Now</a>
			<a class="word-color " href="index.php?action=giohang">Your Cart</a>
		</div>

		
			
	<div class="navbar-right">
		<?php
				if(!isset($_SESSION['ID']))
				{
			?>
					<li class="nav-item"><a class="nav-link word-right " href="index.php?action=dangnhap"> Sign in</a></li>
					<li class="nav-item"><a class="nav-link word-right sign-up" href="index.php?action=dangky"> Sign up</a></li>
			<?php
				}
				else
				{

			?>

					<li class="nav-item active dropdown">
						<a class="nav-link  word-right" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-signature"></i> <?php echo $_SESSION['HoVaTen']; ?></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?action=nguoidung_dmk&id=<?php echo $_SESSION['ID'] ?>"> Cập nhật tài khoản</a>
					
							<a class="dropdown-item" href="index.php?action=lichsumuahang"> Lịch sử mua hàng</a>
						</div>
					</li>
					
					<?php
						if($_SESSION['QuyenHan'] == 1)
						{
					?>
					<li class="nav-item active dropdown">
						<a class="nav-link word-right" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Quản lý </a>
						<div class="dropdown-menu drop " aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?action=giay"> Giày</a>
							<a class="dropdown-item" href="index.php?action=loaigiay"> Loại Giày</a>
							<a class="dropdown-item" href="index.php?action=nhacungcap"> Hãng Cung Cấp</a>
							<a class="dropdown-item" href="index.php?action=hoadon"> Hóa Đơn</a>
							<a class="dropdown-item" href="index.php?action=thongke"> Thống Kê</a>
							<a class="dropdown-item" href="index.php?action=nguoidung"> Người dùng</a>
						</div>
					</li>
					<?php
						}
					?>
					<li class="nav-item active "><a class="nav-link word-right sign-out" href="index.php?action=dangxuat"> Sign out</a></li>
			<?php
				}
			?>
		
	</div>
		
			
       
	
</nav>