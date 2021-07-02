<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($title) ? $title : "Police Crime Diary"; ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo site_url(); ?>" class="nav-link">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item" title="Search">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Notifications Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" title="Open Full Screen" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo site_url(); ?>" class="brand-link">
                <img src="<?php echo base_url('assets/images/PoliceLogo.png'); ?>" alt=" Police Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">PCD</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url("assets/images/userimg.jpg"); ?>" class=" img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?php echo site_url('user-profile'); ?>"
                            class="d-block"><?php echo session()->get('Fname') . ' ' . session()->get('Lname') ?></a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo site_url(); ?>" class="nav-link dashboard">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <!-- forms -->
                        <li class="nav-item">
                            <a href="#" class="nav-link form">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Case Statements
                                    <i class="fas fa-angle-down right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('crime') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Record Crime</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('complaints') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Record Complaints </p>
                                    </a>
                                </li>
                            </ul>
                            <!-- records -->
                        <li class="nav-item">
                            <a href="#" class="nav-link form criminals">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Records
                                    <i class="fas fa-angle-down right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('criminals') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Defendants</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('complainer') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Complaints</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('cases') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cases</p>
                                    </a>
                                </li>
                            </ul>
                        <li class="nav-item">
                            <a href="<?php echo site_url('users'); ?>" class="nav-link users">
                                <i class="nav-icon fa fa-user"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('logout'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo isset($location) ? $location : "Dashboard"; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <?php echo isset($location) ? $location : "Dashboard"; ?>
                                </li>
                                <li class="breadcrumb-item active">
                                    <?php echo isset($subRoute) ? $subRoute : "Dashboard"; ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div><!-- Main content -->
            <section class="content">
                <div class="container-fluid">