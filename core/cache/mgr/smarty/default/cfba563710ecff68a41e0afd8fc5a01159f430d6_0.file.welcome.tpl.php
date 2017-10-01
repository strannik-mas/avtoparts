<?php /* Smarty version 3.1.27, created on 2017-03-01 14:26:07
         compiled from "D:\domains\avtoparts\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:675158b6bddf3138b6_38523396%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfba563710ecff68a41e0afd8fc5a01159f430d6' => 
    array (
      0 => 'D:\\domains\\avtoparts\\manager\\templates\\default\\welcome.tpl',
      1 => 1483440292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '675158b6bddf3138b6_38523396',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58b6bddf31f439_38539739',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b6bddf31f439_38539739')) {
function content_58b6bddf31f439_38539739 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '675158b6bddf3138b6_38523396';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>