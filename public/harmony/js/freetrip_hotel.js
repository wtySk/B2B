$(function(){
    //酒店星级
    $(".free_hotel_main_list_about_r_b_star_b").each(function(){
        if(parseInt($(this).attr("data-star"))<3){
            $(this).parents(".free_hotel_main_list_about_r_b_star").hide();
        }else{
            $(this).parents(".free_hotel_main_list_about_r_b_star").show();
        }
        var starWidth = parseInt($(this).attr("data-star")) * 16;
        $(this).css("width", starWidth);
    });


    //点击酒店名称 弹出酒店信息框
    $(".free_hotel_room_a").click(function(){
        $(this).siblings().children(".free_hotel_fixed_bg,.free_hotel_fixed_main").show();
    });
    //点击酒店弹出框 导航切换
    $(".free_hotel_fixed_main_l a").click(function(){
        $(this).siblings("div").show().parents(".free_hotel_select").siblings().children("div").hide();
        $(this).css({"borderBottom":"1px solid #fff","color":"#f00"}).parents(".free_hotel_select").siblings().children("a").css({"borderBottom":"1px solid #eee","color":"#666"});
    });

    //点击其他部分关闭窗口
    $(".free_hotel_fixed_bg").click(function(){
        $(".free_hotel_fixed_main,.free_hotel_fixed_bg").hide();
    });

    //点击更多  切换显示更多房间
    $(".free_hotel_main_list").find(".free_hotel_room:gt(1)").hide();

    $(".more_room_class_a").click(function(){
        var room_class_hide=$(this).parents(".free_hotel_main_list").children(".free_hotel_room:gt(1)");
        if($(this).children("span").text()=="更多房型"){
            $(this).children("span").text("收起");
            $(this).children("img").attr("src","assets/images/more_room_class_b.png");
            room_class_hide.show();
        }else {
            $(this).children("span").text("更多房型");
            $(this).children("img").attr("src","assets/images/more_room_class_a.png");
            room_class_hide.hide();
        }
    });
	//点击 地图的出现
	$(".free_hotel_main_list_about_r_d_b").click(function(){
		$(".ditu,.yincangbeijing").show();
	})
	$(".yincangbeijing").click(function(){
		$(".ditu,.yincangbeijing").hide();
	})



});