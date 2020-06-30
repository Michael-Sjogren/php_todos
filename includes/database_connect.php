<?php

  $dbServerName = "localhost";
  $dbUsername = "phpmyadminuser";
  $dbPassword = "Password123#@!";
  $dbName = "tasks_db";

  $db_link = mysqli_connect(
    $dbServerName,
    $dbUsername,
    $dbPassword,
    $dbName
  );
