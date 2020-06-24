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

    <div class="form-group">
        <label for="email">Nouvelle adresse email</label>
        <input type="email" name="email" value="" id="email" class="form-control" />
    </div>

    <div>
        <input type="submit" name="Valider" class="btn btn-block bg-red" />
    </div>

    <div class="form-group">
        <label for="password">Nouveau mot de passe</label>
        <input type="password" name="password" id="password" class="form-control" />
    </div>

    <div>
        <input type="submit" name="Supprimer mon compte" class="btn btn-block bg-red" />
    </div>

    <br>

    <h3 class="profile"><a href="index.php?action=deleteaccount">Supprimer mon compte</a></h3>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>