<?php
session_start();
include '../layouts/header.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Добавити світлину</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->



            <?php
            if (@$_SESSION['message']) {
                echo ' <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Картинку збережено</h4>
                    </div>';
            }
            unset($_SESSION['message']);
            ?>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="card card-primary col-sm-6 ">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/admin/controller/gallery.php" method="post" role="form" enctype="multipart/form-data">

                        <div class="card-body">


                            <div class="form-group">
                                <label for="feature_image">Виберіть світлину</label>
                                <img style="Display:block; width:250px;" src="" alt="" class="img-uploaded">
                                <input class="form-control" type="file"  name="full_scr"
                                       value="">

                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-danger">Додати</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php
include '../layouts/footer.php';
?>
