<section>
    <label for="username">用户名：</label><input type="text" id="username" autofocus /> <span>数字+字母 长度大于6</span>
    <label for="pwd">密码：</label><input type="password" id="pwd"/> <span>数字+字母 长度大于6</span>
    <label for="confirm-pwd">密码确认：</label><input type="password" id="confirm-pwd"/> <span>数字+字母 长度大于6</span>
    <a {*href="index.php?r=user/reg"*}><button>注册</button></a>
    <a href="index.php?r=user/login">
        登录
    </a>
</section>
<script src="/js/user/reg.js"></script>