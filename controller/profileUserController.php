<?php

require_once( 'model/profileUser.php' );

/***************************
 * ----- LOAD HOME PAGE -----
 ***************************/

function profileUserPage (){

}

function changePasswordProfileUser(){

    $medias = profileUser::changePassword();
    require('view/profileUserView.php');
}

function changeEmailProfileUser(){

    $medias = profileUser::changeEmail();
    require('view/profileUserView.php');
}

function deleteProfileUser(){

    $medias = profileUser::deleteAccount();
    require('view/profileUserView.php');
}
