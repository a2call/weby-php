<?php include 'templates/header.html.php'; ?>
<div class="col-md-offset-4 col-md-3">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3>Dodaj kategorię</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="?task=categories&action=insert" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="inputName">Nazwa kategorii:</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Wpisz nazwę kategorii">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-default">Dodaj</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'templates/footer.html.php'; ?>