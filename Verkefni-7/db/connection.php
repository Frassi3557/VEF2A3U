<?php
# þú notar require_once() til að sækja þessa skrá á þeirri vefsíðu sem þarf á tengingu við db.
try {
  
  // tegund og nafn á miðlara, nafn á gagnagrunni.
  $source = 'mysql:host=tsuts.tskoli.is;dbname=0506992429_verkefni-7';
  $user = '0506992429';	
  $passw = '7uVB3HS48AnRnAKY';	
  
  // Sjá nánar um PDO: 
  // http://www.sitepoint.com/re-introducing-pdo-the-right-way-to-access-databases-in-php/ 
  
  # tenging við database með PDO 
  $pdo = new PDO($source, $user, $passw);
  
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
 	# Notum utf-8 og gerum það með SQL fyrirspurn exec sendir sql fyrirspurnir til database
 	$pdo->exec('SET NAMES "utf8"');

} catch (PDOException $e) {
		echo 'Tenging mistókst: ' . $e->getMessage();
		exit(); // látum php hætta keyrslu
}