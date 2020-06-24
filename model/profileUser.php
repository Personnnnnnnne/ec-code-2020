<?php

require_once( 'database.php' );

class profileUser
{
    protected $id;
    protected $email;
    protected $password;

    /***************************
     * -------- SETTERS ---------
     ***************************/

    public function setNewEmail($email){

        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception( 'Email incorrect' );
        endif;

        $this->email = $email;
    }

    public function setNewPassword($password){

        $this->password = $password;
    }

    /***************************
     * -------- GETTERS ---------
     ***************************/
    public function getNewPassword() {
        return $this->password;
    }

    public function getNewEmail(){
        return $this->email;
    }

    /***************************
     * ---- CHANGE PASSWORD ----
     **************************
     * @param $password
     */

    public static function changePassword($password){

        $db   =init_db();

        $req  =   $db->prepare("UPDATE 'user' SET $password= '' WHERE 'user'.'id'=?");
        $req->execute( array($password->getNewPassword() ) );

    }

    /***************************
     * ----- CHANGE EMAIL------
     ***************************/

    public static function changeEmail($email){

        $db   =init_db();

        $req  =   $db->prepare("UPDATE 'user' SET 'email'= $email WHERE 'user'.'id'=?");
        $req->execute( array( $email->getEmail() ) );

    }

    /***************************
     * ---- DELETE ACCOUNT -----
     ***************************/

    public static function deleteAccount(){

        $db   =init_db();

        $req  =   $db->prepare("DELETE FROM 'user' WHERE id=?");
        $req->execute();

        $db = null;

    }
}