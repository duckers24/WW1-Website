<html>
<head>
    <Title>Memorials</title>
    <link href="Style.css" type = "text/css" rel="stylesheet"/>
</head>
<body class="Body">
    <div class="Container">
    <div class="Header">
        <h1 class="Body">Memorials</h1>
    </div>
    <?php
        include 'includes/year_menu.txt'
    ?>
    <?php
        include 'includes/db.inc.php'
    ?>
        <Table class="MemorialTable">
            <tr>
                <td class="MemorialTableLeft"><span title="All the information about the Amberley Memorial"><a href='MemorialPage.php?Memorial=Amberley'><img src="Graphics/MemorialButton/AmberleySmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableCenter"><span title="All the information about the Avening Memorial"><a href='MemorialPage.php?Memorial=Avening'><img src="Graphics/MemorialButton/AveningSmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableRight"><span title="All the information about the Forest Green Memorial"><a href='MemorialPage.php?Memorial=Forest'><img src="Graphics/MemorialButton/ForestGreenSmall.jpg"></a></span></td>    
            </tr>
            <tr class="MemorialTableGap"></tr>
            <tr>
                <td class="MemorialTableLeft"><span title="All the information about the Horsley Memorial"><a href='MemorialPage.php?Memorial=Hosrley'><img src="Graphics/MemorialButton/HorsleySmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableCenter"><span title="All the information about the Minchinhampton Memorial"><a href='MemorialPage.php?Memorial=Minchinhampton'><img src="Graphics/MemorialButton/MinchinhamptonSmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableRight"><span title="All the information about the Nympsfield Memorial"><a href='MemorialPage.php?Memorial=Nympsfield'><img src="Graphics/MemorialButton/NympsfieldSmall.jpg"></a></span></td>    
            </tr>
            <tr class="MemorialTableGap"></tr>
            <tr>
                <td class="MemorialTableLeft"><span title="All the information about the Rodborough Memorial"><a href='MemorialPage.php?Memorial=Rodborough'><img src="Graphics/MemorialButton/RodboroughSmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableCenter"><span title="All the information about the Shortwood Memorial"><a href='MemorialPage.php?Memorial=Shortwood'><img src="Graphics/MemorialButton/ShortwoodSmall.jpg"></a></span></td>
                <td class="MemorialTableMargin"></td>
                <td class="MemorialTableRight"><span title="All the information about the Gloters Memorial"><a href='MemorialPage.php?Memorial=Gloters'><img src="Graphics/MemorialButton/GlotersSmall.jpg"></a></span></td>    
            </tr>
            <tr class="MemorialTableGap"></tr>
            <tr>
                <td class="MemorialTableLeft"><span title="All the information about the Woodchester Memorial"><a href='MemorialPage.php?Memorial=Woodchester'><img src="Graphics/MemorialButton/WoodchesterSmall.jpg"></a></span></td>
            </tr>
            <tr class="MemorialTableGap"></tr>
        </Table>
</body>
</html>