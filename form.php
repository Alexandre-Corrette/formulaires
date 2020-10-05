<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="thanks.php" method="post">
    <div>
        <label for="firstName">Your Firts Name</label>
        <input type="text" id="firstName" name="user_Fname">
    </div>
    <div>
        <label for="name">Your Name</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="email">your mail</label>
        <input type="email" id="email" name="user_mail">
    </div>
    <div>
        <label for="phone">Your Name</label>
        <input type="number" id="phone" name="user_phone">
    </div>
    <div>
        <label for="sujet">Choose a subject</label>
        <select name="sujet" id="sujet">
            <option value="html" name="html" >html</option>
            <option value="css" name="css" >css</option>
            <option value="php" name="php" >php</option>
        </select>

    </div>
    <div>
        <label for="message">Your message</label>
        <textarea name="user_message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Send</button>
    </div>



</form>
<?php
  var_dump($_POST);
?>
    
</body>
</html>