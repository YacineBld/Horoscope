<?php
include 'models/data.php';

function getConnexion($username, $password)
{
  $sql="SELECT COUNT(*) FROM connexion WHERE login = '$username' and mdp = '$password'";
  var_dump($sql);
  return executerRequete($sql)->fetchAll(); 
}
function getLeSignes($liste)
{
  
  $sql = "SELECT horoscope FROM astrologie";
  return executerRequete($sql)->fetchAll(); 
}
  
function getLesSignes()
{
  $sql = "SELECT * FROM astrologie";
  return executerRequete($sql)->fetchAll(); 
}

