<?php
/* Smarty version 3.1.30, created on 2023-05-14 20:55:52
  from "C:\xampp\htdocs\projekty\kalkulator6.0\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64612eb887f1a9_26811531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b92d20f21d3fc5fdb30b1e1528744f536acd8666' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekty\\kalkulator6.0\\app\\views\\CalcView.tpl',
      1 => 1684090549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64612eb887f1a9_26811531 (Smarty_Internal_Template $_smarty_tpl) {
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
			<header class="main" style="display: flex; justify-content: space-between;">
					<h1>Kalkulator BMI</h1>
					<div><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button primary">Wyloguj</a></div>

					
				</header>
				
				

		<!-- Form -->
		<section>
		<span style="line-height: 2.0;">twoja rola: <b style="color: #f86c6c"><?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
</b>
			<h3 id="form">Podaj wagę oraz wzrost:</h3>
			<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute">
				<div class="row gtr-uniform gtr-50">
					<div class="col-6 col-12-xsmall">
						<input type="text" name="waga" id="waga" placeholder="waga" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->waga;?>
" />
					</div>
					<div class="col-6 col-12-xsmall">
						<input type="text" name="wzrost" id="wzrost" placeholder="wzrost" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->wzrost;?>
"/>
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
						<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
						<h3> wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->przedzial;?>
</h3>			
							<h3> twoje BMI wynosi: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['res']->value->result);?>
</h3>
							
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
							<h4>błędy: </h4>
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
							<h4>info: </h4>
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
						<header id="header">
							<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
							<nav id="nav">
						
					</nav>
						</header>
					</div>

					
						
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
