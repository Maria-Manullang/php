<?php
  include_once "db.php";

  $query = $mysqli->query("SELECT * FROM chat ORDER BY id DESC");

  while( $data = $query->fetch_array() ){
?>
<div id="chat_data">
    <span><?php echo $data['chatname']; ?></span>:
    <span><?php echo $data['message']; ?></span>
    <span><?php echo $data['date']; ?></span>
    <hr>
</div>
<?php
  }
?>