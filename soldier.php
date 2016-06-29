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
    
    <?php
    $Sequence=$_GET['Sequence']
    // Request the text of soldiers
    $result = @mysql_query('SELECT Sequence, First_name, Last_name, Number, Rank, Regiment, Awards, Year_born, How_died, Where_died, Where_buried, Where_commemorated, Birthplace FROM soldiers WHERE Sequence = "'.$Sequence.'" ORDER by Last_name');
    if (!$result) {
        exit('<p>Error performing query: ' . mysql_error() . '</p>');
    }
    include 'includes/db.inc.php'
    ?>
    
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
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
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
                <?php
                while ($Name = mysql_fetch_array($result))
                {
                echo '<h1>'. $Name['First_name'] . " " . $Name['Last_name'] .'</h1>';
                }
                ?>
                <p class="lead">All of the inforamtion about this soldier</p>
                <table class="table">
                    <?php
                    while ($row = mysql_fetch_array($result))
                    {
                        $Photo=$row['Sequence'];
                        $PHPPath='/Users/william/Documents/ww1 webserver/Graphics/SoldierMemorial/';
                        $DataType='.jpg';
                        $ImagePath='/Graphics/SoldierMemorial/';
                        $PHPPhotoPath= $PHPPath.$Photo.$DataType;
                        $RealPhotoPath = $ImagePath.$Photo.$DataType;
                        echo '<tr>';
                        echo '<td>';
                        if (file_exists($PHPPhotoPath)) {
                            echo        '<img src="'.$RealPhotoPath.'"/>';
                        } else {
                            echo        '<img src="Graphics/SoldierMemorial/Head.jpg">';
                        }
                        echo '<tr>';
                        echo '<td>'. $row['First_name'] .'</td>';
                        echo '<td>'. $row['Middle_names'] .'</td>';
                        echo '<td>'. $row['Last_name'] .'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>'. $row['Rank'] .'</td>';
                        echo '<td>'. $row['Number'] .'</td>';
                        echo '<td>'. $row['Regiment'] .'</td>';
                        echo '<td>'. $row['Awards'] .'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>'. $row['Birth_accuracy'] .'</td>';
                    }
                    ?>
                </table>
                <?php
                $Sequence2 = $Sequence + 1;
                echo '<li><a href=soldier.php?Sequence='. $row['Sequence2'] .  '>Next Soldier</a>';
                ?>
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
