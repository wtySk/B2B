<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link href="/harmony/css/publick.css" rel="stylesheet">
    <link href="/harmony/css/index.css" rel="stylesheet">
    <link href="/harmony/css/main.css" rel="stylesheet">
    <script src="/harmony/js/jquery-1.11.3.min.js"></script>
    <script src="/harmony/js/banner.js"></script>
    <script src="/harmony/js/header_search.js"></script>
    <script src="/harmony/js/jcarousellite.min.js"></script>
    <script src="/harmony/js/vue2.js"></script>
    <script src="/harmony/js/vue-resource.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        [v-cloak] {
            display: none;
        }
    </style>

</head>

<body>
<div class="page_top">
    <div class="page_top_position">
        <div class="page_top_left">
            <div class="page_top_left_a">欢迎来那边</div>
            <!--<div class="page_top_left_b">北京</div>-->
        </div>
        <div class="page_top_right">
            <div class="page_top_right_a">您好！请 <a href="###">登录</a></div>
            <div class="page_top_right_b"><a href="###">注册新账号</a></div>
            <div class="page_top_right_c"><img src="/harmony/images/top_header_login_bg.png"> <a href="###">用户中心</a></div>
        </div>
    </div>
</div>
<div class="container clearboth" id='tologin'>
    <div class="header clearboth">
        <header>
            <div class="header_a"><img src="/harmony/images/nabianet.png"> </div>
            <div class="header_b"><img src="/harmony/images/index_phone.png"> </div>
            <div class="header_c">
                <form id="index_submit">
                    <div class="header_c_div"><span>跟团游</span><img src="/harmony/images/search_select_sj.png"></div>
                    <input type="text" placeholder="请输入您想知道的一切信息" id="value" class="header_c_a">
                    <input type="button" id="button_b" class="header_c_b">

                   
                    <ul class="search_select">
                        <li ><a data-name="regiment" href="javascript:void(0);">跟团游</a> </li>
                        <li ><a data-name="free" href="javascript:void(0)">自由行</a> </li>
                        <li ><a data-name="half" href="javascript:void(0)">半自助</a> </li>
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
            <li><a href="list?regimentType=regiment">跟团游</a></li>
            <li><a href="list?regimentType=free">自由行</a> </li>
            <li><a href="list?regimentType=half">半自助</a> </li>
            <li><a href="plane">机票</a> </li>
            <li><a href="hotel">酒店</a> </li>
            <li><a href="visa">签证</a> </li>
        </ul>
    </div>
    <div class="index_banner">
        <div class="banner" id="banner">
            <a href="###" class="d1" style="background:url(/harmony/images/banner1.jpg) center no-repeat;"></a>
            <a href="###" class="d1" style="background:url(/harmony/images/banner2.jpg) center no-repeat;"></a>
            <a href="###" class="d1" style="background:url(/harmony/images/banner3.jpg) center no-repeat;"></a>
            <a href="###" class="d1" style="background:url(/harmony/images/banner4.jpg) center no-repeat;"></a>
            <a href="###" class="d1" style="background:url(/harmony/images/banner5.jpg) center no-repeat;"></a>
            <div class="d2" id="banner_id">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <aside>
            <div class="banner_aside" >
                <!--所有分类 Start-->
                <div class="wrap" >
                    <div class="all-sort-list">
                        <div class="item bo" v-for="(item,index) in areaList" v-bind:data-id="item.id" v-if="index!=8">
                            <h3 >
                                <div v-text="item.name"></div>
                                <span v-for="msg in item.msgName"><a @click="destination(msg.name)" href="javascript:void(0)" v-text="msg.name"></a></span>
                            </h3>
                            <div class="item-list clearfix" >
                                <div class="subitem">
                                    <dl class="fore1">
                                        <dd><em v-for="val in item.listSecond"><a v-bind:data-id="item.id" @click="destination(val.name)" href="javascript:void(0)" v-text="val.name"></a></em></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--所有分类 End-->
            </div>
            <div class="login" >
                <div class="login_a">
                    <h4>———— <span>会员登录</span> ————</h4>
                    <form>
                        <!--<div class="red_prompt">您输入的账号或密码有误，请重新输入!</div>-->
                        <div class="login_name"><input type="text" id='username' placeholder="用户名/手机号/邮箱"></div>
                        <div class="login_pw"><input type="password" id='psw' placeholder="输入密码"></div>
                        <div class="red_prompt" style="display:none">.....</div>
                        <div class="login_other clearboth">
                            <!--<div class="login_keep"><img src="/harmony/images/keep_login_a.png"> 保持登录状态</div>-->
                            <!--<div class="login_keep"><input type="checkbox" id="keepLogin"><label for="keepLogin">保持登录状态</label></div>-->
                            <div class="login_keep"><input type="checkbox" id="keepLogin" style=""><label for="keepLogin">七天内自动登录</label></div>
                            <div class="login_forget"><a href="###">忘记密码</a> </div>
                        </div>
                        <div class="login_ver">
                            <div class="login_ver_a"><input type="text" id="captcha" placeholder="输入验证码"></div>
                            <div class="login_ver_b">
                                <a href="javascript:;" @click="changeimg()">{!! captcha_img() !!}</a>
                            </div>
                            <div class="login_ver_c"><a href="javascript:;" @click="changeimg()">换一张</a> </div>
                        </div>
                        <div class="login_login"><a href="javascript:;" @click="goLogin()">登录</a> </div>
                        <div class="login_register">新用户 <a href="###"> 立即注册</a> </div>
                    </form>
                    <!--<h5>———— <span>会员登录</span> ————</h5>
            <div class="third_party_login">
                <a href="###"><img src="/harmony/images/login_qq.png"> </a>
                <a href="###"><img src="/harmony/images/login_weibo.png"> </a>
                <a href="###"><img src="/harmony/images/login_wx.png"> </a>
            </div>-->
                </div>
                <div class="login_b" id='suc_login'>
                    <div class="login_b_header">
                        <span class="login_b_header_a"><img src="/harmony/images/login_head_img.png"> </span>
                        <span class="login_b_header_b"><img src="/harmony/images/class_img.png"> </span>
                        <div class="login_b_header_name">{{ session('account') }}</div>
                    </div>
                    <div class="login_b_order clearboth">
                        <div class="login_b_order_a">
                            <img src="/harmony/images/login_b_order_a1.png">
                            <div class="login_b_order_dd">全部订单</div>
                            <div class="login_b_order_num">12</div>
                        </div>
                        <div class="login_b_order_a">
                            <img src="/harmony/images/login_b_order_a2.png">
                            <div class="login_b_order_dd">待确认订单</div>
                            <div class="login_b_order_num">12</div>
                        </div>
                        <div class="login_b_order_a">
                            <img src="/harmony/images/daifukuandingdan_03.png">
                            <div class="login_b_order_dd">待付款订单</div>
                            <div class="login_b_order_num">12</div>
                        </div>
                    </div>
                    <div class="login_b_bottom clearboth">
                        <div class="login_b_bottom_a">登录时间：2016-06-20</div>
                        <div class="login_b_bottom_b"><a href="javascript:;" @click="quitLogin()">退出</a> </div>
                    </div>
                </div>
            </div>
            <div class="notice">
                <h4>公告区</h4>
                <p>大二房东胜多负少发收费规范规范就好规范用积 分换地方对人体的泰国更换的发货的小地方很反 感的国更换的发货的小地 </p>
            </div>
        </aside>
    </div>
    <div class="index_main">
        <article>
            <div class="index_main_top"><img src="/harmony/images/index_xltj.png"></div>
            <div class="index_main_nav clearboth">
                <ul>
                    <li v-cloak v-for="(item,index) in brandName">
                        <a @click="getBrandPro(item.brandName)" href="javascript:void(0)" v-bind:class="index==0?'index_main_nav_click':''" v-text="item.brandName"></a>
                    </li>
                </ul>
                <!--<a href="###" class="index_main_more">更多 &raquo;</a>-->
            </div>
            <div class="index_wholesaler">
                <div class="index_wholesaler_a" v-for="item in firstName">
                    <a v-bind:href="'/harmony/detail/'+item.clusterOpenId">
                        <div class="index_wholesaler_a_a index_img"><img src="/harmony/images/index_a.png"></div>
                        <p class="index_wholesaler_a_b index_p" >@{{ item.pName | sum  }}</p>
                    </a>
                </div>
                <div class="index_wholesaler_b">
                    <div class="index_wholesaler_b_a" v-for="item in secondName">
                        <a v-bind:href="'/harmony/detail/'+item.clusterOpenId">
                            <div class="index_wholesaler_b_a_a index_img"><img src="/harmony/images/index_b.png"></div>
                            <p class="index_wholesaler_b_a_b index_p">@{{ item.pName | sum}}</p>
                        </a>
                    </div>
                    <div class="index_wholesaler_b_b" v-for="item in thirdName">
                        <a v-bind:href="'/harmony/detail/'+item.clusterOpenId">
                            <div class="index_wholesaler_b_b_a index_img"><img src="/harmony/images/index_b.png"></div>
                            <p class="index_wholesaler_b_b_b index_p">@{{ item.pName | sum}}</p>
                        </a>
                    </div>
                </div>

                <div class="index_wholesaler_c">
                    <div class="index_wholesaler_c_a clearboth" v-for="item in brandPro">
                        <div class="index_wholesaler_c_a_a">
                            <h4><a v-bind:href="'/harmony/detail/'+item.clusterOpenId" v-bind:data-id="item.clusterOpenId">@{{ item.pName | sum}}<!--<span>余<i>10</i></span>--></a></h4>
                            <p>近期出团 <span v-for="date in item.beginTime" v-bind:data-id="item.clusterOpenId" v-text="date.beginTime"></span></p>
                            <!--<p>首都国际机场12:00——香港15：55</p>-->
                            <!--<p>五星酒店</p>-->
                            <div class="index_wholesaler_c_a_b clearboth">
                                <p>@{{ item.hotelStar }}</p>
                                {{--<a href="###"><img src="/harmony/images/text.png" style="width: 18px; float: left; padding: 4px 4px 0 27px;">行程概况</a>--}}
                                <p>即时确认</p>
                            </div>
                            <!--<p>情人港、邦蒂海滩、梦幻世界、激浪世界、天空塔、皇家植物园、悉尼歌剧院...</p>-->
                            <h6>出发点：<i v-text="item.startCity"></i>  <i v-if="item.shoppingInfo == 'without'">无购物</i>  <i v-if="item.selfPayInfo == 'without'">无自费</i></h6>
                        </div>
                        <div class="index_wholesaler_c_a_d">
                            <h3>直客价<span>@{{ item.directPrice }}</span>元/人起</h3>
                            <!-- <p class='tonghang'>同行价钱<a href="#tologin" style="cursor:pointer">登录</a></p> -->
                            <div class="index_wholesaler_c_a_p">同行 <span v-text="item.tradePrice"></span>元/人起</div>
                            <div class="index_wholesaler_c_a_c"><a v-bind:href="'detail/'+item.clusterOpenId">产品详情</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="index_end ">
                <!--没有尾单 --begin-- -->
                <!--<div class="index_end_a "><a href="### "><img src="/harmony/images/index_end_zero.jpg "> </a> </div>-->
                <!--没有尾单 --end-- -->
                <!--一个尾单 --begin-- -->
                <!--<div class="index_end_b ">-->
                <!--<div class="index_end_top "><img src="/harmony/images/index_wdtj.png "> </div>-->
                <!--<div class="index_end_b_content ">-->
                <!--<div class="index_end_b_content_left "><a href="### "><img src="/harmony/images/index_end_one.jpg "> </a> </div>-->
                <!--<div class="index_end_b_content_right ">-->
                <!--<div class="index_end_b_content_right_title ">日本赏樱花日本赏樱花日本赏樱花日本赏樱花<span>余<i>8</i></span></div>-->
                <!--<div class="index_end_b_content_right_a ">-->
                <!--<div>出发日期  2016-06-14</div>-->
                <!--<div>首都国际机场12:00——香港15：55</div>-->
                <!--<div>当地四星酒店入住</div>-->
                <!--</div>-->
                <!--<div class="index_end_b_content_right_b ">【大阪城公园】（停留约40分钟）丰臣秀吉于1583年所建，是由雄伟的石墙砌造而成，大阪城公园内城中央-->
                <!--有风景秀丽的庭园和亭台楼阁，奇花异卉，满目青翠，充满诗情画意。-->

                <!--【心斋桥、道顿堀】(停留约120分钟）人气日剧《半沢直树》中藤泽末树甩半泽巴掌的地方)位于戎桥和道顿-->
                <!--一天。心斋桥作为大阪最大的繁华街，集中了许多精品屋和专卖店，从早到晚熙熙攘攘，到处是市民和游客的-->
                <!--起来的。这里大型百货店、百年老铺、面向平民的各种小店铺鳞次栉比。道顿崛坐落着很多美食店，不仅有日-->
                <!--地区不同的风味。-->
                <!--</div>-->
                <!--<div class="index_end_b_content_right_reserve "><a href="### ">预定</a> </div>-->
                <!--</div>-->

                <!--</div>-->
                <!--</div>-->
                <!--一个尾单 --end-- -->
                <!--两个尾单 --begin-- -->
                <!--<div class="index_end_c ">-->
                <!--<div class="index_end_top "><img src="/harmony/images/index_wdtj.png "> </div>-->
                <!--<div class="index_end_c_w ">-->
                <!--<div class="index_end_c_left ">-->
                <!--<a href="### "> <img src="/harmony/images/index_end_two.jpg "></a>-->
                <!--<a href="### "> <img src="/harmony/images/index_end_two.jpg "></a>-->
                <!--</div>-->
                <!--<div class="index_end_c_right ">-->
                <!--<div class="index_end_c_right_a ">-->
                <!--<div class="index_end_c_right_a_title ">日本赏樱花日本赏樱花日本赏樱花日本赏樱花<span>余<i>8</i></span></div>-->
                <!--<div class="index_end_c_right_a_content ">-->
                <!--<div>出发日期  2016-06-14</div>-->
                <!--<div>首都国际机场12:00——香港15：55</div>-->
                <!--<div>当地四星酒店入住</div>-->
                <!--</div>-->
                <!--<div class="index_end_b_content_right_reserve "><a href="### ">预定</a> </div>-->
                <!--</div>-->
                <!--<div class="index_end_c_right_a ">-->
                <!--<div class="index_end_c_right_a_title ">日本赏樱花日本赏樱花日本赏樱花日本赏樱花<span>余<i>8</i></span></div>-->
                <!--<div class="index_end_c_right_a_content ">-->
                <!--<div>出发日期  2016-06-14</div>-->
                <!--<div>首都国际机场12:00——香港15：55</div>-->
                <!--<div>当地四星酒店入住</div>-->
                <!--</div>-->
                <!--<div class="index_end_b_content_right_reserve "><a href="### ">预定</a> </div>-->
                <!--</div>-->
                <!--</div>-->

                <!--</div>-->
                <!--</div>-->
                <!--两个尾单 --end-- -->
                <!--三个尾单 --begin-- -->
                <!--<div class="index_end_d ">-->
                <!--<div class="index_end_top "><img src="/harmony/images/index_wdtj.png "> </div>-->
                <!--<div class="index_end_d_w ">-->
                <!--<div class="index_end_d_a "><a href="### "><img src="/harmony/images/index_end_three_a.jpg "> </a> </div>-->
                <!--<div class="index_end_d_b ">-->
                <!--<div class="index_end_d_b_title ">日本赏樱花日本赏樱花日本赏樱花日本赏樱花<span>余<i>8</i></span></div>-->
                <!--<div class="index_end_d_b_content_a ">-->
                <!--<div>出发日期  2016-06-14</div>-->
                <!--<div>首都国际机场12:00——香港15：55</div>-->
                <!--<div>当地四星酒店入住</div>-->
                <!--</div>-->
                <!--<div class="index_end_d_b_content_b ">【大阪城公园】（停留约40分钟）丰臣秀吉于1583年所建，是由雄伟的石墙砌造而成，大阪城公园内城中央-->
                <!--有风景秀丽的庭园和亭台楼阁，奇花异卉，满目青翠，充满诗情画意。-->
                <!--</div>-->
                <!--<div class="index_end_b_content_right_reserve "><a href="### ">预定</a> </div>-->
                <!--</div>-->
                <!--<div class="index_end_d_c ">-->
                <!--<div class="index_end_c_right_a ">-->
                <!--<div class="index_end_c_right_a_title ">日本赏樱花日本赏樱花日本赏樱花日本赏樱花<span>余<i>8</i></span></div>-->
                <!--<div class="index_end_c_right_a_content ">-->
                <!--<div>出发日期  2016-06-14</div>-->
                <!--<div>首都国际机场12:00——香港15：55</div>-->
                <!--<div>当地四星酒店入住</div>-->
                <!--</div>-->
                <!--<div class="index_end_b_content_right_reserve "><a href="### ">预定</a> </div>-->
                <!--</div>-->
                <!--<div class="index_end_c_right_a ">-->
                <!--<div class="index_end_c_right_a_title ">日本赏樱花日本赏樱花日本赏樱花日本赏樱花<span>余<i>8</i></span></div>-->
                <!--<div class="index_end_c_right_a_content ">-->
                <!--<div>出发日期  2016-06-14</div>-->
                <!--<div>首都国际机场12:00——香港15：55</div>-->
                <!--<div>当地四星酒店入住</div>-->
                <!--</div>-->
                <!--<div class="index_end_b_content_right_reserve "><a href="### ">预定</a> </div>-->
                <!--</div>-->
                <!--</div>-->
                <!--<div class="index_end_d_d ">-->
                <!--<a href="### "><img src="/harmony/images/index_end_three_b.jpg "> </a>-->
                <!--<a href="### "><img src="/harmony/images/index_end_three_b.jpg "> </a>-->
                <!--</div>-->
                <!--</div>-->
                <!--</div>-->
                <!--三个尾单 --end-- -->
                <!--四个尾单 --begin-- -->
                <!--<div class="index_end_e ">-->
                <!--<div class="index_end_top "><img src="/harmony/images/index_wdtj.png "> </div>-->
                <!--<div class="index_end_e_w ">-->
                <!--<ul class="index_end_e_list ">-->
                <!--<li>-->
                <!--<a target="_blank " href="### "><img src="/harmony/images/index_end.png " width="230 " height="323 " />-->
                <!--<div class="index_pro_bottom index_pro_bottom_left_position_four ">-->
                <!--<h4 class="index_pro_bottom_a index_pro_bottom_aa ">悉尼1</h4>-->
                <!--<div class="index_pro_bottom_b ">悉尼歌剧院——（外观）是20世纪最具特色的建详情请看产品预览</div>-->
                <!--<div class="index_pro_bottom_bg1 "></div>-->
                <!--<div class="index_pro_bottom_bg2 "></div>-->
                <!--</div>-->
                <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a target="_blank " href="### "><img src="/harmony/images/index_end.png " width="230 " height="323 " />-->
                <!--<div class="index_pro_bottom index_pro_bottom_left_position_four ">-->
                <!--<h4 class="index_pro_bottom_a index_pro_bottom_aa ">悉尼1</h4>-->
                <!--<div class="index_pro_bottom_b ">悉尼歌剧院——（外观）是20世纪最具特色的建详情请看产品预览</div>-->
                <!--<div class="index_pro_bottom_bg1 "></div>-->
                <!--<div class="index_pro_bottom_bg2 "></div>-->
                <!--</div>-->
                <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a target="_blank " href="### "><img src="/harmony/images/index_end.png " width="230 " height="323 " />-->
                <!--<div class="index_pro_bottom index_pro_bottom_left_position_four ">-->
                <!--<h4 class="index_pro_bottom_a index_pro_bottom_aa ">悉尼1</h4>-->
                <!--<div class="index_pro_bottom_b ">悉尼歌剧院——（外观）是20世纪最具特色的建详情请看产品预览</div>-->
                <!--<div class="index_pro_bottom_bg1 "></div>-->
                <!--<div class="index_pro_bottom_bg2 "></div>-->
                <!--</div>-->
                <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a target="_blank " href="### "><img src="/harmony/images/index_end.png " width="230 " height="323 " />-->
                <!--<div class="index_pro_bottom index_pro_bottom_left_position_four ">-->
                <!--<h4 class="index_pro_bottom_a index_pro_bottom_aa ">悉尼1</h4>-->
                <!--<div class="index_pro_bottom_b ">悉尼歌剧院——（外观）是20世纪最具特色的建详情请看产品预览</div>-->
                <!--<div class="index_pro_bottom_bg1 "></div>-->
                <!--<div class="index_pro_bottom_bg2 "></div>-->
                <!--</div>-->
                <!--</a>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</div>-->
                <div class="index_end_e ">
                    <div class="index_end_top "><img src="/harmony/images/index_wdtj.png "><div class="index_end_top_a "><a id="pageChange" href="javascript:void(0)"style="cursor:pointer "><img src="/harmony/images/repeat.png " style="width: 20px; "/>换一批</a> </div></div>
                    <div class="index_end_e_w ">
                        <ul class="index_end_e_list ">
                            <li v-for="item in bargainList">
                                <a target="_blank " v-bind:href="item.isEndProduct == 0 ? '/harmony/detail/'+item.clusterOpenId :'javascript:;'"><img v-bind:src="item.logo" width="243 " height="323 " />
                                    <div class="index_pro_bottom_a ">
                                        <div class="index_pro_bottom_a_a"><h2 v-text="item.pName"></h2><p>出团时间:</p><p v-for="itemTime in item.beginTime" v-text="itemTime.beginTime"></p>
                                            <div class="index_pro_bottom_a_c"><h4 v-if="account || inLogin">&yen;<span class="index_pro_bottom_a_c_one" v-text="item.directPrice"></span> &yen;<span class="index_pro_bottom_a_c_two" v-text="item.tradePrice"></span>起</h4><h4 v-else> &yen;<span class="index_pro_bottom_a_c_two" v-text="item.tradePrice"></span>起</h4></div>
                                        </div>
                                        <div class="index_pro_bottom_a_b"></div>
                                        <!--<div class="index_pro_bottom_bg2 "></div>-->
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--四个尾单 --end-- -->
                <!--五个尾单及以上 --begin-- -->
                <!--<div class="index_end_f ">
                    <div class="index_end_top "><img src="/harmony/images/index_wdtj.png "> </div>
                    <div class="index_end_lb ">
                        <div class="con_2_con ">
                            <a href="javascript:; " class="prev "></a>
                            <div class="fpc " style=" width:1100px; float:left; overflow:hidden; ">
                                <ul>
                                    <li>
                                        <a target="_blank " href="### "><img src="/harmony/images/index_end.png " width="230 " height="323 " />
                                            <div class="index_pro_bottom index_pro_bottom_left_position ">
                                                <h4 class="index_pro_bottom_a index_pro_bottom_aa ">悉尼1</h4>
                                                <div class="index_pro_bottom_b ">悉尼歌剧院——（外观）是20世纪最具特色的建详情请看产品预览</div>
                                                <div class="index_pro_bottom_bg1 "></div>
                                                <div class="index_pro_bottom_bg2 "></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank " href="### "><img src="/harmony/images/index_end.png " width="230 " height="323 " />
                                            <div class="index_pro_bottom index_pro_bottom_left_position ">
                                                <h4 class="index_pro_bottom_a index_pro_bottom_aa ">悉尼2</h4>
                                                <div class="index_pro_bottom_b ">悉尼歌剧院——（外观）是20世纪最具特色的建详情请看产品预览</div>
                                                <div class="index_pro_bottom_bg1 "></div>
                                                <div class="index_pro_bottom_bg2 "></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank " href="### "><img src="/harmony//harmony/images/index_end.png " width="230 " height="323 " />
                                            <div class="index_pro_bottom index_pro_bottom_left_position ">
                                                <h4 class="index_pro_bottom_a index_pro_bottom_aa ">悉尼3</h4>
                                                <div class="index_pro_bottom_b ">悉尼歌剧院——（外观）是20世纪最具特色的建详情请看产品预览</div>
                                                <div class="index_pro_bottom_bg1 "></div>
                                                <div class="index_pro_bottom_bg2 "></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank " href="### "><img src="/harmony/images/index_end.png " width="230 " height="323 " />
                                            <div class="index_pro_bottom index_pro_bottom_left_position ">
                                                <h4 class="index_pro_bottom_a index_pro_bottom_aa ">悉尼4</h4>
                                                <div class="index_pro_bottom_b ">悉尼歌剧院——（外观）是20世纪最具特色的建详情请看产品预览</div>
                                                <div class="index_pro_bottom_bg1 "></div>
                                                <div class="index_pro_bottom_bg2 "></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank " href="### "><img src="/harmony/images/index_end.png " width="230 " height="323 " />
                                            <div class="index_pro_bottom index_pro_bottom_left_position ">
                                                <h4 class="index_pro_bottom_a index_pro_bottom_aa ">悉尼5</h4>
                                                <div class="index_pro_bottom_b ">悉尼歌剧院——（外观）是20世纪最具特色的建详情请看产品预览</div>
                                                <div class="index_pro_bottom_bg1 "></div>
                                                <div class="index_pro_bottom_bg2 "></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank " href="### "><img src="/harmony/images/index_end.png " width="230 " height="323 " />
                                            <div class="index_pro_bottom index_pro_bottom_left_position ">
                                                <h4 class="index_pro_bottom_a index_pro_bottom_aa ">悉尼6</h4>
                                                <div class="index_pro_bottom_b ">悉尼歌剧院——（外观）是20世纪最具特色的建详情请看产品预览</div>
                                                <div class="index_pro_bottom_bg1 "></div>
                                                <div class="index_pro_bottom_bg2 "></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="javascript:; " class="next "></a>
                        </div>
                    </div>
                </div>-->
                <!--五个尾单及以上 --end-- -->
            </div>
        </article>
    </div>
</div>
<div class="red_line "></div>
<div class="footer ">
    <footer>
        <div class="footer_top clearboth ">
            <div class="footer_top_a "><img src="/harmony/images/nabianet.png "> </div>
            <div class="footer_top_b "><img src="/harmony/images/erweima.png "></div>
            <div class="footer_top_c ">
                <h4>关于那边</h4>
                <ul>
                    <li><a href="### ">我们的使命</a></li>
                    <li><a href="### ">我们的愿景</a></li>
                </ul>
            </div>
            <div class="footer_top_c ">
                <h4>联系我们</h4>
                <ul>
                    <li><a href="### ">我们的地址</a></li>
                    <li><a href="### ">我们的电话</a></li>
                    <li><a href="### ">客服电话</a></li>
                </ul>
            </div>
            <div class="footer_top_c ">
                <h4>欢迎合作</h4>
                <ul>
                    <li><a href="### ">商务洽谈</a></li>
                    <li><a href="### ">网站合作</a></li>
                </ul>
            </div>
            <div class="footer_top_c ">
                <h4>知识产权</h4>
                <ul>
                    <li><a href="### ">知识产权声明</a></li>
                    <li><a href="### ">免责权利声明</a></li>
                    <li><a href="### ">著作权与商标声明</a></li>
                    <li><a href="### ">商标</a></li>
                </ul>
            </div>
            <div class="footer_top_c ">
                <h4>法律声明</h4>
                <ul>
                    <li><a href="### ">本网站上信息</a></li>
                    <li><a href="### ">意见及网上论坛</a></li>
                    <li><a href="### ">版权和商标</a></li>
                    <li><a href="### ">免责声明</a></li>
                </ul>
            </div>
            <div class="footer_top_c ">
                <h4>服务条款</h4>
                <ul>
                    <li><a href="### ">服务内容</a></li>
                    <li><a href="### ">用户账号及密码</a></li>
                    <li><a href="### ">用户权责</a></li>
                </ul>
            </div>
            <div class="footer_top_c ">
                <h4>隐私声明</h4>
                <ul>
                    <li><a href="### ">我们的使命</a></li>
                    <li><a href="### ">我们的愿景</a></li>
                </ul>
            </div>

        </div>
        <ul class="footer_bottom ">
            <li>©2014-2015 nabianet.com 版权所有</li>
            <li> | </li>
            <li>京ICP备15037027</li>
            <li> | </li>
            <li>客服电话 400-060-8122</li>
        </ul>
    </footer>
</div>
<script>
var page = 1;
var key = 'regiment';
$(function(){
    $("#index_submit").submit(function(){
        var value = $("#value").val();
        window.location.href = '/harmony/list?regimentType='+key+'&title='+value;
        return false;
    })
    $("#button_b").click(function(){
        var value = $("#value").val();
        window.location.href = '/harmony/list?regimentType='+key+'&title='+value;
        return false;
    })
})
    var vm = new Vue({
        el:".container",
        data:{
            areaList:{!! $area !!},
            brandName:{!! $brandName !!},
            brandPro:{!! $brandPro !!},
            firstName:{!! $firstName !!},
            secondName:{!! $secondName !!},
            thirdName:{!! $thirdName !!},
            account:"{{ session('account')?session('account'):'' }}",
            bargainList:{!! $bargainList !!},
            bargainSize:{!! $bargainSize !!},
            inLogin:'',
            bargainSize:"{{ $bargainSize }}"
            
        },
        methods:{
            destination:function(destination){
                window.location.href = '/harmony/list?regimentType='+key+'&title='+destination;
            },
            pageChange:function(pageNum){
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name=csrf-token]').getAttribute('content');
                this.$http.post('/harmony/pagePost',{pageNum:pageNum}).then(function(response) {
                    if(response.body != '') {
                        this.bargainList = eval(response.body.bargainList);
                    }
                    console.log('赋值',response);
                }, function (res) {
                    console.log("失败", res);
                });
            },
            getBrandPro:function(brandName){
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name=csrf-token]').getAttribute('content');
                this.$http.post('/harmony/homePost',{brandName:brandName}).then(function(response) {
                    if(response.body != '') {
                        console.log(response.body);
                        this.brandPro = eval(response.body.brandPro);
                        this.firstName = eval(response.body.firstName);
                        this.secondName = eval(response.body.secondName);
                        this.thirdName = eval(response.body.thirdName);
                    }
                    console.log('赋值',this.firstName);
                }, function (res) {
                    console.log("失败", res);
                });
            },
            goLogin:function(){
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name=csrf-token]').getAttribute('content');
                var username=$('#username').val();
                var password=$('#psw').val();
                var code=$('#captcha').val();
                this.$http.post('/harmony/login',{username:username,password:password,captcha:code}).then(function(response) {

                    if(response.body.success) {
                        $('.login_a').hide();
                        $('.tonghang').hide();
                        $('.page_top').hide();
                        $('.index_wholesaler_c_a_p').show();
                        $('#suc_login').show();
                        this.inLogin = 1;
                    }else{
                        $('.red_prompt').show();
                        $('.red_prompt').text(response.body.code);
                        vm.changeimg();
                    }
                    console.log('成功',response);
                }, function (res) {
                    console.log("失败", res);
                });
            },

            quitLogin:function(){
                this.$http.get('/harmony/quit').then(function(response) {
                    if(response.body != '') {
                        location.href="/harmony/home";
                        $('.login_a').show();
                        $('.tonghang').show();
                        $('.page_top').show();
                        $('.index_wholesaler_c_a_p').hide();
                        $('#suc_login').hide();
                        this.inLogin = '';
                        this.account = '';
                        //vm.changeimg();
                    }
                    console.log('成功',response);
                }, function (res) {
                    console.log("失败", res);
                });
            },

            isLogin:function(isLogin){
                if(isLogin){
                    $('.login_a').hide();
                    $('.tonghang').hide();
                    $('.page_top').hide();
                    $('.index_wholesaler_c_a_p').show();
                    $('#suc_login').show();
                }
            },

            changeimg:function(){
               var imgsrc="{!! captcha_src() !!}";
               var num=imgsrc+Math.random();
                $('.login_ver_b img').attr('src',num);
            },

        },
       
        filters: {
            sum: function (value) {
                var str = value.substr(0,10) + '....';
                return str ;
            }
            }
    })

$(function(){
    vm.isLogin(vm.account);
    $("#pageChange").click(function(){
        page = page + 1;
        var bargainSize = vm.bargainSize; // 5
        if (page > bargainSize) {
            page = 1;
        }
        vm.pageChange(page);
    })
})
</script>
<script>
    //    $(function(){
    //导航点击变色
    //        $(".banner a ").click(function () {
    //            $(this).addClass("nav_click ").parents("li ").siblings().children("a ").removeClass("nav_click ");
    //        });
    //点击保持登录
    //        $(".login_keep ").click(function () {
    //            var keep_login_a=$(this).children("img ").attr("src ");
    //            var keep_login_b="/harmony/images/keep_login_b.png ";
    //            if(keep_login_a!=keep_login_b){
    //                $(this).children("img ").attr("src ","/harmony/images/keep_login_b.png ");
    //            }else {
    //                $(this).children("img ").attr("src ","/harmony/images/keep_login_a.png ");
    //            }
    //        })
    //    });
    //首页底部尾单鼠标经过
    //$(function () {
    //    $(".index_end ").on("mouseover mouseout ",".fpc li,.index_end_e_list li ",function(event){
    //        if(event.type == "mouseover ") {
    //            $(this).children("a ").children(".index_pro_bottom ").removeClass("index_pro_bottom_left_position ");
    //            $(this).children("a ").children(".index_pro_bottom ").removeClass("index_pro_bottom_left_position_four ");
    //            $(this).children("a ").children(".index_pro_bottom ").children(".index_pro_bottom_a ").removeClass("index_pro_bottom_aa ");
    //            $(this).children("a ").children(".index_pro_bottom ").children(".index_pro_bottom_bg1 ").hide()
    //            $(this).children("a ").children(".index_pro_bottom ").children(".index_pro_bottom_bg2 ").show()
    //            $(this).children("a ").children(".index_pro_bottom ").children(".index_pro_bottom_b ").show()
    //        }else if(event.type == "mouseout "){
    //            $(this).children("a ").children(".index_pro_bottom ").addClass("index_pro_bottom_left_position ");
    //            $(this).children("a ").children(".index_pro_bottom ").addClass("index_pro_bottom_left_position_four ");
    //            $(this).children("a ").children(".index_pro_bottom ").children(".index_pro_bottom_a ").addClass("index_pro_bottom_aa ");
    //            $(this).children("a ").children(".index_pro_bottom ").children(".index_pro_bottom_bg1 ").show()
    //            $(this).children("a ").children(".index_pro_bottom ").children(".index_pro_bottom_bg2 ").hide()
    //            $(this).children("a ").children(".index_pro_bottom ").children(".index_pro_bottom_b ").hide()
    //        }
    //    });
    //})


    //首页底部尾单轮播
    //    $(document).ready(function(){
    //        var gese=6;
    //        if(gese<5){
    //
    //        }else{
    //            $(".fpc ").jCarouselLite({
    //                auto: 3000,
    //                btnNext: ".next ",
    //                btnPrev: ".prev ",
    //                visible: 5
    //            });
    //        }
    //    });
    banner();
    $('.header_a').click(function() {
        window.location.href = '/harmony/home';
    })
    $(function(){
        //鼠标经过底部广告图片  文字背景透明度改变
        $(".index_end_e_list li a").hover(function(){
            $(this).children(".index_pro_bottom_a").children(".index_pro_bottom_a_b").css({"opacity":"0.9"});

        },function(){
            $(this).children(".index_pro_bottom_a").children(".index_pro_bottom_a_b").css({"opacity":"0.75"});

        });

        //批发商线路 点击切换颜色
        $(".index_main_nav li a").click(function(){
            $(this).addClass("index_main_nav_click").parents("li").siblings().children("a").removeClass("index_main_nav_click");
        })
    });
</script>
<script src="/harmony/js/aside.js "></script>
</body>
</html>