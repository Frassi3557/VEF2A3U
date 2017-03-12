<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

use Mini\Model\Myndir;

class V5Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
      
      // Instance new Model (Myndir)
        $Mynd = new Myndir();
        // getting all myndir.
        $myndir = $Mynd->getAllPictures();
        //$author = $Mynd->getCurrentUser();
        $notendur = $Mynd->getAllUsers();


       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/pictures/index.php';
        require APP . 'view/_templates/footer.php';
    }
  
    public function listi()
    {
      // Instance new Model (Myndir)
        $Mynd = new Myndir();
        // getting all myndir.
        $myndir = $Mynd->getAllPictures();
        $myndirListi = $Mynd->getAllPicturesAZ();
        $notendur = $Mynd->getAllUsers();
        $fjoldi = $Mynd->getTableCount();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/pictures/index-list.php';
        require APP . 'view/_templates/footer.php';
    }
  
    public function img()
    {
      // Instance new Model (Myndir)
        $Mynd = new Myndir();
        // getting all myndir.
        $myndir = $Mynd->getAllPictures();
        $myndirListi = $Mynd->getAllPicturesAZ();
        $notendur = $Mynd->getAllUsers();
      
      require APP . 'view/pictures/img.php';
    }
  
    public function notendur()
    {
        $Mynd = new Myndir();
        $myndir = $Mynd->getAllPictures();
        $notendur = $Mynd->getAllUsers();

        require APP . 'view/_templates/header.php';
        require APP . 'view/pictures/notendur.php';
        require APP . 'view/_templates/footer.php';
    }
  
    public function notandi()
    {
        $Mynd = new Myndir();
        $myndir = $Mynd->getAllPictures();
        $notendur = $Mynd->getAllUsers();

        require APP . 'view/_templates/header.php';
        require APP . 'view/pictures/notandi.php';
        require APP . 'view/_templates/footer.php';
    }
}
