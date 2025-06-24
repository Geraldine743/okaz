<?php require_once 'templates/header.php';
require_once 'libs/pdo.php';
require_once 'libs/user.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $verif = verifyUser($_POST);
    if ($verif === true) {
        $resAdd = addUser($pdo, $_POST["username"], $_POST["email"], $_POST["password"]);
        header("Location: login.php");
    } else {
        $errors = $verif;
    }
}

?>


<div class="form-signin w-100 m-auto">
    <h1>Inscription</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" class="form-control">
            <?php if (isset($errors["username"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors["username"] ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control">
            <?php if (isset($errors["email"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors["email"] ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control">
            <?php if (isset($errors["password"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors["password"] ?>
                </div>
            <?php } ?>
        </div>
        <input type="submit" value="Enregistrer" class="btn btn-primary" name="add_user">
    </form>
</div>


<?php require_once 'templates/footer.php'; ?>