<?php
  include_once($_SERVER['DOCUMENT_ROOT'].'/../dbconfig.php');
  include_once($_SERVER['DOCUMENT_ROOT'].'/../utils.php');

  session_start();
  if (isset($_POST)) {
    if (filter_input(INPUT_POST, "workerID")) {
      
      $workerID = filter_input(INPUT_POST, "workerID");
      
      try {
        // -- Create a new record for this new user.
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        $sql = 'INSERT INTO Participant (id, last_seen_page_index, last_access_at, first_access_at) VALUES (?, 0, now(), now())';
        $statement = $conn->prepare($sql);
        $statement->bind_param("s", $workerID);
        $statement->execute();
        // -- We can write the above syntax with a more simple way.
        //    The reason why I use prepare() is to prevent SQL injection attacks.

        $_SESSION["serial"] = $conn->insert_id;

        $conn->close(); // -- Close the connection. But, it will be closed automatically when the script ends.
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

      clearPost();
    }
  }

  if (@$_SESSION["serial"]) {
    echo "<p>Serial: ".$_SESSION['serial']."</p>";
  } else {
    include '../views/start.php';
  }
  
?>