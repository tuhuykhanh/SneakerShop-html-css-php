<?php
	require_once "database.php";
	
	class GiayDB
	{
		public function DanhSach()
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "SELECT s.*, l.TenLoai, n.TenNCC 
						FROM giay s, loaigiay l, nhacungcap n
						WHERE s.MaLoai = l.ID AND s.MaNCC = n.ID";
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
		public function LayGiayTheoLoai($id)
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "SELECT m.* FROM giay m WHERE m.MaLoai = :id";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":id", $id);
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
		public function LayGiayTheoNCC($id)
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "SELECT m.* FROM giay m WHERE m.MaNCC = :id";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":id", $id);
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
	
		public function DemTongGiay()
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "SELECT COUNT(*) FROM giay";
				$cmd = $db->prepare($sql);
				$cmd->execute();
				return $cmd->fetchColumn();
				return $result;

			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include_once "views/layouts/error.php";
				exit();
			}
		}

		public function LayGiayPhanTrang($m, $n)
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "SELECT m.*
				FROM giay m
				ORDER BY id DESC 
				LIMIT $m, $n";
				$cmd = $db->prepare($sql);
				$cmd->execute();
				return $cmd->fetchAll();
				return $result;

			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include_once "views/layouts/error.php";
				exit();
			}
		}
		public function TimKiem($ten)
		{
			$db = DB::KetNoi();

			try{
				$sql ="SELECT s.*, l.TenLoai, n.TenNCC 
				FROM giay s, loaigiay l, nhacungcap n
				WHERE s.MaLoai = l.ID AND s.MaNCC = n.ID and s.TenGiay like '%".$ten."%'";

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
		
		public function DanhSachGioHang($strSanPhamTrongGio)
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "SELECT * FROM giay WHERE ID IN($strSanPhamTrongGio)";
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
			$db = DB::KetNoi();
			
			try 
			{
				$sql = "SELECT s.*, l.TenLoai, n.TenNCC 
						FROM giay s, loaigiay l, nhacungcap n
						WHERE s.MaLoai = l.ID AND s.MaNCC = n.ID and s.ID = :id";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":id", $id);
				$cmd->execute();
				return $cmd->fetch();
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
				$sql = "INSERT INTO giay(MaLoai, MaNCC, TenGiay, GhiChu, DonGiaBan, SoLuong, HinhAnh,BaoHanh) 
						VALUES (:MaLoai, :MaNCC, :TenGiay, :GhiChu, :DonGiaBan, :SoLuong, :HinhAnh,:BaoHanh)";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":MaLoai", $data['MaLoai']);
				$cmd->bindValue(":MaNCC", $data['MaNCC']);
				$cmd->bindValue(":TenGiay", $data['TenGiay']);
				$cmd->bindValue(":GhiChu", $data['GhiChu']);
				$cmd->bindValue(":DonGiaBan", $data['DonGiaBan']);
				$cmd->bindValue(":SoLuong", $data['SoLuong']);
				$cmd->bindValue(":HinhAnh", $data['HinhAnh']);
				$cmd->bindValue(":BaoHanh", $data['BaoHanh']);

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
			$db = DB::KetNoi();
			
			try
			{
				$sql = "DELETE FROM giay WHERE ID = :id";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":id", $id);
				$cmd->execute();
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include_once "views/layouts/error.php";
				exit();
			}
		}
		
		public function CapNhat($data)
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "UPDATE	giay
						SET		MaLoai	= :MaLoai,
								MaNCC = :MaNCC,
								TenGiay = :TenGiay,
								GhiChu	= :GhiChu,
								DonGiaBan	= :DonGiaBan,
								SoLuong = :SoLuong,
								HinhAnh = :HinhAnh,
								BaoHanh = :BaoHanh

						WHERE	ID		= :ID";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":ID", $data['ID']);
				$cmd->bindValue(":MaLoai", $data['MaLoai']);
				$cmd->bindValue(":MaNCC", $data['MaNCC']);
				$cmd->bindValue(":TenGiay", $data['TenGiay']);
				$cmd->bindValue(":GhiChu", $data['GhiChu']);
				$cmd->bindValue(":DonGiaBan", $data['DonGiaBan']);
				$cmd->bindValue(":SoLuong", $data['SoLuong']);
				$cmd->bindValue(":HinhAnh", $data['HinhAnh']);
				$cmd->bindValue(":BaoHanh", $data['BaoHanh']);	
			
				$cmd->execute();
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include_once "views/layouts/error.php";
				exit();
			}
		}
		
		public function CapNhatSoLuong($id, $soLuong)
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "UPDATE	giay
						SET		SoLuong = SoLuong - :SoLuong
						WHERE	ID = :ID";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":ID", $id);
				$cmd->bindValue(":SoLuong", $soLuong);
				$cmd->execute();
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include_once "views/layouts/error.php";
				exit();
			}
		}
	}
?>