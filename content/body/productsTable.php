<?php include 'productsTable-data.php';
// var_dump($dssanpham_rowsdata);
?>
<div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">IN STOCK</th>
                    <th scope="col">EXPIRE DATE</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dssanpham_rowsdata as $data) { ?>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td><a href="edit-product.php?id=<?php echo $data["idSanPham"] ?>" style ="color:white"><?php echo $data['tenSanPham']; ?></a></td> 
                    <!-- class="tm-product-name" -->
                    <td><?php echo $data['giaBan']; ?></td>
                    <td><?php echo $data['soLuong']; ?></td>
                    <td><?php echo $data['ngayNhap']; ?></td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

            <!-- productsFunction -->
            <?php include 'productstable/productsFunction.php'; ?>

          </div>
        </div>