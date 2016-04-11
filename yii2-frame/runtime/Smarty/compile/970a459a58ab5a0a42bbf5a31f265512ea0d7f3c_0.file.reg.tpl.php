<?php
/* Smarty version 3.1.29, created on 2016-04-11 11:38:03
  from "E:\Demo\yii2-frame\views\user\reg.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b1c1b41ca80_58153541',
  'file_dependency' => 
  array (
    '970a459a58ab5a0a42bbf5a31f265512ea0d7f3c' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\user\\reg.tpl',
      1 => 1460342801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b1c1b41ca80_58153541 ($_smarty_tpl) {
?>
<section>
    <label for="username">用户名：</label><input type="text" id="username" autofocus /> <span>数字+字母 长度大于6</span>
    <label for="pwd">密码：</label><input type="password" id="pwd"/> <span>数字+字母 长度大于6</span>
    <label for="confirm-pwd">密码确认：</label><input type="password" id="confirm-pwd"/> <span>数字+字母 长度大于6</span>
    <a ><button>注册</button></a>
    <a href="index.php?r=user/login">
        登录
    </a>
</section>
<?php echo '<script'; ?>
 src="/js/user/reg.js"><?php echo '</script'; ?>
><?php }
}
