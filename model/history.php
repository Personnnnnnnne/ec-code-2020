<?php

require_once( 'database.php' );

class history
{


    //Gestion de l'historique

    public static function historyDisplay() {

        // Open database connection
        $db   = init_db();

        //request to display history but not by userid
        $req  = $db->prepare( "SELECT * FROM history" );
        $req->execute(array());

        // Close databse connection
        $db   = null;

        return $req->fetchAll();

    }

    public static function historyDelete() {

        // Open database connection
        $db   = init_db();

        //request to delete one item in hisotry
        $req  = $db->prepare( "DELETE FROM history WHERE id=?" );
        $req->execute( array());

        // Close databse connection
        $db   = null;

        return $req->fetchAll();

    }

    public static function historyDeleteAll() {

        // Open database connection
        $db   = init_db();

        //request to delete all history
        $req  = $db->prepare( "DELETE FROM history");
        $req->execute( array());

        // Close databse connection
        $db   = null;

        return $req->fetchAll();

    }

}