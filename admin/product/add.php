<?php
include '../layouts/header.php';
include '../controller/ProductController/connect.php';
?>
<div class="content-wrapper">
<div class="card card-primary col-sm-6">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
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
                  <div class="form-group">
                    <label for="exampleInputFile">Виберіть картинку</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input required type="file" name="full_avatar" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Картинка</label>
                      </div>
                    </div>
                  </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

</div>
<?php
include '../layouts/footer.php';
?>