<?php require_once 'templates/header.php';
require_once 'libs/pdo.php';
require_once 'libs/user.php';

$error = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = verifyUserLoginPassword($pdo, $_POST["email"], $_POST["password"]);
    var_dump($user);
    if ($user) {
        session_regenerate_id(true);
        $_SESSION["user"] = [
            "id" => $user["id"],
            "username" => $user["username"]
        ];
        header("Location: index.php");
    } else {
        $error = "Email ou mot de passe incorrect.";
    }
}
?>

<div class="form-signin w-100 m-auto">
    <form method="post">
        <h1 class="h1 mb-3 fw-normal">Se connecter</h1>
        <div class="form-floating">
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            <label for="email">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
            <label for="password">Mot de passe</label>
        </div>
        <?php if ($error): ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php endif; ?>
        <button class="btn btn-primary w-100 py-2" type="submit">Connexion</button>
    </form>
</div>

<?php require_once 'templates/footer.php'; ?>