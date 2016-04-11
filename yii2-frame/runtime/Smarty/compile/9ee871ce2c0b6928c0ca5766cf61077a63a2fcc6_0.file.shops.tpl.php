<?php
/* Smarty version 3.1.29, created on 2016-04-11 13:56:21
  from "E:\Demo\yii2-frame\views\user-center\shops.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b3c85d00a42_03467840',
  'file_dependency' => 
  array (
    '9ee871ce2c0b6928c0ca5766cf61077a63a2fcc6' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\user-center\\shops.tpl',
      1 => 1460354179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:aside.tpl' => 1,
  ),
),false)) {
function content_570b3c85d00a42_03467840 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="section" class="col-lg-9">
    <h2 class="bg-info">我的店铺</h2>
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['myshops']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_shop_0_saved_item = isset($_smarty_tpl->tpl_vars['shop']) ? $_smarty_tpl->tpl_vars['shop'] : false;
$_smarty_tpl->tpl_vars['shop'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['shop']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->_loop = true;
$__foreach_shop_0_saved_local_item = $_smarty_tpl->tpl_vars['shop'];
?>
            <li class="list-group list-group-item">
                店铺名：<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_name'];?>
 <br/>
                法人：<?php echo $_smarty_tpl->tpl_vars['shop']->value['corporation'];?>
 <br/>
                电话： <?php echo $_smarty_tpl->tpl_vars['shop']->value['mobile'];?>
 <br/>
                审核状态：<?php if ($_smarty_tpl->tpl_vars['shop']->value['is_check'] == 0) {?>未审核<?php } elseif ($_smarty_tpl->tpl_vars['shop']->value['is_check'] == 1) {?>审核通过<?php } else { ?>审核不通过<?php }?> <br/>
                认证状态：<?php if ($_smarty_tpl->tpl_vars['shop']->value['is_auth'] == 0) {?>未认证<?php } elseif ($_smarty_tpl->tpl_vars['shop']->value['is_check'] == 1) {?>认证通过<?php } else { ?>认证不通过<?php }?> <br/>
                上传的资料：
                <img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['checkImg'];?>
" alt="" width="100"/>
                <?php if ($_smarty_tpl->tpl_vars['shop']->value['authImg']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['authImg'];?>
" alt="" width="100"/><?php }?>
            </li>

        <?php
$_smarty_tpl->tpl_vars['shop'] = $__foreach_shop_0_saved_local_item;
}
if ($__foreach_shop_0_saved_item) {
$_smarty_tpl->tpl_vars['shop'] = $__foreach_shop_0_saved_item;
}
?>
    </ul>
    <a href="/user-center/apply-shop" class="btn btn-info">申请开店</a>
</section><?php }
}
