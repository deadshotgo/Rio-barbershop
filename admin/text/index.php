<?php
session_start();
include '../layouts/header.php';
include '../controller/TextController/index.php';
?>
    <div class="content-wrapper">
<div class="col-md-6">

    <div class="card card-primary">
        <?php
        if (@$_SESSION['edit']) {
            echo ' <div class="alert alert-primary" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <h4><i class="icon fa fa-check"></i>Статтю збереженно</h4>
                    </div>';
        }
        unset($_SESSION['edit']);
        ?>
        <div class="card-header">
            <h3 class="card-title">General</h3>


        </div>
        <div class="card-body">
            <form method="post" action="../controller/TextController/edit.php">
                <?php foreach ($user_data as $row){?>
            <div class="form-group">
                <label for="inputName">Заголовок</label>
                <input value="<?= $row['title'];?>" name="title" type="text" id="inputName" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputDescription">Підзаголовок</label>
                <input value="<?= $row['pid_title'];?>" name="pid_title" type="text" id="inputName" class="form-control">
            </div>

            <div class="form-group">
                <label for="inputClientCompany">Текст</label>
                <textarea name="text" id="inputDescription" class="form-control" rows="4"><?php echo $row['text'];?></textarea>
            </div>
            <div class="form-group">
                    <label for="inputProjectLeader">Пункт 1</label>
                <input value="<?= $row['num1'];?>" name="num1" type="text" id="inputProjectLeader" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputProjectLeader">Пункт 2</label>
                <input value="<?= $row['num2'];?>" name="num2" type="text" id="inputProjectLeader" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputProjectLeader">Пункт 3</label>
                <input value="<?= $row['num3'];?>" name="num3" type="text" id="inputProjectLeader" class="form-control">
            </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-danger">Зберегти</button>
                </div>
                <?php }?>
            </form>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
    </div>
<?php
include '../layouts/footer.php';
?>