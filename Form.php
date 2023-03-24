<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <h1 class="border rounded text-center p-3 m-5 bg-light">Inscription</h1>


        <form action="thanks.php" method="post">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="user_lastname" required>
            </div>
            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="user_firstname" required>
            </div>
            <div>
                <label for="courriel">Courriel :</label>
                <input type="email" id="courriel" name="user_email" required>
            </div>
            <div>
                <label for="phonenumber">Numéro de téléphone :</label>
                <input type="tel" id="phonenumber" name="user_telephone" required>
            </div>
            <div>
                <label for="sujet">Sujet :</label>
                <select id="sujet" name="user_sujet" required>
                    <option value="demande">Demande d'information</option>
                    <option value="reclamation">Réclamation</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="user_message" required></textarea>
            </div>
            <div class="button">
                <button type="submit">Envoyer votre message</button>
            </div>
        </form>
        <?php

        ?>
    </main>
</body>

</html>
