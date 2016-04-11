<?php
/* Smarty version 3.1.29, created on 2016-04-11 12:37:43
  from "E:\Demo\yii2-frame\views\user-center\apply-shop.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b2a17e800c4_81920444',
  'file_dependency' => 
  array (
    '1118b6b41b7ef0fd8f840869f2ca949ede04b2ec' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\user-center\\apply-shop.tpl',
      1 => 1460349455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:aside.tpl' => 1,
  ),
),false)) {
function content_570b2a17e800c4_81920444 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<section>
    <form action="" enctype="multipart/form-data" method="post">
        <label for="shop_name">店铺名：</label><input type="text" name="shop_name" id="shop_name"/> <br/>
        <label for="corporation">法人：</label><input type="text" name="corporation" id="corporation"/> <br/>
        <label for="mobile">电话：</label><input type="text" name="mobile" id="mobile"/> <br/>
        <label>图片： <span>*需要法人的身份证(必须) 实体店铺营业执照(可选)</span></label> <br/>
        身份证件：<input type="file" name="auth_img" id="auth_img"/> <br/>
        营业执照： <input type="file" name="auth_img_other" id="auth_img_other"/>
        <br/>
        <button>提交申请</button>
    </form>
</section>
<?php echo '<script'; ?>
 src="/js/user/apply-shop.js"><?php echo '</script'; ?>
><?php }
}
