<link rel="stylesheet" href="./view/styles/styleRentACat.css">



<?php foreach ($cats as $cat) { ?>
    <div class="cat-card">
        <h2 class="cat-name"><?= htmlspecialchars($cat['name']) ?></h2>
        <img src="<?= htmlspecialchars($cat['image']) ?>" alt="Image de <?= htmlspecialchars($cat['name']) ?>" class="cat-image">
        <p class="cat-description">
            <?= nl2br(htmlspecialchars($cat['contenu'])) ?>
        </p>
        <h2 class="cat-link">
            <a href="?page=cat&id=<?= htmlspecialchars($cat['id_cat']) ?>">Plus d'infos sur <?= htmlspecialchars($cat['name']) ?> ?</a>
        </h2>
    </div>
<?php } ?>


