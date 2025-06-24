<?php require_once 'templates/header.php';
require_once 'libs/category.php';
$categories = getCategories();
?>

<div class="form-listing w-100 m-auto">
    <h1>Ajouter une annonce</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="75" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="categories" class="form-label">Catégories</label>
            <select name="categories" id="categories" class="form-select">
                <?php foreach ($categories as $key => $category) { ?>
                    <option value="<?= $key ?>"><?= $category["name"] ?></option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" value="Enregistrer" class="btn btn-primary">
    </form>
</div>


<?php require_once 'templates/footer.php'; ?>