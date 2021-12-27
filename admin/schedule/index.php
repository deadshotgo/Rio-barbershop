<?php
session_start();
include '../layouts/header.php';
include '../controller/Text/index.php';
?>
    <div class="content-wrapper">
<div class="col-md-6">

    <div class="card card-primary">
        <iframe class="schedule-menu" src="https://web.torrow.net/app/tabs/tab-context-list/timetable;disabled=true;id=aae6703ed4122efa7c5b7dca275a45d1c;timetableType=Schedule/case-list;type=Schedule;id=aae6703ed4122efa7c5b7dca275a45d1c" frameborder="0"></iframe>
    </div>
    <!-- /.card -->
</div>
    </div>
<?php
include '../layouts/footer.php';
?>