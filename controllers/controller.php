<?php
switch($action)
{
    case'reponse':
        {
          var_dump($_REQUEST);
            $liste=$_REQUEST['liste'];
            $texte=getLesSignes($liste);
            include 'views/reponse.php';
                break;
        }
        case 'connexion' :
           {
            $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];  
            $flag=getConnexion($username, $password);  
            
          if ($flag){
            $data = GetLesSignes();
            $signe = array();

          foreach ($data as $element) {
          $signe[$element['signe']] = $element['horoscope'];
          }

              var_dump($signe);
             include 'views/choix.php';
          }else{
            include 'views/connexion.php';
          }

            break;
            }
            
            case 'modifier' :
              {
                  
                include 'views/admin.php';
                break;
              }
              case 'administrer' : 
                var_dump($_REQUEST);
            default:
    {include 'views/connexion.php';}
          }        





