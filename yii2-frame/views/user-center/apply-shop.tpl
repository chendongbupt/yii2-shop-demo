<aside id="menu">
    <a href="index.php?r=user-center" class="cur">个人信息</a>
    <a href="index.php?r=user-center/shops">我的店铺</a>
</aside>
<aside>
    <a href="index.php?r=user/logout">退出</a>
</aside>

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
<script src="js/user/apply-shop.js"></script>