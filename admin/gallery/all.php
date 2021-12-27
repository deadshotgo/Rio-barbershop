<?php
session_start();
include '../layouts/header.php';
include '../controller/GalleryController/all.php'

?>
    <section class="content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <?php
                if (@$_SESSION['delete']) {
                    echo ' <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Картинку видалено</h4>
                    </div>';
                }
                unset($_SESSION['delete']);
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Ribbons</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">


                                    <?php foreach ($user_data as $row) { ?>

                                        <div class="col-sm-4">
                                            <form method="post" action="../controller/GalleryController/del.php">
                                            <div class="position-relative" style="min-height: 180px;  margin-bottom: 30px;">
                                                <img src="/admin/<?php echo $row['scr']; ?>" style="height: 400px; width: 90%" alt="" class="img-fluid">
                                                <div class="ribbon-wrapper ribbon-xl">

                                                </div>

                                                <div style="width: 90%" class="card-footer text-center">
                                                    <input name="id" value="<?php echo  $row['id'];?>" hidden>
                                                    <button type="submit" class="btn btn-danger">Видалити</button>

                                                </div>

                                            </div>
                                    </form>
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