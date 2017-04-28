$(function(){


//购物车加减计算
    function allPrice() {
        var pricrAll = 0; // 总价
        $(".travel_group_reserve_a_b").each(function(){
            var thisPrice = parseInt($(this).children(".travel_group_reserve_a_b_jiage").children("span").text()*10000);        //单个的价格
            //console.log(thisPrice);

            var thisAll = parseInt($(this).children(".price_ouside").children(".jiajian").children(".jiajian_b").text());       //数量
            var thisAllprice = thisPrice*thisAll/10000;         //总价
            pricrAll += thisAllprice;  //总价计算
            // console.log(thisPrice);
            // console.log(thisAll);
        });
        //console.log(pricrAll);
        $(".travel_group_reserve_c_b_a").children("span").text(pricrAll.toFixed(2));
    }//遍历计算总价
    allPrice();
    //console.log(allPrice());
//购物车点击加号
    $(".jiajian_c").click(function(){
        var addNumber=parseInt($(this).parents("a").prev(".jiajian_b").text())+1;
        $(this).parents("a").prev(".jiajian_b").text(addNumber);
        $(this).parents("a").parents(".jiajian").parents(".price_ouside").siblings(".travel_group_reserve_a_b_jiage").children(".travel_group_reserve_a_b_jiage_renshu").text(addNumber);
        if(addNumber>=98){
            $(this).parents("a").prev(".jiajian_b").text(99);
            $(this).parents("a").parents(".jiajian").parents(".price_ouside").siblings(".travel_group_reserve_a_b_jiage").children(".travel_group_reserve_a_b_jiage_renshu").text(99);
            // $(this).css({"border-color":"#eee"});
        }
        allPrice();
    });
//购物车点击减号
    $(".jiajian_a").click(function(){
        var removeNumber=parseInt($(this).parents("a").next(".jiajian_b").text())-1;
        $(this).parents("a").next(".jiajian_b").text(removeNumber);
        $(this).parents("a").parents(".jiajian").parents(".price_ouside").siblings(".travel_group_reserve_a_b_jiage").children(".travel_group_reserve_a_b_jiage_renshu").text(removeNumber);
        if(removeNumber<=0){
            $(this).parents("a").next(".jiajian_b").text(0);
            $(this).parents("a").parents(".jiajian").parents(".price_ouside").siblings(".travel_group_reserve_a_b_jiage").children(".travel_group_reserve_a_b_jiage_renshu").text(0);
            // $(this).css({"border-color":"#428EFF"})
        }
        allPrice();
    });
//导航切换属性
    $(".travel_group_content_nav ul li a").click(function(){
        $(this).addClass("travel_group_content_nav_a").parents("li").siblings().children("a").removeClass("travel_group_content_nav_a");
    });
////鼠标经过 联系人信息显示
    $(".travel_group_header_right_a_a_right a").mouseover(function(){
        $(".travel_group_header_right_a_a_right_a").show();
    });
    $(".travel_group_header_right_a_a_right a").mouseout(function(){
        $(".travel_group_header_right_a_a_right_a").hide();
    });


//判断出行有几天

    var n=$(".travel_group_content_all_d_right_a").length;
    for(i=1;i<=n;i++){
        $(".travel_group_content_all_d_left_nav ul").append("<li class='di_n_tian_click'><a href='###'>"+i+"</a></li>")
    }

    $(document).on("click",".di_n_tian_click",function(){
        $(this).children("a").addClass("dianji_a").parents("li").siblings().children("a").removeClass("dianji_a");
        //点击左侧楼层 调整页面滚动条
        var numVal=parseInt($(this).text());
        var howDay=$(".travel_group_content_all_d_right:nth-child("+numVal+")").offset().top-30;
        $(window).scrollTop(howDay);
//							if($(".travel_group_content_all_d_right:nth-child("+numVal+")").offset().top-80<$(window).scrollTop()){
//				        $(this).addClass("travel_group_content_all_d_left_nav ul li:nth-child("+numVal+")").parents("li").siblings().children("a").removeClass("dianji_a");
//				          }
    });
    $(window).scroll(function() {

        var numValb=parseInt($(".travel_group_content_all_d_right").length);
        var first_right_top=parseInt($(".travel_group_content_all_d_right:first-child").offset().top);
        for(i=1;i<=numValb;i++){
            (function(numValc){
                if(parseInt($(".travel_group_content_all_d_right:nth-child("+i+")").offset().top)-70<parseInt($(window).scrollTop())){
                    $(".travel_group_content_all_d_left_nav ul li:nth-child("+i+")").children("a").addClass("dianji_a").parents("li").siblings().children("a").removeClass("dianji_a");
                    return false;
                }else{}
            })(i);
        }
    });



});
