<?php
/* Smarty version 3.1.29, created on 2016-04-11 11:19:21
  from "E:\Demo\yii2-frame\views\user\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b17b98ac907_76885123',
  'file_dependency' => 
  array (
    '250060c757f8a31248e1663a5aa17c0e4ff433c8' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\user\\login.tpl',
      1 => 1460344745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b17b98ac907_76885123 ($_smarty_tpl) {
?>
<section>
    <label for="username">用户名：</label><input type="text" id="username"/>
    <label for="pwd">密码：</label><input type="password" id="pwd"/>

    <button>登录</button>
    <a href="/user/reg">注册</a>
</section>
<?php echo '<script'; ?>
 src="/js/user/login.js"><?php echo '</script'; ?>
><?php }
}
