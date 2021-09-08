<?php 
include"../include/dbclass.php";
include"../include/project_class.php";

$db  = new db();
$pro = new project();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="assets/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link type="text/css" href="assets/plugins/form-select2/select2.css" rel="stylesheet">                        <!-- Select2 -->
<link type="text/css" href="assets/plugins/form-multiselect/css/multi-select.css" rel="stylesheet">           <!-- Multiselect -->
<link type="text/css" href="assets/plugins/form-fseditor/fseditor.css" rel="stylesheet">                      <!-- FullScreen Editor -->
<link type="text/css" href="assets/plugins/bootstrap-tokenfield/css/bootstrap-tokenfield.css" rel="stylesheet">   <!-- Tokenfield -->

<link type="text/css" href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet"> <!-- Touchspin -->

<link type="text/css" href="assets/plugins/iCheck/skins/minimal/_all.css" rel="stylesheet">                   <!-- Custom Checkboxes / iCheck -->
<link type="text/css" href="assets/plugins/iCheck/skins/flat/_all.css" rel="stylesheet">
<link type="text/css" href="assets/plugins/iCheck/skins/square/_all.css" rel="stylesheet">

<link type="text/css" href="assets/plugins/card/lib/css/card.css" rel="stylesheet"> 						 <!-- Card -->
<link type="text/css" href="assets/plugins/switchery/switchery.css" rel="stylesheet">                     <!-- Switchery -->

<link type="text/css" href="assets/plugins/gridforms/gridforms/gridforms.css" rel="stylesheet"> 



<link type="text/css" href="assets/css/custom.css" rel="stylesheet">

<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->

<script type="text/javascript" src="ckeditor/ckeditor.js"></script> 

    </head>