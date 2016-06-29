<html>
<head>
<Title>During the War</title>
    <link href="includes/style.css" type = "text/css" rel="stylesheet"/>
</head>
<body class="Body">
    <div class="Container">
    <div class="Header">
        <h1 class="Body">During the War</h1>
    </div>
    <?php
        include 'includes/year_menu.txt'
    ?>
        <p1 class="Text">This shows all of the soliders that lost their life fighing in the World War. You are able to see who died, and the year that they died in.</p1>
        <Table class="MemorialTable">
            <tr>
                <td class="MemorialTableLeft"><span title="See all of the soldiers that lost their lives in 1914"><a href='year.php?year=1914'><img src="graphics/during_War/1914Small.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableCenter"><span title="See all of the soldiers that lost their lives in 1915"><a href='year.php?year=1915'><img src="graphics/during_War/1915Small.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableRight"><span title="See all of the soldiers that lost their lives in 1916"><a href='year.php?year=1916'><img src="graphics/during_War/1916Small.jpg"></a></span></td>    
            </tr>
            <tr class="MemorialTableGap"></tr>
            <tr>
                <td class="MemorialTableLeft"><span title="See all of the soldiers that lost their lives in 1917"><a href='year.php?year=1917'><img src="graphics/during_War/1917Small.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableCenter"><span title="See all of the soldiers that lost their lives in 1918"><a href='year.php?year=1918'><img src="graphics/during_War/1918Small.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>    
            </tr>
            <tr class="MemorialTableGap"></tr>
        </Table>
    </div>
</body> 
</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

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
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="during_War.php">During War</a>
                    </li>
                    <li>
                        <a href="after_War.php">After War</a>
                    </li>
                    <li>
                        <a href="memorial.php">Memorial</a>
                    </li>
                    <li>
                        <a href="pictures.php">Pictures</a>
                    </li>
                    <li>
                        <a href="events.php">Events</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>A Bootstrap Starter Template</h1>
                <p class="lead">Complete with pre-defined file paths that you won't have to change!</p>
                <ul class="list-unstyled">
                    <li>Bootstrap v3.3.6</li>
                    <li>jQuery v1.11.1</li>
                </ul>
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
