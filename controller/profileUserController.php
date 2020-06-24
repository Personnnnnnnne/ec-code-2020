<?php

require_once( 'model/profileUser.php' );

/***************************
 * ----- LOAD HOME PAGE -----
 ***************************/

function profileUserPage (){

    require('view/profileUserView.php');

}

function changePasswordProfileUser(){

    profileUser::changePassword();
    require('view/profileUserView.php');
}

function changeEmailProfileUser(){

    profileUser::changeEmail();
    require('view/profileUserView.php');
}

function deleteProfileUser(){

    profileUser::deleteAccount();
    $_SESSION = array();
    session_destroy();
    header( 'location: index.php' );
}
