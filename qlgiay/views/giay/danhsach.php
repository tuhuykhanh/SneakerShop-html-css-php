<style>
	.card{
		
		width:90%;
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
	.button
	{
		color:black;
		background:white;
		border-radius:10px;
		border: none;
	}
</style>
<div class="card">
	<h4 class="card-header center">Quản Lí Giày</h4>
	<div class="card-body table-responsive">
		<p><a class="btn btn-outline-secondary button" href="index.php?action=giay_them"  role="button"> Thêm Giày mới</a></p>
		<table class="table table-bordered table-sm">
			<thead>
				<tr>
					<th class='text-center' width="5%">STT</th>
					<th class='text-center' width="10%">Ảnh bìa</th>
					<th class='text-center' width="15%" >Tên Giày</th>
					<th class='text-center' width="15%">Loại Giày</th>
					<th class='text-center' width="15%">Nhà Cung Cấp</th>
					<th class='text-center' width="8%">Số Lượng</th>
					<th class='text-center' width="10%">Đơn Giá</th>
					<th class='text-center' width="10%">Bảo Hành</th>
					<th class='text-center' width="5%">Sửa</th>
					<th class='text-center' width="5%">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$stt = 1;
					foreach($giay as $value)
					{
						echo "<tr>";
							echo "<td class='text-center'>{$stt}</td>";
							echo "<td class='text-center'><img class='rounded' src='storage/images/thumbs/Images/{$value['HinhAnh']}' width='200' height='200'/></td>";
							echo "<td>{$value['TenGiay']}</td>";
							echo "<td>{$value['TenLoai']}</td>";
							echo "<td>{$value['TenNCC']}</td>";
							echo "<td class='text-right'>{$value['SoLuong']}</td>";
							echo "<td class='text-right'>" . number_format($value['DonGiaBan']) . "</td>";
							echo "<td>{$value['BaoHanh']}</td>";
							echo "<td class='text-center'><a href='index.php?action=giay_sua&id={$value['ID']}'><i class='fad fa-edit'></i></a></td>";
							echo "<td class='text-center'><a onclick='return confirm(\"Bạn có muốn xóa giày {$value['TenGiay']}?\")' href='index.php?action=giay_xoa&id={$value['ID']}'><i class='fad fa-trash-alt text-danger'></i></a></td>";
						echo "</tr>";
						$stt++;
					}
				?>
			</tbody>
		</table>
	</div>
</div>