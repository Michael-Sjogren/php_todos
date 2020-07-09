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
      <details>
        <summary>
        Create, Edit and delete tasks!
        </summary>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, error beatae? Atque labore eum explicabo soluta, inventore omnis, maiores sunt eos doloremque excepturi optio accusantium corporis, consectetur ipsam. Minima, quos!
        </p>
      </details>
      <?php
      include_once('classes/task-manager.class.php');
      $task_manager = new TaskManager();
      ?>
      <?php include_once('includes/new-task-form.php'); ?>
    <ul id="tasks">
      <?php foreach($task_manager->getTasks() as $key => $task): ?>
        <li class="task  <?php echo ($task->isCompleted() == 1 ? 'green' : '');  ?>">
          <div class="task-name">
            
            <?php
            $task_id = $task->getTaskID();
            include 'includes/edit-task-name-form.php' 
            ?>
          </div>
          <div class="task-completion">
            <?php include 'includes/complete-task-form.php' ?>
            <?php include 'includes/delete-task-form.php'?>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    </body>
</html>
