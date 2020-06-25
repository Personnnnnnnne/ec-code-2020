<?php

require_once( 'database.php' );

class media {

  public static function filterMedias( $title ) {

    // Open database connection
    $db   = init_db();

    //request to filter all media with seartch barre order by date
      $req  = $db->prepare( "SELECT * FROM media WHERE title LIKE ? ORDER BY release_date DESC" );
      $req->execute( array( '%' . $title . '%'));

    // Close databse connection
    $db   = null;

    return $req->fetchAll();

  }

  public static function filmMedia( $title){
      //Open database connection
      $db   =init_db();

      //request to filter all films order by date in table media
      $req  =   $db->prepare("SELECT * FROM media WHERE type = 'Film' ORDER BY release_date DESC");
      $req->execute(array('Film', $title));

      //Close databse connection
      $db   = null;

      return $req->fetchAll();
  }

    public static function serieMedia( $title){

      //Open database connection
        $db   =init_db();

        //request to filter all series order by date in table media
        $req  =   $db->prepare("SELECT * FROM media WHERE type = 'Série' ORDER BY release_date DESC");
        $req->execute( array('Série', $title));

        //Close database connection
        $db   = null;

        return $req->fetchAll();
    }

    public static function genreActionMedia($genre_id){
      //Open database conenction
      $db   =init_db();

      //request to filter all media with genre_id = 1 and order by date
      $req  =   $db->prepare("SELECT * FROM media WHERE genre_id =1 ORDER BY release_date DESC");
      $req->execute(array('%'.$genre_id.'%'));

      //Clsoe database connection
      $db   = null;

      return $req->fetchAll();

    }

    public static function genreHorreurMedia($genre_id){
        //Open database connection
        $db   =init_db();

        //request to filter all media with genre_id = 2 and order by date
        $req  =   $db->prepare("SELECT * FROM media WHERE genre_id =2 ORDER BY release_date DESC");
        $req->execute(array('%'.$genre_id.'%'));

        //Close database connection
        $db   = null;

        return $req->fetchAll();

    }

    public static function genreSfMedia($genre_id){
        //Open database conenction
        $db   =init_db();

        //request to filter all media with genre_id = 3 and order by date
        $req  =   $db->prepare("SELECT * FROM media WHERE genre_id =3 ORDER BY release_date DESC");
        $req->execute(array('%'.$genre_id.'%'));

        //Close database connection
        $db   = null;

        return $req->fetchAll();

    }
}
