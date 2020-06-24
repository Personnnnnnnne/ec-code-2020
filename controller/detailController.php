<?php

require_once( 'model/detail.php' );

/***************************
 * ----- LOAD HOME PAGE -----
 ***************************/

function detailPage( $id ){

    $medias = detail::detailMedia( $id );
    require('view/detailView.php');

}