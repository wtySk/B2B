<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登陆页面</title>
    <link rel="stylesheet" href="{{ asset('css/public.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>
<body>
<div class="content">
    <div class="content_black_bj"></div>
    <div class="content_black"></div>
    <div class="content_bj" id="content_bj">
        <div class="header">
            <div class="logo"><img src="/images/nabianet.png" alt="公司logo"></div>
        </div>
        <div class="main clearboth" id="main">
            <!--<div class="main_left" id="main_left" style="display: none"></div>-->
            <div class="main_left_b" id="main_leftB">
                <h1>北京那边网络科技有限公司： 数字生活，旅讯平台</h1>
                <div class="ercord"><div class="ercordimg"><img src="/images/erweima.jpg" alt=""></div></div>
            </div>

            <form action="{{ Admin::url('auth/login') }}" method="post">

            <div class="main_input">
                <h1>后台登陆</h1>
                <div class="main_input_i">
                    <form action="">
                        <div class="accout"><input type="text" name="username" placeholder="请输入账号" onFocus="focusInputa()"  value="{{ old('username') }}"><div class="icon"><img src="/images/accont.png" alt=""></div></div>
                        <div class="accout"><input type="password" name="password" placeholder="请输入密码" onFocus="focusInputb()" value="{{ old('password') }}"><div class="icon"><img src="/images/password.png" alt=""></div></div>
                        <!--<div><input type="checkbox"></div>-->
                        {{--<div class="accout_b clearboth">--}}
                            {{--<input type="text" placeholder="验证码">--}}
                        {{--</div>--}}

                        <div class="form-group has-feedback {!! !$errors->has('username') ?: 'has-error' !!}">



                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>


                        <div class="form-group has-feedback {!! !$errors->has('password') ?: 'has-error' !!}">



                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        @if($errors->has('username'))
                            @foreach($errors->get('username') as $message)
                                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label></br>
                            @endforeach
                        @endif

                        @if($errors->has('password'))
                            @foreach($errors->get('password') as $message)
                                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label></br>
                            @endforeach
                        @endif
                        <div class="accout_button"><button>登录</button></div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>

                    {{--<div class="main_inputb"><a href="###">忘记密码</a>&nbsp;|&nbsp;<a href="###">注册新账号</a>&nbsp;|&nbsp;<a href="###">意见反馈</a></div>--}}

                </div>
            </div>
            </form>


        </div>
        <div class="footer" id="fotter">
            <footer>
                <ul class="footer_bottom ">
                    <li>©2014-2015 nabianet.com 版权所有</li>
                    <li> | </li>
                    <li>京ICP备15037027</li>
                    <li> | </li>
                    <li>客服电话 400-060-8122</li>
                </ul>
            </footer>
        </div>
    </div>
</div>
<script>
    var windowHeigh = document.documentElement.clientHeight
    var Bj = document.getElementById('content_bj')
    var mainCH = document.getElementById('main')
    var fotterH = document.getElementById('fotter').offsetHeight
    Bj.style.height = windowHeigh + 'px'
    mainCH.style.height = windowHeigh - 150 - fotterH + 'px'
    function focusInputa() {
        var bgLeft = document.getElementById('main_left')
        var bgLeftB = document.getElementById('main_leftB')
        bgLeft.style.display = 'block'
        bgLeftB.style.display = 'none'
    }
    function focusInputb() {
        var bgLeft = document.getElementById('main_left')
        var bgLeftB = document.getElementById('main_leftB')
        bgLeft.style.display = 'none'
        bgLeftB.style.display = 'block'
    }
</script>
</body>
</html>