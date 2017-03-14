<?php
 // if the form has been submitted, process the input text
if (isset($_POST['url'])) {

  $name = htmlspecialchars($_POST['title']);
	$url = htmlspecialchars($_POST['url']);
  
  $string_json = file_get_contents('myndir.json');
  $json_myndir = json_decode($string_json);
  
  if (!$json_myndir) {
    trigger_error('JSON FAIL:  ' . json_last_error(), E_USER_ERROR);
  } 
  
  $new = new StdClass;
  $new->name = $name;
  $new->url = $url;
  
  $json_myndir->myndirFylki[] = $new;
  
  $final_obj = json_encode($json_myndir);
  file_put_contents('myndir.json', $final_obj);

  header('Location:http://tsuts.tskoli.is/2t/0506992429/VEF2A3U/Verkefni-6/');
  exit;
  
}