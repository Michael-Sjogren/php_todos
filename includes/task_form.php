
<div id="add-task-form">
    <?php 
        echo var_dump($_POST);
    ?>
    <form action="" method="POST">
        <input type="text" name="TaskName" value="" placeholder="The name of the task...">
        <input type="submit" name="submit" value="Add Task">
    </form>
</div>