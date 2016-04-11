<?php
/* Smarty version 3.1.29, created on 2016-04-11 13:59:27
  from "E:\Demo\yii2-frame\views\backend\shop-manaer\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b3d3f66f729_68395208',
  'file_dependency' => 
  array (
    'f22a91fb6897b8e906cd46ef16b86e1c9e1fd80a' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\backend\\shop-manaer\\index.tpl',
      1 => 1460354366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b3d3f66f729_68395208 ($_smarty_tpl) {
?>
<section class="col-lg-9">
    <form action="/backend/shop-manaer/login" method="post">
        <div class="form-group form-control">用户名：<input type="text" name="username" /><br/></div>
            <div class="form-group form-control">密码：<input type="password" name="pwd" /><br/></div>
    <button class="btn btn-success">登录</button>
    </form>
</section><?php }
}
