<?php
/* Smarty version 3.1.29, created on 2016-04-11 14:02:33
  from "E:\Demo\yii2-frame\views\backend\shop-manaer\detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b3df9374467_76406158',
  'file_dependency' => 
  array (
    'c3eae47ba677db96101e927ac162d6c22b260688' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\backend\\shop-manaer\\detail.tpl',
      1 => 1460354550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b3df9374467_76406158 ($_smarty_tpl) {
?>
<aside>
    <a href="/backend/shop-manaer/shop" class="btn btn-info">返回列表</a>
</aside>

<section class="">
    店铺名：<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_name'];?>
  <br/>
    法人：<?php echo $_smarty_tpl->tpl_vars['shop']->value['corporation'];?>
  <br/>
    电话： <?php echo $_smarty_tpl->tpl_vars['shop']->value['mobile'];?>
 <br/>

    审核材料： <img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['checkImg'];?>
" alt="" width="200" height="200"/>
    审核状态：<?php if ($_smarty_tpl->tpl_vars['shop']->value['is_check'] == 0) {?>未审核<?php } elseif ($_smarty_tpl->tpl_vars['shop']->value['is_check'] == 1) {?>审核通过<?php } else { ?>审核不通过<?php }?>
    操作： <?php if ($_smarty_tpl->tpl_vars['shop']->value['is_check'] != -1) {?><a href="###" class="btn btn-danger" data-act="/backend/shop-manaer/check/-1/<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_id'];?>
">审核不通过</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['shop']->value['is_check'] != 1) {?><a href="###" class="btn btn-success" data-act="/backend/shop-manaer/check/1/<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_id'];?>
">审核通过</a><?php }?>
    <br/>
    认证资料： <?php if ($_smarty_tpl->tpl_vars['shop']->value['authImg']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['authImg'];?>
" alt="" width="200" height="200"/><?php } else { ?>未提交<?php }?>
    认证状态：<?php if ($_smarty_tpl->tpl_vars['shop']->value['is_auth'] == 0) {?>未认证<?php } elseif ($_smarty_tpl->tpl_vars['shop']->value['is_check'] == 1) {?>认证通过<?php } else { ?>认证不通过<?php }?>
    操作： <?php if ($_smarty_tpl->tpl_vars['shop']->value['is_auth'] != -1) {?><a href="###" class="btn btn-danger" data-act="/backend/shop-manaer/auth/-1/<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_id'];?>
">认证不通过</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['shop']->value['is_auth'] != 1) {?><a href="###" class="btn btn-success" data-act="/backend/shop-manaer/auth/1/<?php echo $_smarty_tpl->tpl_vars['shop']->value['shop_id'];?>
">认证通过</a><?php }?>

</section>

<?php echo '<script'; ?>
 src="/js/backend/detail.js"><?php echo '</script'; ?>
><?php }
}
