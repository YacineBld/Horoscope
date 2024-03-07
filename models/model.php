<?php
include 'models/data.php';

function getConnexion($username, $password){
            
            $connexion = connexion();
            $flag=false;  
            foreach ($connexion as $userId => $userData) 
            {
              //var_dump($userData); 
              if (isset($userData[$username]) && $userData[$username] === $password) {
                $flag=true;    
                }
            }
            return $flag;
return $connexion;
        }
function getLeSigne($choix){

    $signe = signe();
    echo $signe[$liste];
}
