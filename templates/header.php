<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
    <title>Okaz</title>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img width="120" src="assets/images/logo-okaz.png" alt="Logo Okaz">
                </a>
            </div>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
                <li><a href="annonces.php" class="nav-link px-2">Les annonces</a></li>
                <li><a href="ajout_annonce.php" class="nav-link px-2">Ajouter une annonce</a></li>
                <li><a href="#" class="nav-link px-2">FAQs</a></li>
                <li><a href="#" class="nav-link px-2">A propos</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <?php if (isset($_SESSION["user"])): ?>
                    <span>Bonjour <?= $_SESSION["user"]["username"] ?></span>
                    <a href="logout.php" class="btn btn-primary">Se déconnecter</a>
                <?php else: ?>
                    <a href="login.php" class="btn btn-outline-primary me-2">Se connecter</a>
                    <a href="inscription.php" class="btn btn-primary">S'inscrire</a>
                <?php endif; ?>
            </div>
        </header>

        <main>