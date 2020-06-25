<?php

require_once( 'database.php' );

class detail
{

    public static function detailMedia( $title){
        $db   =init_db();

        $req  =   $db->prepare("SELECT * FROM media WHERE id=? ORDER BY release_date DESC");
        $req->execute(array($title));

        $db   = null;

        return $req->fetchAll();
    }

    public static function getSaisons($id){
        $db   =init_db();

        $req  =   $db->prepare("SELECT saison_number FROM episode WHERE serie_id = ? GROUP BY saison_number");
        $req->execute(array($id));

        $db   = null;

        return $req->fetchAll();
    }

    public static function getEpisodes($id){

        $db   =init_db();

        $req  =   $db->prepare("SELECT * FROM episode WHERE serie_id = ?");
        $req->execute( array($id));

        $db   = null;

        return $req->fetchAll();
    }


}