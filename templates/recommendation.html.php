<div class="row">
    <div class="col-md-3">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3>Rekomendowane artykuły</h3>
            </div>
            <div class="panel-body">
                <?php foreach($this->get('recommendations') as $recs) { ?>
                    <div class="col-md-12"><a href="?task=articles&amp;action=one&amp;id=<?= $recs['id']; ?>"><?= $recs['title']; ?></a></div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
