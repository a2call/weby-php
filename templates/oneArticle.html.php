<?php include 'templates/header.html.php'; ?>
<div class="container">
    <?php foreach($this->get('articles') as $articles) { ?>
        <div class="row">
            <div class="blog-post">
                <h2 class="blog-post-title"><?= $articles['title']; ?></h2>
                <p class="blog-post-meta"><?= $articles['date_add']; ?>,
                    <a href="#"><?= $articles['autor']; ?></a>,
                    kategoria <?= $articles['name']; ?></p>
                <div class="well well-lg"><?= $articles['content']; ?></div>
            </div>
        </div>
    <?php } ?>
</div>

<?php include 'templates/footer.html.php'; ?>