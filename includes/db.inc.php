<?php
//  $dbcnx = @mysql_connect('127.0.0.1', 'baltinai_admin', 'vent8en7if7');
  $dbcnx = @mysql_connect('83.223.125.192', 'nailswor_world', 'TbiQWRKGKJEY4N');
  if (!$dbcnx) {
    exit('<p>Unable to connect to the ' .
        'database server at this time.</p>');
  }

  // Select the database
  if (!@mysql_select_db('nailswor_ww1')) {
//  if (!@mysql_select_db('baltinailsworth')) {
    exit('<p>Unable to locate the ' .
        'database at this time.</p>');
  }
?>