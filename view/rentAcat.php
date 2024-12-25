<style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

/* Style des cartes de chat */
.cat-card {
    background-color: white;
    margin: 20px auto;
    padding: 20px;
    max-width: 500px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Nom du chat */
.cat-name {
    font-size: 1.8em;
    color: #444;
    margin-bottom: 10px;
}

/* Image du chat */
.cat-image {
    width: 100%;
    max-width: 400px;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    margin-bottom: 15px;
}

/* Description */
.cat-description {
    font-size: 1em;
    color: #555;
    margin-bottom: 20px;
}

/* Lien vers plus d'infos */
.cat-link a {
    text-decoration: none;
    color: #ff6b6b;
    font-size: 1.2em;
}

.cat-link a:hover {
    color: #ff4b4b;
    text-decoration: underline;
}
</style>


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


