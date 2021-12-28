<?php
session_start();
include '../layouts/header.php';
include '../controller/ProductController/all.php'

?>
    <section class="content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <?php
                if (@$_SESSION['delete']) {
                    echo ' <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Видалено</h4>
                    </div>';
                }
                unset($_SESSION['delete']);
                ?>
                <?php
                if (@$_SESSION['edit']) {
                    echo ' <div class="alert alert-primary" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Збережено</h4>
                    </div>';
                }
                unset($_SESSION['edit']);
                ?>
                <?php
                if (@$_SESSION['add']) {
                    echo ' <div class="alert alert-primary" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Збережено</h4>
                    </div>';
                }
                unset($_SESSION['add']);
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Продукти</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">


                                    <?php foreach ($user_data as $row) { ?>

                                        <div class="col-sm-4">
                                                <div class="position-relative" style="min-height: 180px;  margin-bottom: 20px;">
                                                    <img src="/admin/controller/<?= $row['scr'] ?>" style="height: 300px; width: 90%" alt="" class="img-fluid">


                                                    <div style="width: 90%" class=" card-footer text-center">
                                                                <h3><?= $row['price'] ?> грн</h3>
                                                    </div>
                                                    <div style="width: 90%; display: flex;" class="card-footer text-center" >
                                                        <form style="margin-right: 4%" method="post" action="../controller/ProductController/del.php">
                                                        <input name="id" value="<?php echo  $row['id'];?>" hidden>
                                                        <button type="submit" class="btn btn-danger">Видалити</button>
                                                        </form>
                                                        <form style="margin-left : 4%" method="post" action="edit.php">
                                                            <input name="id" value="<?php echo  $row['id'];?>" hidden>
                                                            <button type="submit" class="btn btn-primary">Редагувати</button>
                                                        </form>
                                                    </div>

                                                </div>

                                        </div>

                                    <?php } ?>


                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

<?php
include '../layouts/footer.php';
?>