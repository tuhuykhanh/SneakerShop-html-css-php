<?php
?>
<style>
	.card{
		width:80%;
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
</style>
<div class="card mb-2">
	<h5 class="card-header center">Thống kê</h5>

	<div class="card-body">
		<table class="table table-bordered table-sm">
			<thead>
				<tr>
					<th class='text-center' width="5%">STT</th>
					<th class='text-center' width="20%">Họ Và Tên</th>
					<th class='text-center' width="20%">Tên Giày</th>
					<th class='text-center'width="20%">Hình Ảnh</th>
					<th class='text-center'width="10%">Đơn Giá Bán</th>
					<th class='text-center'width="10%">Số Lượng</th>
					<th class='text-center' width="20%">Thành Tiền</th>
					
					
				</tr>
			</thead>
			<tbody>
				<?php
					$stt = 1;	
					$tongTien = 0;
					
						foreach ( $thongke as $valuect)
					{
						echo "<tr>";
							echo "<td class='text-center'>{$stt}</td>";
							echo "<td>{$valuect['HoVaTen']}</td>";

							echo "<td>{$valuect['TenGiay']}</td>";
							echo "<td class='text-center'><img class='rounded' src='storage/images/thumbs/Images/{$valuect['HinhAnh']}' width='100' /></td>";
							echo "<td class='text-right'>" . number_format($valuect['DonGiaBan']) . "</td>";
							echo "<td class='text-right'>{$valuect['SoLuong']}</td>";
							echo "<td class='text-right'>" . number_format($valuect['DonGiaBan']*$valuect['SoLuong']) . "</td>";
							
						echo "</tr>";
						
						$stt++;
						$tongTien = $tongTien + $valuect['DonGiaBan']*$valuect['SoLuong'];

					
						
					}
					
						

				?>
				<tr>
							<td class="font-weight-bold text-danger" colspan="6">Tổng tiền</td>
							<td class="text-right font-weight-bold text-danger"><?php echo number_format($tongTien); ?><u><sup>đ</sup></u></td>
						</tr>
			</tbody>
		</table>
	</div>
</div>
