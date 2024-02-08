<!Doctype html>
  <head lang="fr">
    <meta charset="utf-8"/>
    <title>Mon premier formulaire</title>
  </head>
  <body>
    <form method="POST" action="connexion.php>
        <label for="inputLogin">Entrez votre login :</label>
        <input type="text" name="login" id="inputLogin" required>
        <label for="inputMdp">Entrez votre mot de passe :</label>
        <input type="password" name="password" id="inputMdp" required>
        <input type="submit" value="Envoyer">
    </form>
  </body>
</html>
<?php
$userID = 1;
$username = 'toto';

    
    foreach ($connexion as $userID => $userData) 
      var_dump($userData);
      foreach ($userData as $userID => $password) {  
      if (isset($userData[$username]) && $userData[$username] === $password) {
        
            echo "Bienvenue, $username !";
            break;
        }
    }

    // Si l'authentification échoue
    echo "Nom d'utilisateur ou mot de passe incorrect.";


?>