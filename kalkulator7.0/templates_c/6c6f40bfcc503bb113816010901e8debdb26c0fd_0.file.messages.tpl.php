<?php
/* Smarty version 3.1.30, created on 2023-05-22 22:37:56
  from "C:\xampp\htdocs\projekty\kalkulator7.0\app\views\templates\messages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_646bd2a4af7533_21403894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c6f40bfcc503bb113816010901e8debdb26c0fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekty\\kalkulator7.0\\app\\views\\templates\\messages.tpl',
      1 => 1683832366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646bd2a4af7533_21403894 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
<div class="messages error">
	<ol>
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
</div>
<?php }
if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
<div class="messages info bottom-margin">
	<ol>
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
</div>
<?php }
}
}
