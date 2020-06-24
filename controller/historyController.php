<?php

require_once( 'model/history.php' );

/***************************
 * ----- LOAD HOME PAGE -----
 ***************************/

function historyPage (){

    $historys = history::historyDisplay();
    require('view/historyView.php');

}

function deleteHistory(){

    $historys = history::historyDelete();
    require('view/historyView.php');

}

function deleteAllHistory(){

    $historys = history::historyDeleteAll();
    require('view/historyView.php');

}