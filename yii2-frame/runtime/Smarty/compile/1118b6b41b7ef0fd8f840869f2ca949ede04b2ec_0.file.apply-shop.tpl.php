<?php
/* Smarty version 3.1.29, created on 2016-04-11 13:54:53
  from "E:\Demo\yii2-frame\views\user-center\apply-shop.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b3c2d4af7c7_43999749',
  'file_dependency' => 
  array (
    '1118b6b41b7ef0fd8f840869f2ca949ede04b2ec' => 
    array (
      0 => 'E:\\Demo\\yii2-frame\\views\\user-center\\apply-shop.tpl',
      1 => 1460354091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:aside.tpl' => 1,
  ),
),false)) {
function content_570b3c2d4af7c7_43999749 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<section class="col-lg-9 text-justify">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="form-group form-control"><label for="shop_name" class="col-lg-2">店铺名：</label><input type="text" name="shop_name" id="shop_name"/> </div>
        <div class="form-group form-control"><label for="corporation" class="col-lg-2">法人：</label><input type="text" name="corporation" id="corporation"/> </div>
        <div class="form-group form-control"><label for="mobile" class="col-lg-2">电话：</label><input type="text" name="mobile" id="mobile"/> </div>
        <div class="form-group form-control"><label class="col-lg-12">图片： <span>*需要法人的身份证(必须) 实体店铺营业执照(可选)</span></label> </div>
        <div class="form-group form-control"><label class="col-lg-2">身份证件：</label><input type="file" name="auth_img" id="auth_img" class="col-lg-4"/> </div>
        <div class="form-group form-control"><label class="col-lg-2">营业执照：</label> <input type="file" name="auth_img_other" id="auth_img_other" class="col-lg-4"/></div>
        <br/>
        <button class="btn btn-success">提交申请</button>
    </form>
</section>
<?php echo '<script'; ?>
 src="/js/user/apply-shop.js"><?php echo '</script'; ?>
><?php }
}
