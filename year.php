<?php
$year=$_GET['year']
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
    echo '<title>'. $year .'</title>';
    ?>

    <!-- Bootstrap Core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Include for the database connection -->
    <?php
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
    <!-- Include for the navigation bar -->
    <?php
    include 'navigation.php';
    ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <?php
                echo '<h1>'. $year .'</h1>';
                ?>
                <p class="lead">The table below shows all of the soldiers that lost their lives during this year</p>
                <?php
                // Request the text of soldiers
                $result = @mysql_query('SELECT Sequence, First_name, Last_name FROM soldiers WHERE Year_of_death = "'
                                       .$year.'" ORDER by Last_name');
                if (!$result) {
                    exit('<p>Error performing query: ' . mysql_error() . '</p>');
                }
                ?>
                <table class="table">
                    <tr>
                        <td>Fisrt name</td><td>Last Name</td><td>Link to Soldier</td>
                    </tr>
                    <?php
                    while ($row = mysql_fetch_array($result))
                    {
                        echo		'<tr>';
						echo	    '<td>'. $row['First_name'] .  '</td>';
						echo	    '<td>'. $row['Last_name'] .  '</td>';
                        echo	    '<td><span title="More information about this soldier"><a href=soldier.php?Sequence='
                            . $row['Sequence'] .  '>Link</a></span</td>';
						echo		'</tr>';
                    }
                    ?>
                </table>
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
