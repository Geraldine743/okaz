<?php require_once 'templates/header.php'; ?>
<div class="form-signin w-100 m-auto">
    <h1>Inscription</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="text" name="password" id="password" class="form-control">
        </div>
        <input type="submit" value="Enregistrer" class="btn btn-primary">
    </form>
</div>


<?php require_once 'templates/footer.php'; ?>