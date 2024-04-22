<?php
include './traitement_toutes_pages.php';


if (
    !empty($_POST['login'])
    && !empty($_POST['password'])
    && !empty($_POST['password_conf'])
    && $_POST['password'] === $_POST['password_conf']
    && !empty($_POST['pseudo'])

    && !empty($_FILES['avatar'])
    && $_FILES['avatar']['size'] <= 1_000_000
    && $_FILES['avatar']['error'] === 0
    && str_starts_with($_FILES['avatar']['type'], 'image/')
) {

    $dossier = __DIR__ . '/avatars/';
    $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
    $nom = uniqid() . '.' . $extension;

    $succes = move_uploaded_file(
        $_FILES['avatar']['tmp_name'], // Point de départ
        $dossier . $nom // Point d'arrivée
    );

    if ($succes) {
        include './fonction_fichier_json.php';
        inscrireUtilisateurDansJSON($_POST['login'], $_POST['password'], $_POST['pseudo'], $nom);
    }

    header('location: connexion.php');
} else {
    die('Nope');
}
