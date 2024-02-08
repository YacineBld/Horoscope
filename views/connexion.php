<!Doctype html>
  <head lang="fr">
    <meta charset="utf-8"/>
    <title>Mon premier formulaire</title>
  </head>
  <body>
    <form method="POST" action="index.php?action=connexion">
        <label for="inputLogin">Entrez votre login :</label>
        <input type="text" name="username" id="inputLogin" required>
        <label for="inputMdp">Entrez votre mot de passe :</label>
        <input type="password" name="password" id="inputMdp" required>
        <input type="submit" value="Envoyer">
    </form>
  </body>
</html>
