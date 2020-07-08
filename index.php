<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/9cece9b17e.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/a2bf3fc39e.js" crossorigin="anonymous"></script>
    <title>Todos</title>
  </head>
  <body>
    <div id="main">
      <h1>Todos</h1>
      <?php
      include_once('includes/database_connect.php');
      include_once('includes/task_manager.php');
      $task_manager = new TaskManager($db_link);
      ?>
      <?php include_once('includes/task_form.php'); ?>
    <ul id="tasks">
      <?php foreach($task_manager->get_all_tasks() as $key => $task): ?>
        <li class="task  <?php echo ($task->is_completed() == 1 ? 'green' : '');  ?>">
          <div class="task-name">
            <?php echo $task->get_task_name(); ?>
          </div>
          <div class="task-completion">
            <i class="fas fa-check"></i>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    </body>
</html>
