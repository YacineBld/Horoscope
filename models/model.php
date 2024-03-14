<?php
include 'models/data.php';

function getConnexion($username, $password)
{
  $sql="SELECT COUNT(*) FROM astrologie WHERE login = 'username' and mdp = '$password'";
  return executerRequete($sql)->fetchAll(); 
}
function getLesSignes()
{
  $signe = signe();
  return $signe;
}
function getLeSigne($choix)
{
  $signe = signe();
  return $signe[$choix];
}
