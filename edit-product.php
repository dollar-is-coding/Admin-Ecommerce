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
    <title>Edit Product - Dashboard Admin Template</title>
  </head>

  <body>
    <!-- productsHeader -->
    <!-- editProductBody -->
    <!-- footer -->
    <!-- editProductScript -->
    <?php
    include content_path.'productsHeader.php'; 
    include content_path.'editProductsBody.php'; 
    include content_path.'footer.php'; 
    include content_path.script_path.'editProductsScript.php'; 
    ?>
  </body>
</html>
