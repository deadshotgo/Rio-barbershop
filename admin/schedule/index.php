<?php
session_start();
include '../layouts/header.php';
include '../controller/Text/index.php';
?>
    <div class="content-wrapper">
<div class="col-md-6">

    <div class="card card-primary">
        <iframe class="schedule-menu" src="https://web.torrow.net/app/tabs/tab-personal/order-list;type=UserOrders" frameborder="0"></iframe>
    </div>
    <!-- /.card -->
</div>
    </div>
<?php
include '../layouts/footer.php';
?>