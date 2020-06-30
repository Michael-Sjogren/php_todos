<?php
  /**
   *
   */
  class Task
  {
    private string $TaskName;
    private bool $TaskCompleted;
    private int $TaskID;

    function __construct(string $name, int $id)
    {
      $this->TaskID = $id;
      $this->set_task_name($name);
      $this->TaskCompleted = false;
    }

    function get_id():int{
      return $this->TaskID;
    }
    function get_task_name() : string{
      return $this->TaskName;
    }

    function is_completed() : bool{
      return $this->TaskCompleted;
    }

    function set_is_completed(bool $value){
      $this->TaskCompleted = $value;
    }

    function set_task_name($new_name){
      if(!empty($new_name))
      {
        $this->TaskName = $new_name;
      }
    }
  }
