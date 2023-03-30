<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html lang="pl"> 
<head>
<meta charset="utf-8" />
<title>Kalkulator BMI</title>
 <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<h1 style = "margin: 20px">Kalkulator BMI </h1>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class = "pure-form pure-form-stacked" style="margin: 20px"> 
	<label for="id_wzrost">wzrost(cm): </label>  
	<input id="id_wzrost" type="text" name="wzrost" value="<?php if(isset($wzrost)) print($wzrost) ?>" /><br /> 
	<label for="id_waga">waga(kg): </label>
	<input id="id_waga" type="text" name="waga" value="<?php  if(isset($waga)) print($waga); ?>" /><br />
    <span>płeć:</span>
	
	<div style="display: flex;"> 
        <input id="kobieta" type="radio" name="plec" value = "kobieta" class="pure-radio"  <?=(isset($plec) && $plec==="kobieta") ? "checked" : ""?>/>
        <label for="kobieta "> &nbspkobieta&nbsp </label>
        <input id="mezczyzna" type="radio" name="plec" value = "mezczyzna" class="pure-radio" <?=(isset($plec) && $plec==="mezczyzna") ? "checked" : ""?>/>
        <label for=" mezczyzna "> &nbspmężczyzna  </label>
    </div>
	
	<label for="checkbox-radio-option-two" class="pure-radio">
    <button type='submit' value='oblicz bmi' class="pure-button pure-button-primary" >oblicz</button>  
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-primary">wyloguj</a>
	
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
<?php echo 'twój wynik to: '.$przedzial; ?><br/>
<?php //admin ma wgląd do dokladnej wartosci BMI
	if ($_SESSION['role'] == 'admin'){ 
		echo 'twoje BMI wynosi: '.number_format($result, 2, ".", ""); 
	} ?>
</div>
<?php } ?> 

</body>
</html>