<?php ob_start(); ?>

    <div class="row">
        <div class="col-md-4 offset-md-8">
            <form method="get">
                    <div class="form-group has-btn">
                        <input type="search" id="search" name="title" value="<?= $search; ?>" class="form-control"
                               placeholder="Rechercher un film ou une série">

                        <button type="submit" class="btn btn-block bg-red">Valider</button>

                    </div>
            </form>
        </div>
    </div>
<div>
    <H1 class="title">Historique</H1>
</div>
    <div class="media-list">
        <?php foreach( $historys as $history ): ?>
            <a class="item" href="index.php?action=historydisplay=<?= $history['id']; ?>">
                <div class="title">
                    <p>Média id</p>
                    <?= $history[media_id]; ?>
                </div>
                <div class="title">
                    <p>temps regarder</p>
                    <?= $history['watch_duration']; ?>
                </div>
            </a>
        <?php endforeach; ?>

    </div>

<div>
    <h3 class="profile"><a href="index.php?action=historydeleteall">Supprimer tout l'historique</a></h3>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>