<?php

require_once( 'database.php' );

class profileUser
{
    protected $id;
    protected $email;
    protected $password;

    public function __construct( $user = null ) {

        if( $user != null ):
            $this->setNewEmail( $user->email );
            $this->setNewPassword( $user->password, isset( $user->password_confirm ) ? $user->password_confirm : false );
        endif;
    }

    /***************************
     * -------- SETTERS ---------
     ***************************/

    public function setNewEmail($email){

        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception( 'Email incorrect' );
        endif;

        $this->email = $email;
    }

    public function setNewPassword( $password ){

        $this->password = password_hash($password, PASSWORD_BCRYPT);
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
     **************************/

    public static function changePassword($password){

        $db   =init_db();

        $req  =   $db->prepare("UPDATE user SET 'password'=$password WHERE 'id'=?");
        $req->execute( array('password'  => $password));

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

    public static function deleteAccount($id){

        $db   =init_db();

        $req  =   $db->prepare("DELETE FROM 'user' WHERE 'user'.'id'=?");
        $req->execute();

        $db = null;

    }
}