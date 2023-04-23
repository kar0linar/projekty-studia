<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
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
		<section>
			<h3 id="form">Podaj wagę oraz wzrost:</h3>
			<form method="post" action="#">
				<div class="row gtr-uniform gtr-50">
					<div class="col-6 col-12-xsmall">
						<input type="text" name="y" id="y" value="" placeholder="waga" />
					</div>
					<div class="col-6 col-12-xsmall">
						<input type="text" name="x" id="x" value="" placeholder="wzrost" />
					</div>
					
					<div class="col-12">
						<select name="plec" id="plec">
							<option value="k">wybierz płeć</option>
							<option value="k">kobieta</option>
							<option value="m">mężczyzna</option>
						</select>						

					<div class="col-12"><button type='submit' value='oblicz'>oblicz</button></div>  
					<div class="col-12">

									<div>
									<div><br>
									{if ($res->result!=0)}
									<h3> Wynik: {$res->result|string_format:"%.2f"}</h3>
									{/if}
									{* wyświeltenie listy błędów, jeśli istnieją *}
									{if $msgs->isError()}
										<h4>Wystąpiły błędy: </h4>
										<ol class="err">
										{foreach $msgs->getErrors() as $err}
										{strip}
											<li>{$err}</li>
										{/strip}
										{/foreach}
										</ol>
									{/if}
									
									{* wyświeltenie listy informacji, jeśli istnieją *}
									{if $msgs->isInfo()}
										<h4>Informacje: </h4>
										<ol class="inf">
										{foreach $msgs->getInfos() as $inf}
										{strip}
											<li>{$inf}</li>
										{/strip}
										{/foreach}
										</ol>
									{/if}
									
									<div>
									{if ($res->result!=0) and ($res->result<18.5)}
										<strong>BMI</strong> mniejsze niż <strong>18.5<br> Niedowaga</strong>.
									{elseif ($res->result!=0) and ($res->result<25)}
										<strong>BMI</strong> pomiędzy <strong>18.5 a 25<br> Waga w normie</strong>.
									{elseif ($res->result!=0) and ($res->result<30)}
										<strong>BMI</strong> pomiędzy <strong>25 a 30<br> Nadwaga</strong>.
									{elseif ($res->result!=0)}
										<strong>BMI</strong> większe niż <strong>30<br> Otyłość. Skonsultuj się z lekarzem</strong>.
									{/if} 
							</form>
						</section>

				</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>