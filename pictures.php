  <?php
    $Picture=$_GET['Picture']
        ?>
<html>
<head>
<Title>Pictures</Title>
    <link href="includes/style.css" type = "text/css" rel="stylesheet"/>
</head>
<body>
    <div class="Header"><h1>Pictures</h1></div>
    <?php
    include 'includes/year_menu.txt'            
    ?>
    
    <?php
    echo '<img src="Graphics/'.$Picture.'.jpg">'
    ?>
</body>
</html>