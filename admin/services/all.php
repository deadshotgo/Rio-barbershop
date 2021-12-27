<?php
session_start();
include '../layouts/header.php';
include '../controller/ServicesController/all.php';
?>

    <div class="content-wrapper">

        <div class="col-12">
            <?php
            if (@$_SESSION['delete']) {
                echo ' <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Статтю видалено</h4>
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
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>

                    <div class="card-tools">

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Назва</th>
                            <th>Час/хв</th>
                            <th>Ціна/грн</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($user_data as $row) { ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['time'] ?> хв</td>
                                <td><span class="tag tag-success">від <?php echo $row['price'] ?> грн</span></td>
                                <td style="display: flex; text-align: end">
                                    <form style="margin-right: 3px" method="post" action="../controller/ServicesController/del.php">
                                        <input name="id" value="<?php echo $row['id'] ?>" hidden>
                                        <button class="btn btn-danger">Удалить</button>
                                    </form>
                                    <form method="post" action="edit.php">
                                        <input name="id" value="<?php echo $row['id'] ?>" hidden>
                                        <button class="btn btn-primary">Редактувати</button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
<?php
include '../layouts/footer.php';
?>