<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Verkefni 6</title>
  </head>
  <body>
    <section>
    <form action="process_json.php" method="post">
    <div class="form">
      <p>Titill:
      <input type="text" name="title" placeholder="Picture" required></p>
			<p>Url: <input type="text" name="url" placeholder="http://website.com/image.jpg" required></p>
    </div>
      <p><input type="submit" value="Hlaða inn mynd"></p>
    </form>
    
    <hr>
    
    <?php 
    $string_json = file_get_contents('myndir.json');
    $json_myndir = json_decode($string_json, true);
    for ($x = 0; $x <= count($json_myndir['myndirFylki'])-1; $x++): ?> 
    <div class="image-text">
      <h1><?php echo '"' . ucfirst($json_myndir['myndirFylki'][$x]['name']) . '"'; ?></h1>
      <img class="image" src="<?= $json_myndir['myndirFylki'][$x]['url']; ?>">
    </div>
   <?php endfor; ?>
    </section>
  </body>
</html>