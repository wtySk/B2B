$(function(){
//滚动到什么地方 导航开始浮动
	$(window).scroll(function() {
        if($(".travel_group_reserve_d").offset().top+68>$(window).scrollTop()){
            $(".travel_group_content_nav").removeClass("travel_group_content_nav_float");
        }else{
            $(".travel_group_content_nav").addClass("travel_group_content_nav_float");
        }
    });
    
    //滚动到什么地方 导航开始浮动  222
	$(window).scroll(function() {
        if($(".travel_group_content_all_b_a_c").offset().top-30>$(window).scrollTop()){
            $(".travel_group_content_all_d_left_nav").removeClass("travel_group_content_all_d_left_nav_float");
        }else{
            $(".travel_group_content_all_d_left_nav").addClass("travel_group_content_all_d_left_nav_float");
        }
    });
     //绑定浮动导航
     $(window).scroll(function() {
        if($(".wangfanjiaotong").offset().top-80<$(window).scrollTop()){
        $(".chanpinneirong").addClass("travel_group_content_nav_a").parents("li").siblings().children("a").removeClass("travel_group_content_nav_a");
          }
    }); 
    $(window).scroll(function() {
        if($(".bangdingnav").offset().top-80<$(window).scrollTop()){
        $(".feiyongshuoming").addClass("travel_group_content_nav_a").parents("li").siblings().children("a").removeClass("travel_group_content_nav_a");
          }
    });
    $(window).scroll(function() {
        if($(".teshushuomingnav").offset().top-80<$(window).scrollTop()){
        $(".qitashuoming").addClass("travel_group_content_nav_a").parents("li").siblings().children("a").removeClass("travel_group_content_nav_a");
          }
    });
    $(window).scroll(function() {
        if($(".xingchengcankao_nav").offset().top-80<$(window).scrollTop()){
        $(".xingchengcankao").addClass("travel_group_content_nav_a").parents("li").siblings().children("a").removeClass("travel_group_content_nav_a");
          }
    });
    
  
});
