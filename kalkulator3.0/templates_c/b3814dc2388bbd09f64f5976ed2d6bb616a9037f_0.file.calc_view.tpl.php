<?php
/* Smarty version 4.3.1, created on 2023-04-17 22:05:21
  from 'C:\xampp\htdocs\projekty\kalkulator3.0\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643da681097ad6_76427107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3814dc2388bbd09f64f5976ed2d6bb616a9037f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekty\\kalkulator3.0\\app\\calc_view.tpl',
      1 => 1681761918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643da681097ad6_76427107 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

		<!-- Main -->
			<div id="main">
				<div class="inner">

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
				
			</header>

		<!-- Content -->
			<section>
				<header class="main">
					<h1>Kalkulator BMI</h1>
				</header>

				<hr class="major" />

		<!-- Form -->
			<h2 id="form">Podaj wagę oraz wiek</h2>
			<div class="row gtr-200">
				<div class="col-6 col-12-medium">

						<form method="post" action='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php'>
							<div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
									<input type="text" name="waga" id="waga" value="" placeholder="waga" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="wiek" id="wiek" value="" placeholder="wiek" />
								</div>
								<!-- Break -->
								<div class="col-12">
									<select name="demo-category" id="demo-category">
										<option value="">wybierz płeć</option>
										<option value="1">kobieta</option>
										<option value="1">mężczyzna</option>
									</select>
									<button type='submit' value='oblicz bmi'>oblicz</button>  
								</div>																													
						</form>
			<div> <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 </div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
