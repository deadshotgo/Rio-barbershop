<?php
session_start();
include '../layouts/header.php';
include '../controller/EmployeeController/edit.php';
?>
<div class="content-wrapper">
    <div class="col-sm-7">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">General</h3>
            </div>
            <form method="post" action="../controller/EmployeeController/edit2.php" enctype="multipart/form-data">
                <div class="card-body">
                    <?php foreach ($user_data as $row){ ?>
                    <div class="form-group">
                        <label  for="inputName">Імя</label>
                        <input name="name" value="<?= $row['name']?>" type="text" id="inputName" class="form-control">
                        <input name="id" value="<?= $row['id']?>" type="text" hidden>
                    </div>


                    <div class="form-group">
                        <label for="inputClientCompany">Стаж роботи</label>
                        <input name="time_work" value="<?= $row['experience']?>" type="text" id="inputClientCompany" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">Короткі відомості</label>
                        <textarea name="text" id="inputDescription" class="form-control" rows="4"><?= $row['text']?></textarea>

                    </div>
                </div>
                <div class="form-group">
                    <label for="feature_image">Виберіть світлину(обовязково)</label>
                    <input  class="form-control" type="file"  name="full_avatar"
                           value="<?= $row['certificate']?>">

                </div>
                <div class="form-group">
                    <label for="feature_image">Виберіть сертефікат(обовязково)</label>

                    <input class="form-control" type="file"  name="full_se"
                           value="<?= $row['avatar']?>">

                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-danger">Зберегти</button>
                </div>
                <?php }?>
            </form>

            <!-- /.card-body -->
        </div>
    </div>
</div>
</div>
<?php
include '../layouts/footer.php';
?>



