<?php
  include_once 'dbh.class.php';
  include_once 'task.class.php';
  class TaskManager extends Dbh{
    private $tasks = array();
    function __construct(){
      $this->tasks = $this->getTasks();
    }
    function createTask(string $taskName){
      $sql = "INSERT INTO Task(TaskName) VALUES(?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$taskName]);
    }

    function updateTask(int $id, Task $task){
      if(!isset($task) || !isset($id)){
        return;
      }
      //if(!isset($task['TaskName']) || !isset($task['']))
      $sql = "UPDATE Task SET TaskName=?, TaskCompleted=? WHERE TaskID=?";
      $stmt = $this->connect()->prepare($sql);

      $stmt->execute(
        [
          $task->getTaskName(),
          (int)$task->isCompleted()
          ,$id
        ]
    );

      header("Location: http://localhost/todos/",true);
    }
    function deleteTask(int $id){
      $sql = "DELETE FROM Task WHERE TaskID=?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);
      header("Location: http://localhost/todos/",true);
    }
    function getTasks():array{
      $sql = "SELECT * FROM Task";
      $result = $this->connect()->query($sql);
      $this->tasks = [];
      while($row = $result->fetch()){
        $task = new Task($row['TaskName'],$row['TaskID']);
        $isCompleted = ($row['TaskCompleted'] == 1 ? True : false);
        $task->setIsCompleted($isCompleted);
        array_push($this->tasks,$task);
      }
      return $this->tasks;
    }

    function __destruct(){
     
    }
  }

