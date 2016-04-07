

$('section').on('click', 'a', function(){
    var act = $(this).attr('data-act');
    $.get(act, function(data){
        console.log(data);
//        alert('操作成功');
        location.reload();
    });
});