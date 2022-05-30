<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta -->
    <!-- productsLink -->
    <?php 
    include content_path.head_path.'meta.php'; 
    include content_path.head_path.'productsLink.php'; 
    ?>
    <title>Add Product - Dashboard HTML Template</title>
  </head>

  <body>
  <?php
    $level='';
    $isIndex=false;
    $isLogin=false;
    $isProducts=false;
    $isAccounts=false;
    $isEditProduct=false;
    $isAddProduct=true;
    include 'layout.php';
    ?>
  </body>
</html>
