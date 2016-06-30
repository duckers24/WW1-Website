<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>During the War</title>

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
    <?php
    include 'navigation.php';
    ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>During the War</h1>
                <p class="lead">Please select a year to see the soldiers that lost their lives</p>
                <Table class="table">
            <tr>
                <td><span title="See all of the soldiers that lost their lives in 1914">
                    <a href='year.php?year=1914'><img src="graphics/during_War/1914Small.jpg"></a></span></td>
                <td></td>
                <td><span title="See all of the soldiers that lost their lives in 1915">
                    <a href='year.php?year=1915'><img src="graphics/during_War/1915Small.jpg"></a></span></td>
                <td></td>
                <td><span title="See all of the soldiers that lost their lives in 1916">
                    <a href='year.php?year=1916'><img src="graphics/during_War/1916Small.jpg"></a></span></td>    
            </tr>
            <tr></tr>
            <tr>
                <td><span title="See all of the soldiers that lost their lives in 1917">
                    <a href='year.php?year=1917'><img src="graphics/during_War/1917Small.jpg"></a></span></td>
                <td></td>
                <td><span title="See all of the soldiers that lost their lives in 1918">
                    <a href='year.php?year=1918'><img src="graphics/during_War/1918Small.jpg"></a></span></td>
                <td></td>    
            </tr>
            <tr></tr>
        </Table>
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
