<?php


//          if  get page                            else
$page = isset($_GET['page']) ? $_GET['page'] : 'acceuil';

switch($page)
{
    case 'acceuil':
        include_once 'view/acceuil.php';
        break;

    // case 'cat':
    //     include_once 'controller/guestbookController.php';
    //     $users = new guestbookController;
    //     $users->gestionloginbook();
    //     break;

    case 'login':
        include_once 'controller/usersController.php';
        $users = new usersController;
        $users->gestionRequest();
        break;

    default :
    include 'view/404.php';
}