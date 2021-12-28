<?php
include '../layouts/header.php';
include '../controller/ProductController/connect.php';
include '../controller/ProductController/edit.php';
?>
    <div class="content-wrapper">
        <div class="card card-primary col-sm-6">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="../controller/ProductController/edit2.php" enctype="multipart/form-data">
                <div class="card-body">
                    <?php foreach ($user_data as $row){ ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ціна</label>
                        <input name="id" value="<?= $row['id']?> " hidden>

                        <input required value="<?= $row['price']; ?>" name="price" class="form-control" id="exampleInputEmail1" placeholder="Введіть ціну">
                    </div>
                        Виберіть категорію(обовязково)
                    <select  required class="custom-select" name="category">
                        <?php foreach ($category_arr as $row) { ?>
                            <option value="<?= $row['id']?>"><?= $row['title']?></option>
                        <?php }?>
                    </select>
                    <div class="form-group">
                        <label for="exampleInputFile">Виберіть картинку(обовязково)</label>

                        <div class="input-group">
                            <div class="custom-file">

                                <input required class="form-control" type="file" name="full_d">
                            </div>

                        </div>
                    </div>
<?php }?>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>

    </div>
<?php
include '../layouts/footer.php';
?>