<?php

require_once( 'database.php' );

class media {

  public static function filterMedias( $title ) {

    // Open database connection
    $db   = init_db();

      $req  = $db->prepare( "SELECT * FROM media WHERE title LIKE ? ORDER BY release_date DESC" );
      $req->execute( array( '%' . $title . '%'));

    // Close databse connection
    $db   = null;

    return $req->fetchAll();

  }

    public static function genreActionMedia($genre_id){

      $db   =init_db();

      $req  =   $db->prepare("SELECT * FROM media WHERE genre_id =1 ORDER BY release_date DESC");
      $req->execute(array('%'.$genre_id.'%'));

      $db   = null;

      return $req->fetchAll();

    }

    public static function genreHorreurMedia($genre_id){

        $db   =init_db();

        $req  =   $db->prepare("SELECT * FROM media WHERE genre_id =2 ORDER BY release_date DESC");
        $req->execute(array('%'.$genre_id.'%'));

        $db   = null;

        return $req->fetchAll();

    }

    public static function genreSfMedia($genre_id){

        $db   =init_db();

        $req  =   $db->prepare("SELECT * FROM media WHERE genre_id =3 ORDER BY release_date DESC");
        $req->execute(array('%'.$genre_id.'%'));

        $db   = null;

        return $req->fetchAll();

    }
}
