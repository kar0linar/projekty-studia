<?php
/* Smarty version 4.3.1, created on 2023-04-17 23:20:48
  from 'C:\xampp\htdocs\projekty\kalkulator3.0\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643db8304c9bf0_83892814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '628421410c0a7212e914dd85c0a7c031377cf115' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekty\\kalkulator3.0\\app\\calc_view.tpl',
      1 => 1681766445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643db8304c9bf0_83892814 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
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

						<form method="post" action='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php'>
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
			<h4> twoje BMI wynosi: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['result']->value);?>
 </h4>
			<h4> wynik: <span style="color:<?php if ($_smarty_tpl->tpl_vars['przedzial']->value == 'niedowaga' || $_smarty_tpl->tpl_vars['przedzial']->value == 'nadwaga') {?>#f86c6c <?php } else { ?> #98fb98 <?php }?>"><?php echo $_smarty_tpl->tpl_vars['przedzial']->value;?>
 </span></h4>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
!</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	

			</div>
			<header id="header">
			<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
			
		</header>
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
