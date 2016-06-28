<html>
<head>
<Title>After the War</title>
    <link href="Style.css" type = "text/css" rel="stylesheet"/>
</head>
<body class="Body">
    <div class="Container">
    <div class="Header">
        <h1 class="Body">After the War</h1>
    </div>
    <?php
        include 'includes/year_menu.txt'
    ?>
        <p1>This can be used to see all of the soldiers that died after the war.</p1>  
        <Table class="MemorialTable">
            <tr>
                <td class="MemorialTableLeft"><span title="View all of the soldiers that died in 1919"><a href='year.php?year=1919'><img src="Graphics/DuringWar/1919Small.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableCenter"><span title="View all of the soldiers that died in 1920"><a href='year.php?year=1920'><img src="Graphics/DuringWar/1920Small.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableRight"><span title="View all of the soldiers that died in 1928"><a href='year.php?year=1928'><img src="Graphics/DuringWar/1928Small.jpg"></a></span></td>    
            </tr>
        </Table>  
    </div>   
</body>
</html>