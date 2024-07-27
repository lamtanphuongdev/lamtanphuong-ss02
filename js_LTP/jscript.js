$(document).ready(function () {
    // alert("jq run");

    $(".ItemOrder").hide();
    $(".cateOrder").click(function (e) { 
        e.preventDefault();
         $(this).next().slideDown();
      //  $(".ItemOrder").slideDown();
    });

    $(".ItemOrder").mouseleave(function () { 
        $(this).slideUp();
    });

    // tắt tạm thời để làm mấy công chuyện kia cho nó dễ
    // $("#formreg").submit(function (e) { 
    //     e.preventDefault();
    //     var username = $("input[name*='username']").val();
    //     if(username.length === 0 || username.length < 6){
    //         $("input[name*='username']").focus();
    //         $('#noteForm').html('Tên đăng nhập chưa hợp lệ');
    //         return false;
    //     }

    //     return true;


    // });
});