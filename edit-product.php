<?php include 'config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta -->
    <!-- productsLink -->
    <?php 
    include content_path.head_path.'meta.php'; 
    include content_path.head_path.'productsLink.php'; 
    ?>
    <title>Edit Product - Dashboard Admin Template</title>
  </head>

  <body>
  <?php
    $level='';
    $isIndex=false;
    $isLogin=false;
    $isProducts=false;
    $isAccounts=false;
    $isEditProduct=true;
    $isAddProduct=false;
    include 'layout.php';
    ?>
  </body>
</html>
