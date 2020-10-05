<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Merci <?php echo $_POST["user_Fname"] . " " . $_POST["user_name"] ?> de nous avoir contacté à propos de <?php echo $_POST["sujet"] ?> </p>

<p>Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST["user_mail"] ?> ou par téléphone au <?php echo $_POST["user_phone"] ?> dans les plus brefs délais pour traiter votre demande :</p>  

<?php echo $_POST["user_message"] ?>
    
</body>
</html>