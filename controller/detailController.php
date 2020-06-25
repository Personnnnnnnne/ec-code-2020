<?php

require_once( 'model/detail.php' );

/***************************
 * ----- LOAD HOME PAGE -----
 ***************************/

function detailPage( $id ){

    $medias = detail::detailMedia( $id );
    //if media type equal serie, we get saisons and episodes
    if($medias[0]['type'] == 'Série'):
        $number_saisons = detail::getSaisons($id);
        $number_episodes = detail::getEpisodes($id);

    endif;
    require('view/detailView.php');

}