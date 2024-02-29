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
            //var_dump($_REQUEST );
             $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];  
            $flag=false;  
            foreach ($connexion as $userId => $userData) 
            {
        
                //var_dump($userData); 
              if (isset($userData[$username]) && $userData[$username] === $password) {
                
                    $flag=true;
                    
                }
          
            }
          if ($flag){
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