<?php
  include_once 'database_connect.php';
  include_once 'task.php';
  $tasks = array();
  // sql
  $sql = "SELECT * FROM Task;";
  $result = mysqli_query($db_link, $sql);
  $resultCheck = mysqli_num_rows($result);
  // check for results from fetch
  if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
      $t = new Task($row['TaskName'],$row['TaskID']);
      $t->set_is_completed($row['TaskCompleted'] == 0 ? false : true );
      array_push($tasks,$t);
    }
  }

  mysqli_close($db_link);
?>
