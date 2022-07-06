<?php 
include '../../db/db.php';
    $idsanpham=$_POST['idpd'];
$tensanpham=$_POST['name'];
$mota=$_POST['mota'];
$giaban=$_POST['price'];
$danhmuc=$_POST['danhmuc'];
$ngay=$_POST['expire_date'];
$soluong=$_POST['stock'];
$hinhanh=$_FILES['hinhanh']['name'];
$sql_add="insert into sanpham(idSanPham,tenSanPham,soLuong,giaBan,ngayNhap,hinhAnh,trangThai,maDanhMuc,moTa) values (:idSanPham,:tenSanPham,:soLuong,:giaBan,:ngayNhap,:hinhAnh,1,:maDanhMuc,:moTa)";
$insert=$db->prepare($sql_add);
$insert->bindValue(':idSanPham',$idsanpham,PDO::PARAM_STR);
$insert->bindValue(':tenSanPham',$tensanpham,PDO::PARAM_STR);
$insert->bindValue(':soLuong',$soluong,PDO::PARAM_INT);
$insert->bindValue(':giaBan',$giaban,PDO::PARAM_INT);
$insert->bindValue(':ngayNhap',$ngay,PDO::PARAM_STR);
$insert->bindValue(':hinhAnh',$hinhanh,PDO::PARAM_STR);
move_uploaded_file($_FILES["hinhanh"]["tmp_name"],"../../img/".$_FILES["hinhanh"]["name"]);
$insert->bindValue(':maDanhMuc',$danhmuc,PDO::PARAM_STR);
$insert->bindValue(':moTa',$mota,PDO::PARAM_STR);
$insert->execute();
?>