{{--@extends('layout.client-layout-v2',['page_title'=>'Đăng Ký'])--}}
{{--@section('content')--}}
{{--<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"--}}
{{--style="background-image: url(http:////cdn.shopify.com/s/files/1/0476/6585/files/outerwear_1600x.jpg?v=1532559381);">--}}
{{--<h2 class="l-text2 t-center">--}}
{{--Đăng Ký--}}
{{--</h2>--}}
{{--<p class="m-text13 t-center">--}}
{{--New Arrivals Women Collection 2018--}}
{{--</p>--}}
{{--</section>--}}
{{--<style>--}}
{{--body, html{--}}
{{--height: 100%;--}}
{{--background-repeat: no-repeat;--}}
{{--background-color: #fff;--}}
{{--font-family: 'Oxygen', sans-serif;--}}
{{--}--}}

{{--.main{--}}
{{--margin-top: 70px;--}}
{{--}--}}

{{--h1.title {--}}
{{--font-size: 50px;--}}
{{--font-family: 'Passion One', cursive;--}}
{{--font-weight: 400;--}}
{{--}--}}


{{--.form-group{--}}
{{--margin-bottom: 15px;--}}
{{--}--}}

{{--label{--}}
{{--margin-bottom: 15px;--}}
{{--}--}}

{{--input,--}}
{{--input::-webkit-input-placeholder {--}}
{{--font-size: 11px;--}}
{{--padding-top: 3px;--}}
{{--}--}}

{{--.main-login{--}}
{{--background-color: #fff;--}}
{{--/* shadows and rounded borders */--}}
{{---moz-border-radius: 2px;--}}
{{---webkit-border-radius: 2px;--}}
{{--border-radius: 10px;--}}
{{---moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);--}}
{{---webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);--}}
{{--box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);--}}

{{--}--}}

{{--.main-center{--}}
{{--margin-top: 30px;--}}
{{--margin: 0 auto;--}}
{{--max-width: 330px;--}}
{{--padding: 40px 40px;--}}

{{--}--}}

{{--.login-button{--}}
{{--margin-top: 5px;--}}
{{--}--}}

{{--.login-register{--}}
{{--font-size: 11px;--}}
{{--text-align: center;--}}
{{--}--}}
{{--</style>--}}
{{--<div class="container">--}}
{{--<div class="row main">--}}

{{--<div class="main-login main-center">--}}
{{--<form class="form-horizontal" method="post" action="#">--}}


{{--<div class="form-group">--}}
{{--<label for="username" class="cols-sm-2 control-label">Tên của bạn</label>--}}
{{--<div class="cols-sm-10">--}}
{{--<div class="input-group">--}}
{{--<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>--}}
{{--<input type="text" class="form-control" name="username" id="username"  placeholder="Nhập tên bạn "/>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label for="username" class="cols-sm-2 control-label">Email</label>--}}
{{--<div class="cols-sm-10">--}}
{{--<div class="input-group">--}}
{{--<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>--}}
{{--<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<label for="password" class="cols-sm-2 control-label">Mật Khẩu</label>--}}
{{--<div class="cols-sm-10">--}}
{{--<div class="input-group">--}}
{{--<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>--}}
{{--<input type="password" class="form-control" name="password" id="password"  placeholder="Nhập vào mật khẩu"/>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<label for="confirm" class="cols-sm-2 control-label">Nhập lại mật khẩu</label>--}}
{{--<div class="cols-sm-10">--}}
{{--<div class="input-group">--}}
{{--<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>--}}
{{--<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Nhập lại mật khẩu"/>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group ">--}}
{{--<button type="button" class="btn btn-primary btn-lg btn-block login-button">Đăng Ký</button>--}}
{{--</div>--}}
{{--<div class="login-register">--}}
{{--<a href="index.php">Đăng Nhập</a>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!--header end here-->--}}
{{--<!-- copyright start here -->--}}


{{--@endsection--}}

{{--<link rel="stylesheet" href="/css/login-register.css" type="text/css">--}}
@extends('layout.client-layout-v2',['page_title'=>'Đăng kí'])
@section('content')

    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
             style="background-image: url(http:////cdn.shopify.com/s/files/1/0476/6585/files/outerwear_1600x.jpg?v=1532559381);">
        <h2 class="l-text2 t-center">
            ĐĂNG NHẬP
        </h2>
    </section>
    <style>

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: Poppins-Regular, sans-serif;
        }

        /*---------------------------------------------*/
        a {
            font-family: Poppins-Regular;
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
            color: #57b846;
        }

        /*---------------------------------------------*/
        h1, h2, h3, h4, h5, h6 {
            margin: 0px;
        }

        p {
            font-family: Poppins-Regular;
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
        }

        ul, li {
            margin: 0px;
            list-style-type: none;
        }

        /*---------------------------------------------*/
        input {
            outline: none;
            border: none;
        }

        textarea {
            outline: none;
            border: none;
        }

        textarea:focus, input:focus {
            border-color: transparent !important;
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        input:focus:-moz-placeholder {
            color: transparent;
        }

        input:focus::-moz-placeholder {
            color: transparent;
        }

        input:focus:-ms-input-placeholder {
            color: transparent;
        }

        textarea:focus::-webkit-input-placeholder {
            color: transparent;
        }

        textarea:focus:-moz-placeholder {
            color: transparent;
        }

        textarea:focus::-moz-placeholder {
            color: transparent;
        }

        textarea:focus:-ms-input-placeholder {
            color: transparent;
        }

        input::-webkit-input-placeholder {
            color: #999999;
        }

        input:-moz-placeholder {
            color: #999999;
        }

        input::-moz-placeholder {
            color: #999999;
        }

        input:-ms-input-placeholder {
            color: #999999;
        }

        textarea::-webkit-input-placeholder {
            color: #999999;
        }

        textarea:-moz-placeholder {
            color: #999999;
        }

        textarea::-moz-placeholder {
            color: #999999;
        }

        textarea:-ms-input-placeholder {
            color: #999999;
        }

        /*---------------------------------------------*/
        button {
            outline: none !important;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        iframe {
            border: none !important;
        }

        /*//////////////////////////////////////////////////////////////////
        [ Utility ]*/
        .txt1 {
            font-family: Poppins-Regular;
            font-size: 13px;
            line-height: 1.5;
            color: #999999;
        }

        .txt2 {
            font-family: Poppins-Regular;
            font-size: 13px;
            line-height: 1.5;
            color: #666666;
        }

        /*//////////////////////////////////////////////////////////////////
        [ login ]*/

        .limiter {
            width: 100%;
            margin: 0 auto;
        }

        .container-login100 {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;

        }

        .wrap-login100 {
            width: 960px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 177px 130px 33px 95px;
        }

        /*------------------------------------------------------------------
        [  ]*/
        .login100-pic {
            width: 316px;
        }

        .login100-pic img {
            max-width: 100%;
        }

        /*------------------------------------------------------------------
        [  ]*/
        .login100-form {
            width: 290px;
        }

        .login100-form-title {
            font-family: Poppins-Regular;

            font-size: 24px;
            color: #333333;
            line-height: 1.2;
            text-align: center;

            width: 100%;
            display: block;
            padding-bottom: 54px;
        }

        /*---------------------------------------------*/
        .wrap-input100 {
            position: relative;
            width: 100%;
            z-index: 1;
            margin-bottom: 10px;
        }

        .input100 {
            font-family: Poppins-Medium;
            font-size: 15px;
            line-height: 1.5;
            color: #666666;

            display: block;
            width: 100%;
            background: #e6e6e6;
            height: 50px;
            border-radius: 25px;
            padding: 0 30px 0 68px;
        }

        /*------------------------------------------------------------------
        [ Focus ]*/
        .focus-input100 {
            display: block;
            position: absolute;
            border-radius: 25px;
            bottom: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            box-shadow: 0px 0px 0px 0px;
            color: rgba(87, 184, 70, 0.8);
        }

        .input100:focus + .focus-input100 {
            -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
            animation: anim-shadow 0.5s ease-in-out forwards;
        }

        @-webkit-keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 70px 25px;
                opacity: 0;
            }
        }

        @keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 70px 25px;
                opacity: 0;
            }
        }

        .symbol-input100 {
            font-size: 15px;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            position: absolute;
            border-radius: 25px;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding-left: 35px;
            pointer-events: none;
            color: #666666;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .input100:focus + .focus-input100 + .symbol-input100 {
            color: #57b846;
            padding-left: 28px;
        }

        /*------------------------------------------------------------------
        [ Button ]*/
        .container-login100-form-btn {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 20px;
        }

        .login100-form-btn {
            font-family: Montserrat-Bold;
            font-size: 15px;
            line-height: 1.5;
            color: #fff;
            text-transform: uppercase;

            width: 100%;
            height: 50px;
            border-radius: 25px;
            background: #57b846;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 25px;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .login100-form-btn:hover {
            background: #333333;
        }

        /*------------------------------------------------------------------
        [ Responsive ]*/

        @media (max-width: 992px) {
            .wrap-login100 {
                padding: 177px 90px 33px 85px;
            }

            .login100-pic {
                width: 35%;
            }

            .login100-form {
                width: 50%;
            }
        }

        @media (max-width: 768px) {
            .wrap-login100 {
                padding: 100px 80px 33px 80px;
            }

            .login100-pic {
                display: none;
            }

            .login100-form {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .wrap-login100 {
                padding: 100px 15px 33px 15px;
            }
        }

        /*------------------------------------------------------------------
        [ Alert validate ]*/

        .validate-input {
            position: relative;
        }

        .alert-validate::before {
            content: attr(data-validate);
            position: absolute;
            max-width: 70%;
            background-color: white;
            border: 1px solid #c80000;
            border-radius: 13px;
            padding: 4px 25px 4px 10px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 8px;
            pointer-events: none;

            font-family: Poppins-Medium;
            color: #c80000;
            font-size: 13px;
            line-height: 1.4;
            text-align: left;

            visibility: hidden;
            opacity: 0;

            -webkit-transition: opacity 0.4s;
            -o-transition: opacity 0.4s;
            -moz-transition: opacity 0.4s;
            transition: opacity 0.4s;
        }

        .alert-validate::after {
            content: "\f06a";
            font-family: FontAwesome;
            display: block;
            position: absolute;
            color: #c80000;
            font-size: 15px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 13px;
        }

        .alert-validate:hover:before {
            visibility: visible;
            opacity: 1;
        }

        @media (max-width: 992px) {
            .alert-validate::before {
                visibility: visible;
                opacity: 1;
            }
        }
    </style>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="/images/img/img-01.png" alt="IMG">
                </div>

                <form action="{{route('register')}}" method="post" class="login100-form validate-form">
                    {{csrf_field()}}
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('thanhcong'))
                        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                        @else
                    @endif
                    <span class="login100-form-title">
						Đăng kí tài khoản
					</span>
                    <div class="wrap-input100 validate-input" data-validate="Nhập tên người dùng">
                        <input class="input100" type="text" name="name" placeholder="Nhập tên">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Nhập email">
                        <input class="input100" type="text" name="email" placeholder="Nhập email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Nhập mật khẩu">
                        <input class="input100" type="password" name="password" placeholder="Nhập password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-25" data-validate="Nhập lại mật khẩu">
                        <input class="input100" type="password" name="confirmPassword" placeholder="Confirm password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Đăng Ký
                        </button>
                    </div>


                    <div class="text-center p-t-136">
                        {{--<a class="txt2" href="register">--}}
                            {{--Tạo tài khoản của bạn--}}
                            {{--<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>--}}
                        {{--</a>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>

        (function ($) {
            "use strict";


            /*==================================================================
            [ Validate ]*/
            var input = $('.validate-input .input100');

            $('.validate-form').on('submit', function () {
                var check = true;

                for (var i = 0; i < input.length; i++) {
                    if (validate(input[i]) == false) {
                        showValidate(input[i]);
                        check = false;
                    }
                }

                return check;
            });


            $('.validate-form .input100').each(function () {
                $(this).focus(function () {
                    hideValidate(this);
                });
            });

            function validate(input) {
                if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
                    if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                        return false;
                    }
                }
                else {
                    if ($(input).val().trim() == '') {
                        return false;
                    }
                }
            }

            function showValidate(input) {
                var thisAlert = $(input).parent();

                $(thisAlert).addClass('alert-validate');
            }

            function hideValidate(input) {
                var thisAlert = $(input).parent();

                $(thisAlert).removeClass('alert-validate');
            }


        })(jQuery);
    </script>
    <script>
        "use strict";
        var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
            return typeof t
        } : function (t) {
            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
        };
        !function (t) {
            "function" == typeof define && define.amd ? define(["jquery"], t) : "object" === ("undefined" == typeof module ? "undefined" : _typeof(module)) && module.exports ? module.exports = function (i, s) {
                return void 0 === s && (s = "undefined" != typeof window ? require("jquery") : require("jquery")(i)), t(s), s
            } : t(jQuery)
        }(function (t) {
            return t.fn.tilt = function (i) {
                var s = function () {
                    this.ticking || (requestAnimationFrame(g.bind(this)), this.ticking = !0)
                }, e = function () {
                    var i = this;
                    t(this).on("mousemove", o), t(this).on("mouseenter", a), this.settings.reset && t(this).on("mouseleave", l), this.settings.glare && t(window).on("resize", d.bind(i))
                }, n = function () {
                    var i = this;
                    void 0 !== this.timeout && clearTimeout(this.timeout), t(this).css({transition: this.settings.speed + "ms " + this.settings.easing}), this.settings.glare && this.glareElement.css({transition: "opacity " + this.settings.speed + "ms " + this.settings.easing}), this.timeout = setTimeout(function () {
                        t(i).css({transition: ""}), i.settings.glare && i.glareElement.css({transition: ""})
                    }, this.settings.speed)
                }, a = function (i) {
                    this.ticking = !1, t(this).css({"will-change": "transform"}), n.call(this), t(this).trigger("tilt.mouseEnter")
                }, r = function (i) {
                    return "undefined" == typeof i && (i = {
                        pageX: t(this).offset().left + t(this).outerWidth() / 2,
                        pageY: t(this).offset().top + t(this).outerHeight() / 2
                    }), {x: i.pageX, y: i.pageY}
                }, o = function (t) {
                    this.mousePositions = r(t), s.call(this)
                }, l = function () {
                    n.call(this), this.reset = !0, s.call(this), t(this).trigger("tilt.mouseLeave")
                }, h = function () {
                    var i = t(this).outerWidth(), s = t(this).outerHeight(), e = t(this).offset().left,
                        n = t(this).offset().top, a = (this.mousePositions.x - e) / i,
                        r = (this.mousePositions.y - n) / s,
                        o = (this.settings.maxTilt / 2 - a * this.settings.maxTilt).toFixed(2),
                        l = (r * this.settings.maxTilt - this.settings.maxTilt / 2).toFixed(2),
                        h = Math.atan2(this.mousePositions.x - (e + i / 2), -(this.mousePositions.y - (n + s / 2))) * (180 / Math.PI);
                    return {tiltX: o, tiltY: l, percentageX: 100 * a, percentageY: 100 * r, angle: h}
                }, g = function () {
                    return this.transforms = h.call(this), this.reset ? (this.reset = !1, t(this).css("transform", "perspective(" + this.settings.perspective + "px) rotateX(0deg) rotateY(0deg)"), void(this.settings.glare && (this.glareElement.css("transform", "rotate(180deg) translate(-50%, -50%)"), this.glareElement.css("opacity", "0")))) : (t(this).css("transform", "perspective(" + this.settings.perspective + "px) rotateX(" + ("x" === this.settings.disableAxis ? 0 : this.transforms.tiltY) + "deg) rotateY(" + ("y" === this.settings.disableAxis ? 0 : this.transforms.tiltX) + "deg) scale3d(" + this.settings.scale + "," + this.settings.scale + "," + this.settings.scale + ")"), this.settings.glare && (this.glareElement.css("transform", "rotate(" + this.transforms.angle + "deg) translate(-50%, -50%)"), this.glareElement.css("opacity", "" + this.transforms.percentageY * this.settings.maxGlare / 100)), t(this).trigger("change", [this.transforms]), void(this.ticking = !1))
                }, c = function () {
                    var i = this.settings.glarePrerender;
                    if (i || t(this).append('<div class="js-tilt-glare"><div class="js-tilt-glare-inner"></div></div>'), this.glareElementWrapper = t(this).find(".js-tilt-glare"), this.glareElement = t(this).find(".js-tilt-glare-inner"), !i) {
                        var s = {position: "absolute", top: "0", left: "0", width: "100%", height: "100%"};
                        this.glareElementWrapper.css(s).css({
                            overflow: "hidden",
                            "pointer-events": "none"
                        }), this.glareElement.css({
                            position: "absolute",
                            top: "50%",
                            left: "50%",
                            "background-image": "linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)",
                            width: "" + 2 * t(this).outerWidth(),
                            height: "" + 2 * t(this).outerWidth(),
                            transform: "rotate(180deg) translate(-50%, -50%)",
                            "transform-origin": "0% 0%",
                            opacity: "0"
                        })
                    }
                }, d = function () {
                    this.glareElement.css({width: "" + 2 * t(this).outerWidth(), height: "" + 2 * t(this).outerWidth()})
                };
                return t.fn.tilt.destroy = function () {
                    t(this).each(function () {
                        t(this).find(".js-tilt-glare").remove(), t(this).css({
                            "will-change": "",
                            transform: ""
                        }), t(this).off("mousemove mouseenter mouseleave")
                    })
                }, t.fn.tilt.getValues = function () {
                    var i = [];
                    return t(this).each(function () {
                        this.mousePositions = r.call(this), i.push(h.call(this))
                    }), i
                }, t.fn.tilt.reset = function () {
                    t(this).each(function () {
                        var i = this;
                        this.mousePositions = r.call(this), this.settings = t(this).data("settings"), l.call(this), setTimeout(function () {
                            i.reset = !1
                        }, this.settings.transition)
                    })
                }, this.each(function () {
                    var s = this;
                    this.settings = t.extend({
                        maxTilt: t(this).is("[data-tilt-max]") ? t(this).data("tilt-max") : 20,
                        perspective: t(this).is("[data-tilt-perspective]") ? t(this).data("tilt-perspective") : 300,
                        easing: t(this).is("[data-tilt-easing]") ? t(this).data("tilt-easing") : "cubic-bezier(.03,.98,.52,.99)",
                        scale: t(this).is("[data-tilt-scale]") ? t(this).data("tilt-scale") : "1",
                        speed: t(this).is("[data-tilt-speed]") ? t(this).data("tilt-speed") : "400",
                        transition: !t(this).is("[data-tilt-transition]") || t(this).data("tilt-transition"),
                        disableAxis: t(this).is("[data-tilt-disable-axis]") ? t(this).data("tilt-disable-axis") : null,
                        axis: t(this).is("[data-tilt-axis]") ? t(this).data("tilt-axis") : null,
                        reset: !t(this).is("[data-tilt-reset]") || t(this).data("tilt-reset"),
                        glare: !!t(this).is("[data-tilt-glare]") && t(this).data("tilt-glare"),
                        maxGlare: t(this).is("[data-tilt-maxglare]") ? t(this).data("tilt-maxglare") : 1
                    }, i), null !== this.settings.axis && (console.warn("Tilt.js: the axis setting has been renamed to disableAxis. See https://github.com/gijsroge/tilt.js/pull/26 for more information"), this.settings.disableAxis = this.settings.axis), this.init = function () {
                        t(s).data("settings", s.settings), s.settings.glare && c.call(s), e.call(s)
                    }, this.init()
                })
            }, t("[data-tilt]").tilt(), !0
        });
    </script>


@endsection
