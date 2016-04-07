/**
 * Created by cd on 16-4-6.
 */

$('button').click(function(){
    var shop_name = $('#shop_name').val();
    var data = new FormData(document.getElementsByTagName('form')[0]);
    $.ajax({
        url: "/index.php?r=user-center/ajax-submit-apply",
        type: "POST",
        data: data,
        dataType: 'json',
        processData: false,  // 告诉jQuery不要去处理发送的数据
        contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
        success: function(data){
            console.log(data);
            if ( !data.res ){
                alert(data.info);
                return false;
            }
            alert('申请也提交');
            location.href = 'index.php?r=user-center';
        }
    });
    return false;
});
