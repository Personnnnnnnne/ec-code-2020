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

}