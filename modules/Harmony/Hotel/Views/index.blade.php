<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>酒店</title>
    <link href="/harmony/css/publick.css" rel="stylesheet">
    <link href="/harmony/css/freetrip_ticket.css" rel="stylesheet">
    <link href="/harmony/css/freetrip_hotel.css" rel="stylesheet">
    <link href="/harmony/css/shopping_cart.css" rel="stylesheet">
    <script src="/harmony/js/jquery-1.11.3.min.js"></script>
    <script src="/harmony/js/paging.js"></script>
    <script src="/harmony/js/header_search.js"></script>
    <script src="/harmony/js/team_free.js"></script>
    <script src="/harmony/js/freetrip_ticket.js"></script>
    <script src="/harmony/js/freetrip_hotel.js"></script>
    <script src="/harmony/plugins/My97DatePicker/WdatePicker.js"></script>
    <script src="/harmony/plugins/scroll/prettify.js"></script>
    <script src="/harmony/plugins/scroll/jquery.slimscroll.js"></script>
    <script src="/harmony/plugins/hotel_img/js/jquery.banner.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
 
</head>
<body>
<div class="page_top">
    <div class="page_top_position">
        <div class="page_top_left">
            <div class="page_top_left_a">欢迎来那边</div>
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
                <form>
                    <div class="header_c_div"><span>酒店</span><img src="/harmony/images/search_select_sj.png"></div>
                    <input type="text" placeholder="请输入您想知道的一切信息" class="header_c_a">
                    <input type="submit" value="" class="header_c_b">
                    <ul class="search_select" id="search_select_b">
                        {{--<li ><a data-name="regiment" href="javascript:void(0);">跟团游</a> </li>--}}
                        {{--<li ><a data-name="free" href="javascript:void(0)">自由行</a> </li>--}}
                        {{--<li ><a data-name="half" href="javascript:void(0)">半自助</a> </li>--}}
                        {{--<li><a data-name="plane" href="javascript:void(0)">机票</a> </li>--}}
                        <li><a data-name="hotel" href="javascript:void(0)">酒店</a> </li>
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
					<div class="yincangbeijing"></div>
        			<div class="ditu">
        				<div style="width:1200px;height:600px;border:#ccc solid 1px;" id="dituContent"></div>
        			</div>
 
 <div class="teamTrip clearboth">
        <div class="teamTrip_nav">
            <div><a href="/harmony/home">首页 </a> </div>
            <div class="site_kh"> > </div>
            <div><a id="productlist" href="javascript:void(0)">酒店</a> </div>
            <div class="site_kh"> > </div>
            <div><a href="javascript:void(0)">列表 </a> </div>

        </div>
        <div class="teamTrip_main">
            <form>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">出发地 ：<a href="###" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio">
                        <li><a href="###">北京北京北京北京1</a> </li>
                        <li><a href="###">北京北京北京2</a> </li>
                        <li><a href="###">北京0</a> </li>

                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">目的地 ：<a href="###" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio">
                        <li><a href="###">北京北京北京北京1</a> </li>
                        <li><a href="###">北京北京北京2</a> </li>
                        <li><a href="###">北京0</a> </li>

                    </ul>
                </div>

                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">国家 ：<a href="###" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio supplier_none click_one">
                        <li><a href="###">畅想假期</a> </li>
                        <li><a href="###">北京北京北京2北京北京北京2北京北京北京2</a> </li>
                        <li><a href="###">北京北京北京北京3</a> </li>
                        <li><a href="###">北京北京北京北京4</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京6</a> </li>
                        <li><a href="###">北京7</a> </li>
                    </ul>
                    <ul class="selectCondition_r supplier_none click_more supplier_more click_more_select">
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li><a href="###" class="month_determine select_price">确定</a> </li>
                    </ul>
                    <!--<div class="supplierMore"><span>更多</span><img src="/harmony/images/supplier_more_a.jpg"></div>-->
                    <div class="supplierMore"><span>更多</span></div>
                    <div class="supplierMore_click"><span>多选</span></div>
                </div>

                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">城市 ：<a href="###" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio supplier_none">
                        <li><a href="###">北京北京北京北京1</a> </li>
                        <li><a href="###">北京北京北京2</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>
                        <li><a href="###">北京0</a> </li>

                    </ul>
                    <div class="supplierMore"><span>更多</span></div>
                </div>

                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">供应商 ：<a href="###" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio supplier_none click_one">
                        <li><a href="###">畅想假期</a> </li>
                        <li><a href="###">北京北京北京2北京北京北京2北京北京北京2</a> </li>
                        <li><a href="###">北京北京北京北京3</a> </li>
                        <li><a href="###">北京北京北京北京4</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京5</a> </li>
                        <li><a href="###">北京北京北京北京6</a> </li>
                        <li><a href="###">北京7</a> </li>
                    </ul>
                    <ul class="selectCondition_r supplier_none click_more supplier_more click_more_select">
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li>
                            <a href="###" class="clearboth">
                                <input type="checkbox">
                                <span class="click_prev_input">北京北京北京</span>
                            </a>
                        </li>
                        <li><a href="###" class="month_determine select_price">确定</a> </li>
                    </ul>
                    <!--<div class="supplierMore"><span>更多</span><img src="/harmony/images/supplier_more_a.jpg"></div>-->
                    <div class="supplierMore"><span>更多</span></div>
                    <div class="supplierMore_click"><span>多选</span></div>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l celect_radio date_linght">入住日期 ：<a style="width: 24px; display: block;"></a></div>
                    <ul class="selectCondition_r celect_radio input_select_left">
                        <!--<li><a href="###">8月</a> </li>-->
                        <!--<li><a href="###">9月</a> </li>-->
                        <!--<li><a href="###">10月</a> </li>-->
                        <li class="selectCondition_r_input"><div class="date_choice"><input placeholder="出发时间" type="text" onClick="WdatePicker()" style="margin-right: 15px;"></div>
                            <span class="price_span date_linght">离店日期： </span>
                        </li><!-- input 去掉原有的class class="Wdate" -->
                        <li class="selectCondition_r_input"><div class="date_choice"><input placeholder="结束时间" type="text" onClick="WdatePicker()" style="margin-right: 15px;"></div></li>
                        <li><a href="###" class="month_determine">确定</a> </li>
                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">酒店星级 ：<a href="###" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio">
                        <li><a href="###">五星级/豪华</a> </li>
                        <li><a href="###">23天</a> </li>
                        <li><a href="###">43天</a> </li>

                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">确定方式 ：<a href="###" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio">
                        <li><a href="###">二次确认</a> </li>
                        <li><a href="###">即时确认</a> </li>

                    </ul>
                </div>

                <div class="select_more"><span>高级筛选</span><img src="/harmony/images/date_more_a.png"></div>
            </form>
        </div>
    </div>
    <div class="product clearboth">
        <div class="freetrip_select_nav">
            <ul class="clearboth">
                <li><a href="###">机票</a> </li>
                <li><a href="###" class="freetrip_select_nav_a_select">酒店</a> </li>
                <li><a href="###">签证</a> </li>
            </ul>

        </div>
        <div class="free_hotel">
            <ul class="free_hotel_top clearboth">
                <li class="free_hotel_top_select"><a href="###">默认</a></li>
                <li><a href="###">默认</a></li>
                <li><a href="###">默认</a></li>
            </ul>
            <div class="free_hotel_main clearboth">



                <div class="free_hotel_main_list clearboth">
                    <div class="free_hotel_main_list_about clearboth">
                        <div class="free_hotel_main_list_about_l"><a href="###"><img src="/harmony/images/hotel_about.jpg"> </a> </div>
                        <div class="free_hotel_main_list_about_r">
                            <div class="free_hotel_main_list_about_r_a">供应商</div>
                            <div class="free_hotel_main_list_about_r_b">
                                <div class="free_hotel_main_list_about_r_b_bt"><a href="###">香港海运度假酒店</a></div>
                                <div class="free_hotel_main_list_about_r_b_star_prom">准三星</div>
                                <div class="free_hotel_main_list_about_r_b_star">
                                    <span class="free_hotel_main_list_about_r_b_star_a"><img src="/harmony/images/jiudian_star_a.png"> </span>
                                    <span class="free_hotel_main_list_about_r_b_star_b" data-star="3"><img src="/harmony/images/jiudian_star_b.png"> </span>
                                </div>
                            </div>
                            <div class="free_hotel_main_list_about_r_c"><a href="###">Acvbhcnvm   bmvgjnmvm </a></div>
                            <div class="free_hotel_main_list_about_r_d">
                                <div class="free_hotel_main_list_about_r_d_a">
                                    <span>香港海运168</span>
                                    <span>Adshgkvk ghjc,.hv.</span>
                                </div>
                                <div class="free_hotel_main_list_about_r_d_b"><a href="###"><img src="/harmony/images/hotel_map.png"> <span>地图 </span></a> </div>
                            </div>
                        </div>
                    </div>
                    <ul class="free_hotel_nav clearboth">
                        <li>房型</li>
                        <li>取消政策</li>
                        <li>餐</li>
                        <li>人数上限</li>
                        <li>确认方式 </li>
                        <li>同业价格</li>
                        <li>建议直客价格</li>
                        <li>库存</li>
                    </ul>

                    <div class="free_hotel_room clearboth">
                        <div class="free_hotel_room_a"><a href="###"> 皇冠豪华房</a></div>
                        <div class="free_hotel_room_b">不可取消1
                        	<div class="hover_xiaojiantou">入住钱2-3天可免费取消<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>
                        </div>
                        <div class="free_hotel_room_c">双早</div>
                        <div class="free_hotel_room_d">2</div>
                        <div class="free_hotel_room_e">二次确认</div>
                       <div class="free_hotel_room_f">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        	
                        </div>
                        <div class="free_hotel_room_g">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        </div>
                        <div class="free_hotel_room_h"><span>1</span>间</div>
                        <div class="free_hotel_room_i">
                            <a href="###">产品详情</a>
                            <a href="###">加入我的关注</a>
                        </div>

                        <div class="free_hotel_fixed">
                            <div class="free_hotel_fixed_bg"></div>
                            <div class="free_hotel_fixed_main">
                                <div class="free_hotel_fixed_main_l">
                                    <div class="free_hotel_select">
                                        <a href="###" class="free_hotel_fixed_main_l_select"> 房型介绍</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_sel">
                                            <p>22加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 优惠政策</a>
                                        <div class="free_hotel_select_content">
                                            dsf
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 预定限制</a>
                                        <div class="free_hotel_select_content">
                                            2345267890-0-987654321345678
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 房型图片</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_img">
                                            <ul class="banList">
                                                <li class="active"><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                            </ul>
                                            <div class="fomW">
                                                <div class="jsNav">
                                                    <a href="javascript:;" class="trigger current"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="free_hotel_room clearboth">
                        <div class="free_hotel_room_a"><a href="###"> 皇冠豪华房</a></div>
                        <div class="free_hotel_room_b">不可取消2
                        	<div class="hover_xiaojiantou">入住钱2-3天可免费取消<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>
                        </div>
                        <div class="free_hotel_room_c">双早</div>
                        <div class="free_hotel_room_d">2</div>
                        <div class="free_hotel_room_e">二次确认</div>
                        <div class="free_hotel_room_f">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        	
                        </div>
                        
                        <div class="free_hotel_room_g">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        </div>
                        <div class="free_hotel_room_h"><span>1</span>间</div>
                        <div class="free_hotel_room_i">
                            <a href="###">产品详情</a>
                            <a href="###">加入我的关注</a>
                        </div>

                        <div class="free_hotel_fixed">
                            <div class="free_hotel_fixed_bg"></div>
                            <div class="free_hotel_fixed_main">
                                <div class="free_hotel_fixed_main_l">
                                    <div class="free_hotel_select">
                                        <a href="###" class="free_hotel_fixed_main_l_select"> 房型介绍</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_sel">
                                            <p>33加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 优惠政策</a>
                                        <div class="free_hotel_select_content">
                                            dsf
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 预定限制</a>
                                        <div class="free_hotel_select_content">
                                            2345267890-0-987654321345678
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 房型图片</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_img">
                                            <ul class="banList">
                                                <li class="active"><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                            </ul>
                                            <div class="fomW">
                                                <div class="jsNav">
                                                    <a href="javascript:;" class="trigger current"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="free_hotel_room clearboth">
                        <div class="free_hotel_room_a"><a href="###"> 皇冠豪华房</a></div>
                        <div class="free_hotel_room_b">不可取消3
                        <div class="hover_xiaojiantou">入住钱2-3天可免费取消<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>
                        </div>
                        <div class="free_hotel_room_c">双早</div>
                        <div class="free_hotel_room_d">2</div>
                        <div class="free_hotel_room_e">二次确认</div>
                        <div class="free_hotel_room_f">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        	
                        </div>
                        <div class="free_hotel_room_g">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        </div>
                        <div class="free_hotel_room_h"><span>1</span>间</div>
                        <div class="free_hotel_room_i">
                            <a href="###">产品详情</a>
                            <a href="###">加入我的关注</a>
                        </div>

                        <div class="free_hotel_fixed">
                            <div class="free_hotel_fixed_bg"></div>
                            <div class="free_hotel_fixed_main">
                                <div class="free_hotel_fixed_main_l">
                                    <div class="free_hotel_select">
                                        <a href="###" class="free_hotel_fixed_main_l_select"> 房型介绍</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_sel">
                                            <p>22加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 优惠政策</a>
                                        <div class="free_hotel_select_content">
                                            dsf
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 预定限制</a>
                                        <div class="free_hotel_select_content">
                                            2345267890-0-987654321345678
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 房型图片</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_img">
                                            <ul class="banList">
                                                <li class="active"><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                            </ul>
                                            <div class="fomW">
                                                <div class="jsNav">
                                                    <a href="javascript:;" class="trigger current"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="free_hotel_room  clearboth">
                        <div class="free_hotel_room_a"><a href="###"> 皇冠豪华房</a></div>
                        <div class="free_hotel_room_b">不可取消2
                        <div class="hover_xiaojiantou">入住钱2-3天可免费取消<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>
                        </div>
                        <div class="free_hotel_room_c">双早</div>
                        <div class="free_hotel_room_d">2</div>
                        <div class="free_hotel_room_e">二次确认</div>
                        <div class="free_hotel_room_f">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        </div>
                        
                        <div class="free_hotel_room_g">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        </div>
                        <div class="free_hotel_room_h"><span>1</span>间</div>
                        <div class="free_hotel_room_i">
                            <a href="###">产品详情</a>
                            <a href="###">加入我的关注</a>
                        </div>

                        <div class="free_hotel_fixed">
                            <div class="free_hotel_fixed_bg"></div>
                            <div class="free_hotel_fixed_main">
                                <div class="free_hotel_fixed_main_l">
                                    <div class="free_hotel_select">
                                        <a href="###" class="free_hotel_fixed_main_l_select"> 房型介绍</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_sel">
                                            <p>11加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 优惠政策</a>
                                        <div class="free_hotel_select_content">
                                            dsf
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 预定限制</a>
                                        <div class="free_hotel_select_content">
                                            2345267890-0-987654321345678
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 房型图片</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_img">
                                            <ul class="banList">
                                                <li class="active"><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                            </ul>
                                            <div class="fomW">
                                                <div class="jsNav">
                                                    <a href="javascript:;" class="trigger current"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more_room_class clearboth">
                        <div class="more_room_class_a">
                            <span>更多房型</span><img src="/harmony/images/more_room_class_a.png">
                        </div>
                    </div>
                </div>
				
				
				<div class="yincangbeijing"></div>
				
				
                <div class="free_hotel_main_list clearboth">
                    <div class="free_hotel_main_list_about clearboth">
                        <div class="free_hotel_main_list_about_l"><a href="###"><img src="/harmony/images/hotel_about.jpg"> </a> </div>
                        <div class="free_hotel_main_list_about_r">
                            <div class="free_hotel_main_list_about_r_a">供应商</div>
                            <div class="free_hotel_main_list_about_r_b">
                                <div class="free_hotel_main_list_about_r_b_bt"><a href="###">香港海运度假酒店</a></div>
                                <div class="free_hotel_main_list_about_r_b_star_prom">准三星</div>
                                <div class="free_hotel_main_list_about_r_b_star">
                                    <span class="free_hotel_main_list_about_r_b_star_a"><img src="/harmony/images/jiudian_star_a.png"> </span>
                                    <span class="free_hotel_main_list_about_r_b_star_b" data-star="3"><img src="/harmony/images/jiudian_star_b.png"> </span>
                                </div>
                            </div>
                            <div class="free_hotel_main_list_about_r_c"><a href="###">Acvbhcnvm   bmvgjnmvm </a></div>
                            <div class="free_hotel_main_list_about_r_d">
                                <div class="free_hotel_main_list_about_r_d_a">
                                    <span>香港海运168</span>
                                    <span>Adshgkvk ghjc,.hv.</span>
                                </div>
                                <div class="free_hotel_main_list_about_r_d_b"><a href="###"><img src="/harmony/images/hotel_map.png"> <span>地图 </span></a> </div>
                            </div>
                        </div>
                    </div>
                    
                    <ul class="free_hotel_nav clearboth">
                        <li>房型</li>
                        <li>取消政策</li>
                        <li>餐</li>
                        <li>人数上限</li>
                        <li>确认方式 </li>
                        <li>同业价格</li>
                        <li>建议直客价格</li>
                        <li>库存</li>
                    </ul>
                    <div class="free_hotel_room clearboth">
                        <div class="free_hotel_room_a"><a href="###"> 皇冠豪华房</a></div>
                        <div class="free_hotel_room_b">不可取消3
                        <div class="hover_xiaojiantou">入住钱2-3天可免费取消<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>
                        </div>
                        <div class="free_hotel_room_c">双早</div>
                        <div class="free_hotel_room_d">2</div>
                        <div class="free_hotel_room_e">二次确认</div>
                        <div class="free_hotel_room_f">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        	
                        </div>
                        <div class="free_hotel_room_g">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        </div>
                        <div class="free_hotel_room_h"><span>1</span>间</div>
                        <div class="free_hotel_room_i">
                            <a href="###">产品详情</a>
                            <a href="###">加入我的关注</a>
                        </div>

                        <div class="free_hotel_fixed">
                            <div class="free_hotel_fixed_bg"></div>
                            <div class="free_hotel_fixed_main">
                                <div class="free_hotel_fixed_main_l">
                                    <div class="free_hotel_select">
                                        <a href="###" class="free_hotel_fixed_main_l_select"> 房型介绍</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_sel">
                                            <p>55加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 优惠政策</a>
                                        <div class="free_hotel_select_content">
                                            dsf
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 预定限制</a>
                                        <div class="free_hotel_select_content">
                                            2345267890-0-987654321345678
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 房型图片</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_img">
                                            <ul class="banList">
                                                <li class="active"><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                            </ul>
                                            <div class="fomW">
                                                <div class="jsNav">
                                                    <a href="javascript:;" class="trigger current"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="free_hotel_room clearboth">
                        <div class="free_hotel_room_a"><a href="###"> 皇冠豪华房</a></div>
                        <div class="free_hotel_room_b">不可取消4
                        <div class="hover_xiaojiantou">入住钱2-3天可免费取消<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>
                        </div>
                        <div class="free_hotel_room_c">双早</div>
                        <div class="free_hotel_room_d">2</div>
                        <div class="free_hotel_room_e">二次确认</div>
                        <div class="free_hotel_room_f">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        	
                        </div>
                        <div class="free_hotel_room_g">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        </div>
                        <div class="free_hotel_room_h"><span>1</span>间</div>
                        <div class="free_hotel_room_i">
                            <a href="###">产品详情</a>
                            <a href="###">加入我的关注</a>
                        </div>

                        <div class="free_hotel_fixed">
                            <div class="free_hotel_fixed_bg"></div>
                            <div class="free_hotel_fixed_main">
                                <div class="free_hotel_fixed_main_l">
                                    <div class="free_hotel_select">
                                        <a href="###" class="free_hotel_fixed_main_l_select"> 房型介绍</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_sel">
                                            <p>22加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 优惠政策</a>
                                        <div class="free_hotel_select_content">
                                            dsf
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 预定限制</a>
                                        <div class="free_hotel_select_content">
                                            2345267890-0-987654321345678
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 房型图片</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_img">
                                            <ul class="banList">
                                                <li class="active"><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                            </ul>
                                            <div class="fomW">
                                                <div class="jsNav">
                                                    <a href="javascript:;" class="trigger current"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="free_hotel_room clearboth">
                        <div class="free_hotel_room_a"><a href="###"> 皇冠豪华房</a></div>
                        <div class="free_hotel_room_b">不可取消1
                        <div class="hover_xiaojiantou">入住钱2-3天可免费取消<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>
                        </div>
                        <div class="free_hotel_room_c">双早</div>
                        <div class="free_hotel_room_d">2</div>
                        <div class="free_hotel_room_e">二次确认</div>
                        <div class="free_hotel_room_f">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        	
                        </div>
                        <div class="free_hotel_room_g">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        </div>
                        <div class="free_hotel_room_h"><span>1</span>间</div>
                        <div class="free_hotel_room_i">
                            <a href="###">产品详情</a>
                            <a href="###">加入我的关注</a>
                        </div>

                        <div class="free_hotel_fixed">
                            <div class="free_hotel_fixed_bg"></div>
                            <div class="free_hotel_fixed_main">
                                <div class="free_hotel_fixed_main_l">
                                    <div class="free_hotel_select">
                                        <a href="###" class="free_hotel_fixed_main_l_select"> 房型介绍</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_sel">
                                            <p>33加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 优惠政策</a>
                                        <div class="free_hotel_select_content">
                                            dsf
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 预定限制</a>
                                        <div class="free_hotel_select_content">
                                            2345267890-0-987654321345678
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 房型图片</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_img">
                                            <ul class="banList">
                                                <li class="active"><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                            </ul>
                                            <div class="fomW">
                                                <div class="jsNav">
                                                    <a href="javascript:;" class="trigger current"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="free_hotel_room clearboth">
                        <div class="free_hotel_room_a"><a href="###"> 皇冠豪华房</a></div>
                       <div class="free_hotel_room_b">不可取消1
                        <div class="hover_xiaojiantou">入住钱2-3天可免费取消<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>
                        </div>
                        <div class="free_hotel_room_c">双早</div>
                        <div class="free_hotel_room_d">2</div>
                        <div class="free_hotel_room_e">二次确认</div>
                        <div class="free_hotel_room_f">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        	
                        </div>
                        <div class="free_hotel_room_g">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        </div>
                        <div class="free_hotel_room_h"><span>1</span>间</div>
                        <div class="free_hotel_room_i">
                            <a href="###">产品详情</a>
                            <a href="###">加入我的关注</a>
                        </div>

                        <div class="free_hotel_fixed">
                            <div class="free_hotel_fixed_bg"></div>
                            <div class="free_hotel_fixed_main">
                                <div class="free_hotel_fixed_main_l">
                                    <div class="free_hotel_select">
                                        <a href="###" class="free_hotel_fixed_main_l_select"> 房型介绍</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_sel">
                                            <p>11加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 优惠政策</a>
                                        <div class="free_hotel_select_content">
                                            dsf
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 预定限制</a>
                                        <div class="free_hotel_select_content">
                                            2345267890-0-987654321345678
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 房型图片</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_img">
                                            <ul class="banList">
                                                <li class="active"><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                            </ul>
                                            <div class="fomW">
                                                <div class="jsNav">
                                                    <a href="javascript:;" class="trigger current"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="free_hotel_room clearboth">
                        <div class="free_hotel_room_a"><a href="###"> 皇冠豪华房</a></div>
                        <div class="free_hotel_room_b">不可取消1
                        <div class="hover_xiaojiantou">入住钱2-3天可免费取消<img src="/harmony/images/mianfeiquxiao_xiaojiantou_03.png"></div>
                        </div>
                        <div class="free_hotel_room_c">双早</div>
                        <div class="free_hotel_room_d">2</div>
                        <div class="free_hotel_room_e">二次确认</div>
                        <div class="free_hotel_room_f">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        	
                        </div>
                        <div class="free_hotel_room_g">￥<span>888.00</span>/间<img src="/harmony/images/jiagexiangqing_xiaotubiao_03.png">
                        	<div class="hover_xiaojiantou_b">
                        		
                        		<div class="hover_xiaojiantou_b_neirong">
	                        		<div class="xiaojianbiao"><img src="/harmony/images/xiaojianbiao_03.png"></div>
	                        		<ul class="hover_xiaojiantou_b_neirong_a">
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        			<li><span>2016-8-10(星期一)</span><span>&yen;156.00/间</span></li>
	                        		</ul>
                        		</div>
                        	</div>
                        </div>
                        <div class="free_hotel_room_h"><span>1</span>间</div>
                        <div class="free_hotel_room_i">
                            <a href="###">产品详情</a>
                            <a href="###">加入我的关注</a>
                        </div>

                        <div class="free_hotel_fixed">
                            <div class="free_hotel_fixed_bg"></div>
                            <div class="free_hotel_fixed_main">
                                <div class="free_hotel_fixed_main_l">
                                    <div class="free_hotel_select">
                                        <a href="###" class="free_hotel_fixed_main_l_select"> 房型介绍</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_sel">
                                            <p>11加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                            <p>加床描述加床描述加床描述加床描述加床描述加床描述</p>
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 优惠政策</a>
                                        <div class="free_hotel_select_content">
                                            dsf
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 预定限制</a>
                                        <div class="free_hotel_select_content">
                                            2345267890-0-987654321345678
                                        </div>
                                    </div>
                                    <div class="free_hotel_select">
                                        <a href="###"> 房型图片</a>
                                        <div class="free_hotel_select_content free_hotel_select_content_img">
                                            <ul class="banList">
                                                <li class="active"><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                                <li><img src="/harmony/images/free_trip_hotel_img.jpg"/></li>
                                            </ul>
                                            <div class="fomW">
                                                <div class="jsNav">
                                                    <a href="javascript:;" class="trigger current"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                    <a href="javascript:;" class="trigger"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more_room_class">
                        <div class="more_room_class_a">
                            <span>更多房型</span><img src="/harmony/images/more_room_class_a.png">
                        </div>
                    </div>
                </div>
            </div>

            <div class="tcdPageCode" id="pageTwo"></div>
            <script>
                //跟团游分页
                $("#pageTwo").createPage({
                    pageCount:6,
                    current:1,
                    backFn:function(p){
                        console.log(p);
                    }
                });
            </script>
        </div>
        <!--购物车 --begin-- -->
        <div>
            <div class="gwcBorder">
                <div class="gwc">
                    <div class="gwcTop">
                        <div class="gwcTopimg"><img src="/harmony/images/gwcTop_tupian_03.png"></div>
                        <div class="gwcTopbt">您关注的产品</div>
                        <div class="gwcTopqk">全部清空</div>
                    </div>
                    <div class="gwcTop_zhanwei"></div>
                    <div class="gwcMain clearboth">
                        <!--购物车机票begin-->
                        <div class="gwcMainJp clearboth">
                            <div class="gwcMain_bt">
                                <div class="gwcMain_bt_a">机票<span class="jpval">2</span></div>
                                <div class="gwcMain_bt_b"><a href="###"> <img src="/harmony/images/gwc_jh.png"></a></div>
                            </div>

                            <div class="gwcjpxx gwcjpval">
                                <div class="gwcjpxx_a">
                                    <ul>
                                        <li>
                                            <span class="gwcjpxx_a_a"><a href="###">产品名称</a> </span><br/>
                                            <span class="gwcjpxx_a_b">2016-03-08</span><br/>
                                            <span class="gwcjpxx_a_c">航班行情</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gwcjpxx_b">
                                    <div class="gwc_gmsl">2成人</div>
                                </div>
                                <div class="gwcjpxx_c">
                                    <!--<div class="gwcjpxx_c_a">更换</div>-->
                                    <div class="gwcjpxx_c_b">删除</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="gwcjpxx gwcjpval">
                                <div class="gwcjpxx_a">
                                    <ul>
                                        <li>
                                            <span class="gwcjpxx_a_a"><a href="###">产品名称</a> </span><br/>
                                            <span class="gwcjpxx_a_b">2016-03-08</span><br/>
                                            <span class="gwcjpxx_a_c"><a href="###">航班行情</a> </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gwcjpxx_b">
                                    <div class="gwc_gmsl">2成人</div>
                                </div>
                                <div class="gwcjpxx_c">
                                    <!--<div class="gwcjpxx_c_a">更换</div>-->
                                    <div class="gwcjpxx_c_b">删除</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="gwcjpxx gwcjpval">
                                <div class="gwcjpxx_a">
                                    <ul>
                                        <li>
                                            <span class="gwcjpxx_a_a"><a href="###">产品名称</a> </span><br/>
                                            <span class="gwcjpxx_a_b">2016-03-08</span><br/>
                                            <span class="gwcjpxx_a_c"><a href="###">航班行情</a> </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gwcjpxx_b">
                                    <div class="gwc_gmsl">2成人</div>
                                </div>
                                <div class="gwcjpxx_c">
                                    <!--<div class="gwcjpxx_c_a">更换</div>-->
                                    <div class="gwcjpxx_c_b">删除</div>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <!--购物车机票end-->
                        <!--购物车酒店begin-->
                        <div class="gwcMainJp clearboth">
                            <div class="gwcMain_bt">
                                <div class="gwcMain_bt_a">酒店<span class="jdval">1</span></div>
                                <div class="gwcMain_bt_b"><a href="###"> <img src="/harmony/images/gwc_jh.png"></a></div>
                            </div>

                            <div class="gwcjpxx gwcjdval">
                                <div class="gwcjpxx_a">
                                    <ul>
                                        <li>
                                            <span class="gwcjpxx_a_a"><a href="###">产品名称</a> </span>
                                        </li>
                                        <li>
                                            <span class="gwcjpxx_a_c"><a href="###">英文名称</a> </span>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span class="gwcjpxx_a_d">中文地址</span>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span class="gwcjpxx_a_d">英文地址</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gwcjpxx_c">
                                    <div class="gwcjpxx_c_b">删除</div>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <!--购物车酒店end-->
                        <!--购物车签证begin-->
                        <div class="gwcMainJp clearboth">
                            <div class="gwcMain_bt">
                                <div class="gwcMain_bt_a">签证<span class="qzval">1</span></div>
                                <div class="gwcMain_bt_b"><a href="###"> <img src="/harmony/images/gwc_jh.png"></a></div>
                            </div>

                            <div class="gwcjpxx gwcqzval">
                                <div class="gwcjpxx_a">
                                    <ul>
                                        <li>
                                            <span class="gwcjpxx_a_a"><a href="###">产品名称</a> </span>
                                        </li>
                                        <li>
                                            <span class="gwcjpxx_a_b">个人旅游</span>
                                            <span class="gwcjpxx_a_b">美国</span>
                                        </li>
                                    </ul>

                                </div>
                                <div class="gwcjpxx_b">
                                    <div class="gwc_gmsl" style="font-family:'新宋体'; font-size:12px;">2人</div>
                                </div>
                                <div class="gwcjpxx_c">
                                    <!--<div class="gwcjpxx_c_a">更换</div>-->
                                    <div class="gwcjpxx_c_b">删除</div>
                                </div>
                                <div class="clear"></div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="delete_prompt">
                <div class="delete_prompt_a"></div>
                <div class="delete_prompt_b">
                    <div class="delete_prompt_b_top"><img src="/harmony/images/gwc_ts_gb.jpg"> </div>
                    <div class="delete_prompt_b_main">
                        <div class="delete_prompt_b_main_a clearboth">
                            <div class="delete_prompt_b_main_a_a"><img src="/harmony/images/delete_th.jpg"></div>
                            <div class="delete_prompt_b_main_a_b">是否删除全部关注</div>
                        </div>
                        <div class="delete_prompt_b_main_b">
                            <div class="delete_prompt_b_main_b_a"><a href="###">是</a> </div>
                            <div class="delete_prompt_b_main_b_b"><a href="###">否</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--购物车 ---end-- -->
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
</script>
<script type="text/javascript">
   //创建和初始化地图函数：
   function initMap(){
       createMap();//创建地图
       setMapEvent();//设置地图事件
       addMapControl();//向地图添加控件
       addMarker();//向地图中添加marker
   }
   
   //创建地图函数：
   function createMap(){
       var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
       var point = new BMap.Point(116.427921|39.954534);//定义一个中心点坐标
       map.centerAndZoom(point,15);//设定地图的中心点和坐标并将地图显示在地图容器中
       window.map = map;//将map变量存储在全局
   }
   
   //地图事件设置函数：
   function setMapEvent(){
       map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
       map.enableScrollWheelZoom();//启用地图滚轮放大缩小
       map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
       map.enableKeyboard();//启用键盘上下左右键移动地图
   }
   
   //地图控件添加函数：
   function addMapControl(){
       //向地图中添加缩放控件
var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
map.addControl(ctrl_nav);
       //向地图中添加缩略图控件
var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
map.addControl(ctrl_ove);
       //向地图中添加比例尺控件
var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
map.addControl(ctrl_sca);
   }
   
   //标注点数组
   var markerArr = [{title:"那边网络",content:"电话：400-060-8122<br/>北京市东城区安定门东大街28号",point:"116.427921|39.954534",isOpen:1,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
  ];
   //创建marker
   function addMarker(){
       for(var i=0;i<markerArr.length;i++){
           var json = markerArr[i];
           var p0 = json.point.split("|")[0];
           var p1 = json.point.split("|")[1];
           var point = new BMap.Point(p0,p1);
  var iconImg = createIcon(json.icon);
           var marker = new BMap.Marker(point,{icon:iconImg});
  var iw = createInfoWindow(i);
  var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
  marker.setLabel(label);
           map.addOverlay(marker);
           label.setStyle({
                       borderColor:"#808080",
                       color:"#333",
                       cursor:"pointer"
           });
  
  (function(){
   var index = i;
   var _iw = createInfoWindow(i);
   var _marker = marker;
   _marker.addEventListener("click",function(){
       this.openInfoWindow(_iw);
      });
      _iw.addEventListener("open",function(){
       _marker.getLabel().hide();
      })
      _iw.addEventListener("close",function(){
       _marker.getLabel().show();
      })
   label.addEventListener("click",function(){
       _marker.openInfoWindow(_iw);
      })
   if(!!json.isOpen){
    label.hide();
    _marker.openInfoWindow(_iw);
   }
  })()
       }
   }
   //创建InfoWindow
   function createInfoWindow(i){
       var json = markerArr[i];
       var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
       return iw;
   }
   //创建一个Icon
   function createIcon(json){
       var icon = new BMap.Icon("http://map.baidu.com/image/us_cursor.gif", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
       return icon;
   }
   
   initMap();//创建和初始化地图
</script>
	</body>
</html>



</body>
</html>