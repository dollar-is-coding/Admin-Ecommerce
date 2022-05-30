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
    <title>Accounts - Product Admin Template</title>
  </head>

  <body id="reportsPage"> 
  <?php
    $level='';
    $isIndex=false;
    $isLogin=false;
    $isProducts=false;
    $isAccounts=true;
    $isEditProduct=false;
    $isAddProduct=false;
    include 'layout.php';
    ?>
  </body>
</html>
