<?php include 'templates/header.html.php' ?>

<div class="row">
    <div class="col-md-offset-1 col-md-7">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3>Lista artykułów</h3>
            </div>
            <div class="panel-body">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <td>Tytuł</td>
                        <td>Data dodania</td>
                        <td>Autor</td>
                        <td>Kategoria</td>
                        <td>Akcja</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($this->get('articles') as $articles) { ?>
                        <tr>
                            <td><a href="?task=articles&amp;action=one&amp;id=<?= $articles['id']; ?>"><?= $articles['title']; ?></a></td>
                            <td><?= $articles['date_add']; ?></td>
                            <td><?= $articles['autor']; ?></td>
                            <td><?= $articles['name']; ?></td>
                            <td><a href="?task=articles&amp;action=delete&amp;id=<?= $articles['id']; ?>">usuń</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>

<?php include 'templates/recommendation.html.php'; ?>

<?php include 'templates/footer.html.php'; ?>