<?php include 'templates/header.html.php'; ?>

<div class="row">
    <div class="col-md-offset-4 col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3>Lista kategorii</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <td>Nazwa</td>
                        <td>Akcja</td>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($this->get('catsData') as $cats) { ?>
                            <tr>
                                <td><?= $cats['name'] ?></td>
                                <td><a href="?task=categories&action=delete&id=<?= $cats['id']; ?>">usuń</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include 'templates/footer.html.php'; ?>