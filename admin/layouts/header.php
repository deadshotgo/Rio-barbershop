<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <!-- include libraries(jQuery, bootstrap) -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"/>
    <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- include summernote css/js-->
    <link href="summernote-bs5.css" rel="stylesheet">
    <script src="summernote-bs5.js"></script>

    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.css">
    <link href="/admin/dist/css/colorbox.css" rel="stylesheet">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="../schedule/schedule.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->


        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="/" class="d-block">Admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/admin/index.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Головна
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview ">
                        <a href="" class="nav-link ">
                            <i class="fas fa-images"></i>
                            <p>
                                Галерея
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="/admin/gallery/all.php" class="nav-link">
                                    <i class="fas fa-icons"></i>
                                    <p>Всі світлини </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/gallery/add.php" class="nav-link ">
                                    <i class="nav-icon fas fa-plus"></i>
                                    <p>Додати</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview ">
                        <a href="" class="nav-link ">
                            <i class="fas fa-concierge-bell"></i>
                            <p>
                              Послуги
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="/admin/services/all.php" class="nav-link">
                                    <i class="fas fa-concierge-bell"></i>
                                    <p>Всі послуги </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/services/add.php" class="nav-link ">
                                    <i class="nav-icon fas fa-plus"></i>
                                    <p>Додати</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview ">
                        <a href="" class="nav-link ">
                            <i class="fas fa-address-card"></i>
                            <p>
                                Про нас
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="/admin/text/index.php" class="nav-link">
                                    <i class="fas fa-edit"></i>
                                    <p>Редактувати текст</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview ">
                        <a href="" class="nav-link ">
                            <i class="fas fa-user-friends"></i>
                            <p>
                                Співробітники
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="/admin/employee/all.php" class="nav-link">
                                    <i class="fas fa-users"></i>
                                    <p>Всі співробітники</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/employee/add.php" class="nav-link ">
                                    <i class="nav-icon fas fa-plus"></i>
                                    <p>Додати</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview ">
                        <a href="/admin/schedule/index.php" class="nav-link ">
                            <i class="far fa-calendar-alt"></i>
                            <p>
                                Записи
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>



                </ul>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->


