    <?php
    $Sequence=$_GET['Sequence']
        ?>
    <?php
            include 'includes/db.inc.php'
            ?>
<?php
      // Request the text of soldiers
  $result = @mysql_query('SELECT Sequence, First_name, Last_name, Number, Rank, Regiment, Awards, Year_born, How_died, Where_died, Where_buried, Where_commemorated, Birthplace FROM soldiers WHERE Sequence = "'.$Sequence.'" ORDER by Last_name');
  if (!$result) {
    exit('<p>Error performing query: ' .
        mysql_error() . '</p>');
  }
    ?>
<html>
<head>
<Title>Soldier</title>
    <link href="includes/style.css" type = "text/css" rel="stylesheet"/>
</head>
<body class="Body">
    <div class="Container">
    <div class="Header">
        <?php
        while ($Name = mysql_fetch_array($result))
        {
        echo '<h1 class="Body">'. $Name['First_name'] . " " . $Name['Last_name'] .'</h1>';
        }
        ?>
    </div>
    <?php
        include 'includes/year_menu.txt'            
            ?>
    <h2>Stuff</h2>
<?php
      // Request the text of soldiers
  $result = @mysql_query('SELECT Sequence, First_name, Last_name, Number, Rank, Regiment, Awards, Year_born, How_died, Where_died, Where_buried, Where_commemorated, Birthplace FROM soldiers WHERE Sequence = "'.$Sequence.'" ORDER by Last_name');
  if (!$result) {
    exit('<p>Error performing query: ' .
        mysql_error() . '</p>');
  }
    ?>
    <table class="Table">

    <?php
      while ($row = mysql_fetch_array($result))
  {
            $Photo=$row['Sequence'];
            $PHPPath='/Users/william/Documents/ww1 webserver/Graphics/SoldierMemorial/';
            $DataType='.jpg';
            
            $ImagePath='/Graphics/SoldierMemorial/';
            
            $PHPPhotoPath= $PHPPath.$Photo.$DataType;
            $RealPhotoPath = $ImagePath.$Photo.$DataType;
            echo		'<tr>';
            echo        '<td>';
            if (file_exists($PHPPhotoPath)) {
                echo        '<img src="'.$RealPhotoPath.'"/>';
            } else { 
                echo        '<img src="Graphics/SoldierMemorial/Head.jpg">'; 
            } 
            echo		'<tr>';
            echo	    '<td>'. $row['First_name'] .'</td>';
            echo        '<td>'. $row['Middle_names'] .'</td>';
            echo	    '<td>'. $row['Last_name'] .'</td>';
            echo		'</tr>';
            echo		'<tr>';
            echo        '<td>'. $row['Rank'] .'</td>';
            echo        '<td>'. $row['Number'] .'</td>';
            echo        '<td>'. $row['Regiment'] .'</td>';
            echo        '<td>'. $row['Awards'] .'</td>';
            echo		'</tr>';
            echo		'<tr>';
            echo        '<td>'. $row['Birth_accuracy'] .'</td>';

}							
    ?>
    </table>
      <?php  
        $Sequence2 = $Sequence + 1;
        echo '<li><a href=soldier.php?Sequence='. $row['Sequence2'] .  '>Next Soldier</a>';
            ?>
    </div>
</body> 
</html>