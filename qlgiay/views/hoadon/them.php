<?php
	if(!isset($_SESSION['ID']))
	{
		$error_message = "Bạn Vui lòng <a href='index.php?action=dangnhap'>đăng nhập</a> để thanh toán. Nếu chưa có tài khoản, xin vui lòng <a href='index.php?action=dangky'>đăng ký</a>.";
		include_once "views/layouts/error.php";
	}
	else
	{
?>
	<style>
	.card
		{
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
		border-radius:5px;
		border: none;
	}

	</style>
	<div class="card">
			<h5 class="card-header center">Thông tin thanh toán</h5>
			<div class="card-body">
				<form action="index.php?action=hoadon_them_xuly" method="post">
					<div class="form-group">
						<label for="DiaChiGiaoHang">Địa chỉ giao hàng</label>
						<input type="text" class="form-control" id="DiaChiGiaoHang" name="DiaChiGiaoHang" required />
					</div>
					<div class="form-group">
						<label for="DienThoai">Điện thoại đặt hàng</label>
						<input type="text" class="form-control" id="DienThoai" name="DienThoai" required />
					</div>
					
					<button type="submit" class="btn btn-outline-primary button"> Hoàn tất đặt hàng</button>
				</form>
			</div>
		</div>
		
		<div class="card mt-3">
			<h5 class="card-header center">Sản phẩm đã đặt</h5>
			<div class="card-body table-responsive">
				<table class="table table-bordered table-sm">
					<thead>
						<tr>
							<th width="5%">#</th>
							<th width="10%">Hình Ảnh</th>
							<th width="55%">Tên Giày</th>
							<th width="10%">Số lượng</th>
							<th width="10%">Đơn giá</th>
							<th width="10%">Thành tiền</th>
							<th width="10%">Bảo Hành</th>

						</tr>
					</thead>
					<tbody>
						<?php
							$stt = 1;
							$tongTien = 0;
							foreach($giay as $value)
							{
								echo "<tr>";
									echo "<td>{$stt}</td>";
									echo "<td class='text-center'><img class='img-thumbnail' src='storage/images/{$value['HinhAnh']}' width='60' /></td>";
									echo "<td>{$value['TenGiay']}</td>";
									echo "<td class='text-right'>" . $_SESSION['GioHang'][$value['ID']] . "</td>";
									echo "<td class='text-right'>" . number_format($value['DonGiaBan']) . "<u><sup>đ</sup></u></td>";
									echo "<td class='text-right'>" . number_format($_SESSION['GioHang'][$value['ID']] * $value['DonGiaBan']) . "<u><sup>đ</sup></u></td>";
									echo "<td>{$value['BaoHanh']}</td>";

								echo "</tr>";
							
							
								$stt++;
								$tongTien = $tongTien + $_SESSION['GioHang'][$value['ID']] * $value['DonGiaBan'];
							}
						?>
						<tr>
							<td class="font-weight-bold text-danger" colspan="5">Tổng tiền (đã bao gồm VAT)</td>
							<td class="text-right font-weight-bold text-danger"><?php echo number_format($tongTien); ?><u><sup>đ</sup></u></td>
						</tr>
						<tr>
							<td class="font-weight-bold text-primary" colspan="6">Bằng chữ: <?php echo ucfirst(DocSoThanhChu($tongTien)); ?> đồng.</td>
						</tr>
					</tbody>
				</table>
				<a class="btn btn-outline-info button" href="index.php?action=giohang" role="button"> Chỉnh sửa đơn hàng</a>
			</div>
		</div>
<?php
	}
?>