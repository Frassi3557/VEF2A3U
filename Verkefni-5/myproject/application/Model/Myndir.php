<?php

/**
 * Class Songs
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;

use Mini\Core\Model;

class Myndir extends Model
{
  /**
  * Get all songs from database
  */
  
  public function getAllPictures()
  {
    $sql = "SELECT * FROM myndir";
    $query = $this->db->prepare($sql);
    $query->execute();
    
    // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
    // core/controller.php! If you prefer to get an associative array as the result, then do
    // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
    // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
    return $query->fetchAll();
  }
  
  public function getAllPicturesAZ()
  {
    $sql = "SELECT * FROM myndir ORDER BY myndaheiti";
    $query = $this->db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }
  
  public function getAllUsers()
  {
    $sql = "SELECT * FROM notandi";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }
  
  public function getTableCount()
  {
    $sql = "SELECT COUNT(*) FROM myndir";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }
  
}