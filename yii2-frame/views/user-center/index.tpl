
{include "aside.tpl"}
<section id="section" class="text-justify">
    <h2 class="text-center bg-info text-info">个人信息页面</h2>
    <div class="form-group form-control">用户名:{$user.user_name} <br/></div>
    <div class="form-group form-control">md5密码: {$user.pwd} <br/></div>
    <div class="form-group form-control">user_id : {$user.user_id} <br></div>
    <a href="/user-center/apply-shop" class="btn btn-info">申请开店</a>
</section>