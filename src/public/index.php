<?php
  include_once($_SERVER['DOCUMENT_ROOT'].'/../utils.php');

  session_start();
  if (isset($_POST)) {
    if (isset($_POST["workerID"])) {
      $_SESSION["workerID"] = $_POST["workerID"];
      $_SESSION["last_time_seen_at"] = time();
    } elseif (isset($_POST["decision"])) {
      $_SESSION["res"] = time() - $_SESSION["last_time_seen_at"];
      $_SESSION["last_time_seen_at"] = time();
    }
    if (isset($_POST["workerID"]) || isset($_POST["decision"])) clearPost();
  }

  if (@$_SESSION["workerID"]) {
    $wid = $_SESSION["workerID"];
    echo "<h1>Hello, $wid!</h1>";
    include '../views/exp.php';
    if (isset($_SESSION["res"])) echo "Last response time: ".$_SESSION["res"];
  } else {
    include '../views/start.php';
  }

?>