<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>KalkulatorBMI</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$app_url}/assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

		<!-- Main -->
			<div id="main">
				<div class="inner">

				

		<!-- Content -->
			<section>
				<header class="main">
					<h1>Kalkulator BMI</h1>
				</header>

				<hr class="major" />

		<!-- Form -->
			<h2 id="form">Podaj wagę oraz wzrost</h2>
			<div class="row gtr-200">
				<div class="col-6 col-12-medium">

						<form method="post" action='{$app_url}/app/calc.php'>
							<div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
									<input type="text" name="waga" id="waga" value="" placeholder="waga" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="wzrost" id="wzrost" value="" placeholder="wzrost" />
								</div>
								<!-- Break -->
								<div class="col-12">
									<select name="plec" id="plec">
										<option value="k">wybierz płeć</option>
										<option value="k">kobieta</option>
										<option value="m">mężczyzna</option>
									</select>
									
								</div>		
							<div class="col-12"><button type='submit' value='oblicz'>oblicz</button></div>  
							<div class="col-12">
																																			
						</form>
			<h4> twoje BMI wynosi: {$result|string_format:"%.2f"} </h4>
			<h4> wynik: <span style="color:{if $przedzial eq 'niedowaga' or $przedzial eq 'nadwaga'}#f86c6c {else} #98fb98 {/if}">{$przedzial} </span></h4>
			{foreach from=$messages item=message}
				<li>{$message}!</li>
			{/foreach}	

			</div>
			<header id="header">
			<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
			
		</header>
			</div>

			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>