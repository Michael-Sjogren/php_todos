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
      <?php foreach($tasks as $key => $val): ?>
        <div class="task">
          <div>
            <?php echo $val; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </body>
</html>
