<?php include 'config.php'; ?>
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
    <!-- productsHeader -->
    <!-- addProductBody -->
    <!-- footer -->
    <!-- addProductScript -->
    <?php 
    include content_path.'productsHeader.php';
    include content_path.'addProductsBody.php';
    include content_path.'footer.php'; 
    include content_path.script_path.'addProductsScript.php'; 
    ?>
  </body>
</html>
