<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function mediaPage() {

  $search = isset( $_GET['title'] ) ? $_GET['title'] : null;
  $medias = media::filterMedias( $search );

  require('view/mediaListView.php');

}

function filmPage() {

    $search = isset( $_GET['title'] ) ? $_GET['title'] : null;
    $medias = media::filmMedia( $search );
    require('view/mediaListView.php');

}

function seriePage() {

    $search = isset( $_GET['title'] ) ? $_GET['title'] : null;
    $medias = media::serieMedia( $search );
    require('view/mediaListView.php');
}