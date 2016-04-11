<?php
/* Smarty version 3.1.29, created on 2016-04-11 14:00:44
  from "E:\Demo\yii2-frame\views\backend\shop-manaer\shop.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b3d8caa34e2_55529428',
  'file_dependency' => 
  array (
    '8fafebd84c33354f456977a660bfcd13a0b9b91c' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\backend\\shop-manaer\\shop.tpl',
      1 => 1460354442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b3d8caa34e2_55529428 ($_smarty_tpl) {
?>
<aside>
    <a class="btn btn-danger" href="/backend/shop-manaer/logout">退出</a>
</aside>
<section>
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['shops']->value;
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

                法人：<?php echo $_smarty_tpl->tpl_vars['shop']->value['corporation'];?>

                电话： <?php echo $_smarty_tpl->tpl_vars['shop']->value['mobile'];?>

                审核状态：<?php if ($_smarty_tpl->tpl_vars['shop']->value['is_check'] == 0) {?>未审核<?php } elseif ($_smarty_tpl->tpl_vars['shop']->value['is_check'] == 1) {?>审核通过<?php } else { ?>审核不通过<?php }?>
                认证状态：<?php if ($_smarty_tpl->tpl_vars['shop']->value['is_auth'] == 0) {?>未认证<?php } elseif ($_smarty_tpl->tpl_vars['shop']->value['is_check'] == 1) {?>认证通过<?php } else { ?>认证不通过<?php }?>

                <a href="/backend/shop-manaer/detail/<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_id'];?>
" class="btn btn-info">查看详细</a>


            </li>

        <?php
$_smarty_tpl->tpl_vars['shop'] = $__foreach_shop_0_saved_local_item;
}
if ($__foreach_shop_0_saved_item) {
$_smarty_tpl->tpl_vars['shop'] = $__foreach_shop_0_saved_item;
}
?>
    </ul>
</section><?php }
}
