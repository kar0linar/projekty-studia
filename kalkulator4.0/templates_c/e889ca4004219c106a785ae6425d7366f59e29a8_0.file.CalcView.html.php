<?php
/* Smarty version 3.1.30, created on 2023-04-23 21:13:50
  from "C:\xampp\htdocs\projekty\kalkulator4.0\app\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6445836ee2f3a4_72667789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e889ca4004219c106a785ae6425d7366f59e29a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekty\\kalkulator4.0\\app\\CalcView.html',
      1 => 1682277229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6445836ee2f3a4_72667789 (Smarty_Internal_Template $_smarty_tpl) {
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
						<input type="text" name="waga" id="waga" value="" placeholder="waga" />
					</div>
					<div class="col-6 col-12-xsmall">
						<input type="text" name="wzrost" id="wzrost" value="" placeholder="wzrost" />
					</div>
					
					<div class="col-12">
						<select name="plec" id="plec">
							<option value="k">wybierz płeć</option>
							<option value="k">kobieta</option>
							<option value="m">mężczyzna</option>
						</select>						

					<div class="col-12"><button type='submit' value='oblicz'>oblicz</button></div>  
					
						</form>
						<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
						<h3> Wynik: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['res']->value->result);?>
</h3>
						<h3> Przedział: <?php echo $_smarty_tpl->tpl_vars['res']->value->przedzial;?>
</h3>
						
						
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
						
					</section>
					

			</div>
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
