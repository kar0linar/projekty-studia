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
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
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
			<form method="post" action="{$conf->action_root}calcCompute">
				<div class="row gtr-uniform gtr-50">
					<div class="col-6 col-12-xsmall">
						<input type="text" name="waga" id="waga" placeholder="waga" value="{$form->waga}" />
					</div>
					<div class="col-6 col-12-xsmall">
						<input type="text" name="wzrost" id="wzrost" placeholder="wzrost" value="{$form->wzrost}"/>
					</div>
					
					<div class="col-12">
						<select name="plec" id="plec">
							<option value="k">wybierz płeć</option>
							<option value="k">kobieta</option>
							<option value="m">mężczyzna</option>
						</select>						
					</div>
					<div class="col-12"><button type='submit' value='oblicz'>oblicz</button></div>  
					
						</form>
						<div class="col-12">
						{if ( isset($res->result))}
						<h3> twoje BMI wynosi: {$res->result|string_format:"%.2f"}</h3>
						<h3> wynik: {$res->przedzial}</h3>
						{/if}
						{if $msgs->isError()}
							<h4>błędy: </h4>
							<ol class="err">
							{foreach $msgs->getErrors() as $err}
							{strip}
								<li>{$err}</li>
							{/strip}
							{/foreach}
							</ol>
						{/if}
						

						{if $msgs->isInfo()}
							<h4>info: </h4>
							<ol class="inf">
							{foreach $msgs->getInfos() as $inf}
							{strip}
								<li>{$inf}</li>
							{/strip}
							{/foreach}
							</ol>
						{/if}
						<header id="header">
							<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
							
						</header>
					</div>

					
						
					</section>
					

			</div>
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