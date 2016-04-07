<aside id="menu">
    <a href="index.php?r=user-center" class="cur">个人信息</a>
    <a href="index.php?r=user-center/shops">我的店铺</a>
</aside>
<aside>
    <a href="index.php?r=user/logout">退出</a>
</aside>
<section id="section">
    个人信息页面
    用户名：{$user.user_name} <br/>
    md5密码： {$user.pwd} <br/>
    user_id : {$user.user_id}
    <a href="index.php?r=user-center/apply-shop">申请开店</a>
</section>