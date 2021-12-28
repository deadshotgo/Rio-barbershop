
<?php
session_start();
include '../controller/EmployeeController/all.php';
include '../layouts/header.php'

?>
<div class="content-wrapper">
<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">
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
            if (@$_SESSION['message']) {
                echo ' <div class="alert alert-primary" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Збереженно</h4>
                    </div>';
            }
            unset($_SESSION['message']);
            ?>
            <?php
            if (@$_SESSION['edit']) {
                echo ' <div class="alert alert-primary" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Збереженно</h4>
                    </div>';
            }
            unset($_SESSION['edit']);
            ?>
<?php foreach ($user_data1 as $row){?>
            <div class="col-12 col-sm-12 col-md-4 d-flex align-items-stretch">
                <div class="card bg-light">
                    <div class="card-header text-muted border-bottom-0">
                        Працівник
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="lead"><b><?= $row['name'] ?></b></h2>
                                <p><?= $row['experience']?></p>
                                <p class="text-muted text-sm"><b>Короткі відомості: </b> <?= $row['text'] ?> </p>

                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right" style="display: flex; text-align: end;";>
                            <form method="post" action="../controller/EmployeeController/del.php" style="margin-right: 10px;">
                                <input name="id" value="<?= $row['id']?>" hidden>
                              <button class="btn btn-danger">Видалити</button>
                            </form>
                            <form method="post" action="edit.php">
                                <input name="id" value="<?= $row['id']?>" hidden>
                               <button class="btn btn-primary">Редагувати</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php }?>
        </div>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer -->
</div>
</div>

<?php include '../layouts/footer.php'?>
