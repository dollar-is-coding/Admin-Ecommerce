<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta -->
    <!-- commonLink -->
    <?php 
    include content_path.head_path.'meta.php'; 
    include content_path.head_path.'commonLink.php'; 
    ?>
    <title>Login Page - Product Admin Template</title>
  </head>
  
  <body>
  <?php
    $level='';
    $isIndex=false;
    $isLogin=true;
    $isProducts=false;
    $isAccounts=false;
    $isEditProduct=false;
    $isAddProduct=false;
    include 'layout.php';
    ?>
  </body>
</html>
