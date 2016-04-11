<?php
/* Smarty version 3.1.29, created on 2016-04-11 11:46:49
  from "E:\Demo\yii2-frame\views\user-center\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b1e29876561_26655502',
  'file_dependency' => 
  array (
    'eb14cb95ffdcdad997f4a10abe4989cca328c356' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\user-center\\index.tpl',
      1 => 1460346393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:aside.tpl' => 1,
  ),
),false)) {
function content_570b1e29876561_26655502 ($_smarty_tpl) {
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="section">
    个人信息页面
    用户名：<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
 <br/>
    md5密码： <?php echo $_smarty_tpl->tpl_vars['user']->value['pwd'];?>
 <br/>
    user_id : <?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>

    <a href="/user-center/apply-shop">申请开店</a>
</section><?php }
}
