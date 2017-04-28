<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单</title>
    <link href="/harmony/css/publick.css" rel="stylesheet">
    <script src="/harmony/js/jquery-1.11.3.min.js"></script>
    <script src="/harmony/js/paging.js"></script>
    <script src="/harmony/js/header_search.js"></script>
    <script src="/harmony/js/team_free.js"></script>
    <script src="/harmony/js/WdatePicker.js"></script>
    <script src="/harmony/js/prettify.js"></script>
    <script src="/harmony/js/jquery.slimscroll.js"></script>
    <link href="/harmony/css/order_index.css" rel="stylesheet">
    <script src="/harmony/js/order_index.js"></script>
    <script src="/harmony/js/vue2.js"></script>
    <script src="/harmony/js/vue-resource.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    </ul>
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

    <div class="order_index_concent_zhengti">
        <!--上部分 begin---------------------------------------------------------------------------------------------------------------------------->
        <div class="order_index_hader">
            <div class="order_index_hader_next">
                <div class="order_index_hader_a">即时确认订单</div>
                <div class="order_index_hader_b">
                    <div class="order_index_hader_b_a">
                        <span class="order_index_hader_b_a_a"><img src="/harmony/images/dingdan_jishiqueren_2_03.png"/></span>
                        <span class="order_index_hader_b_a_b" data-jishi="2"><img src="/harmony/images/dingdan_jishiqueren_03.png"/></span>
                    </div>
                    <div class="order_index_hader_b_b clearboth">
                        <ul>
                            <li>确认订单信息</li>
                            <li>提交订单</li>
                            <li>申请付款</li>
                            <li>付款成功</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="order_index_hader_next order_index_hader_next_case_two">
                <div class="order_index_hader_a">二次确认订单</div>
                <div class="order_index_hader_b">
                    <div class="order_index_hader_b_a">
                        <span class="order_index_hader_b_a_a"><img src="/harmony/images/dingdanqingkuang_1_03.png"/></span>
                        <span class="order_index_hader_b_a_b" data-dingdan="2"/><img src="/harmony/images/dingdan_qingkuang_03.png"></span>
                    </div>
                    <div class="order_index_hader_b_b_tow clearboth">
                        <ul>
                            <li>确认订单信息</li>
                            <li>提交订单</li>
                            <li>供应商确认订单</li>
                            <li>零售商申请订单</li>
                            <li>付款成功</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--上部分 end---------------------------------------------------------------------------------------------------------------------------->


        <!--下部分 begin---------------------------------------------------------------------------------------------------------------------------->
        <div class="order_index_down clearboth">
            <div class="order_index_down_left">
                <!--左边内容第一部分--------------------------------------------------->
                <div class="order_index_down_left_a clearboth">
                    <div class="order_index_down_left_a_a clearboth">
                        <div class="order_index_down_left_a_a_a">产品信息</div>
                        {{--<div class="order_index_down_left_a_a_b">--}}
                            {{--<span class="oidl_aab_down_a">行程下载</span>--}}
                            {{--<span class="oidl_aab_down_b"><a href="###">PDF版</a></span>--}}
                            {{--<span class="oidl_aab_down_c"><a href="###">WORD版</a></span>--}}
                        {{--</div>--}}
                    </div>
                    <div class="order_index_down_left_a_b clearboth">
                        <div class="order_index_down_left_a_b_a">ID: {{ $info->regimentId }}</div>
                        <div class="order_index_down_left_a_b_b">
                            <span> {{ $info->regimentName }}</span>
                            <span>{{ $info->regimentTypeName }}</span>
                        </div>
                        <div class="order_index_down_left_a_b_a clearboth">
                            <div class="oidl_aba_a_b">出团日期：<span>{{ $info->goDate }}</span></div>
                            <div class="oidl_aba_b">
                                <span>出发地：{{ $info->startCity }}</span>
                                <span>{{ $info->dayCount }} 天 {{ $info->nightCount }} 晚</span>
                            </div>
                            <div class="oidl_aba_c">
								<span>购物说明
									<div class="oidl_aba_c_hover" v-text="infoList.shopping == 'has'?infoList.shopDesc:'无购物'">
									<img src="/harmony/images/xiaojianbiao_07.png">
									</div>

								</span>
                                <span>自费说明
									<div class="oidl_aba_c_hover" v-text="infoList.expenseSelf != 'without'?infoList.expenseSelfDesc:'无自费'">
										<img src="/harmony/images/xiaojianbiao_07.png">
									</div>
								</span>
                                <span>酒店星级
									<div class="oidl_aba_c_hover">
                                        <span>@{{ infoList.starDesc != null?infoList.starDesc:'无说明' }}</span>
										<img src="/harmony/images/xiaojianbiao_07.png">
									</div>
								</span>
                                <span>住宿说明
									<div class="oidl_aba_c_hover">
                                        <span v-if="infoList.persons != null">标准@{{ infoList.persons }}人间</span>
                                        <span v-if="infoList.persons == null">无说明</span>
                                        <p>@{{ infoList.accommodationDesc }}</p>
									<img src="/harmony/images/xiaojianbiao_07.png">
									</div>
								</span>
                                <span>用餐说明
									<div class="oidl_aba_c_hover" v-text="infoList.meal">
									<img src="/harmony/images/xiaojianbiao_07.png">
									</div>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="order_index_down_left_a_a_a_a clearboth">供应商</div>
                    <div class="order_index_down_left_a_d clearboth">
                        <div class="order_index_down_left_a_d_a clearboth">
                            <div class="oidl_ada_a">
                                <span>{{$info->supplierName}}</span>
                            </div>
                        </div>
                        {{--<div class="oidl_ada_b">--}}
                            {{--<div>销售姓名：<span>巴拉巴拉</span></div>--}}
                            {{--<div>手机号：<span>18888888888</span></div>--}}
                            {{--<div>QQ：<span>88888888</span></div>--}}
                        {{--</div>--}}

                    </div>
                </div>
                <!--左边内容第一部分--end------------------------------------------------->


                <!--左边内容第二部分--------------------------------------------------->
                <div class="order_index_down_left_b">
                    <div class="order_index_down_left_b_a">
                        <span>客人信息</span>
                        <span>请准确填写以下信息，方便出行</span>
                    </div>

                    <div class="fuzhu_zongti">
                        <div class="fuzhi_a">

                    </div>
                    </div>

                </div>

                <div class="order_index_down_left_c">
                    <div class="order_index_down_left_a_a clearboth">
                        <div class="order_index_down_left_a_a_a">联系方式</div>
                    </div>
                    <div class="order_index_down_left_c_b">
                        <div class="oidl_cb_input">
                            <span class="oidl_cb_input_a">姓名</span>
                            <input id="xm" type="text" placeholder="姓名">
                        </div>
                        <div class="oidl_cb_input">
                            <span class="oidl_cb_input_a">手机号码</span>
                            <input id="number" type="tel" placeholder="手机号码">
                        </div>
                        <div class="oidl_cb_input">
                            <span class="oidl_cb_input_a">QQ号码</span>
                            <input id="qq" type="number" placeholder="QQ号码">
                        </div>
                        <div class="oidl_cb_input">
                            <span class="oidl_cb_input_a">邮箱</span>
                            <input id="email" type="text" placeholder="邮箱">
                        </div>
                        <div class="oidl_cb_input_beizhu clearboth">
                            <span class="oidl_cb_input_a">备注</span>
                            <textarea id="bz"  maxlength="50" placeholder="五十字以内"></textarea>
                        </div>
                    </div>
                    <div class="order_index_down_left_c_tijiaodingdan clearboth">
                        <span><a href="###" class="order_index_down_left_c_tijiaodingdan_a" v-bind:buyer-id="buyerOpenId" v-bind:data-id="id">提交订单</a></span>
                        <span><a href="###" class="order_index_down_left_c_tijiaodingdan_b" onclick="javascript:history.back(-1)">返回上一页</a></span>
                    </div>
                </div>

            </div>

            <div class="order_index_down_right">
                <div class="order_index_down_right_a">
                    <div class="order_index_down_right_a_a">账单<img src="/harmony/images/dingdanxiangshangxiangxia_09.png"></div>
                    <div class="order_index_down_right_a_b clearboth">
                        @if($info->adultIndustryPrice != null)
                            <div class="oidr_zhangdan clearboth">
                                <div class="oidr_zhangdan_a"><i>成人</i>&yen;<span>{{ $info->adultIndustryPrice }}</span>/人</div>
                                <span>*</span>
                                <div class="oidr_zhangdan_b clearboth">
                                    <a href="javascript:void(0)"><span class="jiajian_a chengren_jian">-</span></a>
                                    <span class="jiajian_b" data-openId="">0</span>
                                    <a href="javascript:void(0)"><span class="jiajian_c chengren_jia">+</span></a>
                                </div>
                                <div class="oidr_zhangdan_c">&yen;<span class="dange_zongjia">0</span></div>
                            </div>
                        @endif
                        @if($info->childIndustryPrice != null)
                            <div class="oidr_zhangdan clearboth">
                                <div class="oidr_zhangdan_a"><i>儿童</i>&yen;<span>{{ $info->childIndustryPrice }}</span>/人</div>
                                <span>*</span>
                                <div class="oidr_zhangdan_b clearboth">
                                    <a href="javascript:void(0)"><span class="jiajian_a ertong_jian">-</span></a>
                                    <span class="jiajian_b"data-openId="">0</span>
                                    <a href="javascript:void(0)"><span class="jiajian_c ertong_jia">+</span></a>
                                </div>
                                <div class="oidr_zhangdan_c">&yen;<span class="dange_zongjia">0</span></div>
                            </div>
                        @endif
                        @if($info->singleRoomIndustryPrice != null)
                            <div class="oidr_zhangdan clearboth">
                                <div class="oidr_zhangdan_a"><i>单房差</i>&yen;<span>{{ $info->singleRoomIndustryPrice }}</span>/人</div>
                                <span>*</span>
                                <div class="oidr_zhangdan_b clearboth">
                                    <a href="javascript:void(0)"><span class="danfangcha_a">-</span></a>
                                    <span class="jiajian_b" data-openId="">0</span>
                                    <a href="javascript:void(0)"><span class="danfangcha_b">+</span></a>
                                </div>
                                <div class="oidr_zhangdan_c">&yen;<span class="dange_zongjia">0</span></div>
                            </div>
                        @endif
                        @if($info->specPriceList != null)
                            @foreach($info->specPriceList as $diy)
                                <div class="oidr_zhangdan clearboth">
                                    <div class="oidr_zhangdan_a"><i>{{$diy->name}}</i>&yen;<span> {{ $diy->industryPrice }}</span>/人</div>
                                    <span>*</span>
                                    <div class="oidr_zhangdan_b clearboth">
                                        <a href="javascript:void(0)"><span class="jiajian_a">-</span></a>
                                        <span class="jiajian_b" data-openId = {{ $diy->openId }} >0</span>
                                        <a href="javascript:void(0)"><span class="jiajian_c">+</span></a>
                                    </div>
                                    <div class="oidr_zhangdan_c">&yen;<span class="dange_zongjia">0</span></div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="order_index_down_right_a_c clearboth">
                        <span>同业价共计：</span>
                        <div class="order_index_down_right_a_c_b">
                            &yen;<span class="zhangdanzongjia">0.00</span>
                        </div>
                    </div>
                    <div class="order_index_down_right_a_d clearboth">
                        <a href="###" v-bind:buyer-id="buyerOpenId" v-bind:data-id="id" id="sub">提交订单</a>
                        <a href="###" id="back" onclick="javascript:history.back(-1)">返回上一页</a>
                    </div>

                </div>
                <div class="order_index_down_right_a">
                    <div class="order_index_down_right_a_a">费用包含</div>
                    <div class="order_index_down_right_a_b_a" v-text="infoList.costContain">

                    </div>
                </div>

                <div class="order_index_down_right_a">
                    <div class="order_index_down_right_a_a">费用不包含</div>
                    <div class="order_index_down_right_a_b_a" v-text="infoList.costOutside">
                    </div>
                </div>
            </div>

        </div>




        <!--下部分 end---------------------------------------------------------------------------------------------------------------------------->









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
        el:'.container',
        data:{
            infoList:{!! $infoList !!},
            id:'{{$id}}',
            buyerOpenId:'{{session('openId')}}'
        }
    })
</script>

</body>
</html>