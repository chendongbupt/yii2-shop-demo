<?php
/* Smarty version 3.1.29, created on 2016-04-11 13:42:27
  from "E:\Demo\yii2-frame\views\user\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b39434956f2_42350278',
  'file_dependency' => 
  array (
    '250060c757f8a31248e1663a5aa17c0e4ff433c8' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\user\\login.tpl',
      1 => 1460353345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b39434956f2_42350278 ($_smarty_tpl) {
?>
<section>
    <div class="form-group form-control"><label for="username" class="col-lg-1">用户名：</label><input type="text" id="username" class="col-lg-2"/></div>
    <div class="form-group form-control"><label for="pwd" class="col-lg-1">密码：</label><input type="password" id="pwd" class="col-lg-2"/></div>

    <button class="btn btn-success">登录</button>
    <a href="/user/reg" class="btn btn-info">注册</a>
</section>
<?php echo '<script'; ?>
 src="/js/user/login.js"><?php echo '</script'; ?>
><?php }
}
