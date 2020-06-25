<?php

require_once( 'model/history.php' );

/***************************
 * ----- LOAD HOME PAGE -----
 ***************************/

function historyPage (){

    //Execute function historyDisplay
    $historys = history::historyDisplay();

    require('view/historyView.php');

}

function deleteHistory(){

    //Execute function historyDelete
    $historys = history::historyDelete();

    require('view/historyView.php');

}

function deleteAllHistory(){

    //Execute function historyDeleteAll
    $historys = history::historyDeleteAll();

    require('view/historyView.php');

}