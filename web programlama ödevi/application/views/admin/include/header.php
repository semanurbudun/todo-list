<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Yapılacaklar Listesi | <?php if(isset($head)){echo $head; } ?> </title>

    <!-- Pignose Calender -->
    <link href="<?php echo base_url('assets/back/'); ?>./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back/'); ?>./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/'); ?>./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="<?php echo base_url('assets/back/'); ?>css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/back/');?>dropzone/dropzone.css">
    <script src="<?php echo base_url('assets/back/');?>dropzone/dropzone.js"></script>
    <link href="<?php echo base_url('assets/back/'); ?>plugins/summernote/dist/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/back/'); ?>plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">    
     <link href="<?php echo base_url('assets/back/'); ?>plugins/nestable/css/nestable.css" rel="stylesheet">

</head>
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<body>


    <div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="<?php echo base_url('admin'); ?>">
                        <b class="logo-abbr" style="color: white;">TB </b>
                        <span class="logo-compact"></span>
                        <span class="brand-title" style="color:white;">
                          Panel
                     </span>
                 </a>
             </div>
         </div>

         <div class="header">    
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
               




            </div>
        </div>
