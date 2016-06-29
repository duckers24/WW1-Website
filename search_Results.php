<?php
$search=$_GET['srch-term']
?>
<?php
include 'includes/db.inc.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search</title>

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
                <h1>Search</h1>
                <?php
        // Request the text of soldiers
        $result = @mysql_query('SELECT Sequence, First_name, Last_name, Number, Rank, Regiment, Awards, Year_born, How_died, Where_died, Where_buried, Where_commemorated, Birthplace FROM soldiers WHERE Last_name = "'.$search.'" 
        OR First_name = "'.$search.'" 
        OR Middle_names = "'.$search.'"
        OR Rank = "'.$search.'"
        OR Number = "'.$search.'"
        OR Regiment = "'.$search.'"
        OR Awards = "'.$search.'"
        OR Birth_accuracy = "'.$search.'"
        OR Year_born = "'.$search.'"
        OR Birthplace = "'.$search.'"
        OR Parents = "'.$search.'"
        OR Family = "'.$search.'"
        OR Date_of_death = "'.$search.'"
        OR How_died = "'.$search.'"
        OR Where_died = "'.$search.'"
        OR Where_buried = "'.$search.'"
        OR Where_Commemorated = "'.$search.'"
        OR Also_Remembered = "'.$search.'"
        OR Note = "'.$search.'"
        OR Approx_age = "'.$search.'"
        OR Year_of_death = "'.$search.'"
        ORDER by Last_name');
        if (!$result) {
            exit('<p>Error performing query: ' . mysql_error() . '</p>');
        }
                ?>
                <table class="table">
                    <tr>
                        <td>Fisrt name</td>
                        <td>Last Name</td>
                        <td>More Information</td>
                        <?php
                        while ($row = mysql_fetch_array($result))
                        {
                            echo '<tr>';
                            echo '<td>'. $row['First_name'] .  '</td>';
                            echo '<td>'. $row['Last_name'] .  '</td>';
                            echo '<td><span title="More information about this soldier"><a href=soldier.php?Sequence='. $row['Sequence'] .  '>Link</a></span</td>';
                            echo '</tr>';
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

