<?php
	require_once "models/nhacungcap.php";
	
	class NhaCungCapController
	{
		public function getDanhSach()
		{
			$db = new NhaCungCapDB();
			$nhacungcap = $db->DanhSach();
			include_once "views/nhacungcap/danhsach.php";
		}
		
		public function getThem()
		{
			include_once "views/nhacungcap/them.php";
		}
		
		public function postThem($request)
		{
			$db = new NhaCungCapDB();
			$db->Them($request);
			header("Location: index.php?action=nhacungcap");
		}
		
		public function getSua($id)
		{
			$db = new NhaCungCapDB();
			$nhacungcap = $db->ChiTiet($id);
			include_once "views/nhacungcap/sua.php";
		}
		
		public function postSua($request)
		{
			$db = new NhaCungCapDB();
			$db->CapNhat($request);
			header("Location: index.php?action=nhacungcap");
		}
		
		public function getXoa($id)
		{
			$db = new NhaCungCapDB();
			$db->Xoa($id);
			header("Location: index.php?action=nhacungcap");
		}
	}
?>