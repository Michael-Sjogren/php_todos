<?php
    if(isset($_POST["edit-task-completion-field-{$task_id}"]))
    {
        $taskCompleted = $_POST["edit-task-completion-field-{$task_id}"];
        var_dump($_POST);
        if(isset($taskCompleted)){
            $updatedTask = new Task($task->getTaskName(),$task_id);
            $updatedTask->setIsCompleted($taskCompleted);
            $task_manager->updateTask($task_id,$updatedTask);
        }
    }
?>
<form action="" method="POST">
    <label class="checkbox-container">
        <input type="checkbox" name="edit-task-completion-field-<?php echo $task_id; ?>" checked="true" value="<?php echo $task->isCompleted();?>">
        <span class="checkmark">
        </span>
    </label>

</form>