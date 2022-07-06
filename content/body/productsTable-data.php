<?php 
include("db/db.php");
$SQL_str_danhsachsp="select * from sanpham where trangthai=1";
$dssanpham=$db->prepare( $SQL_str_danhsachsp);
$dssanpham->execute();
$dssanpham_rowsdata=$dssanpham->fetchAll();
?>