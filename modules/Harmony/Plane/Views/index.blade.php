<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>机票</title>
    <link href="/harmony/css/publick.css" rel="stylesheet">
    <link href="/harmony/css/freetrip_ticket.css" rel="stylesheet">
    <link href="/harmony/css/shopping_cart.css" rel="stylesheet">
    <script src="/harmony/js/jquery-1.11.3.min.js"></script>
    <script src="/harmony/js/paging.js"></script>
    <script src="/harmony/js/header_search.js"></script>
    <script src="/harmony/js/team_free.js"></script>
    <script src="/harmony/js/freetrip_ticket.js"></script>
    <script src="/harmony/plugins/My97DatePicker/WdatePicker.js"></script>
    <script src="/harmony/plugins/scroll/prettify.js"></script>
    <script src="/harmony/plugins/scroll/jquery.slimscroll.js"></script>
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
                <form id="index_submit">
                    <div class="header_c_div"><span>机票</span><img src="/harmony/images/search_select_sj.png"></div>
                    <input type="text" placeholder="请输入您想知道的一切信息" id="value" class="header_c_a">
                    <input type="button" id="button_b" class="header_c_b">

                        <ul class="search_select" id="search_select_b">
                            {{--<li ><a data-name="regiment" href="javascript:void(0);">跟团游</a> </li>--}}
                            {{--<li ><a data-name="free" href="javascript:void(0)">自由行</a> </li>--}}
                            {{--<li ><a data-name="half" href="javascript:void(0)">半自助</a> </li>--}}
                            <li><a data-name="plane" href="javascript:void(0)">机票</a> </li>
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

    <div class="teamTrip clearboth">
        <div class="teamTrip_nav">
            <div><a href="/harmony/home">首页 </a> </div>
            <div class="site_kh"> > </div>
            <div><a id="productlist" href="javascript:void(0)">机票</a> </div>
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
                    <ul class="selectCondition_r celect_radio  click_one supplier_none">
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
                    
                    <ul class="selectCondition_r supplier_none click_more supplier_more click_more_select_a">
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
                    <div class="supplierMore_b"><span>更多</span></div>
                    <div class="supplierMore_click"><span>多选</span></div>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l celect_radio">出团日期 ：<a style="width: 24px; display: block;"></a></div>
                    <ul class="selectCondition_r celect_radio input_select_left">
                        <!--<li><a href="###">8月</a> </li>-->
                        <!--<li><a href="###">9月</a> </li>-->
                        <!--<li><a href="###">10月</a> </li>-->
                        <li class="selectCondition_r_input"><input placeholder="" type="text" onClick="WdatePicker()" style="margin-right: 15px;"> <span class="price_span">至 </span></li><!-- input 去掉原有的class class="Wdate" -->
                        <li class="selectCondition_r_input"> <input placeholder="" type="text" onClick="WdatePicker()"></li><!-- input 去掉原有的class class="Wdate" -->
                        <li><a href="###" class="month_determine">确定</a> </li>
                    </ul>
                </div>

                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">形成天数 ：<a href="###" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio">
                        <li><a href="###">1天</a> </li>
                        <li><a href="###">11</a> </li>
                        <li><a href="###">10</a> </li>
                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">航班时间 ：<a href="###" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio">
                        <li><a href="###">早班 3:30-10-40</a> </li>
                        <li><a href="###">早班 3:30-10-40</a> </li>
                        <li><a href="###">早班 3:30-10-40</a> </li>
                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">航段 ：<a href="###" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio">
                        <li><a href="###">往返</a> </li>
                        <li><a href="###">23天</a> </li>
                    </ul>
                </div>
                <div class="selectCondition_list clearboth">
                    <div class="selectCondition_l">舱位 ：<a href="###" class="selectCondition_r_select">全部</a></div>
                    <ul class="selectCondition_r celect_radio">
                        <li><a href="###">经济舱</a> </li>
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
                <li><a href="###" class="freetrip_select_nav_a_select">机票</a> </li>
                <li><a href="###">酒店</a> </li>
                <li><a href="###">签证</a> </li>
            </ul>
            <div class="freetrip_select_nav_right">
                <form>
                    <ul class="plane_ticket_screen_b">

                        <li>
                            <input type="checkbox" id="freetrip_select_nav_cb_b" class="checkbox">
                            <label for="freetrip_select_nav_cb_b">直飞</label>
                        </li>
                        <li>
                            <input type="checkbox" id="freetrip_select_nav_cb_c" class="checkbox">
                            <label for="freetrip_select_nav_cb_c">转机</label>
                        </li>
                        <li>
                            <input type="checkbox" id="freetrip_select_nav_cb_d" class="checkbox">
                            <label for="freetrip_select_nav_cb_d">包机</label>
                        </li>
                        <li>
                            <input type="checkbox" id="freetrip_select_nav_cb_e" name="checkbox">
                            <label for="freetrip_select_nav_cb_e">联运</label>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        <div class="planeTicket">
            <ul class="planeTicket_top">
                <li><a href="###">航班类型</a></li>
                <li><a href="###">起飞时间</a></li>
                <li><a href="###">飞行时间</a></li>
                <li><a href="###">落地时间</a></li>
                <li><a href="###">成人价格</a></li>
            </ul>
            <div class="planeTicket_list clearboth">
                <div class="planeTicket_list_chanpinming clearboth">
                    <div class="planeTicket_list_chanpinming_a">供应商名称</div>
                    <div class="planeTicket_list_chanpinming_b">产品名称产品名称产品名称产品名称</div>
                    <div class="planeTicket_list_chanpinming_c">余<span>23</span></div>
                    <div class="planeTicket_list_chanpinming_d">5晚6天</div>
                </div>
                <div class="planeTicket_info clearboth">

                    <div class="planeTicket_info_show clearboth">
                        <div class="planeTicket_info_a">
                            <div class="planeTicket_info_a_a clearboth">
                                <div class="planeTicket_info_a_a_l">去程</div>
                                <div class="planeTicket_info_a_a_r">
                                    <h4>CA中国国航</h4>
                                    <span>CA33880   320(宽)</span>
                                </div>
                            </div>
                            <div class="planeTicket_info_a_b clearboth">
                                <div class="planeTicket_info_a_a_l">去程</div>
                                <div class="planeTicket_info_a_a_r">
                                    <h4>CA中国国航</h4>
                                    <span>CA33880   320(宽)</span>
                                </div>
                            </div>
                        </div>
                        <div class="planeTicket_info_b">
                            <div class="planeTicket_info_b_a clearboth">
                                <div class="planeTicket_info_b_a_a">2016-03-08</div>
                                <div class="planeTicket_info_b_a_b">03 ：00</div>
                                <div class="planeTicket_info_b_a_c">首都机场（PEK）T3</div>
                            </div>
                            <div class="planeTicket_info_b_b clearboth">
                                <div class="planeTicket_info_b_a_a">2016-03-08</div>
                                <div class="planeTicket_info_b_a_b">03 ：00</div>
                                <div class="planeTicket_info_b_a_c">首都机场（PEK）T3</div>
                            </div>
                        </div>
                        <div class="planeTicket_info_c">
                            <div class="planeTicket_info_c_a">约3小时30分钟</div>
                            <div>经济舱（可升舱）</div>
                            <div class="planeTicket_info_c_b">约3小时30分钟</div>
                            <div>经济舱（可升舱）</div>
                        </div>
                        <div class="planeTicket_info_d">
                            <div class="planeTicket_info_b_a clearboth">
                                <div class="planeTicket_info_b_a_a">2016-03-08</div>
                                <div class="planeTicket_info_b_a_b">03 ：00</div>
                                <div class="planeTicket_info_b_a_c">首都机场（PEK）T3</div>
                            </div>
                            <div class="planeTicket_info_b_b clearboth">
                                <div class="planeTicket_info_b_a_a">2016-03-08</div>
                                <div class="planeTicket_info_b_a_b">03 ：00</div>
                                <div class="planeTicket_info_b_a_c">首都机场（PEK）T3</div>
                            </div>
                        </div>
                        <div class="planeTicket_info_g"><a href="###">退改政策</a></div>
                        <div class="planeTicket_info_e">
                            <div class="planeTicket_info_e_a">直客价&yen;<span>9800</span>元</div>
                            <div class="planeTicket_info_e_b">同业价&yen;<span>9800</span>元</div>
                            <div class="planeTicket_info_e_c">含税最低</div>
                        </div>
                        <div class="planeTicket_info_f">
                            <div class="planeTicket_info_f_a"><a href="###">产品详情</a></div><!--<img src="/harmony/images/planeticket_yd.png"> -->
                            <div class="planeTicket_info_f_b"><a href="###">加入我的关注</a></div>
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

    });
</script>


</body>
</html>