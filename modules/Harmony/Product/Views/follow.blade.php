<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>跟团游</title>
    <link href="/harmony/css/publick.css" rel="stylesheet">
    <link href="/harmony/css/team.css" rel="stylesheet">
    <script src="/harmony/js/jquery-1.11.3.min.js"></script>
    <script src="/harmony/js/paging.js"></script>
    <script src="/harmony/js/team_free.js"></script>
    <script src="/harmony/js/header_search.js"></script>
    <script src="/harmony/plugins/My97DatePicker/WdatePicker.js"></script>
    <script src="/harmony/js/Calendar.js"></script>
    <script src="/harmony/js/vue2.js"></script>
    <script src="/harmony/js/vue-resource.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body id="#app">
<div class="page_top">
    <div class="page_top_position">
        <div class="page_top_left">
            <div class="page_top_left_a">欢迎来那边</div>
            <!--<div class="page_top_left_b">北京</div>-->
        </div>
        <div class="page_top_right">
            <div class="page_top_right_a">您好！请 <a href="javascript:void(0)">登录</a></div>
            <div class="page_top_right_b"><a href="javascript:void(0)">注册新账号</a></div>
            <div class="page_top_right_c"><img src="/harmony/images/top_header_login_bg.png"> <a href="javascript:void(0)">用户中心</a></div>
        </div>
    </div>
</div>
<div class="container clearboth">
    <div class="header clearboth">
        <header>
            <div class="header_a"><img src="/harmony/images/nabianet.png"> </div>
            <div class="header_b"><img src="/harmony/images/index_phone.png"> </div>
            <div class="header_c">
                <form id="index_submit">
                    <div class="header_c_div"><span>跟团游</span><img src="/harmony/images/search_select_sj.png"></div>
                    <input type="text" placeholder="请输入您想知道的一切信息" id="value" class="header_c_a">
                    <input type="button" id="button_b" class="header_c_b">

                        <ul class="search_select" id="search_select_b">
                            <li ><a data-name="follow" href="javascript:void(0);">跟团游</a> </li>
                            <li ><a data-name="freedom" href="javascript:void(0)">自由行</a> </li>
                            <li ><a data-name="self" href="javascript:void(0)">半自助</a> </li>
                            {{--<li><a data-name="plane" href="javascript:void(0)">机票</a> </li>--}}
                            {{--<li><a data-name="hotel" href="javascript:void(0)">酒店</a> </li>--}}
                            {{--<li><a data-name="visa" href="javascript:void(0)">签证</a> </li>--}}
                        </ul>
                </form>

            </div>
            <div class="header_d"><img src="/harmony/images/index_erweima.png"> </div>
        </header>
    </div>
    <div class="nav clearboth">
        <ul>
            <li><a href="home">首页</a> </li>
            <li><a href="follow">跟团游</a></li>
            <li><a href="freedom">自由行</a> </li>
            <li><a href="self">半自助</a> </li>
            <li><a href="plane">机票</a> </li>
            <li><a href="hotel">酒店</a> </li>
            <li><a href="visa">签证</a> </li>
        </ul>
    </div>

    <div class="teamTrip clearboth">
        <div class="teamTrip_nav">
            <div><a href="/harmony/home">首页 </a> </div>
            <div class="site_kh"> > </div>
            <div><a id="productlist" href="javascript:void(0)">跟团游</a> </div>
            <div class="site_kh"> > </div>
            <div><a href="javascript:void(0)">产品列表 </a> </div>

        </div>
        <div class="teamTrip_main">
            <form>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l" >目的地 ：<a href="javascript:void(0)" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio" id="endCityList">
                        <li  v-for="item in target">
                            <a href="javascript:void(0)" v-text="item.areaName"></a> 
                        </li>
                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">出发地 ：<a href="javascript:void(0)" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio" id="startCity">
                        <li><a href="javascript:void(0)">北京</a> </li>
                        <li><a href="javascript:void(0)">天津</a> </li>
                        <li><a href="javascript:void(0)">青岛</a> </li>
                        <li><a href="javascript:void(0)">香港</a> </li>
                        <li><a href="javascript:void(0)">广州</a> </li>
                        <li><a href="javascript:void(0)">天津</a> </li>

                    </ul>
                </div>

                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">供应商 ：<a href="javascript:void(0)" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio supplier_none click_one" id="supplierList">
                        {!! $str !!}
                    </ul>
                    <ul class="selectCondition_r supplier_none click_more supplier_more click_more_select" id="supplierLists">
                        {!! $_str !!}
                        <li><a href="javascript:void(0)" class="month_determine select_price" id="sure1">确定</a> </li>
                    </ul>
                    <div class="supplierMore"><span>更多</span></div>
                    <div class="supplierMore_click" id="supp"><span>多选</span></div>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l celect_radio date_linght">出团日期 ：<a style="width: 24px; display: block;"></a></div>
                    <ul class="selectCondition_r input_select_left">
                        <li class="selectCondition_r_input"><div class="date_choice"><input id="startEarlyTime" placeholder="出发时间" type="text" onClick="WdatePicker()" style="margin-right: 15px;"></div>
                            <span class="price_span">至 </span>
                        </li><!-- input 去掉原有的class class="Wdate" -->
                        <li class="selectCondition_r_input"><div class="date_choice"><input id="startLatterTime" placeholder="结束时间" type="text" onClick="WdatePicker()" style="margin-right: 15px;"></div></li>
                        <li><a href="javascript:void(0)" class="month_determine" id="sure2">确定</a> </li>
                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">行程天数 ：<a href="javascript:void(0)" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio" id="dayCountList">
                        <li><a href="javascript:void(0)" data-dayCount="short">5天内</a> </li>
                        <li><a href="javascript:void(0)" data-dayCount="average">6-14天</a> </li>
                        <li><a href="javascript:void(0)" data-dayCount="long">15天以上</a> </li>
                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">交通方式 ：<a href="javascript:void(0)" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio" id="trafficTypeList">
                        <li><a href="javascript:void(0)">直飞</a> </li>
                        <li><a href="javascript:void(0)">转机</a> </li>
                        <li><a href="javascript:void(0)">包机</a> </li>
                        <li><a href="javascript:void(0)">可联运</a> </li>
                        <li><a href="javascript:void(0)">高铁</a> </li>
                        <li><a href="javascript:void(0)">动车</a> </li>
                        <li><a href="javascript:void(0)">普快</a> </li>
                        <li><a href="javascript:void(0)">大巴</a> </li>
                        <li><a href="javascript:void(0)">游轮</a> </li>
                        <li><a href="javascript:void(0)">游船</a> </li>
                        <li><a href="javascript:void(0)">其他</a> </li>
                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">酒店星级 ：<a href="javascript:void(0)" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio supplier_none click_one" id="hotelStar">
                        <li><a href="javascript:void(0)">三星级</a> </li>
                        <li><a href="javascript:void(0)">四星级</a> </li>
                        <li><a href="javascript:void(0)">五星级</a> </li>
                    </ul>
                    <ul class="selectCondition_r supplier_none click_more supplier_more click_more_select" id="hotelStars">
                        <li>
                            <a href="javascript:void(0)" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">三星级</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">四星级</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">五星级</span>
                            </a>
                        </li>
                        <li><a href="javascript:void(0)" class="month_determine select_price" id="sure4">确定</a> </li>
                    </ul>

                    <div class="supplierMore_click" id="hot"><span>多选</span></div>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">品质类型 ：<a href="javascript:void(0)" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio" id="qualityTypeList">
                        <li><a href="javascript:void(0)">购物团</a> </li>
                        <li><a href="javascript:void(0)">纯玩团</a> </li>
                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">价格区间 ：<a style="width: 24px; display: block;"></a></div>
                    <ul class="selectCondition_r input_select_left">
                        <li class="price_input"><span>&yen;</span><input type="number" id="priceLess"></li>
                        <li class="price_span">至</li>
                        <li class="price_input"><span>&yen;</span><input type="number" id="priceMore"></li>
                        <li><a href="javascript:void(0)" class="month_determine select_price" id="sure3">确定</a> </li>
                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">确定方式 ：<a href="javascript:void(0)" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio" id="confirmType">
                        <li><a href="javascript:void(0)" data-type="INSTANT">即使确定</a> </li>
                        <li><a href="javascript:void(0)" data-type="TWICE">二次确定</a> </li>
                    </ul>
                </div>

                <div class="select_more"><span>高级筛选</span><img src="/harmony/images/date_more_a.png"></div>
            </form>
        </div>
    </div>
    <div class="product clearboth">
        <div class="product_nav clearboth">
            <ul>
                <li><a href="javascript:void(0)">销量</a></li>
                <li><a href="javascript:void(0)" data-pricesort="BY_DEFAULT" id="pricesort">直客价</a></li>
                <li><a href="javascript:void(0)" id="daysort">团期</a></li>
            </ul>
            <div class="product_prompt">筛选出 <span v-text="count"></span> 个产品供您选择</div>
        </div>
        <div class="product_list clearboth">
            <div class="product_top clearboth">
                <ul>
                    <li>产品名称</li>
                    <li>出发时间</li>
                    <li>天数</li>
                    <li>余位</li>
                    <li>直客价</li>
                    <li class="product_top_a" v-if="userOpenId">同行价</li>
                    <li class="product_top_b">酒店星级</li>
                    <li class="product_top_c">航班类型</li>
                    <li class="product_top_d">其他</li>
                    <li class="product_top_e">操作</li>
                </ul>
            </div>


            <div class="product_a">

                <div class="product_a_show clearboth" v-for="item in info">
                    <div class="product_a_show_click">
                        <a v-bind:href="'detail/'+item.openId" v-bind:title="item.regimentName">
                            <div class="product_a_show_a"><span v-text="item.startCity+'出发 '"></span><i v-text="uppercase(item.regimentName)"></i></div>
                            <div class="product_a_show_b"><span class="font_jjj" v-text="item.regimentTypeName"></i></div>
                        </a>
                    </div>
                    <div class="product_a_show_click">
                        <div class="product_a_show_c" v-text="item.goDate"></div>
                    </div>
                    <div v-text="item.dayCount+'天'+item.nightCount+'晚'"></div>
                    <div v-text="item.surplusCount"></div>
                    <div>&yen;<span v-text="item.showPrice"></span></div>
                    <div class="product_a_show_aa" v-if="userOpenId">&yen;<span v-text="item.adultPrice"></span></div>
                    <div class="product_a_show_bb"><span v-if="item.hotelStar" v-text="item.hotelStar"></span><span v-else>无说明</span></div>
                    <div class="product_a_show_cc"> 
                        <div class="product_a_show_e"><span v-if="item.airplaneName" v-text="item.airplaneName"></span><span v-else>无</span><span v-text="item.airplaneType"></span></div>
                    </div>
                    <div class="product_a_show_dd">
                        <div class="product_a_show_g">自费：<span v-if="item.hasExpenseSelfDesc">有</span><span v-else>无</span></div>
                        <div  class="product_a_show_h font_jjj">购物：<span class="font_jjj" v-if="item.shopCount" v-text="item.shopCount"></span><span v-else>0</span></div>
                    </div>
                    <div class="product_a_show_ee"><a v-bind:href="'detail/'+item.openId">产品详情</a> </div>
                </div>

            </div>



        </div>
        <div class="tcdPageCode" id="pageTwo">
        </div>
    </div>

</div>
<div class="red_line"></div>
<div class="footer">
    <footer>
        <div class="footer_top clearboth">
            <div class="footer_top_a"><img src="/harmony/images/nabianet.png"> </div>
            <div class="footer_top_b"><img src="/harmony/images/erweima.png"></div>
            <div class="footer_top_c">
                <h4>关于那边</h4>
                <ul>
                    <li><a href="javascript:void(0)">我们的使命</a></li>
                    <li><a href="javascript:void(0)">我们的愿景</a></li>
                </ul>
            </div>
            <div class="footer_top_c">
                <h4>联系我们</h4>
                <ul>
                    <li><a href="javascript:void(0)">我们的地址</a></li>
                    <li><a href="javascript:void(0)">我们的电话</a></li>
                    <li><a href="javascript:void(0)">客服电话</a></li>
                </ul>
            </div>
            <div class="footer_top_c">
                <h4>欢迎合作</h4>
                <ul>
                    <li><a href="javascript:void(0)">商务洽谈</a></li>
                    <li><a href="javascript:void(0)">网站合作</a></li>
                </ul>
            </div>
            <div class="footer_top_c">
                <h4>知识产权</h4>
                <ul>
                    <li><a href="javascript:void(0)">知识产权声明</a></li>
                    <li><a href="javascript:void(0)">免责权利声明</a></li>
                    <li><a href="javascript:void(0)">著作权与商标声明</a></li>
                    <li><a href="javascript:void(0)">商标</a></li>
                </ul>
            </div>
            <div class="footer_top_c">
                <h4>法律声明</h4>
                <ul>
                    <li><a href="javascript:void(0)">本网站上信息</a></li>
                    <li><a href="javascript:void(0)">意见及网上论坛</a></li>
                    <li><a href="javascript:void(0)">版权和商标</a></li>
                    <li><a href="javascript:void(0)">免责声明</a></li>
                </ul>
            </div>
            <div class="footer_top_c">
                <h4>服务条款</h4>
                <ul>
                    <li><a href="javascript:void(0)">服务内容</a></li>
                    <li><a href="javascript:void(0)">用户账号及密码</a></li>
                    <li><a href="javascript:void(0)">用户权责</a></li>
                </ul>
            </div>
            <div class="footer_top_c">
                <h4>隐私声明</h4>
                <ul>
                    <li><a href="javascript:void(0)">我们的使命</a></li>
                    <li><a href="javascript:void(0)">我们的愿景</a></li>
                </ul>
            </div>

        </div>
        <ul class="footer_bottom">
            <li>©2014-2015 nabianet.com 版权所有</li>
            <li> | </li>
            <li>京ICP备15037027</li>
            <li> | </li>
            <li>客服电话 400-060-8122</li>
        </ul>
    </footer>
</div>

<script>
var key = 'follow';
$(function(){
    $("#index_submit").submit(function(){
        var value = $("#value").val();
        window.location.href = '/harmony/'+key+'?title='+value;
        return false;
    })
    $("#button_b").click(function(){
        var value = $("#value").val();
        window.location.href = '/harmony/'+key+'?title='+value;
        return false;
    })
})
    var hotel = true;
    var sup = true;
    var vm = new Vue({
        el:".container",
        data:{
            count:{{ "$count" }},
            pageCount:{{ "$pageCount" }},
            target:{!! $target !!},
            info:{!! $info !!},
            userOpenId:'{{ session('openId')?session('openId'):'' }}'
        },
        methods:{
            uppercase:function(value)
            { 
                var val = value;
                if (value.length>14) {
                    val = value.substr(0,14) + '....';
                };
                return val;
            },
            listpost:function(p){
                //获取酒店
                if (hotel) {
                   var hotelStarList = [''];
                   $temp = $("#hotelStar .selectCondition_r_select")
                   $.each($temp,function(k,v){
                       hotelStarList[k] = $(this).text();
                   });
                }else{
                    $hotelStars = $("#hotelStars .clearboth");
                    var hotelStarList = [''];
                    $.each($hotelStars,function(k,val){
                        if ($(this).children('input').is(":checked")) {
                            hotelStarList[k] = $(this).children('span').text();
                        }
                    })
                    for(var i = 0 ;i<hotelStarList.length;i++)
                     {
                         if(hotelStarList[i] == "" || typeof(hotelStarList[i]) == "undefined")
                         {
                              hotelStarList.splice(i,1);
                              i= i-1;  
                         }    
                     }
                }
                //供应商
                if (sup) {
                    var supplierList = [''];
                    $temp = $("#supplierList .selectCondition_r_select")
                    $.each($temp,function(k,v){
                        supplierList[k] = $(this).text();
                    });
                }else{
                    $supplier = $("#supplierLists .clearboth");
                    var supplierList = [''];
                    $.each($supplier,function(k,val){
                        if ($(this).children('input').is(":checked")) {
                            supplierList[k] = $(this).children('span').text();
                        };
                    })
                    for(var i = 0 ;i<supplierList.length;i++)
                     {
                         if(supplierList[i] == "" || typeof(supplierList[i]) == "undefined")
                         {
                              supplierList.splice(i,1);
                              i= i-1;  
                         }    
                     }
                }
                //目的地
                var endCityList = [''];
                $temp = $("#endCityList .selectCondition_r_select")
                $.each($temp,function(k,v){
                    endCityList[k] = $(this).text();
                });
                //出发地
                var startCity = '';
                startCity = $("#startCity .selectCondition_r_select").text();
                //行程天数
                var dayCountList = [''];
                $temp = $("#dayCountList .selectCondition_r_select")
                $.each($temp,function(k,v){
                    dayCountList[k] = $(this).attr('data-dayCount');
                });
                //交通方式
                var trafficTypeList = [''];
                $temp = $("#trafficTypeList .selectCondition_r_select")
                $.each($temp,function(k,v){
                    trafficTypeList[k] = $(this).text();
                });
                //品质集合
                var qualityTypeList = [''];
                $temp = $("#qualityTypeList .selectCondition_r_select")
                $.each($temp,function(k,v){
                    qualityTypeList[k] = $(this).text();
                });
                //二级确定
                var confirmType = '';
                confirmType = $("#confirmType .selectCondition_r_select").attr('data-type');
                if(typeof(confirmType)=="undefined"){//要加typeof()
                    confirmType = '';
                }
                //时间
                var startEarlyTime = $("#startEarlyTime").val();
                var startLatterTime = $("#startLatterTime").val();
                //价格
                var priceLess = $("#priceLess").val();
                var priceMore = $("#priceMore").val();
                if (priceLess) { priceLess = parseInt(priceLess)*100};
                if (priceMore) { priceMore = parseInt(priceMore)*100};
                //产品类型
                var regimentType = 'regiment';
                //升降序
                var orderType = $(".product_nav_select a").attr('data-sort');
                //获得url里面的title值
                var title = '';
                var hash=window.location.href; //http://www.b2c.com/harmony/follow?title=美国
                var tmp=hash.split("=");
                if (tmp[1]) {
                    title = decodeURI(tmp[1]);
                };
                if(startLatterTime != ""){
                    if(startLatterTime<startEarlyTime){
                        alert("最晚出发日期不能早于最早出发日期");
                        return false;
                    }
                }else if(priceMore!=0){
                    if(priceLess>priceMore){
                        $("#max_price").focus();
                        alert("最高价不能低于最低价");
                        return false;
                    }
                }
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name=csrf-token]').getAttribute('content')
                this.$http.post('/harmony/listpost',{
                    title:title,
                    supplierList:supplierList,
                    hotelStarList:hotelStarList,
                    dayCountList:dayCountList,
                    endCityList:endCityList,
                    qualityTypeList:qualityTypeList,
                    trafficTypeList:trafficTypeList,
                    startCity:startCity,
                    orderType:orderType,
                    regimentType:regimentType,
                    startEarlyTime:startEarlyTime,
                    startLatterTime:startLatterTime,
                    confirmType:confirmType,
                    priceLess:priceLess,
                    priceMore:priceMore,
                    pageNum:p
                }).then(function (response) {
                    if(response.body != ''){
                        this.info = eval(response.body.info);
                        this.count = response.body.count;
                        if (!response.body.count) {
                            this.count = 0;
                        };
                        this.pageCount = response.body.pageCount;
                        if (!response.body.pageCount) {
                            this.pageCount = 1;
                        };
                        this.currPage = response.body.currPage;
                        if (!response.body.currPage) {
                            this.currPage = 1;
                        };
                        pageTwo(parseInt(this.pageCount),parseInt(this.currPage));
                    }
                    console.log('成功',response.body.count)
                }, function (res) {
                    console.log("失败", response);
                });
            }
        }
       
    })
//获取供应商
$("#sure1").click(function(){
    sup = false;
    vm.listpost(1)
});
//时间
$("#sure2").click(function(){
    vm.listpost(1)
})
//价格
$("#sure3").click(function(){
    vm.listpost(1);
})
//获取酒店
$("#sure4").click(function(){
    hotel = false;
    vm.listpost(1)
});
//价格排序

//跟团游分页
$("#pageTwo").createPage({
    pageCount:vm.pageCount,
    current:1,
    backFn:function(p){
        vm.listpost(p)
    }
});
function pageTwo(pageCount,currPage){
    //跟团游分页
    $("#pageTwo").createPage({
        pageCount:pageCount,
        current:currPage,
        backFn:function(p){
            // vm.listpost(p)
        }
    });
}


//点击排序后  排序重新显示第一个
$(function(){
    $(".product_nav li").click(function(){
        $("#pageTwo").createPage({
            pageCount:6,
            current:1,
            backFn:function(p){
                // console.log(p);
            }
        });
    })
})
</script>

</body>
</html>