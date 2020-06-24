<?php

require_once( 'controller/homeController.php' );
require_once( 'controller/loginController.php' );
require_once( 'controller/signupController.php' );
require_once('controller/mediaController.php');
require_once('controller/detailController.php');

/**************************
* ----- HANDLE ACTION -----
***************************/


if ( isset( $_GET['action'] ) ):

  switch( $_GET['action']):

    case 'login':

      if ( !empty( $_POST ) ) login( $_POST );
      else loginPage();

    break;

    case 'signup':

      if ( !empty($_POST ) ) signup( $_POST );
      else signupPage();

    break;

    case 'logout':

      logout();

    break;

  endswitch;

else:


  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( $user_id ):
      if ( isset( $_GET['media'] ) ) {

          if ($_GET['media']) {
            detailPage( $_GET['media']);
          }
      }
    else{
        mediaPage();
    }

  else:
    homePage();
  endif;
endif;

// Navigation on profile user
if (isset ($_GET['mediatype'])) {

    switch ($_GET['mediatype']) {

        case 'filmpage':
            filmPage();
            break;

        case 'seriepage':
            seriePage();
            break;

    }
}

//Navigation on FilmsView or SeriesView
if (isset ($_GET['profileuser'])) {

    switch ($_GET['profileuser']) {

        case 'profilePage':
            profileUserPage($_GET['profileuser']);
            break;

        case 'changeemail':
            changeEmailProfileUser();
            break;

        case 'changepassword':
            changePasswordProfileUser();
            break;

        case 'deleteaccount':
            deleteProfileUser();
            break;
    }
}

if (isset ($_GET['conatctus'])){
    if($_GET['conatctus']){
        contactUsPage();
    }
    else{
        mediaPage();
    }
}

if (isset ($_GET['history'])){
    if ($_GET['history']){
        historyPage();
    }
    else{
        mediaPage();
    }
}
