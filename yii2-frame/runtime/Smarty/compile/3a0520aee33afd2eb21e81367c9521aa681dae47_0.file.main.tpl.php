<?php
/* Smarty version 3.1.29, created on 2016-04-11 13:40:02
  from "E:\Demo\yii2-frame\views\layouts\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b38b220fb87_63842003',
  'file_dependency' => 
  array (
    '3a0520aee33afd2eb21e81367c9521aa681dae47' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\layouts\\main.tpl',
      1 => 1460353200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b38b220fb87_63842003 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <?php echo '<script'; ?>
 src="/js/jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
<header id="header" class="container-fluid text-center">
    <h2 class="bg-info">头部区域</h2>
</header>
<main id="main" class="container">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</main>
<footer id="footer" class="container-fluid text-center">
    <h2 class="bg-info">尾部区域</h2>
</footer>
</body>
</html><?php }
}
