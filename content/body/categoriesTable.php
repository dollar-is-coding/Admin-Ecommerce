<?php include 'categoriesTable-data.php'; ?>
<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                  <?php foreach ($dsdanhmuc_rowsdata as $data) {
                  ?>
                  <tr>
                    <td class="tm-product-name"><?php echo $data['tenDanhMuc']; ?></td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <?php
                  }?>
                </tbody>
              </table>
            </div>

            <!-- categoriesFunction -->
            <?php include 'categoriesTable/categoriesFunction.php'; ?>
            
          </div>
        </div>