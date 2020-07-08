<?php
    if(isset($_POST['submit'])){
        $task_name = $_POST['task_name'];
        $task_manager->create_task($task_name);
    }
?>
<div id="new-task-form">

    <form action="" method="post">
        <input type="text" name="task_name" value="" placeholder="The name of the task..."/>
        <input type="submit" name="submit" value="submit"/>
    </form>
</div>