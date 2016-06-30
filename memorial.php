<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Memorial</title>

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
                <h1>Memorial</h1>
                <p class="lead">These are all of the memorials within the local area</p>
                <Table class="table">
            <tr>
                <td><span title="All the information about the Amberley Memorial">
                    <a href='memorial_Detail.php?Memorial=Amberley'>
                        <img src="graphics/memorial_Button/AmberleySmall.jpg"></a></span></td>
                <td></td>
                <td><span title="All the information about the Avening Memorial">
                    <a href='memorial_Detail.php?Memorial=Avening'>
                        <img src="graphics/memorial_Button/AveningSmall.jpg"></a></span></td>
                <td></td>
                <td><span title="All the information about the Forest Green Memorial">
                    <a href='memorial_Detail.php?Memorial=Forest'>
                        <img src="graphics/memorial_Button/ForestGreenSmall.jpg"></a></span></td>    
            </tr>
            <tr></tr>
            <tr>
                <td><span title="All the information about the Horsley Memorial">
                    <a href='memorial_Detail.php?Memorial=Horsley'>
                        <img src="graphics/memorial_Button/HorsleySmall.jpg"></a></span></td>
                <td></td>
                <td><span title="All the information about the Minchinhampton Memorial">
                    <a href='memorial_Detail.php?Memorial=Minchinhampton'>
                        <img src="graphics/memorial_Button/MinchinhamptonSmall.jpg"></a></span></td>
                <td></td>
                <td><span title="All the information about the Nympsfield Memorial">
                    <a href='memorial_Detail.php?Memorial=Nympsfield'>
                        <img src="graphics/memorial_Button/NympsfieldSmall.jpg"></a></span></td>    
            </tr>
            <tr></tr>
            <tr>
                <td><span title="All the information about the Rodborough Memorial">
                    <a href='memorial_Detail.php?Memorial=Rodborough'>
                        <img src="graphics/memorial_Button/RodboroughSmall.jpg"></a></span></td>
                <td></td>
                <td><span title="All the information about the Shortwood Memorial">
                    <a href='memorial_Detail.php?Memorial=Shortwood'>
                        <img src="graphics/memorial_Button/ShortwoodSmall.jpg"></a></span></td>
                <td></td>
                <td><span title="All the information about the Gloters Memorial">
                    <a href='memorial_Detail.php?Memorial=Gloters'>
                        <img src="graphics/memorial_Button/GlotersSmall.jpg"></a></span></td>    
            </tr>
            <tr></tr>
            <tr>
                <td><span title="All the information about the Woodchester Memorial">
                    <a href='memorial_Detail.php?Memorial=Wodchester'>
                        <img src="graphics/memorial_Button/WoodchesterSmall.jpg"></a></span></td>
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
