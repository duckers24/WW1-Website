// <?php
//  $dbcnx = @mysql_connect('127.0.0.1', 'root', 'snod345');
//  $dbcnx = @mysql_connect('83.223.125.192', 'nailswor_world', 'TbiQWRKGKJEY4N');
//  if (!$dbcnx) {
//    exit('<p>Unable to connect to the ' .
//        'database server at this time.</p>');
//  }
//
  // Select the database
 // if (!@mysql_select_db('nailswor_ww1')) {
// if (!@mysql_select_db('WW1')) {
//   exit('<p>Unable to locate the ' .
//        'database at this time.</p>');
//  }
//?>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "snod345";

$servername = "83.223.125.192";
$username = "nailswor_world";
$password = "TbiQWRKGKJEY4N";

// Create connection
$dbcnx = new mysqli($servername, $username, $password);

// Check connection
if ($dbcnx->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>