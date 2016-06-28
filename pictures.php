  <?php
    $Picture=$_GET['Picture']
        ?>
<html>
<head>
<Title>Pictures</Title>
    <link href="Style.css" type = "text/css" rel="stylesheet"/>
    <div class="Header"><h1>Pictures</h1></div>
</head>
<body>
    <?php
    include 'includes/year_menu.txt'            
    ?>
    
    <?php
    echo '<img src="Graphics/'.$Picture.'.jpg">'
    ?>
</body>
</html>