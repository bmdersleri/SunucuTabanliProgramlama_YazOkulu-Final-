
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ziyaretci Yönetim Sistemi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->



    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
     <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" type="text/css" href="assets/js/progress-bar/number-pb.css">



    <style type="text/css">
    canvas#canvas4 {
        position: relative;
        top: 20px;
    }
    </style>




    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body>
    <!-- Navbar -->
<?php

include('../topbar.php');

?>

    <!-- /END OF TOP NAVBAR -->

    <!-- SIDE MENU -->

   <?php include('../sidebar.php');


?>
    <!-- END OF SIDE MENU -->



    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-6" style="display: none ">
                        <div class="chart-wrap" >
                            <div class="chart-dash">
                                
                                <div id="placeholder" style="width:100%;height:200px;"></div>
                            </div>
                        </div>  
                    </div>

                <!-- center page-->
                <?php include('checkout.php');?>                         
        </div>
    </div>
             
                <!-- /END OF CONTENT -->



                <!-- FOOTER -->
                <div class="footer-space"></div>
                <div id="footer">
                    <div class="devider-footer-left"></div>
                    <div class="time">
                        <p id="spanDate"></p>
                        <p id="clock"></p>
                    </div>
                    <div class="copyright">Sevgiyle Yap
                        <span class="entypo-heart"></span>2014 <a href="http://gamatechno.com">Gülümse</a> Tüm Hakları Saklıdır</div>
                    <div class="devider-footer"></div>


                </div>
                <!-- / END OF FOOTER -->


            </div>
        </div>
    </div>
    <!--  END OF PAPER WRAP -->

    <!-- RIGHT SLIDER CONTENT -->
    
    <!-- END OF RIGHT SLIDER CONTENT-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
    <script src="assets/js/progress-bar/src/jquery.velocity.min.js"></script>
    <script src="assets/js/progress-bar/number-pb.js"></script>
    <script src="assets/js/progress-bar/progress-app.js"></script>



    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="assets/js/preloader.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>




    <!-- GAGE -->


    
    <script src="assets/js/jhere-custom.js"></script>

    <script>
    var gauge4 = new Gauge("canvas4", {
        'mode': 'needle',
        'range': {
            'min': 0,
            'max': 90
        }
    });
    gauge4.draw(Math.floor(Math.random() * 90));
    var run = setInterval(function() {
        gauge4.draw(Math.floor(Math.random() * 90));
    }, 3500);
    </script>


    <script type="text/javascript">
    /* Javascript
     *
     * See http://jhere.net/docs.html for full documentation
     */
   
    </script>
    <script type="text/javascript">
    var output, started, duration, desired;

    // Constants
    duration = 5000;
    desired = '50';

    // Initial setup
    output = $('#speed');
    started = new Date().getTime();

    // Animate!
    animationTimer = setInterval(function() {
        // If the value is what we want, stop animating
        // or if the duration has been exceeded, stop animating
        if (output.text().trim() === desired || new Date().getTime() - started > duration) {
            console.log('animating');
            // Generate a random string to use for the next animation step
            output.text('' + Math.floor(Math.random() * 60)

            );

        } else {
            console.log('animating');
            // Generate a random string to use for the next animation step
            output.text('' + Math.floor(Math.random() * 120)

            );
        }
    }, 5000);
    </script>
    <script type="text/javascript">
    $('#getting-started').countdown('2015/01/01', function(event) {
        $(this).html(event.strftime(

            '<span>%M</span>' + '<span class="start-min">:</span>' + '<span class="start-min">%S</span>'));
    });
    </script>



</body>

</html>
