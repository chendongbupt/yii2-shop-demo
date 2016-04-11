<?php
/* Smarty version 3.1.29, created on 2016-04-11 13:45:51
  from "E:\Demo\yii2-frame\views\user\reg.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b3a0f1e0b17_78897560',
  'file_dependency' => 
  array (
    '970a459a58ab5a0a42bbf5a31f265512ea0d7f3c' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\user\\reg.tpl',
      1 => 1460353549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b3a0f1e0b17_78897560 ($_smarty_tpl) {
?>
<section>
    <div class="form-group form-control"><label for="username" class="col-lg-2">用户名：</label><input type="text" id="username" autofocus class="col-lg-2"/> <span class="col-lg-2">数字+字母 长度大于6</span></div>
    <div class="form-group form-control"><label for="pwd" class="col-lg-2">密码：</label><input type="password" id="pwd" class="col-lg-2"/> <span class="col-lg-2">数字+字母 长度大于6</span></div>
    <div class="form-group form-control"><label for="confirm-pwd" class="col-lg-2">密码确认：</label><input type="password" id="confirm-pwd" class="col-lg-2"/> <span class="col-lg-2">数字+字母 长度大于6</span></div>
    <a ><button class="btn btn-success">注册</button></a>
    <a href="/user/login" class="btn btn-info">
        登录
    </a>
</section>
<?php echo '<script'; ?>
 src="/js/user/reg.js"><?php echo '</script'; ?>
><?php }
}
