<?php

require_once( 'model/user.php' );

/****************************
* ----- LOAD SIGNUP PAGE -----
****************************/

function signupPage() {

  $user     = new stdClass();
  $user->id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( !$user->id ):
    require('view/auth/signupView.php');
  else:
    require('view/homeView.php');
  endif;

}

/***************************
* ----- SIGNUP FUNCTION -----
***************************/

function signup( $post ) {

    $data           = new stdClass();
    $data->email    = $post['email'];
    $data->password = $post['password'];
    $data->password_confirm = $post['password_confirm'];

    $user           = new User( $data );
    $userData       = $user->getUserByEmail();

    if( $userData ==""):
        $error_msg      = "Email est déjà utilisé";
        if(($post['password'] == $post['password_confirm']) ):
            $user->createUser();
            print_r("password");



            // Set session
            //$_SESSION['user_id'] = $userData['id'];

            header( 'location: index.php ');
        else:
            print_r("difference de mdp");

            $error_msg = "Les mots de passes sont différents";
        endif;
    endif;

    //require('view/auth/signupView.php');
}
