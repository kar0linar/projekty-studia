<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
//session_start();

function getParams(&$wzrost,&$waga,&$plec){
    $wzrost = isset($_REQUEST['wzrost']) ? $_REQUEST['wzrost'] : null;
	$waga = isset($_REQUEST['waga']) ? $_REQUEST['waga'] : null;
	$plec = isset($_REQUEST['plec']) ? $_REQUEST['plec'] : null;	   
}


function validate(&$wzrost,&$waga,&$plec,&$messages){

	if ( ! (isset($wzrost) && isset($waga) && isset($plec))) {

    	return false;
	}

	if ( $wzrost == "") {
		$messages [] = 'Nie podano wzrostu';
	}
	if ( $waga == "") {
		$messages [] = 'Nie podano wagi';
	}

	if (count ( $messages ) != 0) return false;
	
	if (! is_numeric( $wzrost )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $waga )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

	return count ( $messages ) == 0;
}

function process(&$wzrost,&$waga,&$plec,&$przedzial,&$messages,&$result){
	global $role;
	
    $wzrost = floatval($wzrost);
	$waga = intval($waga);
    $result = $waga/(($wzrost/100)**2);
    if( $plec == "kobieta"){
        $dolny =19;
        $gorny =24;
    }else {
        $dolny =20;
        $gorny =25;
    }

    if($result<= $dolny){
       $przedzial = "niedowaga";

    } else if($result>= $gorny){
        $przedzial = "nadwaga";

    } else {
        $przedzial = "waga w normie";
    }
	
}

$wzrost = null;
$waga = null;
$plec = null;
$result = null;
$przedzial = null;
$messages = array();

getParams($wzrost,$waga,$plec);
if ( validate($wzrost,$waga,$plec,$messages) ) { 
	process($wzrost,$waga,$plec,$przedzial,$messages,$result);
}

include 'calc_view.php';