<!DOCTYPE html>
<?php
include 'includes/db.inc.php'
?>
<?php
$Sequence=$_GET['Sequence']
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
        // Request the text of soldiers
    $result = @mysql_query('SELECT Sequence, First_name, Last_name, Number, Rank, Regiment, Awards, Year_born, How_died, Where_died, Where_buried, Where_commemorated, Birthplace FROM soldiers WHERE Sequence = "'.$Sequence.'" ORDER by Last_name');
    if (!$result) {
        exit('<p>Error performing query: ' . mysql_error() . '</p>');
    }
    while ($Name = mysql_fetch_array($result))
        {
            echo '<title>'. $Name['First_name'] . " " . $Name['Last_name'] .'</title>';
        }
                ?>
    
    <!-- Bootstrap Core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="includes/css/overwrite.css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">
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
                <div class="col-sm-3 col-md-3 pull-right">
                    <form class="navbar-form" role="search" method="get" action="search_Results.php">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <section id="about">
		<div class="col-md-4 col-md-push-2">				
			<ul class="about-data">
				<li>
					<div class="inner-abcoin"><i class="fa fa-user"></i></div>
					<label>Name</label>
					<span class="value">John Smith</span>
					<div class="clear"></div>
					<hr>
				</li>
                <li>
					<div class="inner-abcoin"><i class="fa fa-mobile"></i></div>
					<label>Regiment</label>
					<span class="value">+123 (21) 1234-5678</span>
					<div class="clear"></div>
					<hr>
				</li>
				<li>
					<div class="inner-abcoin"><i class="fa fa-calendar"></i></div>
					<label>Birthplace</label>
					<span class="value">June 22, 1978</span>
					<div class="clear"></div>
					<hr>
				</li>
				<li> 
					<div class="inner-abcoin"><i class="fa fa-map-marker"></i></div>
					<label>Date of Death</label>
					<span class="value">Nailsworth, UK</span>
					<div class="clear"></div>
					<hr>
				</li>
				<li>
					<div class="inner-abcoin"><i class="fa fa-envelope"></i></div>
					<label>Age</label>
					<span class="value">john.smoith@gmail.com</span>
					<div class="clear"></div>
					<hr>
                </li>
			</ul>
		</div>	

		<div class="col-md-6 col-md-push-2">
			<img src="graphics/soldier/3.jpg" alt="" class="img-responsive" />
		</div>										
	</section>
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
