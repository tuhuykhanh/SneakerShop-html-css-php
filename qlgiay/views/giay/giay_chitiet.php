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
	.center
	{
		text-align:center;
	}
</style>
<div class="card">
	<h4 class="card-header center">Thông Tin Chi Tiết Sản Phẩm </h4>
	<div class="card-body">
		<form action="index.php?action=giay_chitiet" method="post">
		<table class="table table-bordered table-sm">
		<thead>
				<tr>
					<th class='text-center' width="10%">Ảnh Giày</th>
					<th class='text-center' width="20%">Tên Giày</th>
					<th class='text-center' width="10%">Loại Giày</th>
					<th class='text-center' width="10%">Nhà Cung Cấp</th>
					<th class='text-center' width="10%">Số Lượng Tồn</th>
					<th class='text-center' width="10%">Đơn Giá</th>
					<th class='text-center' width="20%">Mô Tả</th>
					<th class='text-center' width="10%">Bảo Hành</th>


				</tr>
			</thead>
			<tbody>
						<?php
							echo "<td class='text-center'><img class='rounded' src='storage/images/thumbs/Images/{$giay['HinhAnh']}' width='200' height='200' /></td>";
							echo "<td>{$giay['TenGiay']}</td>";
							echo "<td>{$giay['TenLoai']}</td>";
							echo "<td>{$giay['TenNCC']}</td>";
							echo "<td class='text-right'>{$giay['SoLuong']}</td>";
							echo "<td class='text-right'>" . number_format($giay['DonGiaBan']) . "</td>";
							echo "<td>{$giay['GhiChu']}</td>";
							echo "<td>{$giay['BaoHanh']}</td>";

						?>
			</tbody>
		</table>

			
			
		</form>
	</div>
</div>