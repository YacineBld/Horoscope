<?php
include 'models/data.php';

function getLeSigne($choix){
  $leSigne = getLesSignes();
  return $leSigne[$choix];
}
function getConnexion($username, $password)
{
  $sql="SELECT COUNT(*) as nb FROM connexion WHERE login = '$username' and mdp = '$password'";
  var_dump($sql);
  return executerRequete($sql)->fetch(); 
}
function getDataSignes(){
  $sql = "SELECT * FROM astrologie";
  var_dump($sql);
  return executerRequete($sql)->fetchAll();
}
function getLesSignes(){
  $tab = getDataSignes();

  foreach ($tab as $k) :
    $signes[$k['signe']] = $k['horoscope'];
    endforeach;
    return $signes;
}
function getModifier($username, $password)
{
  $sql="UPDATE(*) FROM connexion WHERE login = '$username' and mdp = '$password'";
  var_dump($sql);
  connexion()->exec($sql);
}