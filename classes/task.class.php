<?php
  /**
   *
   */
  class Task
  {
    private string $taskName = "";
    private bool $taskCompleted = false;
    private int $taskID = 0;

    function __construct(string $name, int $id)
    {
      $this->taskID = $id;
      $this->setTaskName($name);
      $this->taskCompleted = false;
    }

    function getTaskID():int{
      return $this->taskID;
    }
    function getTaskName() : string{
      return $this->taskName;
    }

    function isCompleted() : bool{
      return $this->taskCompleted;
    }

    function setIsCompleted(bool $value){
      $this->taskCompleted = $value;
    }

    function setTaskName($newName){
      if(!empty($newName))
      {
        $this->taskName = $newName;
      }
    }
  }
