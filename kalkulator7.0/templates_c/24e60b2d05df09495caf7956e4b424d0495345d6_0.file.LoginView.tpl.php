<?php
/* Smarty version 3.1.30, created on 2023-05-22 22:37:56
  from "C:\xampp\htdocs\projekty\kalkulator7.0\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_646bd2a4abd0e1_02546783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24e60b2d05df09495caf7956e4b424d0495345d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekty\\kalkulator7.0\\app\\views\\LoginView.tpl',
      1 => 1684090081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_646bd2a4abd0e1_02546783 (Smarty_Internal_Template $_smarty_tpl) {
?>


 <head>
	<title>Logowanie</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
	<style>
		body {
			background-color: #f1f1f1;
		}
		#wrapper {
			margin: 0 auto;
			padding: 3em;
			max-width: 800px;
		}
		h1 {
			font-size: 2em;
			margin-bottom: 0.5em;
		}
		.container {
			background-color: #fff;
			padding: 2em;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.container input[type="text"],
		.container input[type="password"] {
			width: 100%;
			padding: 0.5em;
			margin-bottom: 1em;
			border: 1px solid #ccc;
			border-radius: 3px;
		}
		.container button {
		
			background-color: #4CAF50;
			border: none;
			color: white;
			cursor: pointer;
			border-radius: 3px;
			font-size: 1em;
			width: 100%;
		}
		.container button:hover {
			background-color: #45a049;
		}
		.container p {
			margin-bottom: 1em;
		}
		.container .col-8 {
			width: 100%;
		}
		.container button span {
			display: inline-block;
			vertical-align: middle;
		}
		.cta{
			margin:0;
		}
	</style>
</head>
<body>
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<!-- Content -->
				<section>
					<header class="main" style="display:flex;flex-direction:column;align-items:center">
						<h1>Logowanie</h1>
						<h4 style="font-weight:100;">zaloguj się aby skorzystać z kalkulatora BMI</h4>
					</header>
					
					<div class="container">
						<form method="post" action="#" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall">
									<input type="text" name="login" id="id_login" placeholder="login" />
								</div>
								<div class="col-8 col-12-xsmall">
									<input type="password" name="pass" id="id_pass" placeholder="hasło" />
								</div>
								<div class="col-12">
									<button type="submit" value="zaloguj" class="button primary">
										<span>Zaloguj</span>
									</button>
								</div>  
								<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

							</div>
						</form>
					</div>
				</section><?php }
}
