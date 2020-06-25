<?php ob_start(); ?>

<div class="row">
    <div class="col-md-4 offset-md-8">
        <form method="get">
                <div class="form-group has-btn">
                    <input type="search" id="search" name="title" value="<?= $search; ?>" class="form-control"
                           placeholder="Rechercher un film ou une série">

                    <button type="submit" class="btn btn-block bg-red">Valider</button>

                </div>
            <div class="profile">
                <ul>
                    <li><a href="index.php?action=genreactionpage">Action</a></li>
                    <li><a href="index.php?action=genrehorreurpage">Horreur</a></li>
                    <li><a href="index.php?action=genresfpage">Science-Fiction</a></li>
                </ul>
            </div>
        </form>
    </div>
</div>

<div class="media-list">
    <?php foreach( $medias as $media ): ?>
        <a class="item" href="index.php?media=<?= $media['id']; ?>">
            <div class="video">
                <div>
                    <iframe allowfullscreen="" frameborder="0"
                            src="<?= $media['trailer_url']; ?>" ></iframe>
                </div>
            </div>
                <div class="title">
                    <?= $media['title']; ?>
                </div>
                <?php if ($media['type'] == 'Série'):?>
                    <div class="title"><?= $media['type']; ?></div>
                <?php endif; ?>
        </a>

    <?php endforeach; ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>


