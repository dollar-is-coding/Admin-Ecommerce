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
    <title>Product Admin - Dashboard HTML Template</title>
</head>

<body id="reportsPage">
    <?php
    $level='';
    $isIndex=true;
    $isLogin=false;
    $isProducts=false;
    $isAccounts=false;
    $isEditProduct=false;
    $isAddProduct=false;
    include 'layout.php';
    ?>
</body>

</html>