<?php
if (!session_id()) session_start();
if (!$_SESSION['loggedin']){
    header("Location: index.php");
    exit;
}
else{ 
  session_destroy();
  session_unset();
  header("Location: index.php");
  exit;
}
?>