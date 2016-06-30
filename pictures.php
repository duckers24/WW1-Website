<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pictures</title>

    <!-- Bootstrap Core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="includes/css/unslider.css" rel="stylesheet">
    
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
    <?php
    include 'navigation.php';
    ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Pictures</h1>
                <p class="lead">Complete with pre-defined file paths that you won't have to change!</p>
                <div class="my-slider">
                    <ul>
                        <li>
                            <div style="float: centre">
                                <img style="width: 400px;" src="graphics/stroud_Journal/3%20Stroud%20Journal%2013Aug1920%201%20of%202.jpg">
                            </div>
                        </li>
                        <li>
                            <div style="float: centre;">
                                <img style="width: 400px;" src="graphics/stroud_Journal/3%20Stroud%20Journal%2013Aug1920%202%20of%202.jpg">
                            </div>
                        </li>
                        <li>
                            <div style="float: centre;">
                                <img style="width: 400px;" src="graphics/stroud_Journal/3%20Stroud%20Journal%201Oct1920%201%20of%203.jpg">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="includes/js/jquery.js"></script>
    
    <!-- Slider-->
    <script src="includes/js/unslider-min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="includes/js/bootstrap.min.js"></script>
    <script>
		jQuery(document).ready(function($) {
			$('.my-slider').unslider();
		});
	</script>
</body>

</html>
