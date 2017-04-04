<?php
if (isset($_POST['passw']) && isset($_POST['email'])) {
  include "connection.php";
  
  try {
    $sql = "SELECT * FROM Users WHERE email ='" . $_POST['email'] . "';";
    // PDO->query(); er notað fyrir SELECT statements ONLY, skilar object af PDOStatement class
    $result = $pdo ->query($sql);
    
  } catch (Exception $e) {
    echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
  }
  // fetch() sækir eina röð í einu frá database.
  while($row = $result -> fetch()){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
  }
  
  if ($_POST['passw'] == $password && $_POST['email'] == $email) {
    if (!session_id())
      session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('Location: ../admin.php');
    die();
  }
  else{
    header("Location: ../index.php");
  }
}