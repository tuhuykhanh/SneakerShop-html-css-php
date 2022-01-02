<?php
	if(isset($_GET['action']))
	{
		switch($_GET['action'])
		{
			//Thống Kê
			case "thongke":
				include_once "controllers/thongke.php";
				$ctr = new ThongKeController();
				$ctr->getDanhSach();
				break;
			// Người dùng
			case "dangky":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$ctr->getThem();
				break;
			case "dangky_xuly":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$request = array(
					'HoVaTen' => $_POST['HoVaTen'],
					'TenDangNhap' => $_POST['TenDangNhap'],
					'MatKhau' => $_POST['MatKhau'],
					'QuyenHan' => 2,
					'Khoa' => 0 ,
					'Avata' => 'user1.jpg',
				);
				$ctr->postThem($request);
				break;
			case "dangnhap":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$ctr->getDangNhap();
				break;
			case "dangnhap_xuly":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$request = array(
					'TenDangNhap' => $_POST['TenDangNhap'],
					'MatKhau' => $_POST['MatKhau'],
				);
				$ctr->postDangNhap($request);
				break;
			case "dangxuat":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$ctr->getDangXuat();
				break;
			case "nguoidung":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$ctr->getDanhSach();
				break;
			case "nguoidung_sua":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$id = $_GET['id'];
				$ctr->getSua($id);
				break;
					case "nguoidung_admindoimk":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$id = $_GET['id'];
				$ctr->getAD($id);
				break;	
					case "nguoidung_admindoimk_xuly":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$request = array(
					'ID' => $_POST['ID'],
					'HoVaTen' => $_POST['HoVaTen'],
					'TenDangNhap' => $_POST['TenDangNhap'],
					'MatKhau' => $_POST['MatKhau']

					);

				$ctr->postAD($request);
				break;
				case "nguoidung_dmk":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$id = $_GET['id'];
				$ctr->getDMK($id);
				break;
					case "nguoidung_dmk_xuly":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$request = array(
					'ID' => $_POST['ID'],
					'HoVaTen' => $_POST['HoVaTen'],

					'MatKhau' => $_POST['MatKhau'],
					'QuyenHan' => 2,
					'Khoa' => 0,
					'Avata' => $_POST['Avata'],
					);

				$ctr->postDMK($request);
				break;
			case "nguoidung_sua_xuly":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$request = array(
					'ID' => $_POST['ID'],
					'HoVaTen' => $_POST['HoVaTen'],
					'TenDangNhap' => $_POST['TenDangNhap'],
					'QuyenHan' => $_POST['QuyenHan'],
					'Khoa' => $_POST['Khoa']
					);

				$ctr->postSua($request);
				break;
			case "nguoidung_xoa":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$id = $_GET['id'];
				$ctr->getXoa($id);
				break;
			
			// Loại giày
			case "loaigiay":
				include_once "controllers/loaigiay.php";
				$ctr = new LoaiGiayController();
				$ctr->getDanhSach();
				break;
			case "loaigiay_them":
				include_once "controllers/loaigiay.php";
				$ctr = new LoaiGiayController();
				$ctr->getThem();
				break;
			case "loaigiay_them_xuly":
				include_once "controllers/loaigiay.php";
				$ctr = new LoaiGiayController();
				$request = array('TenLoai' => $_POST['TenLoai']);
				$ctr->postThem($request);
				break;
			case "loaigiay_sua":
				include_once "controllers/loaigiay.php";
				$ctr = new LoaiGiayController();
				$id = $_GET['id'];
				$ctr->getSua($id);
				break;
			case "loaigiay_sua_xuly":
				include_once "controllers/loaigiay.php";
				$ctr = new LoaiGiayController();
				$request = array(
					'ID' => $_POST['ID'],
					'TenLoai' => $_POST['TenLoai']);
				$ctr->postSua($request);
				break;
			case "loaigiay_xoa":
				include_once "controllers/loaigiay.php";
				$ctr = new LoaiGiayController();
				$id = $_GET['id'];
				$ctr->getXoa($id);
				break;
			
			// Nhà cung cấp
			case "nhacungcap":
				include_once "controllers/nhacungcap.php";
				$ctr = new NhaCungCapController();
				$ctr->getDanhSach();
				break;
			case "nhacungcap_them":
				include_once "controllers/nhacungcap.php";
				$ctr = new NhaCungCapController();
				$ctr->getThem();
				break;
			case "nhacungcap_them_xuly":
				include_once "controllers/nhacungcap.php";
				$ctr = new NhaCungCapController();
				$request = array('TenNCC' => $_POST['TenNCC']);
				$ctr->postThem($request);
				break;
			case "nhacungcap_sua":
				include_once "controllers/nhacungcap.php";
				$ctr = new NhaCungCapController();
				$id = $_GET['id'];
				$ctr->getSua($id);
				break;
			case "nhacungcap_sua_xuly":
				include_once "controllers/nhacungcap.php";
				$ctr = new NhaCungCapController();
				$request = array(
					'ID' => $_POST['ID'],
					'TenNCC' => $_POST['TenNCC']);
				$ctr->postSua($request);
				break;
			case "nhacungcap_xoa":
				include_once "controllers/nhacungcap.php";
				$ctr = new NhaCungCapController();
				$id = $_GET['id'];
				$ctr->getXoa($id);
				break;
			
			// giay
			case "phanloaincc":
				include_once "controllers/giay.php";
				$ctr = new GiayController();
				$id = $_GET['id'];
				$ctr->getDanhSachPhanLoaiNcc($id);
				break;
			case "phanloaigiay":
				include_once "controllers/giay.php";
				$ctr = new GiayController();
				$id = $_GET['id'];
				$ctr->getDanhSachPhanLoai($id);
				break;
			case "giay":
				include_once "controllers/giay.php";
				$ctr = new GiayController();
				$ctr->getDanhSach();
				break;
			case "timkiemgiay":
				include_once "controllers/giay.php";
				$ctr = new GiayController();
				$ctr->getDanhSachTimKiem();
				break;
		
			case "giay_chitiet":
				include_once "controllers/giay.php";
				$ctr = new GiayController();
				$id = $_GET['id'];
				$ctr->getChiTiet($id);
				break	;
			case "giay_them":
				include_once "controllers/giay.php";
				$ctr = new GiayController();
				$ctr->getThem();
				break;
			case "giay_them_xuly":
				include_once "controllers/giay.php";
				$ctr = new GiayController();
				$request = array(
					'TenGiay' => $_POST['TenGiay'],
					'MaLoai' => $_POST['MaLoai'],
					'MaNCC' => $_POST['MaNCC'],
					'DonGiaBan' => $_POST['DonGiaBan'],
					'SoLuong' => $_POST['SoLuong'],
					'HinhAnh' => $_POST['HinhAnh'],
					'GhiChu' => $_POST['GhiChu'],
					'BaoHanh' => $_POST['BaoHanh']

				);
				$ctr->postThem($request);
				break;
			case "giay_sua":
				include_once "controllers/giay.php";
				$ctr = new GiayController();
				$id = $_GET['id'];
				$ctr->getSua($id);
				break;
			case "giay_sua_xuly":
				include_once "controllers/giay.php";
				$ctr = new GiayController();
				$request = array(
					'ID' => $_POST['ID'],
					'TenGiay' => $_POST['TenGiay'],
					'MaLoai' => $_POST['MaLoai'],
					'MaNCC' => $_POST['MaNCC'],
					'DonGiaBan' => $_POST['DonGiaBan'],
					'SoLuong' => $_POST['SoLuong'],
					'HinhAnh' => $_POST['HinhAnh'],
					'GhiChu' => $_POST['GhiChu'],
					'BaoHanh' => $_POST['BaoHanh']

				);
				$ctr->postSua($request);
				break;
			case "giay_xoa":
				include_once "controllers/giay.php";
				$ctr = new GiayController();
				$id = $_GET['id'];
				$ctr->getXoa($id);
				break;
				
			case "giay_search":
				include_once "controllers/giay.php";
				$ctr = new GiayController();
				$id = $_GET['id'];
				$ctr->getSearch($id);
				break;
			


			// Thanh toán
			
			case "hoadon":
				include_once "controllers/hoadon.php";
				$ctr = new HoaDonController();
				$ctr->getDanhSach();
				break;
				
			case "hoadon_them":
				include_once "controllers/hoadon.php";
				$ctr = new HoaDonController();
				$ctr->getThem();
				break;
			case "hoadon_them_xuly":
				include_once "controllers/hoadon.php";
				$ctr = new HoaDonController();
				$request = array(
					'DiaChiGiaoHang' => $_POST['DiaChiGiaoHang'],
					'DienThoai' => $_POST['DienThoai']
				);
				$ctr->postThem($request);
				break;
			case "hoadon_sua":
				include_once "controllers/hoadon.php";
				$ctr = new HoaDonController();
				$id = $_GET['id'];
				$ctr->getSua($id);
				break;
			case "hoadon_sua_xuly":
				include_once "controllers/hoadon.php";
				$ctr = new HoaDonController();
				$request = array(
					'ID' => $_POST['ID'],
					'TinhTrang' => $_POST['TinhTrang']);
				$ctr->postSua($request);
				break;	
			case "hoadon_xoa":
				include_once "controllers/hoadon.php";
				$ctr = new HoaDonController();
				$id = $_GET['id'];
				$ctr->getXoa($id);
				break;
		
			// Lịch sử mua hàng
			case "lichsumuahang":
				include_once "controllers/hoadon.php";
				$ctr = new HoaDonController();
				$ctr->getLichSuMuaHang();
				break;
			
			// Giỏ hàng
			case "giohang":
				include_once "controllers/giohang.php";
				$ctr = new GioHangController();
				$ctr->getDanhSach();
				break;
			case "giohang_them":
				include_once "controllers/giohang.php";
				$ctr = new GioHangController();
				$id = $_GET['id'];
				$ctr->getThem($id);
				break;
			case "giohang_capnhat":
				include_once "controllers/giohang.php";
				$ctr = new GioHangController();
				$request = array(
					'SoLuongTrongGio' => $_POST['SoLuongTrongGio']
				);
				$ctr->postSua($request);
				break;
			case "giohang_xoa":
				include_once "controllers/giohang.php";
				$ctr = new GioHangController();
				$id = $_GET['id'];
				$ctr->getXoa($id);
				break;
			case "giohang_capnhat_giam":
				include_once "controllers/giohang.php";
				$ctr = new GioHangController();
				$id = $_GET['id'];
				$ctr->getCapNhatGiam($id);
				break;
			case "giohang_capnhat_tang":
				include_once "controllers/giohang.php";
				$ctr = new GioHangController();
				$id = $_GET['id'];
				$ctr->getCapNhatTang($id);
				break;
			
			default:
				$error_message = "404 - Không tìm thấy trang.";
				include_once "views/layouts/error.php";
				break;
		}
	}
	else
	{
		include_once "controllers/giay.php";
		$ctr = new GiayController();
		$ctr->getDanhSachHome();
	}
?>