<?php
	require_once "database.php";
	
	class NguoiDungDB
	{
		public function DanhSach()
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "SELECT * FROM nguoidung ";
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
				$sql = "SELECT * FROM nguoidung WHERE ID = :id";
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
		
		public function DangNhap($data)
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "SELECT * FROM nguoidung WHERE TenDangNhap = :TDN AND MatKhau = :MK";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":TDN", $data['TenDangNhap']);
				$cmd->bindValue(":MK", md5($data['MatKhau']));
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
				$sql = "INSERT INTO nguoidung(HoVaTen, TenDangNhap, MatKhau, QuyenHan, Khoa,Avata) 
					VALUES (:HoVaTen, :TenDangNhap, :MatKhau, :QuyenHan, :Khoa, :Avata)";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":HoVaTen", $data['HoVaTen']);
				$cmd->bindValue(":TenDangNhap", $data['TenDangNhap']);
				$cmd->bindValue(":MatKhau", md5($data['MatKhau']));
				$cmd->bindValue(":QuyenHan", $data['QuyenHan']);
				$cmd->bindValue(":Khoa", $data['Khoa']);
				$cmd->bindValue(":Avata", $data['Avata']);
				return $cmd->execute();
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
				$sql = "DELETE FROM nguoidung WHERE ID = :id";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":id", $id);
				return $cmd->execute();
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
				$sql = "UPDATE	nguoidung
						SET		HoVaTen	= :HoVaTen,
								TenDangNhap = :TenDangNhap,
								QuyenHan	= :QuyenHan,
								Khoa	= :Khoa
						WHERE	ID		= :ID";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":ID", $data['ID']);
				$cmd->bindValue(":HoVaTen", $data['HoVaTen']);
				$cmd->bindValue(":TenDangNhap", $data['TenDangNhap']);
				$cmd->bindValue(":QuyenHan", $data['QuyenHan']);
				$cmd->bindValue(":Khoa", $data['Khoa']);

				$cmd->execute();
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include_once "views/layouts/error.php";
				exit();
			}
			
		}
		public function ADMINDOIMK($data)
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "UPDATE	nguoidung
						SET		HoVaTen	= :HoVaTen,
								TenDangNhap = :TenDangNhap,
								MatKhau = :MatKhau
						WHERE	ID		= :ID";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":ID", $data['ID']);
				$cmd->bindValue(":HoVaTen", $data['HoVaTen']);
				$cmd->bindValue(":TenDangNhap", $data['TenDangNhap']);
				$cmd->bindValue(":MatKhau", md5($data['MatKhau']));


				$cmd->execute();
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include_once "views/layouts/error.php";
				exit();
			}
			
		}
		
			public function DMK($data)
		{
			$db = DB::KetNoi();
			
			try
			{
				$sql = "UPDATE	nguoidung
						SET		
								HoVaTen = :HoVaTen,
								MatKhau = :MatKhau,
								
								Khoa	= :Khoa,
								Avata   = :Avata
										
						WHERE	ID		= :ID";
				$cmd = $db->prepare($sql);
				$cmd->bindValue(":ID", $data['ID']);
				$cmd->bindValue(":HoVaTen", $data['HoVaTen']);

				$cmd->bindValue(":MatKhau", md5($data['MatKhau']));
				// $cmd->bindValue(":QuyenHan", $data['QuyenHan']);
				$cmd->bindValue(":Khoa", $data['Khoa']);
				$cmd->bindValue(":Avata", $data['Avata']);

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