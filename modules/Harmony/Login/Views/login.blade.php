<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登录_登录</title>
    <link rel="stylesheet" href="/harmony/css/land_index.css">
     <link href="/harmony/css/index.css" rel="stylesheet">
    <script src="/harmony/js/jquery-1.11.3.min.js"></script>
    <script src="/harmony/js/vue2.js"></script>
    <script src="/harmony/js/vue-resource.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="zhengti">
    <div class="land_content">
        <div class="land_content_logo"><img src="/harmony/images/nabianet.png"></div>

        <div class="land_content_a">
            <div class="land_content_gongdongtiao">
                <div class="land_content_a_a">
                    <div class="lc_aa_a">您好，新用户请<a href="land_register.html">注册</a></div>
                </div>
                <div class="land_land_a clearboth clearboth">
                    <div class="land_land_a_a  clearboth">
                        <div class="ll_aa_a">用户名</div>
                        <input type="text" placeholder="可用手机号/用户名/邮箱登陆" id='username' class="land_land_a_input_a">
                    </div>
                    <div class="land_land_a_b clearboth">
                        <div class="ll_aa_a">密码</div>
                        <input type="password" placeholder="请输入您的密码" id='psw' class="land_land_a_input_b">
                    </div>
                    <div class="land_land_yanzheng clearboth">
                        <div class="land_land_a_c">
                            <div class="ll_aa_a_b">验证码</div>
                            <input type="text" placeholder="请输入的验证码" id="captcha" class="land_land_a_input_c">
                        </div >
                        <div class="land_land_yanzheng_a" @click="changeimg()">
                        <a href="javascript:;">{!! captcha_img() !!}</a></div>
                        <div class="land_land_yanzheng_a" style="width:55px;padding:20px;margin-top:20px;font-family: '黑体';"><a href="javascript:;" @click="changeimg()">
                        <font color="#428eff" size="2px">换一张</font></a> </div>
                        
                    </div>

                    <div class="land_land_auto clearboth">
                        <div class="land_land_yanzheng_a_a clearboth" id='errmsg' style="display: none">...</div>
                        <!-- <div class="land_land_yanzheng_a_b clearboth">该户名不存在，请<a href="###">注册</a></div> -->
                        <div class="land_land_a_e clearboth">
                            <div class="ll_ae_a"><input type="checkbox" id="ll_ae_a_lianjie"><label for="ll_ae_a_lianjie">七天内自动登录</label></div>
                            <div class="ll_ae_b"><a href="###">忘记密码</a></div>
                        </div>
                    </div>
                </div>
                <div class="land_content_a_b"><a href="javascript:void(0);" @click="goLogin()">登录</a></div>
            </div>

        </div>
        <div class="land_content_b clearboth">
            <img src="/harmony/images/land_dianhua_07.png">
            <span>400-060-8122</span>
        </div>
        <div class="land_content_c clearboth">
            <ul class="footer_bottom ">
                <li>©2014-2015 nabianet.com 版权所有</li>
                <li> | </li>
                <li>京ICP备15037027</li>
                <li> | </li>
                <li>客服电话 400-060-8122</li>
            </ul>
        </div>
    </div>
</div>
<script>
     var vm = new Vue({
        el:".zhengti",
        data:{   
            befurl:"{{ isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/harmony/home' }}",
            account:"{{ session('account')?session('account'):'' }}"    
        },
        
        methods:{
            goLogin:function(){
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name=csrf-token]').getAttribute('content')
                var username=$('#username').val();
                var password=$('#psw').val();
                var code=$('#captcha').val();
                this.$http.post('/harmony/login',{username:username,password:password,captcha:code}).then(function(response) {

                    if(response.body.success) {
                        location.href=vm.befurl;
                    }else{
                        $('#errmsg').show();
                        $('#errmsg').text(response.body.code);
                        vm.changeimg();
                    }
                    console.log('成功',response);
                }, function (res) {
                    console.log("失败", res);
                });
            },

            isLogin:function(isLogin){
                if(isLogin){
                    location.href=vm.befurl;
                }
            },

            changeimg:function(){
               var imgsrc="{!! captcha_src() !!}";
               var num=imgsrc+Math.random();
                $('.land_land_yanzheng_a img').attr('src',num);
            },

        },
       
        filters: {
            
        }
    })
$(function(){
    vm.isLogin(vm.account);
})

</script>
</body>
</html>
