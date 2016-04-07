$('input').on({
    'focus' : function(){
        console.log('input');
        $(this).addClass('form-control');
    },
    'blur' : function(){
        console.log('blur');
        if ( !$(this).val().match(/[0-9a-zA-Z]{7}/) )
            $(this).addClass('error');
    }
});

$('button').on('click', function(){
    var inputArr = $('input');
    if ( !inputArr.eq(0).val().match(/[0-9a-zA-Z]{7}/) ){
        alert('用户名');
        return false;
    }

    if ( !inputArr.eq(1).val().match(/[0-9a-zA-Z]{7}/) ){
        alert('密码');
        return false;
    }

    $.post('/user/ajax-login',{'username' : inputArr.eq(0).val(), 'pwd' : inputArr.eq(1).val()}, function(res){
        console.log(res);
        if ( res.res ){
//            alert('登录成功');
            location.href = '/user-center';
            return false;
        }
        alert('登录失败');
    }, 'json');
});