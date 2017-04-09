$(function(){
    var $name = $("input[name=C_name]");
    var $mail = $("input[name=C_mail]");
    var $message = $("#message");
    $("#sub").on("click", function(){
        $.ajax({
            url: "http://localhost/myweb/contact/aa",
            method: "get",
            data: {
                C_name: $name.val(),
                C_mail: $mail.val(),
                C_message: $message.val(),
            },
            success: function(data){
                if(data == 1){
                    alert("提交成功");
                }else{
                    alert("填写有误");
                }
            }
        });
        return false;
    });
});