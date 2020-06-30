<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todos</title>
  </head>
  <body>
    <h1>Todos</h1>
    <?php
      require_once('includes/task_manager.php');
    ?>
    <ul id="tasks">
      <?php foreach($tasks as $key => $task): ?>
        <li class="task">
          <div>
            <?php echo $task->get_task_name(); ?>
          </div>
          <div>
            <?php echo  $task->is_completed() ? 'True' : 'False'; ?> 
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
