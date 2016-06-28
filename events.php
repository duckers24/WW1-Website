<html>
<head>
<Title>Events</title>
    <link href="includes/style.css" type = "text/css" rel="stylesheet"/>
</head>
<body class="Body">
    <div class="Container">
    <div class="Header">
        <h1 class="Body">Events</h1>
    </div>
    <?php
        include 'includes/year_menu.txt'
    ?>
        <p1>These are all of the events that are coming up over the next year.</p1>
        <?php
            
            $yearold = date("Y")-100;
          
        
    echo  "<iframe src='https://www.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=j6bts5e6qjvtohuip3v2e8c3r0%40group.calendar.google.com&amp;color=%23AB8B00&amp;src=2qna5f0kb04uf2ut0davckem30%40group.calendar.google.com&amp;color=%2323164E&amp;ctz=Europe%2FLondon&dates=" . $yearold . date("m") . date ("d") . "/" . $yearold . date("m") . date ("d") . "' style=' border-width:0 ' width='800' height='600' frameborder='0' scrolling='no'></iframe>";
        ?>

            
    </div>
</body> 
</html>