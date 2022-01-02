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
	<h4 class="card-header center">Danh sách hãng</h4>
	<div class="card-body table-responsive">
		<p><a class="btn btn-outline-secondary button" href="index.php?action=nhacungcap_them" role="button"> Thêm hãng Giày</a></p>
		<table class="table table-bordered table-sm">
			<thead>
				<tr>
					<th class='text-center' width="10%">STT</th>
					<th class='text-center' width="70%">Tên Hãng</th>
					<th class='text-center' width="10%">Sửa</th>
					<th class='text-center' width="10%">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$stt = 1;
					foreach($nhacungcap as $value)
					{
						echo "<tr>";
							echo "<td class='text-center'>{$stt}</td>";
							echo "<td>{$value['TenNCC']}</td>";
							echo "<td class='text-center'><a href='index.php?action=nhacungcap_sua&id={$value['ID']}'><i class='fad fa-edit'></i></a></td>";
							echo "<td class='text-center'><a onclick='return confirm(\"Bạn có muốn xóa hãng cung cấp {$value['TenNCC']}?\")' href='index.php?action=nhacungcap_xoa&id={$value['ID']}'><i class='fad fa-trash-alt text-danger'></i></a></td>";
						echo "</tr>";
						$stt++;
					}
				?>
			</tbody>
		</table>
	</div>
</div>