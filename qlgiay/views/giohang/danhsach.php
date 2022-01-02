<?php
	if($gioRong)
	{
		$message = " giỏ hàng rỗng !!";
		include_once "views/layouts/empty.php";
	}
	else
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
	.button
	{
		color:black;
		background:#FF512F;
		border-radius:5px;
		border: none;
	}
</style>
<div class="card">
	<h4 class="card-header center">Giỏ hàng hiện tại</h4>
	<div class="card-body">
		<p><a class="btn btn-outline-dark button" href="index.php" role="button"> Tiếp tục mua hàng</a></p>
		<form method="post" action="index.php?action=giohang_capnhat">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class='text-center' width="5%">STT</th>
						<th class='text-center' width="15%">Hình Ảnh</th>
						<th class='text-center' width="40%">Tên Giày</th>
						<th class='text-center'width="15%">Số lượng</th>
						<th class='text-center'width="10%">Đơn giá</th>
						<th class='text-center'width="15%">Thành tiền</th>
						<th class='text-center'width="5%">Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$stt = 1;
						$tongTien = 0;
						foreach($giay as $value)
						{
							echo "<tr>";
								echo "<th>{$stt}</th>";
								echo "<td><img src='storage/images/{$value['HinhAnh']}' width='200' height='200'/></td>";
								echo "<td>{$value['TenGiay']}</td>";
								echo "<td>
									<div class='input-group'>
										<div class='input-group-prepend'>
											<span class='input-group-text'><a href='index.php?action=giohang_capnhat_giam&id=".$value['ID']."'><i class='fal fa-minus'></i></a></span>
										</div>
										<input type='text' class='form-control text-center' name='SoLuongTrongGio[".$value['ID']."]' value='".$_SESSION['GioHang'][$value['ID']]."' />
										<div class='input-group-append'>
											<span class='input-group-text'><a href='index.php?action=giohang_capnhat_tang&id=".$value['ID']."'><i class='fal fa-plus'></i></a></span>
										</div>
									</div>
								</td>";
								echo "<td class='text-right'>" . number_format($value['DonGiaBan']) . "<u><sup>đ</sup></u></td>";
								echo "<td class='text-right'>" . number_format($_SESSION['GioHang'][$value['ID']] * $value['DonGiaBan']) . "<u><sup>đ</sup></u></td>";
								echo "<td class='text-center'><a href='index.php?action=giohang_xoa&id={$value['ID']}'><i class='fad fa-trash-alt text-danger'></i></a></td>";
							echo "</tr>";
							$stt++;
							$tongTien += $_SESSION['GioHang'][$value['ID']] * $value['DonGiaBan'];
						}
					?>
					<tr>
						<td colspan="5" class="font-weight-bold text-danger">Tổng Tiền </td>
						<td class="text-right font-weight-bold text-danger"><?php echo number_format($tongTien); ?><u><sup>đ</sup></u></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="7" class="font-weight-bold text-danger">Bằng chữ: <span class="text-secondary"><?php echo ucfirst(DocSoThanhChu($tongTien)); ?> đồng.</span></td>
					</tr>
				</tbody>
			</table>
			<button type="submit" class="btn btn-outline-dark button"> Cập nhật giỏ hàng</button>
			<a class="btn btn-outline-dark button" href="index.php?action=hoadon_them"> Thanh toán</a>
		</form>
	</div>
</div>
<?php
	}
?>