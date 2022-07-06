<?php 
include '../../../db/db.php';
$user=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$strSQL="UPDATE taikhoan set password=:password, email=:email, sodienthoai=:sodienthoai where tentaikhoan=:tentaikhoan";
$capnhat=$db->prepare($strSQL);
$capnhat->bindValue(':password',$password,PDO::PARAM_STR);
$capnhat->bindValue(':email',$email,PDO::PARAM_STR);
$capnhat->bindValue(':sodienthoai',$phone,PDO::PARAM_STR);
$capnhat->bindValue(':tentaikhoan',$user,PDO::PARAM_STR);
$capnhat->execute();
?>