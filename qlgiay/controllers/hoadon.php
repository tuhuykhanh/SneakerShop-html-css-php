<?php
	require_once "models/giay.php";
	require_once "models/hoadon.php";
	require_once "models/hoadon_chitiet.php";
	require_once "libs/functions.php";
	
	class HoaDonController
	{
		
		public function getDanhSach()
		{
			$db = new HoaDonDB();
			$hoadon = $db->DanhSach();
			$giay = $db->DanhSach();
			$hoadonchitiet = $db->DanhSach();
			$nguoidung = $db->DanhSach();


			include_once "views/hoadon/danhsach.php";
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
			
			
			$strSanPhamTrongGio = implode(",", $SanPhamTrongGio);
			$giaydb = new GiayDB();
			$giay = $giaydb->DanhSachGioHang($strSanPhamTrongGio);
			
			include_once "views/hoadon/them.php";
		}
		public function getXoa($id)
		{
			$db = new HoaDonDB();
			$db->Xoa($id);
			header("Location: index.php?action=hoadon");
		}
		public function getSua($id)
		{
	

			
			$path = "http://127.0.0.1:8080/bansach_v2.0/storage/images/";
			$_SESSION['baseUrl'] = $path;
			
			$db = new HoaDonDB();
			$hoadon = $db->ChiTiet($id);
			include_once "views/hoadon/sua.php";
		}
		
		public function postSua($request)
		{
			$db = new HoaDonDB();
			$db->CapNhat($request);
			header("Location: index.php?action=hoadon");
		}
		
		public function postThem($request)
		{
			
			$hoadondb = new HoaDonDB();
			$id = $hoadondb->Them($request);

			
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
				
				
				$giaydb->CapNhatSoLuong($maSP, $soLuong);
			}
			
			
			unset($_SESSION['GioHang']);
			
			$message = "Đặt hàng thành công!";
			include_once "views/layouts/success.php";
		}
		
		public function getLichSuMuaHang()
		{
			$hoadondb = new HoaDonDB();
			$hoadon = $hoadondb->LichSuMuaHang();
			
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
			
			include_once "views/hoadon/lichsumuahang.php";
		}
	}
?>