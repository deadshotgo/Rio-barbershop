<?php
session_start();
include '../layouts/header.php';
?>
<div class="content-wrapper">
    <div class="col-sm-7">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">General</h3>
            </div>
            <form method="post" action="../controller/EmployeeController/add.php" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label  for="inputName">Імя</label>
                        <input name="name" type="text" id="inputName" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="inputClientCompany">Стаж роботи</label>
                        <input name="time_work" type="text" id="inputClientCompany" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">Короткі відомості</label>
                        <textarea name="text" id="inputDescription" class="form-control" rows="4"></textarea>

                    </div>
                </div>
                <div class="form-group">
                    <label for="feature_image">Виберіть світлину</label>
                      <input class="form-control" type="file"  name="full_avatar"
                           value="">

                </div>
                <div class="form-group">
                    <label for="feature_image">Виберіть сертефікат</label>

                    <input class="form-control" type="file"  name="full_se"
                           value="">

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


