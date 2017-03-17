<?php 
  // slóð á API, sem skilar JSON
  $url ="http://apis.is/petrol";          
  
  // JSON sótt úr API.
  $json = file_get_contents($url);

  // fáum php object 
  $json_object = json_decode($json);

  /*
  print_r($json_object);
  
    stdClass Object(
      [results] => Array
    (
      [0] => stdClass Object
      (
        [bensin95] => 199.4
        [bensin95_discount] => 196.4
        [company] => Atlantsolía
        [diesel] => 191.2
        [diesel_discount] => 188.2
        [geo] => stdClass Object
          (
            [lat] => 65.69913
            [lon] => -18.135231
          )
  
        [key] => ao_000
        [name] => Baldursnes Akureyri
      )
    )}
  */
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Verkefni 6 - API</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>
  
  <body>
    <table class="tableHover">
      <thead>
        <tr class="top-row">
        <th id="string">Fyrirtæki</th>
        <th id="string">Staðsetning</th>
        <th>Dísel</th>
        <th>Dísel - Afsláttur</th>
        <th>Bensín 95</th>
        <th>Bensín 95 - Afsláttur</th>
          </tr>
      </thead>
      
      <tbody>
        <?php foreach ($json_object->results as $value): ?>
        
          <tr class="bottom-row">
            <td><?php echo $value->company ?></td>
            <td><?php echo $value->name ?></td>
            <td id="integer"><?php echo $value->diesel ?></td>
            <td id="integer"><?php echo $value->diesel_discount ?></td>
            <td id="integer"><?php echo $value->bensin95 ?></td>
            <td id="integer"><?php echo $value->bensin95_discount ?></td>
          </tr>
        
        <?php endforeach; ?>    
      </tbody>
    </table>
  </body>
  
</html>