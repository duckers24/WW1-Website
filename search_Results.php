    <?php
    $search=$_GET['search']
        ?>

<html>
<head>
<Title>Home</title>
    <link href="Style.css" type = "text/css" rel="stylesheet"/>
</head>
<body class="Body">
    <div class="Container">
    <div class="Header">
        <h1 class="Body">Search</h1>
    </div>
    <?php
        include 'includes/year_menu.txt'
    ?>
<?php
            include 'includes/db.inc.php'
    ?>
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
    exit('<p>Error performing query: ' .
        mysql_error() . '</p>');
  }
    ?>
    <table>
        <tr>
        <td>Fisrt name</td><td>Last Name</td><td>More Information</td>
    <?php
        while ($row = mysql_fetch_array($result))
        {
            echo    '<tr>';
            echo    '<td>'. $row['First_name'] .  '</td>';
            echo    '<td>'. $row['Last_name'] .  '</td>';
            echo    '<td><span title="More information about this soldier"><a href=soldier.php?Sequence='. $row['Sequence'] .  '>Link</a></span</td>';
            echo    '</tr>';
        }										 
    ?>
    </table>
   </div>
</body>
</html>
