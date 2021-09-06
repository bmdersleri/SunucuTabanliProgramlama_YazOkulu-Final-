<?php require"include/database.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Paneli</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/css/skin-green.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">

</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>P</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b> Paneli</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="assets/img/teamwork (2).png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Emine ORHAN</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Aktif</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menüler</li>
                <li class="active">
                     <a href="anasayfa.php">
                        <i class="fa fa-th"></i> <span>Dashboard</span>
					</a>
                </li>
				<li>
                <li>
                     <a href="anasayfa.php">
                        <i class="fa fa-th"></i> <span>Dashboard</span>
					</a>
                </li>
				<li>
                     <a href="calismalarim.php">
                        <i class="fa fa-th"></i> <span>Çalışmalarım</span>
					</a>
                </li>
			</ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
