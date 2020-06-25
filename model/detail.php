<?php

require_once( 'database.php' );

class detail
{

    public static function detailMedia( $title){
        //Open database connection
        $db   =init_db();

        //request to filter * item by id order by date
        $req  =   $db->prepare("SELECT * FROM media WHERE id=? ORDER BY release_date DESC");
        $req->execute(array($title));

        //Close database connection
        $db   = null;

        return $req->fetchAll();
    }

    public static function getSaisons($id){
        //Open database connection
        $db   =init_db();

        //request to get saison by saison id
        $req  =   $db->prepare("SELECT saison_number FROM episode WHERE serie_id = ? GROUP BY saison_number");
        $req->execute(array($id));

        //Close database connection
        $db   = null;

        return $req->fetchAll();
    }

    public static function getEpisodes($id){
        //Open database connection
        $db   =init_db();

        //request to get episode where serie id
        $req  =   $db->prepare("SELECT * FROM episode WHERE serie_id = ?");
        $req->execute( array($id));

        //Close database connection
        $db   = null;

        return $req->fetchAll();
    }


}