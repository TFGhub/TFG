<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="The Future Generation"/>
    <meta name="keywords" content="The Future Generation"/>
    <meta name="author" content="TheFutureGeneration"/>

    <!-- Page Title -->
    <title>Reports</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/logo.jpg" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link href="css/menuzord-megamenu.css" rel="stylesheet"/>
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-border-bottom.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-color-set4.css" rel="stylesheet" type="text/css">

    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <!--<div id="preloader">
      <div id="spinner">
        <img alt="" src="../images/preloaders/5.gif">
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>-->

    <!-- Header -->
    <?php include "includes/header.php" ?>

    <!-- Start main-content -->
    <div class="main-content">

        <?php

        include "php/connect.php";

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $select = mysqli_query($conn, "SELECT * FROM `reports` WHERE `id` = $id");

            if ($select) {
                while ($row = mysqli_fetch_assoc($select)) {

                    $title = $row['title'];
                    $intro = $row['introduction'];
                    $obj = $row['objective'];
                    $impact = $row['impact'];
                    $date = $row['date'];


                    ?>

                    <!-- Section: inner-header -->
                    <section class="inner-header divider parallax layer-overlay overlay-white-8"
                             data-bg-img="images/bg/bg4.jpg">

                        <section>
                            <div class="container ">
                                <div class="row bg-white pr-40 pl-40 pt-20 pb-20">
                                    <div class="col-sm-12 col-md-3">
                                        <img src="images/blog/w1.png" alt="Report">
                                    </div>
                                    <div class="col-sm-12 col-md-9 wow slideInUp animated">
                                        <div class="icon-box features-icon-box ">

                                            <h4 class="text-uppercase font-weight-600 mt-0 text-theme-colored"
                                                id="title_report">
                                                <?php echo $title; ?></h4>
                                            <span class="text-muted"><?php echo $date; ?></span>

                                            <div class="diamond-line-left-theme-colored2"></div>

                                            <?php echo $intro; ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="row bg-white pr-40 pl-40">

                                    <div class="col-sm-12 col-md-12 wow slideInUp animated">
                                        <div class="icon-box features-icon-box">
                                            <h4 class="font-weight-600 mt-0 text-theme-colored">Objectives of the
                                                Visit</h4>

                                            <?php echo $obj; ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="row bg-white pr-40 pl-40">

                                    <div class="col-sm-12 col-md-12 wow slideInUp animated">
                                        <div class="icon-box features-icon-box">
                                            <h4 class="font-weight-600 mt-0 text-theme-colored">Impact of the Visit</h4>

                                            <?php echo $impact; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                    <?php
                }
            }

        }
        ?>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <?php include "includes/footer.php" ?>

    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

</html>