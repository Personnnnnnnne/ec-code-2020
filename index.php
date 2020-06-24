<?php

require_once( 'controller/homeController.php' );
require_once( 'controller/loginController.php' );
require_once( 'controller/signupController.php' );
require_once('controller/mediaController.php');
require_once('controller/detailController.php');
require_once('controller/profileUserController.php');
require_once('controller/historyController.php');
require_once('controller/contactUsController.php');



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

      case 'profilepage':
          profileUserPage();
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

      case 'contactus':
          contactUsPage();
          break;

      case 'historydisplay':
          historyPage();
          break;

      case 'historydelete':
          deleteHistory();
          break;

      case 'historydeleteall':
          deleteAllHistory();
          break;

      case 'filmpage':
          filmPage();
          break;

      case'seriepage':
          seriePage();
          break;

      case'genreactionpage':
          genreActionPage();
          break;

      case'genrehorreurpage':
          genreHorreurPage();
          break;

      case'genresfpage':
          genreSfPage();
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

