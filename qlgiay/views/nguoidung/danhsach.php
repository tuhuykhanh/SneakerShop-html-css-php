<style>
	.card{
		
		width:60%;
		overflow: hidden;		
		margin: 0 auto;
		margin-bottom: 20px;
		background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    	border-radius: 20px;
   		border:1px solid rgba(255, 255, 255, 0.18);
    	box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
		overflow:hidden;		
	}
	.button
	{
		color:black;
		background:white;
		border-radius:10px;
		border: none;	
	}
	.center
	{
		text-align:center;
	}
	
</style>
<div class="card">
	<h4  class="card-header center">Danh sách người dùng</h4>
	<div class="card-body table-responsive">
		<p><a class="btn btn-outline-secondary button" href="index.php?action=dangky" role="button"> Thêm người dùng</a></p>
		<table class="table table-bordered table-sm">
			<thead>
				<tr>
					<th class='text-center' width="5%">STT</th>
					<th class='text-center' width="15%">Họ và tên</th>
					<th class='text-center' width="5%">Avatar</th>
					<th class='text-center' width="20%">Tên đăng nhập</th>
					<th class='text-center' width="10%">Quyền hạn</th>
					<th class='text-center' width="5%">Khóa</th>
					<th class='text-center' width="13%">Đổi Mật Khẩu</th>
					<th class='text-center' width="15%">Sửa Thông Tin</th>
					<th class='text-center' width="5%">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$stt = 1;
					foreach($nguoidung as $value)
					{
						echo "<tr>";
							echo "<td class='text-center'>{$stt}</td>";
							echo "<td>{$value['HoVaTen']}</td>";
							echo "<td class='text-center'><img class='rounded' src='storage/images/avata/{$value['Avata']}' width='	100px' height='100px'/></td>";
							echo "<td>{$value['TenDangNhap']}</td>";
							echo "<td class='text-center'>";
								if($value['QuyenHan'] == 1)
									echo "<span class='badge badge-pill badge-danger'>ADMIN</span>";
								else
									echo "<span class='badge badge-success'>USER</span>";
							echo "</td>";
							echo "<td class='text-center'>";
								if($value['Khoa'] == 0)
									echo "<a><i class='fas fa-lock-open'></i></a>";
								else
									echo "<a><i class='fas fa-lock'></i></i></a>";
							echo "</td>";
							echo "<td class='text-center'><a href='index.php?action=nguoidung_admindoimk&id={$value['ID']}'><i class='fas fa-key'></i></a></td>";
							echo "<td class='text-center'><a href='index.php?action=nguoidung_sua&id={$value['ID']}'><i class='fad fa-edit'></i></a></td>";
							echo "<td class='text-center'><a onclick='return confirm(\"Bạn có muốn xóa người dùng {$value['HoVaTen']}?\")' href='index.php?action=nguoidung_xoa&id={$value['ID']}'><i class='fad fa-trash-alt text-danger'></i></a></td>";
						echo "</tr>";
						$stt++;
					}
				?>
			</tbody>
		</table>
	</div>
</div>