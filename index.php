<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todos</title>
  </head>
  <body>
    <?php
      require_once('includes/task_manager.php');
    ?>
    <div id="tasks">
      <?php foreach($tasks as $key => $task): ?>
        <div class="task">
          <div>
            <?php echo $task->get_task_name(); ?>
          </div>
          <div>
            <?php echo  $task->is_completed() ? 'True' : 'False'; ?> 
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </body>
</html>
