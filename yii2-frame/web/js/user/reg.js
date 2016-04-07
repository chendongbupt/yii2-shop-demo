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
//    console.log(inputArr[1]+','+inputArr[2]);
    if ( inputArr.eq(1).val() !== inputArr.eq(2).val() ){
        alert('密码确认');
        return false;
    }

    $.post('/index.php?r=user/ajax-reg',{'username' : inputArr.eq(0).val(), 'pwd' : inputArr.eq(1).val(), 'confirmPwd' : inputArr.eq(2).val()}, function(res){
        console.log(res);
        if ( !res.res ){
            alert(res.info);
            return false;
        }
        location.href = '/index.php?r=user-center';
        return false;
    }, 'json');
});