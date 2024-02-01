<?php
switch($action)
{
    case'reponse':
        {
          var_dump($_REQUEST);
            echo $signe["Sagittaire"];
        break;
    }
    default:
    {include 'views/choix.php';}
}