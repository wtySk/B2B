$(function(){
    //因调用跟团游及自由行js。此处因页面改变，故需重新设置显示
    var hideSelect=$(".selectCondition_w .selectCondition_list:gt(3)");
    hideSelect.show();

    //自由行搭配产品 下面机、签、酒 切换按钮
    $(".freetrip_select_nav a").click(function(){
        $(this).addClass("freetrip_select_nav_a_select").parents("li").siblings().children("a").removeClass("freetrip_select_nav_a_select");
    });
    //自由行搭配产品 下面 机票点击 订票 触发
    $(document).on("click",".planeTicket_info_f",function(){
        $(this).parents(".planeTicket_info_show").siblings(".planeTicket_info_hide").toggle();
        if($(this).parents(".planeTicket_info_show").siblings(".planeTicket_info_hide").is(":visible")){
            $(this).parents(".planeTicket_info_show").parents(".planeTicket_info").css({"border":"1px solid #4290FF"});
        }else{
            $(this).parents(".planeTicket_info_show").parents(".planeTicket_info").css({"border-color":"#eee","border-top":"1px solid #fff"});
        }
    });
    //滚动滚动条  在滚动到一定位置后，购物车浮动
    $(window).scroll(function() {
        if($(".product").offset().top+6>$(window).scrollTop()){
            $(".gwcBorder").removeClass("gwcBorder_fixed");
        }else{
            $(".gwcBorder").addClass("gwcBorder_fixed");
        }
    });
    //购物车点击加号
    //$(".jiajian_c").click(function(){
    //    var addNumber=parseInt($(this).parents("a").prev(".jiajian_b").text())+1;
    //    $(this).parents("a").prev(".jiajian_b").text(addNumber);
    //    if(addNumber>=98){
    //        $(this).parents("a").prev(".jiajian_b").text(99);
    //        //$(this).css({"border-color":"#eee"})
    //    }
    //});
    //购物车点击减号
    //$(".jiajian_a").click(function(){
    //    var removeNumber=parseInt($(this).parents("a").next(".jiajian_b").text())-1;
    //    $(this).parents("a").next(".jiajian_b").text(removeNumber);
    //    if(removeNumber<=1){
    //        $(this).parents("a").next(".jiajian_b").text(1);
    //        //$(this).css({"border-color":"#428EFF"})
    //    }
    //});

    //购物车 点击删除
    $(".delete_prompt_b_top,.delete_prompt_b_main_b_b").click(function(){
        $(".delete_prompt").hide();
        $("body").removeClass("bodyscroll");
    });
    $(".gwcTopqk").click(function(){
        $(".delete_prompt").show();
        // $("body").addClass("bodyscroll");
    });

    $(".delete_prompt_b_main_b_a").click(function(){
        $(".gwcjpval").remove();
        $(".delete_prompt").hide();
        $(".gwcjdval").remove();
        $(".gwcqzval").remove();
        // $("body").addClass("bodyscroll");
    });

    //点击购物车内部删除按钮
    $(".gwcjpxx_c_b").click(function(){
        $(this).parents(".gwcjpxx_c").parents(".gwcjpxx").remove();
    });
    //点击加减 计算购物车内的金额    此功能加入到下面的周期循环函数里内了
    //$(".jiajian_a,.jiajian_c").click(function(){
    //    var num=0;
    //    $(".jiajian_b").each(function(){
    //        var thisNum=parseInt($(this).text())*parseInt($(this).parents(".jiajian").siblings(".danjia").children("span").text());
    //        num+=thisNum;
    //    });
    //    $(".gwc_js_a span").text(num);
    //});
    //每隔300毫秒执行，获取当前的数量及总价s
    function gwcValPrice(){
        setInterval(function(){
            $(".jpval").text($(".gwcjpval").length);
            $(".jdval").text($(".gwcjdval").length);
            $(".qzval").text($(".gwcqzval").length);
            //var num=0;
            //$(".jiajian_b").each(function(){
            //    var thisNum=parseInt($(this).text())*parseInt($(this).parents(".jiajian").siblings(".danjia").children("span").text());
            //    num+=thisNum;
            //});
            //$(".gwc_js_a span").text(num);
        },300)
    }
    gwcValPrice();

});






