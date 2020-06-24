<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function mediaPage() {

  $search = isset( $_GET['titl'] ) ? $_GET['titl'] : null;
  $medias = media::filterMedias( $search );

  require('view/mediaListView.php');

}

function filmPage() {

    $medias = media::filmMedia();
    require('view/mediaListView.php');

}

function seriePage() {

    $medias = media::serieMedia();
    require('view/mediaListView.php');
}