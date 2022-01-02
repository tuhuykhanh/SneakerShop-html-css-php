<?php
	foreach($hoadon as $value)
	{
?>		
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
	
</style>
		<div class="card mb-2">
			<h5 class="card-header">Đơn hàng số <?php echo str_pad($value['ID'], 5, "0", STR_PAD_LEFT); ?></h5>
			<div class="card-body">
			
				<p class="mb-1">Địa chỉ giao hàng: <strong><?php echo $value['DiaChiGiaoHang']; ?></strong></p>
				<p class="mb-1">Điện thoại đặt hàng: <strong><?php echo preg_replace("/^1?(\d{4})(\d{3})(\d{3})$/", "$1.$2.$3", $value['DienThoai']); ?></strong></p>
				<p class="mb-2">Tình trạng đơn hàng: <strong><?php if( $value['TinhTrang'] == 0)
				{
					echo "Đang xử lí";
				}else if($value['TinhTrang'] == 1)
				{
					echo "Đã xác nhận";
				} 
				else if($value['TinhTrang'] == 2)
				{
					echo "Đang Giao Hàng";

				}
				else
				{
					echo "Đã giao hàng";
				}
					?></strong></p>
				<table class="table table-bordered table-sm mb-0">
					<thead>
						<tr>
							<th class='text-center' width="5%">STT</th>
							<th class='text-center' width="65%">Tên Giày</th>
							<th class='text-center' width="10%">Số lượng</th>
							<th class='text-center' width="10%">Đơn giá</th>
							<th class='text-center' width="10%">Thành tiền</th>

						</tr>
					</thead>
					<tbody>
						<?php
							$stt = 1;
							$tongTien = 0;
							foreach($hoadonchitiet as $valuect)
							{
								if($valuect['MaHoaDon'] == $value['ID'])
								{
									echo "<tr>";
										echo "<td class='text-center'>{$stt}</td>";
										echo "<td>{$valuect['TenGiay']}</td>";
										echo "<td class='text-right'>{$valuect['SoLuong']}</td>";
										echo "<td class='text-right'>" . number_format($valuect['DonGiaBan']) . "<u><sup>đ</sup></u></td>";
										echo "<td class='text-right'>" . number_format($valuect['ThanhTien']) . "<u><sup>đ</sup></u></td>";

									echo "</tr>";
									
									$stt++;
									$tongTien = $tongTien + $valuect['ThanhTien'];
								}
							}
						?>
						<tr>
							<td class="font-weight-bold text-danger" colspan="4">Tổng tiền</td>
							<td class="text-right font-weight-bold text-danger"><?php echo number_format($tongTien); ?><u><sup>đ</sup></u></td>
						</tr>
						<tr>
							<td class="font-weight-bold text-primary" colspan="5">Bằng chữ: <?php echo ucfirst(DocSoThanhChu($tongTien)); ?> đồng.</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
<?php
	}
?>