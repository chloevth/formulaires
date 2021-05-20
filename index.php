<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Premier formulaire</title>
</head>
<body>
  
    <form action="/ma-page-de-traitement" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" value="Votre nom" id="name" name="user_name">
        </div>
        
        <div>
            <label for="mail">Email :</label>
            <input type="email" value="Votre email" id="mail" name="user_mail">
        </div>

        <div>
            <label for="nmsg">Message :</label>
            <textarea id="msg" name="user_message" >Votre message</textarea>
        </div>
    
        <div class="button">
        <button type="submit">Envoyer le message</button>
        </div>

    </form>



    <script src="main.js"></script>
</body>
</html>