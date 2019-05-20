
<!DOCTYPE html>
<html lang="en"> 
    <head>

        <!-- Basic Page Needs
      ================================================== -->
        <meta charset="utf-8">
        <title>home page</title>
        <meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
        <meta name="author" content="www.zerotheme.com">

        <!-- Mobile Specific Metas
      ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
      ================================================== -->
        <link rel="stylesheet" href="css/zerogrid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slide.css">
        <link rel="stylesheet" href="css/menu.css">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <style>
            body{background-image: url("images/front.jpg");
            }</style>
    </head>
    <body>
        <div class="wrap-body">
            <!--///////////////////////////////////////Top-->

            <div class="site-title">
                <div class="zerogrid">
                    <div class="row">
                        <h2 class="t-center">Moto Fine Handler</h2>
                    </div>
                </div>
            </div>
            <!--//////////////////////////////////////Menu-->
            <a href="#" class="nav-toggle">Toggle Navigation</a>
            <nav class="cmn-tile-nav">
                <ul class="clearfix">

                    <li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                    <li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>
                    <li><a href="index_1.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">Home</a></li>
                    <li><a href="users.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">Sign Up</a></li>
                    <li><a href="login.php"style="background-color:whitesmoke; width: 200px; height: 125px; color: black">LogIn</a></li>
                    <li><a href="about.php"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black">About Us</a></li>
                    <li><a href="#"style="background-color:whitesmoke; width: 200px; height: 125px; color: black"></a></li>
                    <li><a href="#"style="background-color:whitesmoke;width: 200px; height: 125px;  color: black"></a></li>

                </ul>
            </nav>

            <div class="zerogrid">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider4">
                        <li>
                            <img src="images/i.jpg" alt="">

                        </li>
                        <li>
                            <img src="images/banner2.jpg" alt="">

                        </li>
                        <li>
                            <img src="images/fined.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>

            <!--////////////////////////////////////Container-->
            <!-- js -->
            <script src="js/classie.js"></script>
            <script src="js/demo.js"></script>

            <script src="js/jquery-1.11.3.min.js"></script>
            <script src="js/responsiveslides.min.js"></script>
            <script>
                $(function () {
                    // Slideshow 4
                    $("#slider4").responsiveSlides({
                        auto: true,
                        pager: false,
                        nav: false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });
                });
            </script>
        </div>
    </body></html>