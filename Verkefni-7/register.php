<head>
  <title>Nýskráning</title>
</head>
<body>
  <h1>Nýskráning Notanda</h1>
  <form method="post" action="db/insert.php">
    <p>
      <label for="name">Nafn:</label>
      <input name="name" type="text" id="name">
    </p>
    <p>
      <label for="article">Netfang:</label>
      <input name="email" type="email" id="email"></textarea>
    </p>
    <p>
      <label for="passw">Lykilorð:</label>
      <input name="passw" type="password" id="passw"></textarea>
    </p>
    <p>
      <input type="submit" name="submit" value="Staðfesta" id="submit">
    </p>
  </form>
  <a href="index.php">Skrá inn sem notandi</a>
  </body>
</html>