<?php
include '../layouts/header.php';
?>
<div class="content-wrapper">
<div class="card card-primary col-sm-6">
    <div class="card-header">
        <h3 class="card-title">Категорія</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="../controller/CategoryController/add.php">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Назва категорії</label>
                <input required  name="title" class="form-control" id="exampleInputEmail1" placeholder="введіть назву категорії" >
            </div>

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
