<?php
session_start();
include '../layouts/header.php';
include '../controller/CategoryController/all.php';

?>
    <div class="content-wrapper"> <?php
        if (@$_SESSION['delete']) {
            echo ' <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Категорію видалено</h4>
                    </div>';
        }
        unset($_SESSION['delete']);
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
        <?php
        if (@$_SESSION['edit']) {
            echo ' <div class="alert alert-primary" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Збережено</h4>
                    </div>';
        }
        unset($_SESSION['edit']);
        ?>

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Всі категорії</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->


            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card col-sm-9">


                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>

                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th style="width: 30%">
                                    Назва
                                </th>
                                <th style="width: 30%">
                                    Кількість записів
                                </th>
                            </tr>
                            </thead>

                            <?php foreach ($category_arr as $row) {?>

                            <tbody>
                            <tr>
                                <td>
                                    <?= $row['id'] ?>
                                </td>

                                <td>
                                    <?= $row['title'] ?>
                                    <br>
                                    <small>
                                        <?= $row['time'] ?>
                                    </small>
                                </td>
                                <td>
                                    <?php
                                    $idd = $row['id'];
                                    $countRes = mysqli_query($connect, "SELECT * FROM `category` INNER JOIN `product` ON `category`.`id` = `product`.`id_category` WHERE category.id = '$idd';");
                                    $count = mysqli_num_rows($countRes);

                                    $z = 0;
                                    for($z; $z < $count; $z++) {
                                    }
                                    echo $z;
                                    ?>
                                </td>


                                <td class="project-actions text-right">

                                    <form style="display: inline-block" action="edit.php" method="post">

                                        <button type="submit" class="btn btn-primary btn-sm primary-btn">
                                            <i class="fa fa-trash"></i>
                                            Редагувати
                                        </button>
                                        <input name="id" value="<?= $row['id']?>" hidden>
                                    </form>

                                    <form style="display: inline-block" action="../controller/CategoryController/del.php" method="post">

                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="fa fa-trash"></i>
                                           Видалити
                                            <input name="id" value="<?= $row['id']?>" hidden>
                                        </button>
                                    </form>

                                </td>

                            </tr>

                            </tbody>
                            <?php }?>
                        </table>
                    </div>
                    <!-- /.card-body -->

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?php
include '../layouts/footer.php';
?>