<?php
  include_once 'task.php';
  class TaskManager {
    private $tasks = array();
    private $db_link;
    function __construct($db_link){
      $this->db_link = $db_link;
      $this->fetch_tasks();
    }
    function create_task(string $task_name){
      $sql = "INSERT INTO Task(TaskName) VALUES(". "'".$task_name. "'". ");";
      $result = mysqli_query($this->db_link, $sql);
      if($result){
        $this->fetch_tasks();
      }else {
        echo '<br> Failed to create task <br>';
      }
    }

    function update_task(int $id, $task){

    }
    function fetch_tasks():array{
      $this->tasks = [];
      $sql = "SELECT * FROM Task;";
      $result = mysqli_query($this->db_link, $sql);
      $resultCheck = mysqli_num_rows($result);
      // check for results from fetch
      if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
          $t = new Task($row['TaskName'],$row['TaskID']);
          $t->set_is_completed($row['TaskCompleted'] == 0 ? false : true );
          array_push($this->tasks,$t);
        }
      }
      return $this->get_all_tasks();
    }

    function get_all_tasks():array{
      return $this->tasks;
    }

    function __destruct(){
      mysqli_close($this->db_link);
    }
  }

?>
