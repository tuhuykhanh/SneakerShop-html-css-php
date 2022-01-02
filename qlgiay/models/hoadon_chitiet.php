<?php
	require_once "database.php";
	
	class HoaDonChiTietDB
	{
		public function DanhSach()
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "SELECT  l.*, s.DiaChiGiaoHang, s.DienThoai,s.NgayDatHang ,s.TinhTrang, k.TenGiay ,k.HinhAnh,k.BaoHanh
						FROM hoadon s, chitiethoadon l, giay k
						WHERE s.ID = l.MaHoaDon and l.MaGiay=k.ID";
				$cmd = $db->prepare($sql);
				$cmd->execute();
				return $cmd->fetchAll();
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include_once "views/layouts/error.php";
				exit();
			}
		}
		
		public function ChiTiet($id)
		{
			
		}
		
		public function LichSuMuaHang()
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "SELECT * FROM chitiethoadon WHERE 1";
				$cmd = $db->prepare($sql);
				$cmd->execute();
				return $cmd->fetchAll();
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include_once "views/layouts/error.php";
				exit();
			}
		}
		
		public function Them($data)
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "INSERT INTO chitiethoadon (MaHoaDon, MaGiay, SoLuong, DonGiaBan) 
						VALUES (:MaHoaDon, :MaGiay, :SoLuong, :DonGiaBan)";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":MaHoaDon", $data['MaHoaDon']);
				$cmd->bindValue(":MaGiay", $data['MaGiay']);
				$cmd->bindValue(":SoLuong", $data['SoLuong']);
				$cmd->bindValue(":DonGiaBan", $data['DonGiaBan']);
				$cmd->execute();
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include_once "views/layouts/error.php";
				exit();
			}
		}
		
		public function Xoa($id)
		{
			
		}
		
		public function CapNhat($data)
		{
			
		}
	}
?>