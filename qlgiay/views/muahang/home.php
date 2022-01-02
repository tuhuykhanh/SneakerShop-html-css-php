<style>
	.card{
		width:80%;
		margin: 0 auto;
		margin-bottom: 20px;
		background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    	border-radius: 20px;
   		border:1px solid rgba(255, 255, 255, 0.18);
    	box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
	}
</style>
<div class="card">
	<h4 class="card-header">Trang chủ cửa hàng huy khanh</h4>
	
	<div class="card-body">
		<div class="card-group row">
			<?php
				foreach($giay as $value)
				{
					echo '<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 px-2">
							<div class="card books mb-3">
								<img src="storage/images/'.$value['HinhAnh'].'" class="card-img-top" />
								<div class="card-body p-2">
									<h5 class="card-title mb-1">'.$value['TenGiay'].'</h5>
									<p class="card-text text-danger font-weight-bold">'.number_format($value['DonGiaBan']).'<u><sup>đ</sup></u></p>
								</div>
								<div class="card-footer p-2">
									<a href="index.php?action=giohang_them&id='.$value['ID'].'" class="btn btn-sm btn-danger w-75"><i class="fad fa-cart-plus"></i> Đặt mua</a>
									<a href="index.php?action=giay_chitiet&id='.$value['ID'].'" class="btn btn-sm btn-secondary"><i class="fad fa-info-circle"></i></a>
								</div>
							</div>
						  </div>';
				}
			?>
		</div>
	</div>
</div>