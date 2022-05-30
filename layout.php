<?php 
$level='';
if($isIndex==true)
include content_path.'indexContainer.php';

if($isLogin==true)
include content_path.'loginContainer.php';

if($isProducts==true)
include content_path.'productsContainer.php';

if($isAccounts==true)
include content_path.'accountsContainer.php';

if($isEditProduct==true)
include content_path.'editProductsContainer.php';

if($isAddProduct==true)
include content_path.'addProductsContainer.php';
?>