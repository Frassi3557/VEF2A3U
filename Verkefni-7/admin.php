<?php
if (!session_id()) session_start();
if (!$_SESSION['loggedin']){ 
  header("Location: index.php");
  die();
}
?>
<!DOCTYPE html>
<head>
  <title>Admin</title>
</head>

<body>
  <form action="logout.php" method="post">
    <input type="submit" value="Útskrá">
  </form>
  <h1></h1>
</body>