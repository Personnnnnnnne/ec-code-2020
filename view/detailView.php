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

<div class="media-list">
    <?php foreach( $medias as $media): ?>
        <a class="item" href="index.php?media=<?= $media['id']; ?>">
            <div class="video">
                <div>
                    <iframe allowfullscreen="" frameborder="0"
                            src="<?= $media['trailer_url']; ?>" ></iframe>
                </div>
            </div>
            <div class="title"><?= $media['title']; ?></div>
            <div class="title"><?= $media['summary']; ?></div>
            <div class="title"><?= $media['trailer_url']; ?></div>
            <div class="title"><?php
                $duration = gmdate("H:i", $media['duration']);
                echo str_replace(":", "h", $duration); ?>
            </div>

        </a>
    <?php endforeach; ?>

    <div class="media-list">
        <?php foreach ($number_saisons as $saison): ?>
        <h2>Saison <?php print_r($saison['saison_number'])?></h2>
            <?php foreach ($number_episodes as $episode): ?>
                <?php if ($episode['saison_number'] == $saison['saison_number']):?>
                    <a class="item" href="<?= $episode['url']; ?>">

                        <div class="title"> <?= $episode['title'];?></div>
                        <div class="title"><?php
                            $duration = gmdate("H:i", $episode['duration']);
                            echo str_replace(":", "h", $duration); ?>
                        </div>
                        <div class="title"> <?= $episode['summary'];?></div>
                        <div class="title"> Lancer la lecture</div>


                    </a>
                <?php endif;?>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>




<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
