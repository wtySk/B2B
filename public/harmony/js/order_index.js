$(function(){
	//计算右边账单金额
	function gwcValPrice(){
        setInterval(function(){
            var num=0;
            $(".jiajian_b").each(function(){
                var thisNum=parseInt($(this).text())*parseFloat($(this).parents(".oidr_zhangdan_b").siblings(".oidr_zhangdan_a").children("span").text());
                num+=thisNum;
            });
            $(".zhangdanzongjia").text(num.toFixed(2));
        },300)
    }
    gwcValPrice();

    setTimeout(function(){
        $(".oidr_zhangdan").each(function(){
            var price_name=$(this).children(".oidr_zhangdan_a").children("i").text();
            var price_num=$(this).children(".oidr_zhangdan_b").children(".jiajian_b").text();

            //相同的游客类型 添加相同的class
            var list_length=$(".oidr_zhangdan").index(this);
            var fuzhi_a_a_lenght = new Date().getTime();
            //console.log(list_length);
            for(i=0;i<price_num;i++){
                $(".fuzhi_a").append("<div class='fuzhi_a_a list_"+list_length+"' data-tourist='"+list_length+"'><div class='order_index_down_left_b_b clearboth'><div class='order_index_down_left_b_b_a clearboth'><div class='oidl_bba_a'>客人信息</div><div class='oidl_bba_b'>"+price_name+"</div></div><div class='order_index_down_left_b_b_b clearboth'><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>中文姓名<img src='/harmony/images/order_xingbiaoji_09.png'></span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>英文姓名<img src='/harmony/images/order_xingbiaoji_09.png'></span><input type='text' class='xing' placeholder='英文姓'><input type='text' class='ming' placeholder='英文名'></div><div class='oidl_bbb_a_input_b clearboth'><span class='oidl_bbb_a'>性别<img src='/harmony/images/order_xingbiaoji_09.png'></span><div class='oidl_bbb_b'><input type='radio' name='myradio_"+fuzhi_a_a_lenght+"' class='oidl_bbb_b_danxuan' id='oidl_bbb_b_danxuan'><label>男</label><input type='radio' name='myradio_"+fuzhi_a_a_lenght+"' class='oidl_bbb_b_danxuan' id='oidl_bbb_b_danxuan_a'><label>女</label></div></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>国籍</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input clearboth'><span class='oidl_bbb_a'>证件类型</span><div class='zhengjianleixing'><span>身份证</span><img src='/harmony/images/search_select_sj.png'><div class='zhengjianleixing_b'><ul> <li>身份证</li><li>居住证</li><li>签证</li><li>护照</li><li>户口本</li><li>军人证</li><li>团员证</li> <li>党员证</li><li>港澳通行证</li></ul></div></div></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>证件号码</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>出生日期</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>手机号码</span><input type='tel' placeholder='填写正确手机号码'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>备注</span><input type='text' maxlength='15' placeholder='十字以内'></div></div><div class='order_index_down_left_b_b_c clearboth'><div class='order_index_down_left_b_b_jia'><img src='/harmony/images/dingdan_jiajian_23.png' ></div><div class='order_index_down_left_b_b_jian'><img src='/harmony/images/dingdan_jiajian_21.png'></div></div></div><div class='order_index_down_left_b_c'></div></div>");
            }
        })
    },100);

    $(".order_index_down_left_c_tijiaodingdan_a,#sub").click(function () {
        var arr = {};
        var tourist = {};
        var price = {};
        var priceMsg = [];
        var msg = {};
        var spec = {};
        var specPrice = [];
        var touristList = [];
        var priceList = [];
        //获取成人 儿童 单房差 的人数和总金额
        $('.oidr_zhangdan').each(function(i) {
            for(var k=0;k<$('.oidr_zhangdan').length;k++) {
                arr.name = $(this).children('.oidr_zhangdan_a').children('i').text();
                arr.num = $(this).children('.oidr_zhangdan_b').children('span').text();
                arr.totalPrice = $(this).children('.oidr_zhangdan_c').children('span').text();
                arr.openId = $(this).children('.oidr_zhangdan_b').children('span').attr('data-openId');
            }
            priceList[i] = eval(arr);
            arr = {};
        });


        for(var z=0;z<priceList.length;z++) {
            if(priceList[z].name == '成人') {
                price.adultCount = priceList[z].num;
                price.adultTotalPrice = priceList[z].totalPrice * 100;
            }
            if(priceList[z].name == '儿童') {
                price.childCount = priceList[z].num;
                price.childTotalPrice = priceList[z].totalPrice * 100;
            }
            if(priceList[z].name == '单房差') {
                price.singleRoomCount = priceList[z].num;
                price.singleRoomTotalPrice = priceList[z].totalPrice * 100;
            }
            if(priceList[z].openId != '') {
                spec.openId = priceList[z].openId;
                spec.count = priceList[z].num;
                spec.totalPrice = priceList[z].totalPrice * 100;
                specPrice.push(spec);
                spec = {};
            }
        }

        //获取游客信息
        $(".fuzhi_a_a").each(function (index) {
            for(var j=0;j<$(".fuzhi_a_a").length;j++) {
                tourist.typeText = $(this).children('.order_index_down_left_b_b').children('.order_index_down_left_b_b_a').children('.oidl_bba_b').text();
                tourist.nameCh = $(this).children('.order_index_down_left_b_b').children('.order_index_down_left_b_b_b').children('div:nth-child(1)').children('input').val();
                tourist.nameEn = '';
                tourist.enLastName = $(this).children('.order_index_down_left_b_b').children('.order_index_down_left_b_b_b').children('div:nth-child(2)').children('.xing').val();
                tourist.enFirstName = $(this).children('.order_index_down_left_b_b').children('.order_index_down_left_b_b_b').children('div:nth-child(2)').children('.ming').val();
                tourist.cardType = $(this).children('.order_index_down_left_b_b').children('.order_index_down_left_b_b_b').children('div:nth-child(5)').children('.zhengjianleixing').children('span:nth-child(1)').text();
                tourist.cardNumber = $(this).children('.order_index_down_left_b_b').children('.order_index_down_left_b_b_b').children('div:nth-child(6)').children('input').val();
                tourist.nationality = $(this).children('.order_index_down_left_b_b').children('.order_index_down_left_b_b_b').children('div:nth-child(4)').children('input').val();
                tourist.birthday = $(this).children('.order_index_down_left_b_b').children('.order_index_down_left_b_b_b').children('div:nth-child(7)').children('input').val();
                tourist.phone = $(this).children('.order_index_down_left_b_b').children('.order_index_down_left_b_b_b').children('div:nth-child(8)').children('input').val();
                tourist.completed = false;
                // $.each($('input:radio:checked'),function(){
                tourist.sex = '男';
                // });
            }
            touristList[index] = tourist;
            tourist = {};
        });
        console.log(touristList);

        var pattern = /^1[34578]\d{9}$/;
        if(touristList == '') {
            alert('请填写游客信息');
            return false;
        }else {
            for(var y=0;y<touristList.length;y++) {
                if(touristList[y].nameCh == '') {
                    var n = y+1;
                    alert('请填写第'+ n +'份信息的中文姓名');
                    return false;
                }else if(touristList[y].sex == '') {
                    var c = y+1;
                    alert('请选择第'+ c +'份信息的性别');
                    return false;
                }else if(touristList[y].birthday == '') {
                    var d = y+1;
                    alert('请填写第'+ d +'份信息的出生日期');
                    return false;
                }else if(touristList[y].cardNumber == '') {
                    var f = y+1;
                    alert('请填写第'+ f +'份信息的证件号码');
                    return false;
                }
            }
        }


        if($('#xm').val() == '') {
            alert('请填写联系人姓名');
            $('#xm').focus();
            return false;
        }else if($('#number').val() == '') {
            alert('请填写联系人手机号码');
            $('#number').focus();
            return false;
        }else if(!pattern.test($('#number').val())) {
            alert('请填写正确的手机号码');
            $('#number').focus();
            return false;
        }
        price.productOpenId  = '';
        price.specOpenId  = $(this).attr('data-id');
        price.priceList =specPrice;
        price.touristList =touristList;
        priceMsg.push(price);
        msg.specList = priceMsg;
        msg.buyerOpenId = $(this).attr('buyer-id');
        msg.buyerPosition = '';
        msg.sellerOpenId = '';
        msg.sellerPosition = '';
        msg.contactName = $('#xm').val();
        msg.contactSex = '男';
        msg.contactPhone = $('#number').val();
        msg.contactEmail = $('#email').val();
        msg.contactCardNumber = '';
        msg.remark = $('#bz').val();
        msg.key = 'O1';
        msg.isBargain = 0;
        msg.infant = 0;

        var csrfToken = $("meta[name='csrf-token']").attr("content");
        $.ajax({
            type:'POST',
            url:'/harmony/order',
            data:{
                msg:msg,
                _token:csrfToken

            },
            success:function (data) {
                console.log(data);
                if(data.result == 'true') {
                    alert('下单成功');
                    // window.location.href= data.url;
                }else{
                    alert(data.msg);
                }
            }


        })

    });




    $(".jiajian_c").click(function(){
        var addNumber=parseInt($(this).parents("a").prev(".jiajian_b").text())+1;
        $(this).parents("a").prev(".jiajian_b").text(addNumber);
        if(addNumber>=98){
            $(this).parents("a").prev(".jiajian_b").text(99);
            // $(this).css({"border-color":"#eee"})
        }
        var price = $(this).parents("a").parents(".oidr_zhangdan_b").siblings(".oidr_zhangdan_a").children("span").text();
        var count = $(this).parents("a").prev(".jiajian_b").text();
        var price_count = price * count;
        $(this).parents("a").parents(".oidr_zhangdan_b").siblings(".oidr_zhangdan_c").children("span").text(price_count);
        // console.log(price_count);
        var price_name=$(this).parents("a").parents(".oidr_zhangdan_b").siblings(".oidr_zhangdan_a").children("i").text();
        // var price_num=$(this).parents("a").siblings(".jiajian_b").text();
        var list_length=$(this).parents("a").parents(".oidr_zhangdan_b").parents(".oidr_zhangdan").index(".oidr_zhangdan");
        var fuzhi_a_a_lenght = new Date().getTime();
        //$(".list_"+list_length).last().after("<div class='fuzhi_a_a list_"+list_length+"'><div class='order_index_down_left_b_b clearboth'><div class='order_index_down_left_b_b_a clearboth'><div class='oidl_bba_a'>客人信息</div><div class='oidl_bba_b'>"+price_name+"</div></div><div class='order_index_down_left_b_b_b clearboth'><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>中文姓名<img src='/harmony/images/order_xingbiaoji_09.png'></span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>英文姓名<img src='/harmony/images/order_xingbiaoji_09.png'></span><input type='text' placeholder='英文姓'><input type='text' placeholder='英文名'></div><div class='oidl_bbb_a_input_b clearboth'><span class='oidl_bbb_a'>性别<img src='/harmony/images/order_xingbiaoji_09.png'></span><div class='oidl_bbb_b'><input type='radio' name='myradio' class='oidl_bbb_b_danxuan' id='oidl_bbb_b_danxuan'><label for='oidl_bbb_b_danxuan'>男</label><input type='radio' name='myradio' class='oidl_bbb_b_danxuan' id='oidl_bbb_b_danxuan_a'><label for='oidl_bbb_b_danxuan_a'>女</label></div></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>国籍</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>证件类型</span><input type='text' placeholder='护照'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>证件号码</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>出生日期</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>手机号码</span><input type='tel' placeholder='填写正确手机号码'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>备注</span><input type='text' maxlength='15' placeholder='十字以内'></div></div><div class='order_index_down_left_b_b_c clearboth'><div class='order_index_down_left_b_b_jia'><img src='/harmony/images/dingdan_jiajian_23.png' ></div><div class='order_index_down_left_b_b_jian'><img src='/harmony/images/dingdan_jiajian_21.png'></div></div></div><div class='order_index_down_left_b_c'></div></div>")
        if($(".fuzhi_a>div").hasClass("list_"+list_length)){
            // console.log(list_length)
            $(".list_"+list_length).last().after("<div class='fuzhi_a_a list_"+list_length+"' data-tourist='"+list_length+"'><div class='order_index_down_left_b_b clearboth'><div class='order_index_down_left_b_b_a clearboth'><div class='oidl_bba_a'>客人信息</div><div class='oidl_bba_b'>"+price_name+"</div></div><div class='order_index_down_left_b_b_b clearboth'><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>中文姓名<img src='/harmony/images/order_xingbiaoji_09.png'></span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>英文姓名<img src='/harmony/images/order_xingbiaoji_09.png'></span><input type='text' class='xing' placeholder='英文姓'><input type='text' class='ming' placeholder='英文名'></div><div class='oidl_bbb_a_input_b clearboth'><span class='oidl_bbb_a'>性别<img src='/harmony/images/order_xingbiaoji_09.png'></span><div class='oidl_bbb_b'><input type='radio' name='myradio_"+fuzhi_a_a_lenght+"' class='oidl_bbb_b_danxuan' id='oidl_bbb_b_danxuan'><label>男</label><input type='radio' name='myradio_"+fuzhi_a_a_lenght+"' class='oidl_bbb_b_danxuan' id='oidl_bbb_b_danxuan_a'><label>女</label></div></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>国籍</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input clearboth'><span class='oidl_bbb_a'>证件类型</span><div class='zhengjianleixing'><span>身份证</span><img src='/harmony/images/search_select_sj.png'><div class='zhengjianleixing_b'><ul> <li>身份证</li><li>居住证</li><li>签证</li><li>护照</li><li>户口本</li><li>军人证</li><li>团员证</li> <li>党员证</li><li>港澳通行证</li></ul></div></div></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>证件号码</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>出生日期</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>手机号码</span><input type='tel' placeholder='填写正确手机号码'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>备注</span><input type='text' maxlength='15' placeholder='十字以内'></div></div><div class='order_index_down_left_b_b_c clearboth'><div class='order_index_down_left_b_b_jia'><img src='/harmony/images/dingdan_jiajian_23.png' ></div><div class='order_index_down_left_b_b_jian'><img src='/harmony/images/dingdan_jiajian_21.png'></div></div></div><div class='order_index_down_left_b_c'></div></div>")
        }else {
            $(".fuzhi_a").append("<div class='fuzhi_a_a list_"+list_length+"' data-tourist='"+list_length+"'><div class='order_index_down_left_b_b clearboth'><div class='order_index_down_left_b_b_a clearboth'><div class='oidl_bba_a'>客人信息</div><div class='oidl_bba_b'>"+price_name+"</div></div><div class='order_index_down_left_b_b_b clearboth'><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>中文姓名<img src='/harmony/images/order_xingbiaoji_09.png'></span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>英文姓名<img src='/harmony/images/order_xingbiaoji_09.png'></span><input type='text' class='xing' placeholder='英文姓'><input type='text' class='ming' placeholder='英文名'></div><div class='oidl_bbb_a_input_b clearboth'><span class='oidl_bbb_a'>性别<img src='/harmony/images/order_xingbiaoji_09.png'></span><div class='oidl_bbb_b'><input type='radio' name='myradio_"+fuzhi_a_a_lenght+"' class='oidl_bbb_b_danxuan' id='oidl_bbb_b_danxuan'><label>男</label><input type='radio' name='myradio_"+fuzhi_a_a_lenght+"' class='oidl_bbb_b_danxuan' id='oidl_bbb_b_danxuan_a'><label>女</label></div></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>国籍</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input clearboth'><span class='oidl_bbb_a'>证件类型</span><div class='zhengjianleixing'><span>身份证</span><img src='/harmony/images/search_select_sj.png'><div class='zhengjianleixing_b'><ul> <li>身份证</li><li>居住证</li><li>签证</li><li>护照</li><li>户口本</li><li>军人证</li><li>团员证</li> <li>党员证</li><li>港澳通行证</li></ul></div></div></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>证件号码</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>出生日期</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>手机号码</span><input type='tel' placeholder='填写正确手机号码'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>备注</span><input type='text' maxlength='15' placeholder='十字以内'></div></div><div class='order_index_down_left_b_b_c clearboth'><div class='order_index_down_left_b_b_jia'><img src='/harmony/images/dingdan_jiajian_23.png' ></div><div class='order_index_down_left_b_b_jian'><img src='/harmony/images/dingdan_jiajian_21.png'></div></div></div><div class='order_index_down_left_b_c'></div></div>");
            //console.log(2)
        }
    });
    $(".danfangcha_b").click(function(){
        var addNumber=parseInt($(this).parents("a").prev(".jiajian_b").text())+1;
        $(this).parents("a").prev(".jiajian_b").text(addNumber);
        if(addNumber>=98){
            $(this).parents("a").prev(".jiajian_b").text(99);
            // $(this).css({"border-color":"#eee"})
        }
    });
    //购物车点击减号
    $(".jiajian_a").click(function(){
        var removeNumber=parseInt($(this).parents("a").next(".jiajian_b").text())-1;
        $(this).parents("a").next(".jiajian_b").text(removeNumber);

        if(removeNumber<=0){
            $(this).parents("a").next(".jiajian_b").text(0);
        }
        var price = $(this).parents("a").parents(".oidr_zhangdan_b").siblings(".oidr_zhangdan_a").children("span").text();
        var count = $(this).parents("a").next(".jiajian_b").text();
        var price_count = price * count;
        $(this).parents("a").parents(".oidr_zhangdan_b").siblings(".oidr_zhangdan_c").children("span").text(price_count);
        var list_length=$(this).parents("a").parents(".oidr_zhangdan_b").parents(".oidr_zhangdan").index(".oidr_zhangdan");
        $(".list_"+list_length).last().remove();
    });
    $(".danfangcha_a").click(function(){
        var removeNumber=parseInt($(this).parents("a").next(".jiajian_b").text())-1;
        $(this).parents("a").next(".jiajian_b").text(removeNumber);
        if(removeNumber<=0){
            $(this).parents("a").next(".jiajian_b").text(0);
        }
    });


    //点击订单加号 增加div  购物车数量变化
    $(document).on("click",".order_index_down_left_b_b_jia",function(){
        //$(this).parents(".order_index_down_left_b_b_c").parents(".order_index_down_left_b_b").parents(".fuzhi_a_a").remove();
        //price_name是当前加号的类型名称
        var price_name=$(this).parents(".order_index_down_left_b_b_c").siblings(".order_index_down_left_b_b_a").children(".oidl_bba_b").text();
        var this_Data_val=$(this).parents(".order_index_down_left_b_b_c").parents(".order_index_down_left_b_b").parents(".fuzhi_a_a").attr("data-tourist");
        var val_Data=parseInt(this_Data_val)+1;
        $("[data-tourist='"+this_Data_val+"']").last().after("<div class='fuzhi_a_a list_"+this_Data_val+"' data-tourist='"+this_Data_val+"'><div class='order_index_down_left_b_b clearboth'><div class='order_index_down_left_b_b_a clearboth'><div class='oidl_bba_a'>客人信息</div><div class='oidl_bba_b'>"+price_name+"</div></div><div class='order_index_down_left_b_b_b clearboth'><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>中文姓名<img src='/harmony/images/order_xingbiaoji_09.png'></span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>英文姓名<img src='/harmony/images/order_xingbiaoji_09.png'></span><input type='text' class='xing' placeholder='英文姓'><input type='text' class='ming' placeholder='英文名'></div><div class='oidl_bbb_a_input_b clearboth'><span class='oidl_bbb_a'>性别<img src='/harmony/images/order_xingbiaoji_09.png'></span><div class='oidl_bbb_b'><input type='radio' name='myradio' class='oidl_bbb_b_danxuan' id='oidl_bbb_b_danxuan'><label>男</label><input type='radio' name='myradio' class='oidl_bbb_b_danxuan' id='oidl_bbb_b_danxuan_a'><label>女</label></div></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>国籍</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input clearboth'><span class='oidl_bbb_a'>证件类型</span><div class='zhengjianleixing'><span>身份证</span><img src='/harmony/images/search_select_sj.png'><div class='zhengjianleixing_b'><ul> <li>身份证</li><li>居住证</li><li>签证</li><li>护照</li><li>户口本</li><li>军人证</li><li>团员证</li> <li>党员证</li><li>港澳通行证</li></ul></div></div></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>证件号码</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>出生日期</span><input type='text' placeholder='与证件保持一致'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>手机号码</span><input type='tel' placeholder='填写正确手机号码'></div><div class='oidl_bbb_a_input'><span class='oidl_bbb_a'>备注</span><input type='text' maxlength='15' placeholder='十字以内'></div></div><div class='order_index_down_left_b_b_c clearboth'><div class='order_index_down_left_b_b_jia'><img src='/harmony/images/dingdan_jiajian_23.png' ></div><div class='order_index_down_left_b_b_jian'><img src='/harmony/images/dingdan_jiajian_21.png'></div></div></div><div class='order_index_down_left_b_c'></div></div>")
        $(".oidr_zhangdan:nth-child("+val_Data+")").children(".oidr_zhangdan_b").children(".jiajian_b").text($("[data-tourist='"+this_Data_val+"']").length)

    });


    //点击订单减号 div消失  购物车数量变化
    $(document).on("click",".order_index_down_left_b_b_jian",function(){
        $(this).parents(".order_index_down_left_b_b_c").parents(".order_index_down_left_b_b").parents(".fuzhi_a_a").remove();


        var this_Data_val=$(this).parents(".order_index_down_left_b_b_c").parents(".order_index_down_left_b_b").parents(".fuzhi_a_a").attr("data-tourist");
        var val_Data=parseInt(this_Data_val)+1;
        $(".oidr_zhangdan:nth-child("+val_Data+")").children(".oidr_zhangdan_b").children(".jiajian_b").text($("[data-tourist='"+this_Data_val+"']").length)

    });

//账单栏隐藏显示
    $(".order_index_down_right_a_a img").click(function(){
        if($(this).attr("src")=="/harmony/images/dingdanxiangshangxiangxia_09.png"){
            $(this).attr("src","/harmony/images/dingdanxiangshangxiangxia_12.png");
            	$(this).parents(".order_index_down_right_a_a").siblings(".order_index_down_right_a_b").hide();
            	$(this).parents(".order_index_down_right_a_a").siblings(".order_index_down_right_a_d").hide()
        }else {
            $(this).attr("src","/harmony/images/dingdanxiangshangxiangxia_09.png");
            	$(this).parents(".order_index_down_right_a_a").siblings(".order_index_down_right_a_b").show();
            	$(this).parents(".order_index_down_right_a_a").siblings(".order_index_down_right_a_d").show()
        }
    });

//订单状态---------------------------------------
	 $(".order_index_hader_b_a_b").each(function(){
	        var dingdanWidth = parseInt($(this).attr("data-dingdan")) * 189;
	        $(this).css("width", dingdanWidth);
	        
	        var jishiWidth = parseInt($(this).attr("data-jishi")) * 273;
	        $(this).css("width",jishiWidth);
	    });



    //点击证件类型弹出选项框
    $(document).on("click","*:not(.zhengjianleixing_b)",function(){
        $(".zhengjianleixing_b").hide();
    });
    $(document).on("click",".zhengjianleixing",function(){
        $(this).children(".zhengjianleixing_b").toggle();
        // $(this).children(".zhengjianleixing_b").show();
        //使用return false阻止冒泡  并且 阻止默认行为，return false后面语句不会执行
        return false;

    });
    $(document).on("click",".zhengjianleixing_b ul li",function(){
        //var $ThisText=$(this).text();
        $(this).parents("ul").parents(".zhengjianleixing_b").siblings("span").text($(this).text());
        $(this).parents("ul").parents(".zhengjianleixing_b").hide();
        return false;
    });


});
