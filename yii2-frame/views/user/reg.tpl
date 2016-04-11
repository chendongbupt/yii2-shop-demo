<section>
    <div class="form-group form-control"><label for="username" class="col-lg-2">用户名：</label><input type="text" id="username" autofocus class="col-lg-2"/> <span class="col-lg-2">数字+字母 长度大于6</span></div>
    <div class="form-group form-control"><label for="pwd" class="col-lg-2">密码：</label><input type="password" id="pwd" class="col-lg-2"/> <span class="col-lg-2">数字+字母 长度大于6</span></div>
    <div class="form-group form-control"><label for="confirm-pwd" class="col-lg-2">密码确认：</label><input type="password" id="confirm-pwd" class="col-lg-2"/> <span class="col-lg-2">数字+字母 长度大于6</span></div>
    <a {*href="index.php?r=user/reg"*}><button class="btn btn-success">注册</button></a>
    <a href="/user/login" class="btn btn-info">
        登录
    </a>
</section>
<script src="/js/user/reg.js"></script>