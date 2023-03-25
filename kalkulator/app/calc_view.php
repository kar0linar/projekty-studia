<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html lang="pl"> 
<head>
<meta charset="utf-8" />
<title>KalkulatorBMI</title>
</head>
<body>

<h1>Kalkulator BMI</h1>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post"> 
	<label for="id_wzrost">wzrost(cm): </label>  
	<input id="id_wzrost" type="text" name="wzrost" value="<?php if(isset($wzrost)) print($wzrost) ?>" /><br /> 
	<label for="id_waga">waga(kg): </label>
	<input id="id_waga" type="text" name="waga" value="<?php  if(isset($waga)) print($waga); ?>" /><br />
    <span>płeć:</span>
    <input id="kobieta" type="radio" name="plec" value = "kobieta" <?php if(isset($plec) && $plec==="kobieta") echo"checked"; ?>/>
    <label for="kobieta">kobieta </label>
    <input id="mezczyzna" type="radio" name="plec" value = "mezczyzna" <?php if(isset($plec) && $plec==="mezczyzna") echo"checked"; ?>/>
    <label for="mezczyzna">mężczyzna </label><br /> 
    <button type='submit' value='oblicz bmi'>oblicz</button>  
	
</form>	

<?php

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">'; 
		foreach ( $messages as $key => $msg ) {
			echo "<li>$msg</li>";
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: <?php 

 if($przedzial=="niedowaga"){
    echo"#f99";
 } else if($przedzial=="nadwaga") {
    echo"#f99";
 } else{
    echo"#9f9";
 }

?>; width:300px;">
<?php echo 'twoje BMI wynosi: '.number_format($result, 2, ".", ""); ?><br/>
<?php echo 'twoj wynik to: '.$przedzial; ?>
</div>
<?php } ?>

</body>
</html>