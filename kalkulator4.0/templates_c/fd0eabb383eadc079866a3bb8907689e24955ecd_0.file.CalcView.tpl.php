<?php
/* Smarty version 3.1.30, created on 2023-04-23 19:43:55
  from "C:\xampp\htdocs\projekty\kalkulator4.0\app\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64456e5b3a7a96_13190261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd0eabb383eadc079866a3bb8907689e24955ecd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekty\\kalkulator4.0\\app\\CalcView.tpl',
      1 => 1682271832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64456e5b3a7a96_13190261 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
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
		<section>
			<h3 id="form">Podaj wagę oraz wzrost:</h3>
			<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php">
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
							<?php if (($_smarty_tpl->tpl_vars['res']->value->result != 0)) {?>
							<h3> Wynik: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['res']->value->result);?>
</h3>
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
								<h4>Wystąpiły błędy: </h4>
								<ol class="err">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
								<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</ol>
							<?php }?>
							
							
							<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
								<h4>Informacje: </h4>
								<ol class="inf">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
								<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</ol>
							<?php }?>
							
							<div>
							<?php if (($_smarty_tpl->tpl_vars['res']->value->result != 0) && ($_smarty_tpl->tpl_vars['res']->value->result < 18.5)) {?>
								<strong>BMI</strong> mniejsze niż <strong>18.5<br> Niedowaga</strong>.
							<?php } elseif (($_smarty_tpl->tpl_vars['res']->value->result != 0) && ($_smarty_tpl->tpl_vars['res']->value->result < 25)) {?>
								<strong>BMI</strong> pomiędzy <strong>18.5 a 25<br> Waga w normie</strong>.
							<?php } elseif (($_smarty_tpl->tpl_vars['res']->value->result != 0) && ($_smarty_tpl->tpl_vars['res']->value->result < 30)) {?>
								<strong>BMI</strong> pomiędzy <strong>25 a 30<br> Nadwaga</strong>.
							<?php } elseif (($_smarty_tpl->tpl_vars['res']->value->result != 0)) {?>
								<strong>BMI</strong> większe niż <strong>30<br> Otyłość. Skonsultuj się z lekarzem</strong>.
							<?php }?> 
						</form>
					</section>

			</div>
		</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
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
