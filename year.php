    <?php
    $year=$_GET['year']
        ?>
<html>
<head>
<Title>1914</title>
    <link href="Style.css" type = "text/css" rel="stylesheet"/>
</head>
<body class="Body">
    <div class="Container">
    <div class="Header">
        <?php
        echo '<h1 class="Body">'. $year .'</h1>';
        ?>
    </div>
    <?php
        include 'includes/year_menu.txt'            
            ?>
    <?php
            include 'includes/db.inc.php'
            ?>
    <h2>Stuff</h2>
<?php
      // Request the text of soldiers
  $result = @mysql_query('SELECT Sequence, First_name, Last_name FROM soldiers WHERE Year_of_death = "'.$year.'" ORDER by Last_name');
  if (!$result) {
    exit('<p>Error performing query: ' .
        mysql_error() . '</p>');
  }
    ?>
    <table>
        <tr>
        <td>Fisrt name</td><td>Last Name</td><td>Link to Soldier</td>
            </tr>
    <?php
      while ($row = mysql_fetch_array($result))
  {
						echo		'<tr>';
						echo	    '<td>'. $row['First_name'] .  '</td>';
						echo	    '<td>'. $row['Last_name'] .  '</td>';
                        echo	    '<td><span title="More information about this soldier"><a href=soldier.php?Sequence='. $row['Sequence'] .  '>Link</a></span</td>';
						echo		'</tr>';
}										 
 
    ?>
    </table>
    </div>
</body> 
</html>