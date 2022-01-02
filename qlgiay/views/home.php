<style>
	.card{
		background: linear-gradient( to right bottom,rgba(255,255,255,0.8), rgba(255,255,255,0.4));
		 border-radius:1rem; 
		margin-top: 1.5rem;
		
	}
	.card .background .title{
		text-align:center;
		padding: 1rem;
		margin-top: 1rem;
		text-transform: capitalize;
		background-image:linear-gradient( to right ,#FF512F, #DD2476);
		-webkit-background-clip:text;
		background-clip:text;
		color:transparent;
			
	}
	.card .background-image{
		width:100%;
		background: linear-gradient( to right bottom,#E55D87, #5FC3E4);
		display:flex;
		justify-content:space-evenly;
		border-top-left-radius: 1rem;
		border-top-right-radius: 1rem; 
		align-items:center;	
		position: relative;	
	}
	.card .background-image .control
	{
		position: absolute;
		z-index: 1000;
		font-size:4rem;

	}
	.card .background-image .control .arrow
	{
		margin: 0rem 15rem;
		cursor:pointer;
		transition: .2s linear;
	}
	.card .background-image .control .arrow:hover
	{
		color:black;
		transform:scale(1.2);
	}
	
	.card .background-image .change{
		width:20rem;
		height:20rem;
		background-color:white;
		border-radius:1rem;
		/* animation: updown 3s linear infinite; */

	}
	.card .background-image .background-image-left .in 
	{
		width: 100%;
		height: 100%;
		display: none;	
		
	}
	.card .background-image .background-image-left .in.active
	{
		display:block;
	}
	 .card .background-image .background-image-left .in img{	
		width: 100%;
		height:100%;
		object-fit:cover;	
		border-radius:1rem;
		/* animation:updown .5s linear; */
	

	} 
	.card .background-image .background-image-right .out
	{
		width: 100%;
		height: 100%;
		display: none;	
	}
	.card .background-image .background-image-right .out.active
	{
		display:block;
	}
	.card .background-image .background-image-right .out img{
		width: 100%;
		height:100%;
		object-fit:cover;	
		border-radius:1rem;
	} 



	.card .search-form{
		display:flex;
		justify-content:center;
		width:100%;
		padding: 1rem 0;
		background: linear-gradient( to right bottom,rgba(255,255,255,0.8), rgba(255,255,255,0.4));
		margin-top: 2rem;
		align-items:center;
		gap:3rem;
		
	}
	.card .search-form .typedrop
	{
		padding: .5rem 1rem;
		background-color: #232323;
		border-radius:.5rem;
		cursor:pointer;
			
	}
	.card .search-form .typedrop .menudroppp .item:hover
	{
		background-color: #232323;
		
	}
	.card .search-form .typedrop:hover
	{
		background-color: #232350;
	}
	
	.card .search-form .typedrop a
	{
		font-size:1.5rem;
		text-decoration:none;
		color:#fff;
	}
	.card .search-form .typedrop .menudroppp
	{
		background-color: orange;
		width:15rem;
		text-align: center;
	}
	.card .search-form .search-shoe{
	
		width:25rem;
		height:3rem;
		color:black;
		outline:none;
		border:none;
		border-radius:.5rem;
		margin-right: 1rem;		
		font-size:1.1rem;
		padding-left:1rem;
		flex:1;
	
	}
	.card .search-form form
	{
		border:2px solid black;
		border-radius:.5rem;
		padding:.5rem ;
		
	}
	.card .search-form .search-button{		
		height:3rem;
		color:white;
		outline:none;
		border:none;
		border-radius:.5rem;
		background-color:rgba(0,0,0,.8);
		transition: all .2s linear;
		font-size:1.1rem;
		padding: .5rem 1rem;
		
	}
	.card .search-form .search-button:hover{			
			background-color:orange;
			color:black;

	}
	.background-image .background-image-left{
		/* animation: slide 3s linear 1; */
		position:relative;
	}
	@keyframes updown
{
    0%, 100%{
        transform: translateY(0);
    }
    50%{
        transform: translateY(-4rem);
    }

}



@keyframes change{	
	0%{
		background-image: url(images/1.jpg);
	}
	20%{
		background-image: url(images/2.jpg);
	}
	40%{
		background-image: url(images/3.jpg);
	}
	60%{
		background-image: url(images/4.jpg);
	}
	80%{
		background-image: url(images/5.jpg);
	}
	100%{
		background-image: url(images/1.jpg);
	}
}
@keyframes slide {
    from {left: -20rem;}
    to {left: 20rem;}
}

	.card .rasengan
	{
		display:flex;
		align-items:center;
		justify-content:space-evenly;
		background-color:#232323;
		width:100%;
		height:30rem;
		
		padding-top: 4rem;
		padding-bottom:4rem;
		
	}
	
	.card .rasengan	.container
		{
			position:relative;
			width:35%;
			display: flex;
			align-items:center;
			justify-content:center;
			cursor:pointer; 
			
			
		}
	.card .rasengan	.container .ring
	{
		position:relative;
		width: 15rem;
		height: 15rem;
		margin: -3rem; 
		border-radius: 50%;
		border: .4rem solid white;
		border: .4rem solid transparent;
		border-top: .4rem solid #24ecff;
		animation: huykhanh 4s linear infinite; 
	}
	.card .rasengan	.container .ring::before
	{
		content: "";
		position: absolute;
		width: 1.5rem;
		height: 1.5rem;
		background: #24ecff;
		top: 1.2rem;
		right:1.2rem;
		border-radius:50%;
		box-shadow: 0 0 0 .5rem #24ecff33,
		0 0 0 1rem #24ecff22,
		0 0 0 2rem #24ecff11,
		0 0 2rem #24ecff,
		0 0 5rem #24ecff;
	}
	.card .rasengan	.container .ring:nth-child(2)
	{
		animation: huykhanh2 4s linear infinite;
		animation-delay: -1s;
		border-top: .4rem solid transparent;
		border-left: .4rem solid #8E54E9;

	}
	.card .rasengan	.container .ring:nth-child(2)::before
	{
		content: "";
		position: absolute;
		bottom: 1.2rem;
		top: initial;
		left:1.2rem;
		border-radius:50%;
		width: 1.5rem;
		height: 1.5rem;
		background: #8E54E9;
		box-shadow: 0 0 0 .5rem #8E54E933,
		0 0 0 1rem #8E54E922,
		0 0 0 2rem #8E54E911,
		0 0 2rem #8E54E9,
		0 0 5rem #8E54E9;
	}
	.card .rasengan	.container .ring:nth-child(3)
	{   
		 animation: huykhanh2 4s linear infinite; 
		animation-delay: -3s;
		position:absolute;
		top:-66.66px;
		border-top:.4rem solid transparent;
		border-left:.4rem solid #EB3349;
	}
	.card .rasengan	.container .ring:nth-child(3)::before
	{
		content: "";
		position: absolute;
		bottom: 1.2rem;
		top: initial;
		left:1.2rem;
		border-radius:50%;
		width: 1.5rem;
		height: 1.5rem;
		background: #EB3349;
		box-shadow: 0 0 0 .5rem #EB334933,
		0 0 0 1rem #EB334922,
		0 0 0 2rem #EB334911,
		0 0 2rem #EB3349,
		0 0 5rem #EB3349;
	}
	@keyframes huykhanh{
		0%{
			transform: rotate(0deg);
		}
		100%{
			transform: rotate(360deg);
		}
	}
	@keyframes huykhanh2{
		0%{
			transform: rotate(360deg);
		}
		100%{
			transform: rotate(0deg);
		}
	}
	.card .rasengan .nike-left{
		margin-left:1rem ;
	}
	.card .rasengan .nike-right{
		margin-right:1rem ;
	}

	.card .rasengan .nike-left .nike-nike
	{
		position: relative;
		z-index: 10;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-wrap:wrap;
	}
	.card .rasengan .nike-left .nike-nike .card
	{
		position: relative;
		width: 300px;
		height: 400px;
		margin: 20px 40px;
		display: flex;
		justify-content: center;
		align-items: center;
		background-color:rgba(255, 255, 255, 0.05);
		box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
		backdrop-filter: blur(15px);
	}
	.card .rasengan .nike-left .nike-nike .card .img-nike
	{
		width: 100%;
		height: 100%;
		position: relative;
		flex-direction: column;
		padding: 20px;
		transition:all 0.5s linear;
	}
	.card .rasengan .nike-left	.nike-nike .card:hover .img-nike
	{
		transform: translateY(-100px);
	}
	.card .rasengan .nike-left .nike-nike .card .img-nike img
	{
		max-width: 100%;
		margin:0 0 20px;
		transition: all 0.5s linear;
	}
	.card .rasengan .nike-left .nike-nike .card .img-nike h2
	{
				text-align:center;
				font-size:3rem;
				text-transform: capitalize;
				opacity: 0;
				background-color:aqua;
				border-radius:1rem;
	}
	.card .rasengan .nike-left .nike-nike .card:hover .img-nike img
	{
		transform: translate(-20px,-40px) rotate(-25deg) scale(1.6);		
	}
	.card .rasengan .nike-left .nike-nike .card:hover .img-nike h2
	{
		opacity:1;
		color:white;
	}



	.card .rasengan .nike-right .nike-nike
	{
		position: relative;
		z-index: 10;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-wrap:wrap;
	}
	.card .rasengan .nike-right .nike-nike .card
	{
		position: relative;
		width: 300px;
		height: 400px;
		margin: 20px 40px;
		display: flex;
		justify-content: center;
		align-items: center;
		background-color:rgba(255, 255, 255, 0.05);
		box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
		backdrop-filter: blur(15px);
	}
	.card .rasengan .nike-right .nike-nike .card .img-nike
	{
		width: 100%;
		height: 100%;
		position: relative;
		flex-direction: column;
		padding: 20px;
		transition:all 0.5s linear;
	}
	.card .rasengan .nike-right	.nike-nike .card:hover .img-nike
	{
		transform: translateY(-100px);
	}
	.card .rasengan .nike-right .nike-nike .card .img-nike img
	{
		max-width: 100%;
		margin:0 0 20px;
		transition: all 0.5s linear;
	}
	.card .rasengan .nike-right .nike-nike .card .img-nike h2
	{
		text-align:center;
		font-size:2.5rem;
		background-image:linear-gradient( to right,#1D976C,#93F9B9);
		color:white;
		border-radius:1rem;
		padding: .5rem 0;
		opacity:0;
	}
	.card .rasengan .nike-right .nike-nike .card:hover .img-nike img
	{
		transform: translate(-20px,-40px) rotate(-25deg) scale(1.6);
	}
	.card .rasengan .nike-right .nike-nike .card:hover .img-nike h2
	{
		opacity:1;
	}
	.teleport
	{
		position: fixed;
		top:45%;
		right:1rem;
		display:flex;
		flex-direction:column;
	}
	.teleport ion-icon
	{
		font-size: 1.5rem;
		margin: 1rem 0;
		color:orange;
	}
	.teleport ion-icon:hover
	{
		transform: scale(1.2);
	}
	.shibanu
	{
			overflow:hidden;
			cursor: pointer;
			transition: .2s linear;
			border:1px solid rgba(255, 255, 255, 0.18);
    		box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);	
	}
	.shibanu:hover
	{
		transform:scale(1.05);
	}
	.box-center
	{
		display: flex;
		justify-content: center;
		align-items: center;
		gap:2rem;
	}
	.rowphantrang
	{
		height:5rem;
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: 1rem;
	}
	.rowphantrang .but
	{
		padding: 0.5rem;
		margin: 0 .5rem;
		font-size:1.5rem;
		background-color: #fff;
		border-radius:.5rem;
		color:black;
		transition: .2s linear;
		text-decoration:none;
	}
	.rowphantrang .but:hover
	{
		background-color: orange;
		
	}
	.videos
	{
		position:relative;
		margin-bottom:0 ;
	}
	.videos h1
	{
		position:absolute;
		top:30%;
		left:20%;
		transform:translateX(-50%);
		color:white;
		font-size:5rem;
		cursor: pointer;
		z-index:999;
		white-space:nowrap;
		letter-spacing:1.2rem;
		animation:updown 4s linear infinite;
	}
	
	.videos video
	{
		width:100%;
	}
	


</style>


<div class="card">
					
					<div class="teleport">
						<a href="#tele-down"><ion-icon name="cloud-download-outline"></ion-icon></a>
						<a href="#tele-up"><ion-icon name="cloud-upload-outline"></ion-icon></a>
					</div>					
					<!-- <div class="videos">
						<h1>Huy Khanh Shop</h1>
					<video src="./images/video1.mp4" autoplay loop mute></video>
					</div> -->
					<!-- <div class="background-image">
					
						
						<div class="background-image-left change">
								<div class="in active" id="in">
									<img src="./images/1.jpg" alt="">
								</div>
								<div class="in" id="in">
									<img src="./images/2.jpg" alt="">
								</div>
								<div class="in " id="in">
									<img src="./images/3.jpg" alt="">
								</div>
								<div class="in" id="in">
									<img src="./images/4.jpg" alt="">
								</div>
								<div class="in" id="in">
									<img src="./images/5.jpg" alt="">
								</div>
								<div class="in" id="in">
									<img src="./images/6.jpg" alt="">
								</div>
								<div class="in" id="in">
									<img src="./images/7.png" alt="">
								</div>
								<div class="in" id="in">
									<img src="./images/8.jpg" alt="">
								</div>							
						</div>
					<div class="control">
						<div class="arrow fas fa-long-arrow-alt-left" onclick="next()"></div>
						<div class="arrow fas fa-long-arrow-alt-right" onclick="prev()"></div>
					</div>
						
						<div class="midddd">
							<img class="sneaker" src="https://image.freepik.com/free-vector/sneakers-design-poster-template_1262-20680.jpg" alt="">
							
						</div>
					
						<div class="background-image-right change">
								<div class="out active">
									<img src="./images/2.jpg" alt="">
								</div>
								<div class="out">
									<img src="./images/3.jpg" alt="">
								</div>
								<div class="out">
									<img src="./images/4.jpg" alt="">
								</div>
								<div class="out">
									<img src="./images/5.jpg" alt="">
								</div>
								<div class="out">
									<img src="./images/6.jpg" alt="">
								</div>
								<div class="out">
									<img src="./images/7.jpg" alt="">
								</div>
								<div class="out">
									<img src="./images/8.jpg" alt="">
								</div>
								<div class="out">
									<img src="./images/1.jpg" alt="">
								</div>
						</div>

					</div> -->
								
					<div class="rasengan"> 
						<div class="nike-left">
							<div class="nike-nike">
								<div class="card">
									<div class="img-nike">
											<img src="images/nike.png" alt="">
											<h2> nike air </h2>
									</div>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="ring"></div>
							<div class="ring"></div>
							<div class="ring"></div>                
						</div>
						<div class="nike-right">
						<div class="nike-nike">
								<div class="card">
									<div class="img-nike">
											<img src="images/nike1.png" alt="">
											 <h2> Huy Khanh </h2> 
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="search-form ">
						
						<div class="typedrop">
								<a class="" data-toggle="dropdown">
									 Thương Hiệu<span class="caret"></span>
								</a>					
								<ul class="dropdown-menu menudroppp ">
									<?php            
									foreach($nhacungcap as $d):
									?>
									<div class = "item"><a href="?action=phanloaincc&id=<?php echo $d["ID"]; ?>"><?php echo $d["TenNCC"]; ?></a></div>
									<?php endforeach; ?>
								</ul>
						</div>
						<div class="typedrop">
								<a class="" data-toggle="dropdown">
									Loại Giày<span class="caret"></span>
								</a>					
								<ul class="dropdown-menu menudroppp ">
									<?php            
									foreach($loaigiay as $d):
									?>
									<div class = "item"><a href="?action=phanloaigiay&id=<?php echo $d["ID"]; ?>"><?php echo $d["TenLoai"]; ?></a></div>
									<?php endforeach; ?>
								</ul>
						</div>
						<form >
							<input type="hidden" name="action" value="timkiemgiay">
							<input class="search-shoe" type="search" name="ten" placeholder="search hear" 
							value="<?php echo (isset($_GET['ten'])) ? $_GET['ten'] : ''; ?>"/>
							<!-- <input class="search-button" type="submit" />  -->
							<button class="search-button" type="submit">search </button>
						</form>
					</div>
									
					<div class="background" id="teleport">
						<h1 class="title">sản phẩm hiện có </h1>			
					</div>


</form>
	<div class="card-body" >
	
		
		<div class="card-group row box-center">
			<?php
			
				foreach($giay as $value)
				{
					echo '<div class=" col-xl-2 col-lg-5 col-md-4 col-sm-5 col-15 px-2">
								<div class="card shibanu border-none mb-1" style="height: 25rem;">
								<img src="storage/images/'.$value['HinhAnh'].'" class="card-img-top" />
								<div class="card-body p-2 ">
									<h5 class="card-title mb-2">'.$value['TenGiay'].'</h5>
									<p class="card-text text-secondary font-weight-bold">'.number_format($value['DonGiaBan']).'<u><sup>đ</sup></u></p>
								</div>
								<div class="card-footer p-2">
									<a href="index.php?action=giohang_them&id='.$value['ID'].'" class="btn btn-outline-dark btn-sm w-75"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
									<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
								  </svg> Add to Bag</a>
									<a href="index.php?action=giay_chitiet&id='.$value['ID'].'" class="btn btn-sm btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
									<path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
								  </svg></a>
								</div>
							</div>
						  </div>';
				}
				
			?>
							
		</div>
		<div class="rowphantrang">
					<ul class="pagination">
						<li><a  href="index.php?trang=1"><i class="but fad fa-arrow-to-left"></i></span></a></li>
						<li><a href="index.php?trang=<?php echo $tranghh-1?>"><i class="but fas fa-arrow-left"></i></a></li>
						
					<?php
					for($i=1; $i<=$tongsotrang; $i++){
					?>
						<li <?php if($tranghh == $i) echo "class=\"active\"" ?>>
						<a class="but" href="index.php?trang=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php
					}
					?>
						<li><a  href="index.php?trang=<?php echo $tranghh+1?>"><i class="but fas fa-arrow-right"></i></a></li>

						<li><a href="index.php?trang=<?php echo $tongsotrang; ?>"><i class="but  fad fa-arrow-to-right"></i></a></li>

					</ul>
		</div>
	</div>

</div>





