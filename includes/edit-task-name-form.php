<?php
    if(isset($_POST["edit-task-name-field-{$task_id}"]))
    {
        $newName = $_POST["edit-task-name-field-{$task_id}"];
        if(isset($newName) && $newName !== $task->getTaskName()){
            $updatedTask = new Task($newName,$task_id);
            $updatedTask->setIsCompleted($task->isCompleted());
            $task_manager->updateTask($task_id,$updatedTask);
            header("location index.php",true);
        }
    }
?>
<form action="" method="POST">
    <input type="text" name="edit-task-name-field-<?php echo $task_id; ?>" value="<?php echo $task->getTaskName();?>">
</form>