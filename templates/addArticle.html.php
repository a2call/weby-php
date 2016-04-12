<?php include 'templates/header.html.php'; ?>
    <div class="col-md-offset-3 col-md-6">
        <div class="panel panel-primary ">
            <div class="panel-heading">
                <h3>Dodaj artykuł</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="?task=articles&action=insert" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inputTitle">Tytuł:</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Wpisz tytuł">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inputAutor">Autor:</label>
                        <div class="col-sm-10">
                            <input type="text" name="author" class="form-control" id="inputAutor" placeholder="Wpisz autora">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inputDate">Data dodania:</label>
                        <div class="col-sm-10">
                            <input type="text" name="date_add" class="form-control" id="inputDate" value="<?= date("Y-m-d h:m:s"); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inputContent">Treść:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="content" id="inputContent" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inputCat">Kategoria:</label>
                        <div class="col-sm-10">
                            <select name="cat" class="form-control">
                                <?php foreach($this->get('catsData') as $cats) { ?>
                                    <option value="<?= $cats['id'] ;?>"><?= $cats['name']; ?></option>
                                <?php } ?>
                            </select>
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