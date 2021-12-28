<?php
session_start();
include '../layouts/header.php';
?>
<div class="content-wrapper">
    <div class="col-sm-7">
        <?php
        if (@$_SESSION['add']) {
            echo ' <div class="alert alert-primary" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Картинку збереженно</h4>
                    </div>';
        }
        unset($_SESSION['add']);
        ?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">General</h3>
    </div>
    <form method="post" action="../controller/ServicesController/add.php">
    <div class="card-body">
        <div class="form-group">
            <label  for="inputName">Назва </label>
            <input required  name="title" type="text" id="inputName" class="form-control">
        </div>


        <div class="form-group">
            <label for="inputClientCompany">Час</label>
            <input required name="time" type="text" id="inputClientCompany" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputProjectLeader">Ціна</label>
            <input required name="price" type="text" id="inputProjectLeader" class="form-control">
        </div>
    </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-danger">Додати</button>
        </div>
    </form>

    <!-- /.card-body -->
</div>
</div>
</div>
</div>
<?php
include '../layouts/footer.php';
?>

