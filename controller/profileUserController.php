<?php

require_once( 'model/profileUser.php' );

/***************************
 * ----- LOAD HOME PAGE -----
 ***************************/

function profileUserPage (){

    require('view/profileUserView.php');

}

function changePasswordProfileUser(){

    //Execute function changePassword
    profileUser::changePassword();
    require('view/profileUserView.php');
}

function changeEmailProfileUser(){

    //Execute function changeEmail
    profileUser::changeEmail();
    require('view/profileUserView.php');
}

function deleteProfileUser(){

    //Execute function daleteProfileUser
    profileUser::deleteAccount();
    $_SESSION = array();
    session_destroy();
    header( 'location: index.php' );
}
