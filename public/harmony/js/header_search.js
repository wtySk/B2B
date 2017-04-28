//分页插件
$(function(){
    $("*:not(.header_c_div)").click(function(){
        $(".search_select").hide();
    });
    $(".header_c_div").click(function(){
        $(".search_select").hide();
        $(this).siblings(".search_select").show();
        //使用return false阻止冒泡  并且 阻止默认行为，return false后面语句不会执行
        return false;
    });
    $(".search_select li a").click(function(){
        key = $(this).attr("data-name");
        var key_name = $(this).text();
        $("#productlist").text(key_name);
        $(this).parents(".search_select").siblings(".header_c_div").children("span").text($(this).text());
        $(this).parents(".search_select").hide();
    });

});