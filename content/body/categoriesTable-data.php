<?php 
include("db/db.php");
$SQL_str_danhsachsp="select * from danhmuc";
$danhmuc=$db->prepare( $SQL_str_danhsachsp);
$danhmuc->execute();
$dsdanhmuc_rowsdata=$danhmuc->fetchAll();
?>