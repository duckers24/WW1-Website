<?php
$Memorial=$_GET['Memorial']
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
    
    <?php
    if ($Memorial == "") {
        echo '<title>Memorials</title>';
        } elseif ($Memorial == "Amberley") {
        echo '<title>Amberley War Memorial</title>';
        } elseif ($Memorial == "Avening") {
        echo '<title>Avening Memorial</title>';
        } elseif ($Memorial == "Forest") {
        echo '<title>Forest Green Chapel</title>';
        } elseif ($Memorial == "Horsley") {
        echo '<title>Horsley War Memorial</title>';
        } elseif ($Memorial == "Minchinhampton") {
        echo '<title>Minchinhampton War Memorial</title>';
        } elseif ($Memorial == "Nympsfield") { 
        echo '<title>Nympsfield War Memorial</title>';
        } elseif ($Memorial == "Rodborough") {
        echo '<title>Rodborough Roll of Honour</title>';
        } elseif ($Memorial == "Shortwood") {
        echo '<title>Shortwood Chapel</title>';
        } elseif ($Memorial == "Gloters") {
        echo '<title>Gloters Cenotaph</title>';
        } elseif ($Memorial == "Woodchester") {
        echo '<title>Woodchester Wayside Cross</title>';
    }
    ?>
    
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
                <?php
                if ($Memorial == "") {
                    echo '<h1>Memorials</h1>';
                } elseif ($Memorial == "Amberley") {
                    echo '<h1>Amberley War Memorial</h1>';
                } elseif ($Memorial == "Avening") {
                    echo '<h1>Avening Memorial</h1>';
                } elseif ($Memorial == "Forest") {
                    echo '<h1>Forest Green Chapel</h1>';
                } elseif ($Memorial == "Horsley") {
                    echo '<h1>Horsley War Memorial</h1>';
                } elseif ($Memorial == "Minchinhampton") {
                    echo '<h1>Minchinhampton War Memorial</h1>';
                } elseif ($Memorial == "Nympsfield") { 
                    echo '<h1>Nympsfield War Memorial</h1>';
                } elseif ($Memorial == "Rodborough") {
                    echo '<h1>Rodborough Roll of Honour</h1>';
                } elseif ($Memorial == "Shortwood") {
                    echo '<h1>Shortwood Chapel</h1>';
                } elseif ($Memorial == "Gloters") {
                    echo '<h1>Gloters Cenotaph</h1>';
                } elseif ($Memorial == "Woodchester") {
                    echo '<h1>Woodchester Wayside Cross</h1>';
                }
                ?>
                <p class="lead">All of the inforamtion about this memorial</p>
                <?php
                // Request the text of soldiers
                $result = @mysql_query('SELECT Sequence, First_name, Last_name, Rank FROM soldiers WHERE Also_remembered LIKE "%'.$Memorial.'%" ORDER by Last_name');
                if (!$result) {
                    exit('<p>Error performing query: ' . mysql_error() . '</p>');
                }
                ?>
                <table class="table">
                    <tr>
                        <td>Image</td>
                        <td>Rank</td>
                        <td>Fisrt name</td>
                        <td>Last Name</td>
                        <td>More Information</td>
                    </tr>
                    <?php
                    while ($row = mysql_fetch_array($result))
                    {
                        $Photo=$row['Sequence'];
                        $PHPPath='/Users/william/Documents/Development/graphics/soldier_Memorial/';
                        $DataType='.jpg';
                        $ImagePath='/graphics/soldier_Memorial/';
                        $RealPhotoPath = $ImagePath.$Photo.$DataType;
                        echo		'<tr>';
                        echo        '<td>';
                        if (file_exists($PHPPhotoPath)) {
                            echo        '<img src="'.$RealPhotoPath.'"/>';
                        } else { 
                            echo        '<img src="graphics/soldier_Memorial/Head.jpg">'; 
                        }
                        echo        '</td>';
                        echo	    '<td>'. $row['Rank'] .'</td>';
                        echo	    '<td>'. $row['First_name'] .'</td>';
                        echo	    '<td>'. $row['Last_name'] .'</td>';
                        echo	    '<td><span title="More information about this soldier"><a href=soldier.php?Sequence='. $row['Sequence'] .  '>More Information</a></span</td>';
                        echo		'</tr>';  
                    }
                    ?>
                </table>
                <?php
                echo '<img style="width: 800px; padding: 5px 0px;" src="Graphics/Memorial/'.$Memorial.'.jpg">'
                ?>
                <div>
                    <?php
                    if ($Memorial == "Amberley") {
                        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d246.6458573040691!2d-2.2170159688385898!3d51.71306678307376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2suk!4v1395943847545" width="800" height="450" frameborder="0" style="border:0"></iframe>';
                    } elseif ($Memorial == "Avening") {
                        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39582.500538204484!2d-2.1701349999999917!3d51.679858450000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x44c4ccfc0a3c728d!2sAvening%2C+opp+Memorial+Hall!5e0!3m2!1sen!2suk!4v1395937536844" width="800" height="600" frameborder="0" style="border:0"></iframe>';
                    } elseif ($Memorial == "Forest") {
                        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1236.4125830772532!2d-2.2357466431815034!3d51.69964444287298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sForest+Green+Chapel!5e0!3m2!1sen!2suk!4v1395937597589" width="800" height="600" frameborder="0" style="border:0"></iframe>';
                    } elseif ($Memorial == "Horsley") {
                        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9895.445718456933!2d-2.2363480000000004!3d51.68067944999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48710b5b73e1d09f%3A0xb58899bc87080a80!2sHorsley!5e0!3m2!1sen!2suk!4v1395937679040" width="800" height="600" frameborder="0" style="border:0"></iframe>';
                    } elseif ($Memorial == "Minchinhampton") {
                        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218.5175915929217!2d-2.186116694141941!3d51.70543996731593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48710c58e0ab28ff%3A0x416286085bcde5eb!2sMinchinhampton!5e1!3m2!1sen!2suk!4v1396289221215" width="800" height="600" frameborder="0" style="border:0"></iframe>';
                    } elseif ($Memorial == "Nympsfield") {
                        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9890.632631830924!2d-2.2898420000000472!3d51.70270045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48710a5535d09b29%3A0x4c59489c28d40fc8!2sNympsfield!5e0!3m2!1sen!2suk!4v1395937806342" width="800" height="600" frameborder="0" style="border:0"></iframe>';
                    } elseif ($Memorial == "Rodborough") {
                        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2502.0313736228736!2d-0.6477410000000001!3d51.163211000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875ce09415f556d%3A0xc98349c098d8648d!2sRodborough!5e0!3m2!1sen!2suk!4v1395937843716" width="800" height="600" frameborder="0" style="border:0"></iframe>';
                    } elseif ($Memorial == "Shortwood") {
                        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9892.740069781654!2d-2.2339148999999994!3d51.69305925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48710b6fc105caf7%3A0x861da0a112addd16!2sShortwood!5e0!3m2!1sen!2suk!4v1395937891837" width="800" height="600" frameborder="0" style="border:0"></iframe>';
                    } elseif ($Memorial == "Gloters") {
                        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19713.66232483847!2d-2.24219705!3d51.8571624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870fdfbf6ebf2cf%3A0xec709b9621e819cf!2sGloucester!5e0!3m2!1sen!2suk!4v1395937929442" width="800" height="600" frameborder="0" style="border:0"></iframe>';
                    } elseif ($Memorial == "Woodchester") {
                        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9885.953427893135!2d-2.232293!3d51.724102499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48710b91a75a61e1%3A0xb25e9d304acf657b!2sWoodchester!5e0!3m2!1sen!2suk!4v1395937957962" width="800" height="600" frameborder="0" style="border:0"></iframe>';
                    }
                    ?>
                </div>
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
