<?php

require_once( 'database.php' );

class media {

  protected $id;
  protected $genre_id;
  protected $title;
  protected $type;
  protected $status;
  protected $release_date;
  protected $summary;
  protected $trailer_url;

  public function __construct( $media ) {

    $this->setId( isset( $media->id ) ? $media->id : null );
    $this->setGenreId( $media->genre_id );
    $this->setTitle( $media->title );
    $this->setType( $media->type);
    $this->setStatus( $media->status);
    $this->setReleaseDate( $media->ReleaseDate);

  }

  /***************************
  * -------- SETTERS ---------
  ***************************/

  public function setId( $id ) {
    $this->id = $id;
  }

  public function setGenreId( $genre_id ) {
    $this->genre_id = $genre_id;
  }

  public function setTitle( $title ) {
    $this->title = $title;
  }

  public function setType( $type){
      $this->type = $type;
  }

  public function setStatus( $status)
  {
      $this->status = $status;
  }



  /***************************
  * -------- GETTERS ---------
  ***************************/

  public function getId() {
    return $this->id;
  }

  public function getGenreId() {
    return $this->genre_id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getType() {
    return $this->type;
  }

  public function getStatus() {
    return $this->status;
  }

  public function getReleaseDate() {
    return $this->release_date;
  }

  public function getSummary() {
    return $this->summary;
  }

  public function getTrailerUrl() {
    return $this->trailer_url;
  }

  /***************************
  * -------- GET LIST --------
  ***************************/

  public static function filterMedias( $title ) {

    // Open database connection
    $db   = init_db();

      $req  = $db->prepare( "SELECT * FROM media WHERE title LIKE ? ORDER BY release_date DESC" );
      $req->execute( array( '%' . $title . '%'));

    // Close databse connection
    $db   = null;

    return $req->fetchAll();

  }

  public static function filmMedia( $title){

      $db   =init_db();

      $req  =   $db->prepare("SELECT * FROM media WHERE type = 'Film' ORDER BY release_date DESC");
      $req->execute(array('Film', $title));

      $db   = null;

      return $req->fetchAll();
  }

    public static function serieMedia( $title){

        $db   =init_db();

        $req  =   $db->prepare("SELECT * FROM media WHERE type = 'Série' ORDER BY release_date DESC");
        $req->execute( array('Série', $title));

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
