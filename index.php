<?php require_once 'templates/header.php';
require_once 'libs/listing.php';
require_once 'libs/category.php';
require_once 'libs/pdo.php';


$listings = getListing($pdo);

$categories = getCategories();

?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/images/logo-okaz.png" class="d-block mx-lg-auto img-fluid" alt="Logo Okaz" width="400" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Avec Okaz achetez et vendez vos objets</h1>
        <p class="lead">Trouvez ce que vous cherchez ou donnez une seconde vie à vos objets en un clic ! Okaz est la plateforme incontournable pour vendre, acheter ou échanger tout ce que vous souhaitez : vêtements, meubles, appareils électroniques, véhicules et bien plus encore !</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">S'inscrire</button>
        </div>
    </div>
</div>

<div class="row">
    <h2 class="pb-2 border-bottom">Les dernières annonces</h2>
    <?php foreach ($listings as $key => $listing) {
        require 'templates/listing_part.php';
    } ?>
</div>

<div class="py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Les catégories</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <?php foreach ($categories as $key => $category) {
            require 'templates/category_part.php';
        } ?>
    </div>
</div>

<?php require_once 'templates/footer.php'; ?>