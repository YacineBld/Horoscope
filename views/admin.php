<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<form method="POST" action="index.php?action=administrer">
    <?php foreach ($signe as $k=>$v):?>
        <label for="signe"><?=$k?></label>
        <input name=<?=$k?> id="commentaire" type="text" value="<?=$v?>">
    <br>
        <?php endforeach?>
        <input type = "submit" value = "OK">
        
    </form>