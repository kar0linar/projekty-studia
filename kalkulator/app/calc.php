<?php
require_once dirname(__FILE__).'/../config.php';

$wzrost = $_REQUEST ['wzrost']; 
$waga = $_REQUEST ['waga'];



if ( ! (isset($wzrost) && isset($waga) && (isset($plec) || array_key_exists("plec",$_REQUEST)))) {
	
	$messages [] = 'błędne wywołanie aplikacji - brak parametrów';
} else {
    $plec = $_REQUEST ['plec'];
}

if ( $wzrost == "") {
    $messages [] = 'nie podano wzrostu';
}
if ( $waga == "") {
    $messages [] = 'nie podano wagi';
}


if (empty( $messages )) {
	
	if (! is_numeric( $wzrost )) {
		$messages [] = 'pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $waga )) {
		$messages [] = 'druga wartość nie jest liczbą całkowitą';
	}	

}

if (empty ( $messages )) { 
	
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

include 'calc_view.php';