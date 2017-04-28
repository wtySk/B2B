$(function(){
    $(document).on("click",".productThree_b",function(){
        $(".productThree_tc").toggle();
    });
    //自由行 点击切换 全部 绑定产品 搭配产品
    $(document).on("click",".freetrip>ul li a",function () {
        $(this).addClass("freetrip_select").parents("li").siblings().children("a").removeClass("freetrip_select");
    });
    //目的地 下拉 鼠标点击
    $(document).on("click",".tripType_l_a_list_w_l",function(){
        if($(".destination_window").is(":visible")){
            $(".destination_window").hide();
        }else {
            $(".destination_window").show();
        }
    });
    $(document).on("click",".nav_second li a",function (){
        $(this).addClass("nav_second_select").parents("li").siblings().children("a").removeClass("nav_second_select");
    });
    //筛选   点击全部
    $(document).on("click",".selectCondition_l a",function(){
        $(this).addClass("selectCondition_r_select").parents(".selectCondition_l").next("ul").children("li").children("a").removeClass("selectCondition_r_select");;

        $(this).parents(".selectCondition_l").siblings(".supplier_more").children("li").children("a").children("input").removeProp("checked");
        vm.listpost(1)
    });
    //点击筛选  点选效果
    $(document).on("click",".celect_radio li a",function(){
        $(this).addClass("selectCondition_r_select").parents("li").siblings().children("a").removeClass("selectCondition_r_select").parents("li").parents("ul").prev(".selectCondition_l").children("a").removeClass("selectCondition_r_select");
        vm.listpost(1)
    });

    //筛选 确定/筛选 点击效果
    //$(document).on("click",".month_determine",function () {
    //    $(this).css("cssText","border:1px solid #fff!important");
    //    $(this).parents("li").parents("ul").prev(".selectCondition_l").children("a").removeClass("selectCondition_r_select");
    //
    //});
    //供应商 多选
    //$(document).on("click",".supplier li a",function(){
    //    if($(this).hasClass("selectCondition_r_select")){
    //        $(this).removeClass("selectCondition_r_select");
    //    }else {
    //        $(this).addClass("selectCondition_r_select").parents("li").parents("ul").prev(".selectCondition_l").children("a").removeClass("selectCondition_r_select");
    //    }
    //});
    //点击目的地 选中效果
    $(document).on("click",".tripType_l_a_list h4",function () {
        //点击判断当前是否是选中状态
        if($(this).siblings("ul").children("li").children("a").hasClass("x_mdd_pd")){
            //选中状态展开和隐藏效果
            if( $(this).siblings("ul").is(":visible")){
                $(this).addClass("tripType_l_a_list_h4_select");
            }else{
                $(this).removeClass("tripType_l_a_list_h4_select");
            }
        }
        if( $(this).siblings("ul").is(":visible")){
            $(this).removeClass("tripType_l_a_list_select").siblings("ul").hide();
            $(".tripType_l_a_list_w").css({height:"30px"});

        }else{
            $(this).addClass("tripType_l_a_list_select").siblings("ul").show().parents(".tripType_l_a_list").siblings().children("h4").removeClass("tripType_l_a_list_select").siblings("ul").hide();
            var thisUlHeight=$(this).next("ul").height();
            $(".tripType_l_a_list_w").css({height:(thisUlHeight+55)});
        }
    });
    //点击目的地 下的具体地点
    $(document).on("click",".tripType_l_a_list li a",function (){

        $(this).addClass("x_mdd_pd").parents("li").siblings().children("a").removeClass("x_mdd_pd").parents("ul").parents(".tripType_l_a_list").siblings().children("ul").children("li").children("a").removeClass("x_mdd_pd");
        //$(this).parents("li").parents("ul").siblings("h4").children("a").css({color:"#f00"}).parents("h4").parents(".tripType_l_a_list").siblings().children("h4").children("a").css({color:"#666"});
        $(this).parents("li").parents("ul").siblings("h4").addClass("tripType_l_a_list_h4_select").parents(".tripType_l_a_list").siblings().children("h4").removeClass("tripType_l_a_list_h4_select");
        $(this).parents("li").parents("ul").hide().siblings().removeClass("tripType_l_a_list_select");
        $(".tripType_l_a_list_w").css({height:"30px"});
    });
    //点击线路类型 选中效果
    $(document).on("click",".tripType_m_list ul li a",function(){
        $(this).addClass("tripType_m_selsect").parents("li").siblings().children("a").removeClass("tripType_m_selsect");
    });
    //线路类型点击更多和收起
    $(document).on("click",".tripType_m_more",function(){
        var spanTaxt=$(this).children("span").text();
        if(spanTaxt=="收起"){
            $(".tripType_m_list").addClass("tripType_m_list_hide");
            $(this).children("span").text("更多线路");
            $(this).children("i").children("img").attr("src","/harmony/images/tripType_more_a.jpg");
            $(this).css("top","5px");
        }else{
            $(".tripType_m_list").removeClass("tripType_m_list_hide");
            $(this).children("span").text("收起");
            $(this).children("i").children("img").attr("src","/harmony/images/tripType_more_b.jpg");
            $(this).css("top",$(".tripType_m_list").height()-30);
        }

    });
    //国家、供应商  点击更多 隐藏或收起
    //var hidePart=$(".supplier li:gt(4):not(:last)");
    //hidePart.hide();

    $(document).on("click",".supplierMore",function(){
        var supplierText=$(this).children("span").text();
        if(supplierText=="更多"){
            $(this).siblings(".celect_radio").removeClass("supplier_none");
            //var supplierHeight=$(this).prev("ul").height()-32;
            //$(this).css({"margin-top":supplierHeight});
            //$(this).children("span").text("收起").next("img").attr("src","/harmony/images/supplier_more_b.jpg");
            $(this).children("span").text("收起");

        }else{
            $(this).siblings(".celect_radio").addClass("supplier_none");
            //var supplierHeight=$(this).prev("ul").height();
            //$(this).css({"margin-top":"0"});

            //$(this).children("span").text("更多").next("img").attr("src","/harmony/images/supplier_more_a.jpg");
            $(this).children("span").text("更多");
        }

    });
    
    $(document).on("click",".supplierMore_b",function(){
        var supplierText=$(this).children("span").text();
        if(supplierText=="更多"){
            $(this).siblings(".celect_radio").addClass("supplier_none_b");
            //var supplierHeight=$(this).prev("ul").height()-32;
            //$(this).css({"margin-top":supplierHeight});
            //$(this).children("span").text("收起").next("img").attr("src","/harmony/images/supplier_more_b.jpg");
            $(this).children("span").text("收起");

        }else{
            
            //var supplierHeight=$(this).prev("ul").height();
            //$(this).css({"margin-top":"0"});
            $(this).siblings(".celect_radio").removeClass("supplier_none_b");
            //$(this).children("span").text("更多").next("img").attr("src","/harmony/images/supplier_more_a.jpg");

            $(this).children("span").text("更多");
        }

    });
    
    //点击筛选条件的多选
    $(".supplierMore_click").click(function(){
        if( $(this).children("span").text()=="多选"){
            $(this).siblings(".supplierMore").hide();
            $(this).siblings(".click_one").addClass("click_more_select").addClass("supplier_none");
            $(this).siblings(".click_more_select_a").show();
            
            $(this).siblings(".supplierMore").children("span").text("更多");
            $(this).siblings(".click_more").removeClass("click_more_select").removeClass("supplier_none");
            $(this).children("span").text("单选")

        }else{
            $(this).siblings(".supplierMore").show();
            $(this).siblings(".click_more_select_a").hide();
            
            $(this).siblings(".click_one").removeClass("click_more_select");
            $(this).siblings(".click_more").addClass("supplier_none").addClass("click_more_select");
            $(this).siblings(".selectCondition_l").children("a").addClass("selectCondition_r_select");
            
            $(this).siblings(".supplier_more").children("li").children("a").children("input").removeProp("checked");
            $(this).children("span").text("多选")
            if($(this).attr("id")=='hot'){
                hotel = true;
            }
            if($(this).attr("id") == 'supp'){
                sup = true;
            }
        }
    });
    $(".click_prev_input").click(function(){

        if($(this).prev('input').is(':checked')){
            $(this).prev("input").prop("checked",false);
        }else{
            $(this).prev("input").prop("checked",true);
        }
    });
    //点击筛选条件的多选的input
    $(".click_more li").click(function(){

        $(this).parents(".click_more").siblings(".selectCondition_l").children("a").removeClass("selectCondition_r_select")
    });
    //筛选 点击更多 隐藏部分或全部显示  selectCondition_w
    var hideSelect=$(".teamTrip_main .selectCondition_list:gt(4)");
    hideSelect.hide();
    $(document).on("click",".select_more",function(){
        var selectText=$(".select_more").children("span").text();
        if(selectText=="高级筛选"){
            hideSelect.show();
            $(this).children("span").text("收起").next("img").attr("src","/harmony/images/date_more_b.png");
        }else{
            hideSelect.hide();
            $(this).children("span").text("高级筛选").next("img").attr("src","/harmony/images/date_more_a.png");
        }
    });
    //点击当地内部导航
    $(document).on("click",".local_nav li",function(){
        $(this).addClass("local_nav_select").siblings().removeClass("local_nav_select");
    });
    $(document).on("click",".local_nav_a",function () {
        $("#local_a").show().siblings().hide();
    });
    $(document).on("click",".local_nav_b",function () {
        $("#local_b").show().siblings().hide();
    });
    $(document).on("click",".local_nav_c",function () {
        $("#local_c").show().siblings().hide();
    });
    $(document).on("click",".local_nav_d",function () {
        $("#local_d").show().siblings().hide();
    });
    $(document).on("click",".local_nav_e",function () {
        $("#local_e").show().siblings().hide();
    });
    //点击当地信息 按钮
    $(document).on("click",".tripType_r",function(){
        $(".localInformation").show();
    });
    //点击当地信息 关闭按钮
    $(document).on("click",".local_nav_close",function(){
        $(".localInformation").hide();
    });
    //点击排序
    $(document).on("click",".product_nav li",function(){
        var haveImg=$(this).children("a").children("img").attr("src");
        if(haveImg==undefined){
            $(this).addClass("product_nav_select").siblings().removeClass("product_nav_select");
            if ($(this).children('a').attr('id') == 'pricesort') {
                $(this).children("a").attr('data-sort','BY_PRICE_ASC');
                $(this).children("a").append("<img src='/harmony/images/sort_a.png'>").parents("li").siblings().children("a").children("img").remove();
            }else if ($(this).children('a').attr('id') == 'daysort') {
                 $(this).children("a").attr('data-sort','BY_DAY_ASC');
                 $(this).children("a").append("<img src='/harmony/images/sort_a.png'>").parents("li").siblings().children("a").children("img").remove();
            }else{
                $(this).children("a").children("img").remove();
                $(this).children("a").parents("li").siblings().children("a").children("img").remove();
                $(this).children("a").attr('data-sort','BY_DEFAULT');
            }
            vm.listpost(1)
        }else if(haveImg=="/harmony/images/sort_a.png"){
            $(this).children("a").children("img").remove();
            $(this).children("a").append("<img src='/harmony/images/sort_b.png'>")
            if ($(this).children('a').attr('id') == 'pricesort') {
                $(this).children("a").attr('data-sort','BY_PRICE_DESC');
            }else if ($(this).children('a').attr('id') == 'daysort') {
                 $(this).children("a").attr('data-sort','BY_DAY_DESC');
            };
            vm.listpost(1)
        }else if(haveImg=="/harmony/images/sort_b.png"){
            $(this).children("a").children("img").remove();
            $(this).children("a").append("<img src='/harmony/images/sort_a.png'>")
            if ($(this).children('a').attr('id') == 'pricesort') {
                $(this).children("a").attr('data-sort','BY_PRICE_ASC');
            }else if ($(this).children('a').attr('id') == 'daysort') {
                 $(this).children("a").attr('data-sort','BY_DAY_ASC');
            };
            vm.listpost(1)
        }
    });
    //点击二维码 弹出
    $(document).on("click",".productPlanInfo_c_a",function(){
        if($(".product_code").is(":visible")){
            $(".product_code").hide();
            $(".g_ewm img").attr("src","/harmony/images/ewm_a.jpg");
            $(".productPlanInfo_c_a").css("border-bottom-color","#eee")
        }else{
            $(".product_code").show();
            $(".g_ewm img").attr("src","/harmony/images/ewm_b.jpg");
            $(".productPlanInfo_c_a").css("border-bottom-color","#fff")
        }
    });

    //点击产品名称区域 展开详细信息
    //$(document).on("click",".product_a_show_click",function(){
    //    $(this).parents(".product_a_show").siblings().toggle();
    //    var checkHide=$(this).parents(".product_a_show").siblings();
    //    if(checkHide.is(":visible")){
    //        $(this).parents(".product_a_show").addClass("productInfo_top_bg");
    //        $(this).parents(".product_a_show").addClass("productInfo_top_bg").parents(".product_a").siblings().children(".product_a_show").removeClass("productInfo_top_bg");
    //    }else{
    //        $(".product_a_show").removeClass("productInfo_top_bg");
    //    }
    //    $(this).parents(".product_a_show").parents(".product_a").siblings().children(".product_a_hide").hide();
    //});
});