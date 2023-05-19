<?php
  include_once($_SERVER['DOCUMENT_ROOT'].'/../utils.php');

  session_start();
  if (isset($_POST) && isset($_POST["workerID"])) {
    $_SESSION["workerID"] = $_POST["workerID"];
    clearPost();
  }

  if (@$_SESSION["workerID"]) {
    $wid = $_SESSION["workerID"];
    echo "Hello, $wid!";
  } else {
    include '../views/start.php';
  }
?>