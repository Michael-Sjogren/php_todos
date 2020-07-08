<?php
    if(isset($_POST['delete_task'])){
        $id = $_POST['delete_task'];
        $task_manager->deleteTask($id);
    }
?>
<form action="" method="post">
    <button type="submit" name="delete_task" value="<?php echo $task->getTaskID();?>" class="remove-task-btn">
        <i class="fas fa-trash"></i>
    </button>
</form>