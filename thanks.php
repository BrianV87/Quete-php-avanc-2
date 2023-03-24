<?php

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire 

    if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
        $errors[] = "Le prénom est obligatoire";
    if (!isset($_POST['user_lastname']) || trim($_POST['user_lastname']) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '')
        $errors[] = "L'email est obligatoire";
    if (!isset($_POST['user_telephone']) || trim($_POST['user_telephone']) === '')
        $errors[] = "Le téléphone est obligatoire";
    if (!isset($_POST['user_sujet']) || trim($_POST['user_sujet']) === '')
        $errors[] = "Le sujet est obligatoire";
    if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
        $errors[] = "Le message est obligatoire";
    if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = $_POST['user_email'] . "n'est pas une adresse e-mail valide";
    }
}

?>
<?php // Affichage des éventuelles erreurs 
if (count($errors) > 0) : ?>
    <div class="border border-danger rounded p-3 m-5 bg-danger">
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<?php
if (count($errors) > 0) {
    die();
}
echo 'Merci ' . $_POST['user_lastname'] . ' ' . $_POST['user_firstname'] . ' de nous avoir contacté à propos de ' . $_POST['user_sujet'] . '.'; ?> <br><br>
<?php
echo "Un de nos conseillers vous contactera soit à l’adresse " . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_telephone'] . ' dans les plus brefs délais pour traiter votre demande : '; ?> <br><br>
<?php
echo '"' . $_POST['user_message'] . '"';
?>
