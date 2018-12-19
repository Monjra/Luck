function validateUserName(e) {
    function i(e) {
        {
            var n = $("#getVerificationCode");
            $("#desc")
        }
        if (n.val("重新发送(" + e + ")"), n.css({
            background: "#D5CDDA"
        }), e >= 0) {
            if (10 == e && $(".voiceCheck").hasClass("none")) {
                var a = 0;
                $(".voiceCheck").removeClass("none"),
                $(".voiceCheckLink").click(function() {
                    var e = $("#J_phone");
                    e.find(".J_validate").html(""),
                    e.setRules(r),
                    e.validSubmit() && (0 == a || ((new Date).getTime() - a.getTime()) / 1e3 > 20 ? LT.confirmSamllSelf("语音验证码将以电话形式通知到您，请注意接听",
                    function(e) {
                        if (e) {
                            var i = {
                                mobile: $('[name="Mobile"]').val(),
                                remarkC: "register",
                                typeC: "voiceCode",
                                phoneExistC: "-1"
                            };
                            c && d && (i.s = c, i.imgvcode = d);
                            var n = function() {
                                $.ajax({
                                    type: "post",
                                    url: window.ControllerSite + "/account/GeneratorCodeRe",
                                    data: i
                                }).success(function(e) {
                                    var o = $("#getVerificationCode"),
                                    t = $('[name="Mobile"]').parent().next();
                                    1 == e.success ? (UserK = e.data.k, a = new Date, l && $(".pop_close").click(), $("#verificationCode").focus(), t.html('<i class="correct inline"></i>验证码已发出，请在10分钟内完成输入。')) : 0 == e.success && e.data && e.data.s ? (c = e.data.s, m = e.data.imgvcode, i.s = c, l ? ($(".imgCode-warn").show(), $("#imgCode img").attr("src", m + "&n=" + Math.random())) : (l = !0, $("body").dialogFn({
                                        type: "confirm",
                                        title: "请输入图片验证码",
                                        width: "420px",
                                        btnshow: !1,
                                        callback: function() {},
                                        close_callback: function() {
                                            l = !1,
                                            c = null,
                                            d = null
                                        },
                                        content: '<div id="imgCode"><input placeholder = "请填写右侧的验证码" name="imgCode" type="text"/><img src="' + m + '"/><span>看不清换一张</span></div><p class="imgCode-warn"></p><div class="imgCode-btn"><span class="contain">确定</span><span class="cancel">取消</span></div>'
                                    }), $(".imgCode-btn .contain").click(function() {
                                        d = $('[name="imgCode"]').val(),
                                        $.trim(d) ? (i.imgvcode = d, n()) : $(".imgCode-warn").show().html("请输入正确的图形验证码！")
                                    }), $(".imgCode-btn .cancel").click(function() {
                                        $(".pop_close").click()
                                    }), $("#imgCode span").click(function() {
                                        $("#imgCode img").attr("src", m + "&n=" + Math.random())
                                    }))) : (l ? ($(".imgCode-warn").show().html(e.error.message), $("#imgCode img").attr("src", m + "&n=" + Math.random())) : $("#verificationCode").parent().next().html('<i class="tip_erorr inline"></i>' + e.error.message), o.val("获取验证码").css({
                                        background: "#724A88"
                                    })),
                                    $("form tr:nth-child(2) > td.J_validate").css("background-image", "none")
                                }).complete(function() {
                                    $(".J_regist2").removeAttr("disabled")
                                })
                            };
                            n()
                        }
                        a = new Date,
                        $("#J_phone").setRules(registRules)
                    },
                    {
                        btnText: ["同意", "拒绝"],
                        title: "使用语音验证码"
                    }) : LT.alertSmall("正在努力获取语言验证码，请稍后"))
                })
            }
            s = setTimeout(function() {
                i(e)
            },
            1e3),
            u = !1,
            e--
        } else u = !0,
        n.val("获取验证码"),
        n.css({
            background: "#724A88"
        })
    }
    var n, a = e || window.ControllerSite + "/account/validatemobile",
    o = LT.Form.Config,
    t = ({
        rules: {
            Email: {
                required: !0,
                email: !0
            }
        },
        messages: {
            Email: {
                required: o.Required,
                email: o.Text("邮箱")
            }
        }
    },
    {
        rules: {
            Mobile: {
                required: !0,
                mobile: !0,
                remote: a
            },
            AuthCode: {
                required: !0
            }
        },
        messages: {
            Mobile: {
                required: "您还没有填写手机号哦",
                mobile: "手机号码格式错误，请重新输入",
                remote: o.Nonentity("手机号码")
            },
            AuthCode: {
                required: o.Required
            }
        }
    }),
    r = ({
        rules: {
            Mobile: {
                required: !0,
                mobile: !0,
                remote: a
            }
        },
        messages: {
            Mobile: {
                required: o.Required,
                mobile: o.Text("手机号码"),
                remote: o.Nonentity("手机号码")
            }
        }
    },
    {
        rules: {
            Mobile: {
                required: !0,
                mobile: !0,
                remote: window.ControllerSite + "/account/validatemobile"
            }
        },
        messages: {
            Mobile: {
                required: o.Required,
                mobile: o.Text("手机号码"),
                remote: o.Remote("手机号码")
            }
        }
    });
    LT.namespace("LT.findpassword"),
    LT.findpassword = function(e) {
        var i;
        n = {
            bindEvent: function() {
                $("#J_phone").length > 0 ? (n._validate($("#J_phone"), t, e), $(".J_release").on("click",
                function(e) {
                    n._tabForm(e)
                })) : ($(".J_resetPass").on("click",
                function() {
                    $(".J_resetPassForm").validSubmit() && $(".J_resetPassForm").submit()
                }), $(".J_resetPassForm").validateFn({
                    rules: {
                        NewPassword: {
                            required: !0,
                            rangelength: [6, 32],
                            passwordT: !0
                        },
                        ConfirmPassword: {
                            equalTo: $('input[name="NewPassword"]'),
                            required: !0
                        }
                    },
                    messages: {
                        NewPassword: {
                            required: o.Required,
                            rangelength: o.Rangelength(6, 32),
                            passwordT: o.PasswordT
                        },
                        ConfirmPassword: {
                            equalTo: o.Equalto("新密码"),
                            required: "两次密码不一样，重新来一次"
                        }
                    }
                }))
            },
            _validate: function(i, n) {
                i.validateFn(n, e)
            },
            _SubmittingForm: function() {
                var e = {
                    name: $('input[name="UserName"]').val(),
                    email: $('input[name="Email"]').val()
                };
                $.ajax({
                    url: $(".J_wrap form").attr("action"),
                    dataType: "jsonp",
                    type: "POST",
                    data: e,
                    success: function(e) {
                        1 == e.status ? location.reload() : $(".J_loginTips>span").html(e.msg)
                    },
                    error: function() {}
                })
            },
            _tabForm: function(e) {
                $("#J_phone").validSubmit() && $("#J_phone").submit(),
                e.preventDefault()
            }
        },
        i = function() {
            for (var e in n) - 1 == e.indexOf("_") && n[e]()
        } ()
    },
    LT.namespace("LT.temp.loginCallback"),
    LT.temp.loginCallback = function() {
        location.href = "/"
    };
    var s, c, l, d, m, u = !0;
    LT.namespace("LT.controller.findPassword"),
    LT.controller.findPassword = function(e) {
        if ("undefined" == typeof e) var e = {};
        $("input[name='gender']").bind("change",
        function() {
            0 == $("input[name='gender']:checked").val() ? ($("tr[name='mail']").show(), $("tr[name='phone']").hide()) : 1 == $("input[name='gender']:checked").val() && ($("tr[name='phone']").show(), $("tr[name='mail']").hide())
        });
        LT.Form.Config;
        $("#getVerificationCode").bind("click", {
            first: !0
        },
        function() {
            if (u) {
                var n = e.$form || $("#J_phone");
                if (n.find(".J_validate").html(""), n.setRules(r), n.validSubmit()) {
                    $("#desc").hide();
                    var a = e.interval || 6e4;
                    setTimeout(function() {
                        $("#desc").hide(),
                        $("#getVerificationCode").show()
                    },
                    a);
                    var o = {
                        mobile: $('[name="Mobile"]').val(),
                        remarkC: "register",
                        typeC: "verifyCode",
                        phoneExistC: "-1"
                    };
                    c && d && (o.s = c, o.imgvcode = d);
                    var t = function() {
                        $.ajax({
                            type: "post",
                            url: window.ControllerSite + "/account/GeneratorCodeRe",
                            data: o
                        }).success(function(e) {
                            var n = $("#getVerificationCode"),
                            a = $('[name="Mobile"]').parent().next();
                            1 == e.success ? (UserK = e.data.k, i(30), l && $(".pop_close").click(), $("#verificationCode").focus(), a.html('<i class="correct inline"></i>验证码已发出，请在10分钟内完成输入。')) : 0 == e.success && e.data && e.data.s ? (c = e.data.s, m = e.data.imgvcode, o.s = c, l ? ($(".imgCode-warn").show(), $("#imgCode img").attr("src", m + "&n=" + Math.random())) : (l = !0, $("body").dialogFn({
                                type: "confirm",
                                title: "请输入图片验证码",
                                width: "420px",
                                btnshow: !1,
                                callback: function() {},
                                close_callback: function() {
                                    l = !1,
                                    c = null,
                                    d = null
                                },
                                content: '<div id="imgCode"><input placeholder = "请填写右侧的验证码" name="imgCode" type="text"/><img src="' + m + '"/><span>看不清换一张</span></div><p class="imgCode-warn"></p><div class="imgCode-btn"><span class="contain">确定</span><span class="cancel">取消</span></div>'
                            }), $(".imgCode-btn .contain").click(function() {
                                d = $('[name="imgCode"]').val(),
                                $.trim(d) ? (o.imgvcode = d, t()) : $(".imgCode-warn").show().html("请输入正确的图形验证码！")
                            }), $(".imgCode-btn .cancel").click(function() {
                                $(".pop_close").click()
                            }), $("#imgCode span").click(function() {
                                $("#imgCode img").attr("src", m + "&n=" + Math.random())
                            }))) : (l ? ($(".imgCode-warn").show().html(e.error.message), $("#imgCode img").attr("src", m + "&n=" + Math.random())) : $("#verificationCode").parent().next().html('<i class="tip_erorr inline"></i>' + e.error.message), n.val("获取验证码").css({
                                background: "#724A88"
                            })),
                            $("form tr:nth-child(2) > td.J_validate").css("background-image", "none")
                        }).complete(function() {
                            $(".J_regist2").removeAttr("disabled")
                        })
                    };
                    t()
                }
                $("#J_phone").setRules(registRules)
            }
        })
    }
}