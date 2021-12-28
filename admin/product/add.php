<?php
include '../layouts/header.php';
include '../controller/ProductController/connect.php';
?>
<div class="content-wrapper">
<div class="card card-primary col-sm-6">
              <div class="card-header">
                <h3 class="card-title">Додати продукт</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="../controller/ProductController/add.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ціна</label>
                    <input required name="price" class="form-control" id="exampleInputEmail1" placeholder="Введіть ціну">
                  </div>
                    <select required class="custom-select" name="category">
                        <?php foreach ($category_arr as $row) { ?>
                        <option value="<?= $row['id']?>"><?= $row['title']?></option>
                        <?php }?>
                    </select>
                    <div class="form-group ">
                        <label for="feature_image">Виберіть світлину</label>
                        <img style="Display:block; width:250px;" src="" alt="" class="img-uploaded">
                        <input required class="form-control m-1" type="file"  name="full_avatar"
                               value="">

                    </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Додати</button>
                </div>
              </form>
            </div>

</div>
<?php
include '../layouts/footer.php';
?>