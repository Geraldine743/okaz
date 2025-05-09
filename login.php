<?php require_once 'templates/header.php'; ?>

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
        <button class="btn btn-primary w-100 py-2" type="submit">Connexion</button>
    </form>
</div>

<?php require_once 'templates/footer.php'; ?>