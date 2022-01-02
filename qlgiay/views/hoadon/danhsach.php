<?php
	foreach($hoadon as $value)
	{
?>
<style>
	.card{
		width:80%;
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
	<h5 class="card-header center"> Hóa Đơn <?php echo str_pad($value['ID'], STR_PAD_LEFT) ; ?></h5>
	<div class="card-body">
	
		<table class="table table-bordered table-sm">
			<thead>
				<tr>
					<th class='text-center' width="2%">STT</th>
					<th class='text-center' width="10%">Họ Và Tên</th>
					<th class='text-center' width="10%">Tên Giày</th>
					<th class='text-center' width="10%">Hình Ảnh</th>
					<th class='text-center' width="10%">Đơn Giá Bán</th>
					<th class='text-center' width="8%">Số Lượng</th>
					<th class='text-center' width="10%">Thành Tiền</th>
					<th class='text-center' width="13%">Địa Chỉ Giao Hàng</th>
					<th class='text-center' width="10%">Điện Thoại</th>
					<th class='text-center' width="10%">Ngày Đặt Hàng</th>
					<th class='text-center' width="10%">Tình Trạng</th>
					
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
							echo "<td>{$valuect['HoVaTen']}</td>";

							echo "<td>{$valuect['TenGiay']}</td>";
							echo "<td class='text-center'><img class='rounded' src='storage/images/thumbs/Images/{$valuect['HinhAnh']}' width='100' /></td>";
							echo "<td class='text-right'>" . number_format($valuect['DonGiaBan']) . "</td>";
							echo "<td class='text-right'>{$valuect['SoLuong']}</td>";
							echo "<td class='text-right'>" . number_format($valuect['DonGiaBan']*$valuect['SoLuong']) . "</td>";
							echo "<td>{$valuect['DiaChiGiaoHang']}</td>";
							echo "<td>{$valuect['DienThoai']}</td>";
							echo "<td>{$valuect['NgayDatHang']}</td>";
							if( $valuect['TinhTrang'] == 0 )
							{
								echo "<td class='text-center' >Đang xử lý</td>";
							}
							else if($valuect['TinhTrang'] == 1)
							{
								echo "<td class='text-center' c>Đã Xác Nhận</td>";

							}
							else if($valuect['TinhTrang'] == 2)
							{
								echo "<td class='text-center'>Đang Giao Hàng</td>";
							}
							else 
							{
								echo "<td class='text-center'>Đã Giao Hàng</td>";

							}
							
						echo "</tr>";
						
						$stt++;
						$tongTien = $tongTien + $valuect['DonGiaBan']*$valuect['SoLuong'];

					}
					
					}
					echo "<td class='text-right' colspan='10' ><a href='index.php?action=hoadon_sua&id
											={$value['ID']}'> Thay Đổi Tình Trạng Đơn Hàng <i class='fad fa-edit'></i></a></td>";
							echo "<td class='text-center' colspan='1' ><a onclick='return confirm(\"Bạn có muốn xóa đơn hàng {$value['TenGiay']}?\")'
							href='index.php?action=hoadon_xoa&id={$value['ID']}'>Xóa<i class='fad fa-trash-alt text-danger'></i></a></td>";
			
				?>
				
				<tr>
							<td class="font-weight-bold text-danger" colspan="6">Tổng tiền (đã bao gồm VAT)</td>
							<td class="text-right font-weight-bold text-danger"><?php echo number_format($tongTien); ?><u><sup>đ</sup></u></td>
						</tr>
			</tbody>
	
		</table>
	</div>
</div>
<?php

	}
?>