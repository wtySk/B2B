<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>产品详情</title>
    <link href="/harmony/css/publick.css" rel="stylesheet">
    <link href="/harmony/css/travel_group.css" rel="stylesheet">
    <link href="/harmony/css/calendar.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .disabled { pointer-events: none; }
    </style>
</head>

<body>
<div class="page_top">
    <div class="page_top_position">
        <div class="page_top_left">
            <div class="page_top_left_a">欢迎来那边</div>
            <div class="page_top_left_b">北京</div>
        </div>
        <div class="page_top_right">
            <div class="page_top_right_a">您好！请 <a href="###">登录</a></div>
            <div class="page_top_right_b"><a href="###">注册新账号</a></div>
            <div class="page_top_right_c"><img src="/harmony/images/top_header_login_bg.png"> <a href="###">用户中心</a></div>

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
                    <input type="text" id="value" placeholder="请输入您想知道的一切信息" class="header_c_a">
                    <input type="submit" value="" class="header_c_b">

                    <ul class="search_select">
                        <li ><a data-name="regiment" href="javascript:void(0);">跟团游</a> </li>
                        <li ><a data-name="free" href="javascript:void(0)">自由行</a> </li>
                        <li ><a data-name="half" href="javascript:void(0)">半自助</a> </li>
                        {{--<li><a data-name="plane" href="javascript:void(0)">机票</a> </li>--}}
                        {{--<li><a data-name="hotel" href="javascript:void(0)">酒店</a> </li>--}}
                        {{--<li><a data-name="visa" href="javascript:void(0)">签证</a> </li>--}}
                </form>

            </div>
            <div class="header_d"><img src="/harmony/images/index_erweima.png"> </div>
        </header>
    </div>
    <div class="nav clearboth">
        <ul>
            <li><a href="/harmony/home">首页</a> </li>
            <li><a href="/harmony/list?regimentType=regiment">跟团游</a></li>
            <li><a href="/harmony/list?regimentType=free">自由行</a> </li>
            <li><a href="/harmony/list?regimentType=half">半自助</a> </li>
            <li><a href="/harmony/plane">机票</a> </li>
            <li><a href="/harmony/hotel">酒店</a> </li>
            <li><a href="/harmony/visa">签证</a> </li>
        </ul>
    </div>



    <div class="teamTrip clearboth">
        <div class="teamTrip_nav">
            <div><a href="###">首页 </a> </div>
            <div class="site_kh"> > </div>

            <div>产品详情</div>
        </div>



        <div class="travel_group_header">
            <div class="travel_group_header_left">
                <div class="slide" id="PicSlide">
                    <ul class="img">
                        <li style="display: list-item;">
                            <a href="###">
                                <div class="team_silder_title_bg"></div>
                                <div class="team_silder_title">
                                    <div class="team_silder_title_l"><i v-text="basic.regimentTypeName"></i> 出发地:<span v-text="basic.startCity"></span></div>
                                    <div class="team_silder_title_r">ID:<span v-text="basic.regimentId"></span></div>
                                </div>
                                <img src="/harmony/images/thumb_640_360_1349779141347.jpg" width="540" height="270" alt="111111" data-pinit="registered">
                            </a>
                        </li>
                        <li class="hidden" style="display: none;">
                            <a href="###">
                                <div class="team_silder_title_bg"></div>
                                <div class="team_silder_title">
                                    <div class="team_silder_title_l"><i v-text="basic.regimentTypeName"></i> 出发地:<span v-text="basic.startCity"></span></div>
                                    <div class="team_silder_title_r">ID:<span v-text="basic.regimentId"></span></div>
                                </div>
                                <img src="/harmony/images/thumb_640_360_1349779282588.jpg" width="540" height="270" alt="2222" data-pinit="registered">
                            </a>
                        </li>
                        <li class="hidden" style="display: none;">
                            <a href="###">
                                <div class="team_silder_title_bg"></div>
                                <div class="team_silder_title">
                                    <div class="team_silder_title_l"><i v-text="basic.regimentTypeName"></i> 出发地:<span v-text="basic.startCity"></span></div>
                                    <div class="team_silder_title_r">ID:<span v-text="basic.regimentId"></span></div>
                                </div>
                                <img src="/harmony/images/thumb_640_360_1349776343282.jpg" width="540" height="270" alt="3333" data-pinit="registered">
                            </a>
                        </li>
                    </ul>

                    <div class="thumb">
                        <ul>
                            <li>
                                <a href="###">
                                    <img src="/harmony/images/thumb_120_60_1349779141347.jpg" width="173" height="76">
                                </a>
                            </li>
                            <li>
                                <a href="###">
                                    <img src="/harmony/images/thumb_120_60_1349779282588.jpg" width="173" height="76">
                                </a>
                            </li>
                            <li>
                                <a href="###">
                                    <img src="/harmony/images/thumb_120_60_1349776343282.jpg" width="173" height="76">
                                </a>
                            </li>

                        </ul>
                        <div class="now-status" style="left: 0px;"></div>
                    </div>
                </div>
                <!--日历---------------------------------------------------------------------------------------------------------->
                <div class="travel_group_header_left_calendar">

                    <div class="calendar clearboth">
                        <div class="outer clearfix" id="calendarcontainer">
                        </div>
                    </div>


                </div>

            </div>

            <div class="travel_group_header_right">
                <div class="travel_group_header_right_a">
                    <div class="travel_group_header_right_a_a clearboth">
                        <div class="travel_group_header_right_a_a_left clearboth"><span class="qingsonglvyou">【<span v-text="basic.brandName" style="font-size: 16px"></span>】</span><br/><span class="beijingchufa qianzheng_xiangqingye" v-text="basic.regimentName"></span></div>
                        {{--<div class="travel_group_header_right_a_a_right clearboth">--}}
                            {{--<a href="###">马上联系TA--}}
                                {{--<div class="travel_group_header_right_a_a_right_a">--}}
                                    {{--<div class="travel_group_header_right_a_a_right_a_xjb"><img src="/harmony/images/xiaojianbiao_07.png"></div>--}}
                                    {{--<span>姓名：宋晓华</span>--}}
                                    {{--<span>手机：18703544555</span>--}}
                                    {{--<span>QQ&nbsp;：2322254555</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    </div>
                    {{--<div class="travel_group_header_right_a_b clearboth">--}}
                        {{--<ul>--}}
                            {{--<li>关键词</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                </div>
                <div class="travel_group_header_right_b clearboth">
                    <ul>
                        <li style="font-size: 16px"><span v-text="basic.dayCount" style="font-size: 16px"></span>天 <span v-text="basic.nightCount" style="font-size: 16px"></span>晚</li>
                        <li><span v-text="basic.qualityName" style="font-size: 16px"></span></li>
                        <li><span v-text="basic.lineType" style="font-size: 16px"></span></li>
                        <li v-if="basic.shopCount == null" style="font-size: 16px">无购物</li>
                    </ul>
                    {{--<div class="travel_group_header_right_b_a">--}}
                        {{--<a href="###" class="travel_group_header_right_b_a_a">行程概况</a>--}}
                        {{--<span>行程下载:</span>--}}
                        {{--<a href="###" class="travel_group_header_right_b_a_a">PDF版</a>--}}
                        {{--<a href="###" class="travel_group_header_right_b_a_a">WORD版</a>--}}
                        {{--<a href="###" class="travel_group_header_right_b_a_b">扫码分享--}}
                            {{--<div class="travel_group_header_right_b_a_b_hide">--}}
                                {{--<img src="/harmony/images/xiaojianbiao_07.png" class="travel_group_header_right_b_a_b_xiaojianbiao">--}}
                                {{--<img src="/harmony/images/erweima2_07.png" class="travel_group_header_right_b_a_b_erweima">--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                </div>
                <div class="travel_group_header_right_c clearboth">
                    <div class="travel_group_header_right_c_a clearboth">
                        <div class="travel_group_header_right_c_a_left">
                            <span class="travel_group_header_right_c_a_left_a" style="font-size: 16px">出团日期</span>
                            <div style="width:100px; text-align: left; line-height: 25px; padding-left: 10px; display: inline-block" class="out_team" style="font-size: 16px"></div>

                            <span style="font-size: 16px">库存 <i id="mt" v-text="first.surplusCount" style="font-size: 16px;color: #ff9f16;"></i></span>
                        </div>
                        <div class="travel_group_header_right_c_a_right" style="font-size: 16px">截止日期：2016-06-16</div>
                    </div>

                    <ul class="clearboth">
                        {{--<img src="/harmony/images/t_group_shuaituan_03.png">--}}
                        {{--<li class="hover_jiage_li">成人<span><i class="renmingbi">&yen;</i><i v-text="first.adultIndustryPrice"></i>元/人</span>--}}
                            {{--<div class="hover_jiage">正常价格<span v-text="first.adultDirectPrice"></span>元/人<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>--}}
                        {{--</li>--}}
                        {{--<li class="hover_jiage_li">儿童<span><i class="renmingbi">&yen;</i><i v-text="first.childIndustryPrice"></i>元/人</span>--}}
                            {{--<div class="hover_jiage">正常价格<span v-text="first.childDirectPrice"></span>元/人<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>--}}
                        {{--</li>--}}
                        {{--<li class="hover_jiage_li">自定义<span><i class="renmingbi">&yen;</i><i>2000.00</i>元/人</span>--}}
                            {{--<div class="hover_jiage">正常价格3000.00元/人<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>--}}
                        {{--</li>--}}

                    </ul>
                    <div class="travel_group_header_right_c_b clearboth">
                        <div style="float: left;" v-if="first.singleRoomIndustryPrice != false" style="font-size: 16px">单房差&yen; <span id="qfc" v-text="first.singleRoomIndustryPrice" style="font-size: 16px"></span>元/人</div>
                        <div style="float: right;" style="font-size: 16px">价格均为同业价格，直客价建议 <i class="renmingbi" style="font-size: 16px">+</i><span style="font-size: 16px;color: #ff9f16;">800.00</span>元/人</div>
                    </div>
                </div>
                <div class="travel_group_header_right_d">
                    <span class="travel_group_header_right_c_a_left_a travel_group_header_right_c_a_left_a_a" style="font-size: 16px">产品特色</span>
                    <div class="travel_group_header_right_d_a"><span v-text="basic.theme" style="font-size: 16px"></span><br/>
                        <span v-text="basic.features" style="font-size: 16px"></span></div>
                </div>
            </div>


        </div>
    </div>


    <div class="travel_group_reserve clearboth">
        <div class="travel_group_reserve_a clearboth">
            <div class="travel_group_reserve_a_a">
                <span>出团日期</span>
                <!--<div class="date_choice"><input placeholder="2016-9-18" type="text" onClick="WdatePicker()" style="margin-right: 15px;"></div>-->
                <div class="date_choice"><div style="width:100px; text-align: left; line-height: 22px; padding-left: 10px;" class="out_team"></div></div>

            </div>

            <div class="travel_group_reserve_a_b">
                <div class="travel_group_reserve_a_b_jiage">成人<i class="renmingbi">&yen;</i><span id="cr" v-text="first.adultIndustryPrice"></span>元/人</div>
            </div>
            <div class="travel_group_reserve_a_b" v-if="first.childIndustryPrice != false">
                <div class="travel_group_reserve_a_b_jiage" >儿童<i class="renmingbi">&yen;</i><span id="et" v-text="first.childIndustryPrice"></span>元/人</div>
            </div>
            <div class="travel_group_reserve_a_b" v-if="first.singleRoomIndustryPrice != false">
                <div class="travel_group_reserve_a_b_jiage" >单房差<i class="renmingbi">&yen;</i><span id="fc" v-text="first.singleRoomIndustryPrice"></span>元/人</div>
            </div>

        </div>



        <div class="travel_group_reserve_c clearboth">
            <div class="travel_group_reserve_c_a">收款方式：全款</div>
            <div class="travel_group_reserve_c_a">确认方式：即时确认</div>
            {{--<div class="travel_group_reserve_c_b">共计：<div class="travel_group_reserve_c_b_a">&yen;<span>0.00</span></div></div>--}}
            {{--<div class="travel_group_reserve_c_c">同业结算价</div>--}}
        </div>
        <div class="travel_group_reserve_d">
            <a v-bind:href="'/harmony/ask/' + first.openId" id="travel_group_content_all_a_a">立即预定</a>
        </div>
    </div>


    <div class="travel_group_content">
        <div class="travel_group_content_nav_waiceng">
            <div class="travel_group_content_nav clearboth">
                <ul class="clearboth">
                    <li><a href="javascript:scroll('travel_group_content_all_a_a');" class="travel_group_content_nav_a chanpinneirong">产品内容</a></li>
                    <li><a href="javascript:scroll('travel_group_content_all_b_a_a');" class="feiyongshuoming">费用说明</a></li>
                    <li><a href="javascript:scroll('travel_group_content_all_b_a_b');" class="qitashuoming">其他说明</a></li>
                    <li><a href="javascript:scroll('travel_group_content_all_b_a_c');" class="xingchengcankao">行程参考</a></li>
                </ul>
                <div class="travel_group_content_nav_hongxian"></div>
            </div>
        </div>



        <div class="travel_group_content_all">
            <div class="travel_group_content_all_a clearboth">
                <div class="travel_group_content_all_a_a wangfanjiaotong"><img src="/harmony/images/xiaotubiaofeiji_16.png">往返交通</div>
                <div class="travel_group_content_all_a_b clearboth">
                    <div v-for="item in traffic" class="travel_group_content_all_a_b_hangbanleixing clearboth ">
                        <div class="travel_group_content_all_a_b_hangbanleixing_a">航班类型<span v-text="traffic.flyTypeName"></span></div>
                        <div class="travel_group_content_all_a_b_hangbanleixing_b clearboth">
                            <ul class="clearboth">
                                <li>往返</li>
                                <li>航空公司</li>
                                <li>航班号</li>
                                <li>机型</li>
                                <li>起飞机场-代码-航站楼</li>
                                <li>落地机场-代码-航站楼</li>
                                <li>起飞时间</li>
                                <li>落地时间</li>
                                <li>飞行时长</li>
                                <li>舱位</li>
                                <li>日期</li>
                            </ul>
                        </div>
                        <div class="travel_group_content_all_a_b_hangbanleixing_c clearboth">
                            <ul class="clearboth">
                                <li><span v-text="item.goOrBackName"></span>-<span v-text="item.trafficTypeName"></span></li>
                                <li><span v-text="item.company"></span></li>
                                <li><span v-text="item.code"></span></li>
                                <li><span v-text="item.goOrBackName"></span></li>
                                <li><span v-text="item.startPlace"></span>--<span v-text="item.startAbbreviate"></span>--<span v-text="item.startTerminal"></span></li>
                                <li><span v-text="item.arrivePlace"></span>--<span v-text="item.arriveAbbreviate"></span>--<span v-text="item.arriveTerminal"></span></li>
                                <li><span v-text="item.startTime"></span></li>
                                <li><span v-text="item.arriveTime"></span></li>
                                <li><span v-text="item.useTime"></span></li>
                                <li><span v-text="item.positionName"></span></li>
                                <li><span v-text="item.goOrBackName"></span></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="travel_group_content_all_a_c clearboth"><img src="/harmony/images/small_acin_10.png" >保险<p v-text="extra.insuranceTour == 'has'?'含旅游人身意外险':'无'"></p></div>
                <div class="travel_group_content_all_a_c clearboth"><img src="/harmony/images/small_acin_12.png" >用餐说明<p v-text="extra.meal"></p></div>
                <div class="travel_group_content_all_a_c clearboth"><img src="/harmony/images/small_acin_16.png" >住宿情况<div class="travel_group_content_all_a_c_xingji" v-text="extra.starDesc != null?extra.starDesc:'无说明'"></div><div class="travel_group_content_all_a_c_leixing" ><span v-if="extra.persons != null">标准 @{{ extra.persons }} 人间</span></div><p v-text="extra.accommodationDesc"></p></div>
                <div class="travel_group_content_all_a_c clearboth"><img src="/harmony/images/small_acin_18.png" >签证说明<p v-text="extra.visa"></p></div>
                <div class="travel_group_content_all_a_c clearboth"><img src="/harmony/images/small_acin_03.png" >购物说明<div class="travel_group_content_all_a_c_xingji"><span v-if="extra.shopCount != null">购物店 @{{ extra.shopCount }} 家</span><span v-else>无购物</span></div><p v-text="extra.shopDesc"></p></div>
                <div class="travel_group_content_all_a_c clearboth"><img src="/harmony/images/small_acin_24.png" >自费说明<div class="travel_group_content_all_a_c_xingji"><span v-text=" extra.expenseSelf == 'without'?'无自费':'有自费'"></span></div><p id="travel_group_content_all_b_a_a" v-text="extra.expenseSelfDesc"></p></div>
            </div>
            <div class="travel_group_content_all_b">
                <div class="travel_group_content_all_b_a">
                    <div class="travel_group_content_all_b_a_a bangdingnav clearboth" ><img src="/harmony/images/small_acin_26.png" >费用包含</div>
                    <div class="travel_group_content_all_b_a_b" v-text="extra.costContain">

                    </div>
                </div>
                <div class="travel_group_content_all_b_a">
                    <div class="travel_group_content_all_b_a_a clearboth"><img src="/harmony/images/small_acin_28.png" >费用不含</div>
                    <div class="travel_group_content_all_b_a_b" id="travel_group_content_all_b_a_b" v-text="extra.costOutside">

                    </div>
                </div>
            </div>
            <div class="travel_group_content_all_b">
                <div class="travel_group_content_all_b_a">
                    <div class="travel_group_content_all_b_a_a teshushuomingnav clearboth"><img src="/harmony/images/small_acin_30.png" >特殊说明</div>
                    <div class="travel_group_content_all_b_a_b" v-text="extra.specialDesc">

                    </div>
                </div>
                <div class="travel_group_content_all_b_a">
                    <div class="travel_group_content_all_b_a_a clearboth" ><img src="/harmony/images/small_acin_32.png" >重要提示</div>
                    <div class="travel_group_content_all_b_a_b" v-text="extra.important">

                    </div>
                </div>
                <div class="travel_group_content_all_b_a">
                    <div class="travel_group_content_all_b_a_a clearboth"><img src="/harmony/images/small_acin_32.png" >预定通知</div>
                    <div class="travel_group_content_all_b_a_b" id="travel_group_content_all_b_a_c" v-text="extra.notice">

                    </div>
                </div>
            </div>
            <div class="travel_group_content_all_d clearboth">
                <div class="travel_group_content_all_d_header clearboth">
                    <div class="travel_group_content_all_b_a_a xingchengcankao_nav clearboth" ><img src="/harmony/images/small_acin_32.png" >行程概况</div>
                    <div class="travel_group_content_all_d_a_b clearboth">
                        <ul class="clearboth">
                            <li>日期</li>
                            <li>主题</li>
                            <li>用餐</li>
                            <li>住宿</li>
                        </ul>
                        <ul v-for="msg in journey" class="clearboth">
                            <li>第<span v-text="msg.dayNum"></span>天</li>
                            <li><span v-text="msg.title"></span></li>
                            <li>早餐-<span v-text="msg.breakfastDesc"></span> 中餐-<span v-text="msg.lunchDesc"></span> 晚餐-<span v-text="msg.dinnerDesc !=null?msg.dinnerDesc:'无'"></span></li>
                            <li><span v-text="msg.hotel"></span></li>
                        </ul>


                    </div>

                </div>
                <div>
                    <div class="travel_group_content_all_b_a_a clearboth" ><img src="/harmony/images/small_acin_32.png" >行程参考</div>
                    <div class="travel_group_content_all_b_a_c"><span v-text="basic.dayCount"></span>天<span v-text="basic.nightCount"></span>晚飞机往返</div>
                    <div class="travel_group_content_all_d_bottom">
	    					<span class="travel_group_content_all_d_left_nav">
	    						<ul>
									<!--<li class="di_n_tian_click"><a href="###" class="dianji_a">1</a></li>-->

								</ul>
	    					</span>
                        <div>
                            <div class="travel_group_content_all_d_right" v-for="item in journey">
                                <div class="travel_group_content_all_d_right_a">
                                    <div class="travel_group_content_all_d_right_a_cont">第<span v-text="item.dayNum"></span>天</div>
                                    <div class="travel_group_content_all_d_right_a_con clearboth">
                                        <div class="travel_group_content_all_d_right_a_cont_a" v-text="item.title"></div>
                                        {{--<div class="travel_group_content_all_d_right_a_cont_b"><span>苏黎世</span><img src="/harmony/images/gentuanyouguodu_jiantou_03.png"><span>苏黎世</span><img src="/harmony/images/gentuanyouguodu_jiantou_03.png"><span>苏黎世</span><span>（参考瑞士基亚索）</span></div>--}}
                                    </div>
                                    <div class="travel_group_content_all_d_right_a_cont">早餐-<span v-text="item.breakfastDesc"></span><span v-text="item.breakfast == 'other'?item.breakfastOtherDesc:''"></span> 中餐-<span v-text="item.lunchDesc"></span> <span v-text="item.lunch == 'other'?item.lunchOtherDesc:''"></span> 晚餐-<span v-text="item.dinnerDesc !=null?item.dinnerDesc:'无'"></span> <span v-text="item.dinner == 'other'?item.dinnerOtherDesc:''"></span></div>
                                    <div class="travel_group_content_all_d_right_a_cont">
                                        <p v-text="item.journey"></p>
                                    </div>
                                    <div class="travel_group_content_all_d_right_a_cont" v-text="item.hotel"></div>
                                </div>
                            </div>
                        </div>








                    </div>
                </div>

            </div>
        </div>
    </div>







    <!--底部 ------------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="red_line"></div>
    <div class="footer">
        <footer>
            <div class="footer_top clearboth">
                <div class="footer_top_a"><img src="/harmony/images/nabianet.png"> </div>
                <div class="footer_top_b"><img src="/harmony/images/erweima.png"></div>
                <div class="footer_top_c">
                    <h4>关于那边</h4>
                    <ul>
                        <li><a href="###">我们的使命</a></li>
                        <li><a href="###">我们的愿景</a></li>
                    </ul>
                </div>
                <div class="footer_top_c">
                    <h4>联系我们</h4>
                    <ul>
                        <li><a href="###">我们的地址</a></li>
                        <li><a href="###">我们的电话</a></li>
                        <li><a href="###">客服电话</a></li>
                    </ul>
                </div>
                <div class="footer_top_c">
                    <h4>欢迎合作</h4>
                    <ul>
                        <li><a href="###">商务洽谈</a></li>
                        <li><a href="###">网站合作</a></li>
                    </ul>
                </div>
                <div class="footer_top_c">
                    <h4>知识产权</h4>
                    <ul>
                        <li><a href="###">知识产权声明</a></li>
                        <li><a href="###">免责权利声明</a></li>
                        <li><a href="###">著作权与商标声明</a></li>
                        <li><a href="###">商标</a></li>
                    </ul>
                </div>
                <div class="footer_top_c">
                    <h4>法律声明</h4>
                    <ul>
                        <li><a href="###">本网站上信息</a></li>
                        <li><a href="###">意见及网上论坛</a></li>
                        <li><a href="###">版权和商标</a></li>
                        <li><a href="###">免责声明</a></li>
                    </ul>
                </div>
                <div class="footer_top_c">
                    <h4>服务条款</h4>
                    <ul>
                        <li><a href="###">服务内容</a></li>
                        <li><a href="###">用户账号及密码</a></li>
                        <li><a href="###">用户权责</a></li>
                    </ul>
                </div>
                <div class="footer_top_c">
                    <h4>隐私声明</h4>
                    <ul>
                        <li><a href="###">我们的使命</a></li>
                        <li><a href="###">我们的愿景</a></li>
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
</div>

{{--{{dd(csrf_token())}}--}}
<script src="/harmony/js/jquery-1.11.3.min.js"></script>
<script src="/harmony/js/paging.js"></script>
<script src="/harmony/js/header_search.js"></script>
<script src="/harmony/js/team_free.js"></script>
<script src="/harmony/js/tracel_group.js"></script>
<script src="/harmony/js/daohangfudong.js"></script>
<script src="/harmony/js/maodian_huadongxiaoguo.js"></script>
<script src="/harmony/js/vue2.js"></script>
<script src="/harmony/js/vue-resource.js"></script>
<!--图片轮播-->
<link href="/harmony/css/zzsc.css" rel="stylesheet">
<script src="/harmony/js/jquery.banner.js"></script>
<script src="/harmony/js/WdatePicker.js"></script>
<script src="/harmony/js/prettify.js"></script>
<script src="/harmony/js/jquery.slimscroll.js"></script>
<script src="/harmony/js/zzsc.js"></script>
<!--日历-->
<script src="/harmony/js/fun.js"></script>

<script>
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
            basic:{!! $basicResultDto !!},
            traffic:{!! $trafficResultDtos !!},
            endCity:{!! $endCityResultDtos !!},
            journey:{!! $journeyResultDtos !!},
            extra:{!! $extraResultDto !!},
            first:{!! $firstMsg !!},

        }
    })
</script>

<script type="text/javascript">
    var tDate ={!! $date !!};
    var beginYear='';
    var beginMonth='';
    var beginDate='';
    var endYear='';
    for(var i=0;i<tDate.length;i++) {
        beginYear = tDate[0];
        beginMonth = tDate[1];
        beginDate = tDate[2];
        endYear =  tDate[3];
    }

    var beginTime=beginYear+"-"+beginMonth+"-"+beginDate;
    var endTime=endYear+"-"+beginMonth+"-"+beginDate;
//    console.log(beginTime,endTime);
    var para={'c':'calendarcontainer',
        'y':beginYear,
        'm':beginMonth,
        'a':{
            'd1':beginTime,//最早触发时间
            'd2':endTime//最晚出发时间
        },
        'f':0,//显示双日历用1，单日历用0
        'fu':function (t) {//回调函数，点击日期是调用的函数,参数t为点击的日期对象，可以把用户选定的日期通过此函数存入服务端或cookies，具体请自行编写
            return(xfl=t.id)
        }
    };
    new  CreateCalendar(para.c,para.y,para.m,para.a,para.f,para.fu);

    $(function(){
        var regimentList = eval({!! $list !!});
        var regimentId = '{{ $id }}';
        $(".out_team").text(beginTime);
        function init() {
            var $aTds = $('#calendarcontainer td');
            if(regimentList != undefined) {
                for (var i = 0; i < $aTds.length; i++) {
                    var date = $($aTds[i]).attr("id");
                    if(date == beginTime){
                        $($aTds[i]).addClass("hover_two");
                    }
                    for (var j = 0; j < regimentList.length; j++) {
                        if (date == regimentList[j].goDate) {
                            var str = "<div class='more_than'>余<span id='more_than'>" + regimentList[j].surplusCount + "</span> </div>" + "<span class='more_than_price'>￥" + regimentList[j].adultIndustryPrice + "</span>";
                            var str1 = "<ul class='cur_a_hover'><img src='/harmony/images/xiaojianbiao_07.png'><li>成人&yen;<span id='adj'>"+ regimentList[j].adultIndustryPrice+"</span></li></ul>";
                            str = str + str1;
                            $($aTds[i]).append(str);
                            $($aTds[i]).attr('data-openId', regimentList[j].openId);
                            if(regimentList[j].childIndustryPrice != false) {
                                var ertong = "<li>儿童&yen;<span id='child'>"+regimentList[j].childIndustryPrice+"</span></li>";
                                $('.cur_a_hover:last-child').append(ertong);
                            }
                            if(regimentList[j].singleRoomIndustryPrice != false) {
                                var dfc = "<li>单房差&yen;<span id='room'>"+regimentList[j].singleRoomIndustryPrice+"</span></li>";
                                $('.cur_a_hover:last-child').append(dfc);
                            }
                            if(regimentList[j].customPriceList != null) {
                                console.log(regimentList[j].customPriceList);
                                for(var v=0;v<regimentList[j].customPriceList.length;v++) {
                                    var zdy = "<li>"+ regimentList[j].customPriceList[v].name +"&yen;<span id='zdy'>"+regimentList[j].customPriceList[v].industryPrice+"</span></li>";
                                    $('.cur_a_hover:last-child').append(zdy);
                                }
                            }
                        }
                    }
                }

            }else{
                $.each($aTds,function() {
                    $(this).addClass('disabled');
                })
            }

            $.each($aTds,function() {
//                console.log(1);
                if($(this).data('openid') == undefined) {
                    $(this).addClass('disabled');
                }
            })

        }
        init();

        //点击上下月份获取不同数据
        $(document).on('click','.next,.prev',function(){
            var year = $(".dates").children('em:nth-child(1)').text();
            var mouth = $(".dates").children('em:nth-child(2)').text();
            if(mouth.length==1) {
                mouth = '0'+mouth;
            }
            var date1 = year + '-' + mouth;

            var csrfToken = $("meta[name='csrf-token']").attr("content");
            console.log(csrfToken);
            $.ajax({
                type:'POST',
                url:'/harmony/detailPost',
                data:{
                    regimentId:regimentId,
                    date:date1,
                    _token:csrfToken
                },
                success:function(data){
                    console.log(data);
                    data = eval(data);
                    if (data.result == 'true') {
                        regimentList = eval(data.list);
                        init();
                    } else {
                        regimentList = undefined;
                        init();
                    }
                }
            });

        });
        $(document).on("click",".calendar td",function(){
            var cr = $(this).children('ul').children('li:nth-child(2)').text();
            cr = cr.replace(/[^0-9]/ig,"");
            var et = $(this).children('ul').children('li:nth-child(3)').text();
            et = et.replace(/[^0-9]/ig,"");
            var fc = $(this).children('ul').children('li:nth-child(4)').text();
            fc = fc.replace(/[^0-9]/ig,"");
            var mt = $(this).children('div').children('span:nth-child(1)').text();
            var url = $('#travel_group_content_all_a_a').attr('href');
            url = '/harmony/ask/' + $(this).attr('data-openId');
            $('#travel_group_content_all_a_a').attr('href',url);
            $('#cr').text(cr);
            if(et != false) {
                $('#et').parent('div').show();
            }else{
                $('#et').parent('div').hide();
            }
            if(fc != false) {
                $('#fc').parent('div').show();
                $('#qfc').parent('div').show();
            }else{
                $('#fc').parent('div').hide();
                $('#qfc').parent('div').hide();
            }
            if(mt != false) {
                $('#mt').parent('div').show();
            }else{
                $('#mt').parent('div').hide();
            }

            $('#et').text(et);
            $('#fc,#qfc').text(fc);
            $('#mt').text(mt);
            if(xfl!=""){
                $(".out_team").text(xfl)
            }
        });
    });






</script>

<script type="text/javascript">
    $(function(){
        //购物车滚动条
        $('.gwcMain').slimScroll({
            height: 'auto'
        });
        $(".slimScrollBar").hide();

        //酒店图片js插件
        $(".free_hotel_select_content_img").swBanner();
    });
    function scroll(id) {
        $("#"+id).HoverTreeScroll(350);
    }
</script>
<script type="text/javascript">
    $(function(){
        //跟团游上面图片轮播
        slider.init({'id': $('#PicSlide'), way:'left', interval: 4000});

    });
</script>


</body>
</html>