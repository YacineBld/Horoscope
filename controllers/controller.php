<?php
switch($action)
{
    case'reponse':
        {
          //var_dump($_REQUEST);
            $liste=$_REQUEST['liste'];
            echo $signe[$liste];
                break;
        }
        case 'connexion' :
           {
             $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];
            
            }
    
            default:
    {include 'views/connexion.php';}
          }        