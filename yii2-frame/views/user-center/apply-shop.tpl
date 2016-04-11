{include "aside.tpl"}


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
<script src="/js/user/apply-shop.js"></script>