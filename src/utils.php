<?php

function clearPost() {
  unset($_POST);
  unset($_REQUEST);
  header("Location: index.php");
}

?>