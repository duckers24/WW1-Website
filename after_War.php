<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>After the War</title>

    <!-- Bootstrap Core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Include for the navigation bar -->
    <?php
    include 'navigation.php';
    ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>After the War</h1>
                <p class="lead">Please select a year to see the soldiers that lost their lives after the war</p>
                <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="year.php?year=1919">
                    <img class="img-responsive" src="graphics/after_War/1919_Format.jpg" alt="1919 Newspaper Heading">
                </a>
                <h3>
                    <a href="year.php?year=1919">1919</a>
                </h3>
                <p>Please click here to see all of the soliders that lost their lives during 1919.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="year.php?year=1920">
                    <img class="img-responsive" src="graphics/after_War/1920_Format.jpg" alt="1920 Newspaper Heading">
                </a>
                <h3>
                    <a href="year.php?year=1920">1920</a>
                </h3>
                <p>Please click here to see all of the soldiers that lost their lives during 1920.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="year.php?year=1928">
                    <img class="img-responsive" src="graphics/after_War/1928_Format.jpg" alt="1928 Newspaper Heading">
                </a>
                <h3>
                    <a href="year.php?year=1928">1928</a>
                </h3>
                <p>Please click here to see all of the soldiers that lost their lives during 1928.</p>
            </div>
        </div>
        <!-- /.row -->




        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="includes/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="includes/js/bootstrap.min.js"></script>

</body>

</html>
