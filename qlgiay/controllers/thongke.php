<?php
	require_once "models/giay.php";
	require_once "models/thongke.php";
	require_once "models/hoadon_chitiet.php";
	require_once "libs/functions.php";
	
	class ThongKeController
	{
		
		public function getDanhSach()
		{
			$db = new ThongKeDB();
			$thongke = $db->DanhSach();
			$hoadonchitiet = $db->DanhSach();
			$nguoidung = $db->DanhSach();


			include_once "views/thongke/danhsach.php";
		}
		public function getThem()
		{
			$SanPhamTrongGio = array();
			if(isset($_SESSION['GioHang']))
			{
				foreach($_SESSION['GioHang'] as $maSP => $soLuong)
				{
					if(isset($maSP))
					{
						$SanPhamTrongGio[] = $maSP;
					}
				}
			}
			
			// Biến mảng thành chuỗi
			$strSanPhamTrongGio = implode(",", $SanPhamTrongGio);
			$giaydb = new GiayDB();
			$giay = $giaydb->DanhSachGioHang($strSanPhamTrongGio);
			
			include_once "views/hoadon/them.php";
		}
		
		public function postThem($request)
		{
			// Lưu vào bảng hoadon, trả về $id
			$ThongKeDB = new ThongKeDB();
			$id = $ThongKeDB->Them($request);

			// Lưu vào bảng hoadonchitiet
			foreach($_SESSION['GioHang'] as $maSP => $soLuong)
			{
				$giaydb = new GiayDB();
				$giay = $giaydb->ChiTiet($maSP);
				
				$data = array(
					'MaHoaDon' => $id,
					'MaGiay' => $maSP,
					'SoLuong' => $soLuong,
					'DonGiaBan' => $giay['DonGiaBan']
				);
				
				$hdctdb = new HoaDonChiTietDB();
				$hdctdb->Them($data);
				
				// Trừ số lượng sách trong kho
				$giaydb->CapNhatSoLuong($maSP, $soLuong);
			}
			
			// Xóa giỏ hàng
			unset($_SESSION['GioHang']);
			
			$message = "Đặt hàng thành công!";
			include_once "views/layouts/success.php";
		}
		
		public function getLichSuMuaHang()
		{
			$ThongKeDB = new ThongKeDB();
			$thongke = $ThongKeDB->LichSuMuaHang();
			
			$hoadon_chitietdb = new HoaDonChiTietDB();
			$hoadon_chitiet = $hoadon_chitietdb->LichSuMuaHang();
			
		
			$hoadonchitiet = array();
			foreach($hoadon_chitiet as $value)
			{
				$giaydb = new GiayDB();
				$giay = $giaydb->ChiTiet($value['MaGiay']);
				
				$hoadonchitiet[] = array(
					'MaHoaDon' => $value['MaHoaDon'],
					'MaGiay' => $value['MaGiay'],
					'TenGiay' => $giay['TenGiay'],
					'SoLuong' => $value['SoLuong'],
					'DonGiaBan' => $value['DonGiaBan'],
					'ThanhTien' => $value['SoLuong'] * $value['DonGiaBan']
				);
			}
			
			include_once "views/thongke/lichsumuahang.php";
		}
	}
?>