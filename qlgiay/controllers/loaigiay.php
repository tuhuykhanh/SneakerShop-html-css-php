<?php
	require_once "models/loaigiay.php";
	
	class LoaiGiayController
	{
		public function getDanhSach()
		{
			$db = new LoaiGiayDB();
			$loaigiay = $db->DanhSach();
			include_once "views/loaigiay/danhsach.php";
		}
		
		public function getThem()
		{
			include_once "views/loaigiay/them.php";
		}
		
		public function postThem($request)
		{
			$db = new LoaiGiayDB();
			$db->Them($request);
			header("Location: index.php?action=loaigiay");
		}
		
		public function getSua($id)
		{
			$db = new LoaiGiayDB();
			$loaigiay = $db->ChiTiet($id);
			include_once "views/loaigiay/sua.php";
		}
		
		public function postSua($request)
		{
			$db = new LoaiGiayDB();
			$db->CapNhat($request);
			header("Location: index.php?action=loaigiay");
		}
		
		public function getXoa($id)
		{
			$db = new LoaiGiayDB();
			$db->Xoa($id);
			header("Location: index.php?action=loaigiay");
		}
	}
?>