<?php
	require_once "models/giay.php";
	require_once "models/loaigiay.php";
	require_once "models/nhacungcap.php";
	
	class GiayController
	{
		public function getDanhSach()
		{
			$db = new GiayDB();
			$giay = $db->DanhSach();
			include_once "views/giay/danhsach.php";
		}
		public function getDanhSachTimKiem()
		{
			$ten = isset($_GET['ten']) ? $_GET['ten'] : '' ;
			if(!empty($ten)){

				$db = new GiayDB();
				$giay = $db->TimKiem($ten);
				include_once "views/giay/danhsachtimkiem.php";

			}else
			{
				$db = new GiayDB();
				$giay = $db->DanhSach();
				include_once "views/giay/danhsachtimkiem.php";
			}
		}
		
		
		public function getDanhSachHome()
		{

			$db =new LoaiGiayDB();
			$loaigiay = $db->DanhSach();


			$db = new NhaCungCapDB();
			$nhacungcap = $db->DanhSach();

			$db = new GiayDB();
			$giay = $db->DanhSach();

		
			$soluong = 5; // mỗi trang hiển thị $soluong mẫu tin
				$tonggiay = $db->DemTongGiay(); // tổng số tin hiện có
				$tongsotrang = ceil($tonggiay/$soluong); //tong so trang
				if(isset($_REQUEST["trang"]))
					{
					$tranghh = ($_REQUEST["trang"]);
					}
				else{
					$tranghh=1;
					}
				$batdau = ($tranghh -1)*$soluong; // mẫu tin bắt đầu sẽ lấy
				$giay = $db->LayGiayPhanTrang($batdau, $soluong);


			include_once "views/home.php";


		}
		public function getChiTiet($id)
		{
			$db = new LoaiGiayDB();
			$loaigiay = $db->DanhSach();
			
			$db = new NhaCungCapDB();
			$nhacungcap = $db->DanhSach();
			
			$path = "http://127.0.0.1:8080/qlgiay/storage/images/";
			$_SESSION['baseUrl'] = $path;
			
			$db = new GiayDB();
			$giay = $db->ChiTiet($id);
			include_once "views/giay/giay_chitiet.php";
		}
		
		public function getThem()
		{
			$db = new LoaiGiayDB();
			$loaigiay = $db->DanhSach();
			
			$db = new NhaCungCapDB();
			$nhacungcap = $db->DanhSach();
			
			$path = "http://127.0.0.1:8080/qlgiay/storage/images/";
			$_SESSION['baseUrl'] = $path;
			
			include_once "views/giay/them.php";
		}
		
		public function postThem($request)
		{
			$db = new GiayDB();
			$db->Them($request);
			header("Location: index.php?action=giay");
		}
		
		public function getSua($id)
		{
			$db = new LoaiGiayDB();
			$loaigiay = $db->DanhSach();
			
			$db = new NhaCungCapDB();
			$nhacungcap = $db->DanhSach();
			
			$path = "http://127.0.0.1:8080/qlgiay/storage/images/";
			$_SESSION['baseUrl'] = $path;
			
			$db = new GiayDB();
			$giay = $db->ChiTiet($id);
			include_once "views/giay/sua.php";
		}
		
		public function postSua($request)
		{
			$db = new GiayDB();
			$db->CapNhat($request);
			header("Location: index.php?action=giay");
		}
		
		public function getXoa($id)
		{
			$db = new GiayDB();
			$db->Xoa($id);
			header("Location: index.php?action=giay");
		}
		public function getSearch(Request $request)
		{
			$product = Product::where('name','like','%'.$request->key.'%')
								->get();
			return view('giay.search',compact('product'));
		}
		public function getDanhSachPhanLoai($id)
		{
			$db =new LoaiGiayDB();
			$loaigiay1 = $db->DanhSach();

			$db =new LoaiGiayDB();
			$loaigiay = $db->LayLoaiGiayTheoID($id);

			$db = new GiayDB();
			$giay = $db->LayGiayTheoLoai($id);
			
			include_once "views/giay/giayphanloai.php";
		}
		public function getDanhSachPhanLoaiNcc($id)
		{
			$db =new NhaCungCapDB();
			$nhacungcap1 = $db->DanhSach();

			$db =new NhaCungCapDB();
			$nhacungcap = $db->LayNCCTheoID($id);

			$db = new GiayDB();
			$giay = $db->LayGiayTheoNCC($id);
			
			include_once "views/giay/nccphanloai.php";
		}
	}
?>