<?php
switch ($action) {
  case 'reponse': {
    $choix = $_REQUEST['choix'];
    $tab = getLeSigne($choix);
    var_dump($tab);
    include 'views/reponse.php';
    break;
  }
  case 'connexion': {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $flag = getConnexion($username, $password);

    if ($flag['nb'] == 1) {
      $signe = getLesSignes();
  
      include 'views/choix.php';
    } else {
      include 'views/connexion.php';
    }

    break;
  }

  case 'modifier': {
    $signe = getLesSignes();
    include 'views/admin.php';
    break;
  }
  case 'administrer':
    var_dump($_REQUEST);
  default: {
    include 'views/connexion.php';
  }
}





