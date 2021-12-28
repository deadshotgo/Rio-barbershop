<?php
session_start();
include '../layouts/header.php';
include '../controller/InformationController/all.php'
?>

<div class="content-wrapper">
    <?php
    if (@$_SESSION['edit']) {
        echo ' <div class="alert alert-primary" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Збереженно</h4>
                    </div>';
    }
    unset($_SESSION['edit']);
    ?>
    <div class="col-md-6">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Інформація</h3>
            </div>
            <div class="card-body">
                <!-- Date dd/mm/yyyy -->
                <form method="post" action="../controller/InformationController/edit.php">
                <div class="form-group">
                    <label>Графік роботи:</label>
<?php foreach ($user_data as $row){ ?>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input name="Graf" type="text" value="<?= $row['schedule'] ?>" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date mm/dd/yyyy -->
                <div class="form-group">
                    <label>Адреса:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                        </div>
                        <input name="addres" type="text"  value="<?= $row['addres']; ?>" class="form-control" data-inputmask-alias="datetime"  data-mask="" im-insert="false">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- phone mask -->
                <div class="form-group">
                    <label>Телефон:</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input name="phone" type="text" value="<?= $row['phone']; ?>" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Додати</button>
                    </div>
                <!-- phone mask -->

                <!-- /.form group -->

                <!-- IP mask -->
<?php }?>
                <!-- /.form group -->
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->

    </div>


</div>









<?php include '../layouts/footer.php';?>