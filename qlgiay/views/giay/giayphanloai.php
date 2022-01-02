
<style>
	.card{
		background: linear-gradient( to right bottom,rgba(255,255,255,0.8), rgba(255,255,255,0.4));
		 border-radius:1rem; 
		margin-top: 1.5rem;
		
	}
	.card	.listsneaker
	{
		text-align: center;
		font-size:2.5rem;		
	}
	.card	.listsneaker span
	{
		color:orange;
	}
	.card  .typedrop
	{
		padding: .5rem 1rem;
		background-color: #232323;
		border-radius:.5rem;
		cursor:pointer;
		display:inline-block;	
			
	}
	.card .typedrop:hover
	{
		background-color: #232350;
	}
	.card  .typedrop a
	{
		font-size:1.5rem;
		text-decoration:none;
		color:#fff;
	}
	.card  .typedrop .menudroppp
	{
		background-color: orange;
		width:15rem;
		text-align: center;
	}
	.card  .typedrop .menudroppp .item:hover
	{
		background: #232323;
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
		transform:scale(1..5);
	}
	.box-center
	{
		display: flex;
		justify-content: center;
		align-items: center;
		gap:2rem;
	}
</style>
<div class="card ">
	
</form>
	<div class="card-body">
		<div class="typedrop">
			<a class="tieude" data-toggle="dropdown">
				Loại Giày<span class="caret"></span>
			</a>
			
			<ul class="dropdown-menu menudroppp">
				<?php            
				foreach($loaigiay1 as $d):
				?>
				<div class="item"><a href="?action=phanloaigiay&id=<?php echo $d["ID"]; ?>"><?php echo $d["TenLoai"]; ?></a></div>
				<?php endforeach; ?>
			</ul>
		</div>

			
		<h4 class='listsneaker'>Danh sách loại giày <span> <?php echo $loaigiay['TenLoai']; ?></span></h4>

		<div class="card-group row box-center">
			
			<?php
				if(empty($giay))
				{
					echo'<h1 class="khongtimthay text-danger">Không tìm thấy sản phẩm</h1>';
				}
				else{
				
					foreach($giay as $value)
					{
						echo '<div class="col-xl-2 col-lg-5 col-md-4 col-sm-5 col-15 px-2">
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
				}
			?>
		</div>
	
	</div>

</div>