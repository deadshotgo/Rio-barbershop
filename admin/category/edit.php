<?php
session_start();
include '../layouts/header.php';
include '../controller/CategoryController/edit.php';
?>
<div class="content-wrapper">
    <div class="card card-primary col-sm-6">
        <div class="card-header">
            <h3 class="card-title">Категорія</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="../controller/CategoryController/edit2.php">
            <div class="card-body">
                <?php foreach ($user_data as $row) { ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Назва категорії</label>
                    <input  name="id" value="<?= $row['id'] ?>" hidden>

                    <input  name="title" value="<?= $row['title'] ?>" class="form-control" id="exampleInputEmail1" placeholder="введіть назву категорії" >
                </div>
<?php }?>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Зберегти</button>
            </div>
        </form>
    </div>
</div>
<?php
include '../layouts/footer.php';
?>
