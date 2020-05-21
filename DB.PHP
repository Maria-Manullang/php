<?php
  $mysqli = new mysqli('localhost', 'root','','chatbox');
  if( $mysqli->connect_error ){
    die('error');
  }
?>