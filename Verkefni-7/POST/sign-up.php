<?php

  if (isset($_POST['email'])) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $pass = $_POST['passw'];
    
    try {
        $sql = "INSERT INTO notandi
        (fname, lname, pass, email)
        VALUES
        (:fname,:lname,:pass,:email);";
      
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':fname', $fname);
        $statement->bindValue(':lname', $lname);
        $statement->bindValue(':pass', $pass);
        $statement->bindValue(':email', $email);
        $inserted = $statement->execute();	
      
    }
    header('Location: index.php');
  }