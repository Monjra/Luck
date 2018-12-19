function GetRequest() {
    var e = location.search,
    t = new Object;
    if ( - 1 != e.indexOf("?")) {
        var n = e.substr(1);
        strs = n.split("&");
        for (var a = 0; a < strs.length; a++) t[strs[a].split("=")[0]] = unescape(strs[a].split("=")[1])
    }
    return t
}
function Base64() {
    _keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
    this.encode = function(e) {
        var t, n, a, i, r, o, s, c = "",
        l = 0;
        for (e = _utf8_encode(e); l < e.length;) t = e.charCodeAt(l++),
        n = e.charCodeAt(l++),
        a = e.charCodeAt(l++),
        i = t >> 2,
        r = (3 & t) << 4 | n >> 4,
        o = (15 & n) << 2 | a >> 6,
        s = 63 & a,
        isNaN(n) ? o = s = 64 : isNaN(a) && (s = 64),
        c = c + _keyStr.charAt(i) + _keyStr.charAt(r) + _keyStr.charAt(o) + _keyStr.charAt(s);
        return c
    },
    this.decode = function(e) {
        var t, n, a, i, r, o, s, c = "",
        l = 0;
        for (e = e.replace(/[^A-Za-z0-9\+\/\=]/g, ""); l < e.length;) i = _keyStr.indexOf(e.charAt(l++)),
        r = _keyStr.indexOf(e.charAt(l++)),
        o = _keyStr.indexOf(e.charAt(l++)),
        s = _keyStr.indexOf(e.charAt(l++)),
        t = i << 2 | r >> 4,
        n = (15 & r) << 4 | o >> 2,
        a = (3 & o) << 6 | s,
        c += String.fromCharCode(t),
        64 != o && (c += String.fromCharCode(n)),
        64 != s && (c += String.fromCharCode(a));
        return c = _utf8_decode(c)
    },
    _utf8_encode = function(e) {
        e = e.replace(/\r\n/g, "\n");
        for (var t = "",
        n = 0; n < e.length; n++) {
            var a = e.charCodeAt(n);
            128 > a ? t += String.fromCharCode(a) : a > 127 && 2048 > a ? (t += String.fromCharCode(a >> 6 | 192), t += String.fromCharCode(63 & a | 128)) : (t += String.fromCharCode(a >> 12 | 224), t += String.fromCharCode(a >> 6 & 63 | 128), t += String.fromCharCode(63 & a | 128))
        }
        return t
    },
    _utf8_decode = function(e) {
        for (var t = "",
        n = 0,
        a = c1 = c2 = 0; n < e.length;) a = e.charCodeAt(n),
        128 > a ? (t += String.fromCharCode(a), n++) : a > 191 && 224 > a ? (c2 = e.charCodeAt(n + 1), t += String.fromCharCode((31 & a) << 6 | 63 & c2), n += 2) : (c2 = e.charCodeAt(n + 1), c3 = e.charCodeAt(n + 2), t += String.fromCharCode((15 & a) << 12 | (63 & c2) << 6 | 63 & c3), n += 3);
        return t
    }
}
function JSDateDiff(e, t) {
    var n = Date.parse(new Date(e.replace(/-/g, "/"))),
    a = Date.parse(new Date(t.replace(/-/g, "/"))),
    i = a - n,
    r = Math.floor(i / 864e5),
    o = i % 864e5,
    s = Math.floor(o / 36e5),
    c = o % 36e5,
    l = Math.floor(c / 6e4),
    d = c % 6e4,
    h = Math.round(d / 1e3);
    return {
        days: r,
        hours: s,
        minutes: l,
        seconds: h
    }
}
function JSDateDiffAfter(e, t) {
    var n = JSDateDiff(e, t);
    return n.days >= 1 ? n.days + "天": n.hours >= 1 ? n.hours + "小时": n.minutes >= 1 ? n.minutes + "分钟": n.seconds + "秒"
}
function toTxt(e) {
    e = e.replace(/(^\s*)|(\s*$)/g, "");
    var t = /\<|\>|\"|\'|\&/g;
    return e = e.replace(t,
    function(e) {
        switch (e) {
        case "<":
            return "&lt;";
        case ">":
            return "&gt;";
        case '"':
            return "&quot;";
        case "'":
            return "&#39;";
        case "&":
            return "&amp;"
        }
    }),
    e = encodeURIComponent(e)
}
function isIdCardNo(e) {
    if (e = e.toUpperCase(), !/(^\d{15}$)|(^\d{17}([0-9]|X)$)/.test(e)) return ! 1;
    var t, n;
    if (t = e.length, 15 == t) {
        n = new RegExp(/^(\d{6})(\d{2})(\d{2})(\d{2})(\d{3})$/);
        var a, i = e.match(n),
        r = new Date("19" + i[2] + "/" + i[3] + "/" + i[4]);
        if (a = r.getYear() == Number(i[2]) && r.getMonth() + 1 == Number(i[3]) && r.getDate() == Number(i[4])) {
            var o, s = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2),
            c = new Array("1", "0", "X", "9", "8", "7", "6", "5", "4", "3", "2"),
            l = 0;
            for (e = e.substr(0, 6) + "19" + e.substr(6, e.length - 6), o = 0; 17 > o; o++) l += e.substr(o, 1) * s[o];
            return e += c[l % 11]
        }
        return ! 1
    }
    if (18 == t) {
        n = new RegExp(/^(\d{6})(\d{4})(\d{2})(\d{2})(\d{3})([0-9]|X)$/);
        var a, i = e.match(n),
        r = new Date(i[2] + "/" + i[3] + "/" + i[4]);
        if (a = r.getFullYear() == Number(i[2]) && r.getMonth() + 1 == Number(i[3]) && r.getDate() == Number(i[4])) {
            var d, o, s = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2),
            c = new Array("1", "0", "X", "9", "8", "7", "6", "5", "4", "3", "2"),
            l = 0;
            for (o = 0; 17 > o; o++) l += e.substr(o, 1) * s[o];
            return d = c[l % 11],
            d != e.substr(17, 1) ? !1 : e
        }
        return ! 1
    }
    return ! 1
}
var sSelector = "data-selector",
accountUrls = {
    accountSite: "http://www.biyao.com",
    loginUrl: "/account/loginAjax?callback=?",
    regSameUrl: "/Account/ValidateSameEmail?callback=?",
    regUrl: "/Account/RegisterAjax?callback=?",
    getnikename: "/account/getnikename"
};
LT.namespace("LT.addFavorite"),
LT.addFavorite = function() {
    var e = ( - 1 != navigator.userAgent.toLowerCase().indexOf("mac") ? "Command/Cmd": "Ctrl", window.location.href),
    t = document.title;
    "" == t && (t = "必要定制平台");
    try {
        window.external.addFavorite(e, t)
    } catch(n) {
        try {
            window.sidebar.addPanel(t, e, "")
        } catch(n) {
            LT.alertSmall("对不起您的浏览器不支持此操作，请使用 ctrl+D进行添加，或手动在浏览器里进行设置。")
        }
    }
},
LT.namespace("LT.divide"),
LT.divide = function(e, t) {
    return Number(Number(e).divide(Number(t)))
},
Number.prototype.divide = function(arg2) {
    var r1, r2, arg1 = this,
    t1 = 0,
    t2 = 0;
    try {
        t1 = arg1.toString().split(".")[1].length
    } catch(e) {}
    try {
        t2 = arg2.toString().split(".")[1].length
    } catch(e) {}
    with(Math) return r1 = Number(arg1.toString().replace(".", "")),
    r2 = Number(arg2.toString().replace(".", "")),
    r1 / r2 * pow(10, t2 - t1)
},
LT.namespace("LT.multiply"),
LT.multiply = function(e, t) {
    return Number(Number(e).multiply(Number(t)))
},
Number.prototype.multiply = function(e) {
    var t = this,
    n = 0,
    a = t.toString(),
    i = e.toString();
    try {
        n += a.split(".")[1].length
    } catch(r) {}
    try {
        n += i.split(".")[1].length
    } catch(r) {}
    return Number(a.replace(".", "")) * Number(i.replace(".", "")) / Math.pow(10, n)
},
LT.namespace("LT.adding"),
LT.adding = function(e, t) {
    return Number(Number(e).adding(Number(t)))
},
Number.prototype.adding = function(e) {
    var t, n, a, i = this;
    try {
        t = i.toString().split(".")[1].length
    } catch(r) {
        t = 0
    }
    try {
        n = e.toString().split(".")[1].length
    } catch(r) {
        n = 0
    }
    return a = Math.pow(10, Math.max(t, n)),
    (i * a + e * a) / a
},
LT.namespace("LT.subtract"),
LT.subtract = function(e, t) {
    return Number(Number(e).subtract(Number(t)))
},
Number.prototype.subtract = function(e) {
    var t, n, a, i, r = this;
    try {
        t = r.toString().split(".")[1].length
    } catch(o) {
        t = 0
    }
    try {
        n = e.toString().split(".")[1].length
    } catch(o) {
        n = 0
    }
    return a = Math.pow(10, Math.max(t, n)),
    i = t >= n ? t: n,
    ((r * a - e * a) / a).toFixed(i)
},
LT.namespace("LT.getcookie"),
LT.getcookie = function(e) {
    for (var t = document.cookie,
    n = t.split(";"), a = "", i = 0; i < n.length; i++) {
        var r = n[i].split("=");
        $.trim(r[0]) == e && (a = r[1])
    }
    return a
},
LT.namespace("LT.temp"),
LT.temp = {
    falls: !0,
    loginFn: {
        loginTier: function(e, t) {
            if ("" != $.trim(LT.getcookie("DZLOGIN"))) return ! 0;
            var n = t ? "?IsIMStr=IM": "",
            a = accountUrls.accountSite;
            return a != window.ControllerSite && (a = accountUrls.accountSite),
            e.dialogFn({
                title: "登录",
                type: "confirm",
                height: "400px",
                width: "430px",
                content: '<script>document.domain="127.0.0.54"</script><iframe src="' + a + "/account/logintab.html" + n + '" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>',
                btnshow: !1
            }),
            !1
        },
        islogin_dialog: function(e) {
            if ("" != $.trim(LT.getcookie("DZLOGIN"))) return ! 0;
            var t = accountUrls.accountSite;
            return t != window.ControllerSite && (t = accountUrls.accountSite),
            e && $(document).dialogFn({
                title: "登录",
                type: "confirm",
                height: "400px",
                width: "430px",
                content: '<script>document.domain="127.0.0.54"</script><iframe src="' + t + '/account/logintab.html" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>',
                btnshow: !1
            }),
            !1
        },
        changeVcode: function() {
            var e = Math.random(),
            t = "http://www.biyao.com";
            $("#imgVCode").attr("src", t + "/RequestAPI/getYzmCode?id=" + e),
            $("#imgVCode").attr("sid", e)
        },
        login: function(e) {
            LT.temp.loginFn._loginValidate(e),
            e.find("input").keydown(function(t) {
                13 == t.keyCode && e.validSubmit() && LT.temp.loginFn._loginFn(e)
            }),
            e.find(".J_login_btn").click(function() {
                var t = $("#J_login").find("input[name='userName']"),
                n = t.val(),
                a = /^\d{0,11}$/;
                if (a.test(n)) {
                    if (t.parent().next().html(""), e.validSubmit()) if ($("#authCode").hasClass("none")) LT.temp.loginFn._loginFn(e);
                    else {
                        var i = {
                            code: $("#checkNum").val(),
                            sid: $("#imgVCode").attr("sid")
                        };
                        $.ajax({
                            type: "POST",
                            url: "/account/ckvcode",
                            data: i,
                            dataType: "json",
                            success: function(t) {
                                return t.success ? void LT.temp.loginFn._loginFn(e) : ($(".J_validate_code").html(t.error.message), !1)
                            },
                            error: function(e) {
                                alert(e.responseText)
                            }
                        })
                    }
                } else t.parent().next().html('<i class="tip_erorr inline"></i>请输入正确的用户名')
            })
        },
        _loginFn: function(e) {
            var t = !1;
            e.find('[name="checkRememberMe"]').parent().hasClass("checked") && (t = !0);
            var n = {
                email: $.trim(e.find('input[name="userName"]').val()),
                password: encodeURIComponent(e.find('input[name="password"]').val()),
                rememberMe: t
            };
            $.ajax({
                url: window.ControllerSite + accountUrls.loginUrl,
                dataType: "jsonp",
                type: "POST",
                data: n,
                success: function(t) {
                    if (1 == t.status) if ($.cookie("loginErrorTimes", "0"), 1 == t.enable) {
                        if (window.location.href.toLowerCase().indexOf("tab") > -1) return parent.location.href.toLowerCase().indexOf("buy.biyao.com") > -1 ? (parent.$(window.parent.document).find(".span_submit_calre").click(), !1) : ($.ajax({
                            url: window.ControllerSite + "/account/getnikename",
                            type: "post",
                            success: function(e) {
                                if (e.iserror) parent.location.reload();
                                else {
                                    $("#welcomID", parent.document).remove(),
                                    $("#messageID", parent.document).html('<a class="login"  href="MyOrder.html">Hi,' + e.data.nickName + '</a><a class="regist mg_l10" href="list.html#account/logout">[ 退出 ]</a>	'),
                                    parent.window.LT.temp.loginCallback && parent.window.LT.temp.loginCallback(e.data.userId, e.data.nickName);
                                    var t = parent.$(window.parent.document).find(".pop_close");
                                    t.click()
                                }
                            }
                        }), !1);
                        var n = location.search.match(new RegExp("[?&]returnUrl=([^&]+)", "i"));
                        null == n || n.length < 1 ? window.location = window.ControllerSite + "/home/index.html": (n = location.href.substring(location.href.indexOf("returnUrl") + 10), window.location = decodeURIComponent(n))
                    } else e.find(".J_loginTips>span").html("该账户被禁用，请联系管理员！");
                    else - 1 == t.status ? (LT.temp.loginFn.changeVcode(), e.find(".J_loginTips>span").html('该账户名不存在，您可以免费注册。<a class="col_link" onclick="register();">免费注册</a>'), $(".J_validate_code").html(""), $.cookie("loginErrorTimes") && null != $.cookie("loginErrorTimes") ? $.cookie("loginErrorTimes", parseInt($.cookie("loginErrorTimes")) + 1) : $.cookie("loginErrorTimes", "1")) : (LT.temp.loginFn.changeVcode(), e.find(".J_loginTips>span").html("您输入的密码和账户名不匹配，请重新输入。"), $(".J_validate_code").html(""), $.cookie("loginErrorTimes") && null != $.cookie("loginErrorTimes") ? $.cookie("loginErrorTimes", parseInt($.cookie("loginErrorTimes")) + 1) : $.cookie("loginErrorTimes", "1"))
                },
                error: function() {},
                complete: function() {}
            })
        },
        _loginValidate: function(e) {
            LT.Form.Config;
            e.validateFn({
                rules: {
                    userName: {
                        required: !0,
                        idcard: !0
                    },
                    password: {
                        required: !0,
                        rangelength: [6, 32]
                    }
                },
                messages: {
                    userName: {
                        required: "请输入用户名",
                        idcard: "请输入正确的用户名"
                    },
                    password: {
                        required: "请输入密码且不能包含空格",
                        rangelength: "请填写6-32个字符以内的文本"
                    }
                }
            })
        }
    }
},
LT.namespace("LT.Ajax"),
LT.Ajax = function(e) {
    void 0 == e.async && (e.async = !0),
    void 0 == e.cache && (e.cache = !0),
    $.ajax({
        returnUrl: e.returnUrl,
        url: e.url,
        dataType: e.dataType || "json",
        type: e.type || "GET",
        data: e.data || null,
        cache: e.cache,
        async: e.async,
        contentType: e.contentType || "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(t) {
            e.success && e.success(t)
        },
        error: function() {
            if (!e.error) throw window.location.href = e.returnUrl ? accountUrls.accountSite + "login.html" + returnUrl: accountUrls.accountSite + "login.html",
            new Error("未登录");
            e.error()
        }
    })
},
LT.namespace("LT.isLogin"),
LT.isLogin = function(e, t) {
    var n = !1;
    return document.cookie.indexOf("DZLOGIN") > -1 || (LT.temp.loginFn.loginTier($(document), t), LT.temp.loginCallback = e, n = !1),
    n
},
LT.namespace("LT.isLogino"),
LT.isLogino = function() {
    var e = !1;
    return document.cookie.indexOf("DZLOGIN") > -1 ? LT.Ajax({
        url: "/login/isLogined",
        dataType: "json",
        type: "POST",
        async: !1,
        success: function(t) {
            e = t ? t: t
        }
    }) : e = !1,
    e
},
LT.namespace("LT.AjaxIm"),
LT.AjaxIm = function(e) {
    LT.Ajax({
        url: e.url,
        dataType: e.dataType,
        data: e.data,
        type: e.type,
        async: e.async,
        success: e.success,
        error: e.error,
        cache: e.cache
    })
},
LT.namespace("LT.Tpl"),
LT.tpl = function(e, t, n) {
    return $.isPlainObject(t) ? e.replace(n || /\{([\w]+)\}/gi,
    function(e, n) {
        return void 0 === t[n] ? "": t[n]
    }) : e
},
LT.namespace("LT.getRandom"),
LT.getRandom = function() {
    return Math.round(1e4 * Math.random()) + (new Date).getTime() + Math.round(1e4 * Math.random())
},
LT.namespace("LT.fixed"),
LT.fixed = function(e, t) {
    var n = e.height(),
    a = e.width(),
    i = t.height(),
    r = t.width(),
    o = (r - a) / 2,
    s = window.navigator.userAgent.toLowerCase();
    return $.browser.msie6 = $.browser.msie && /msie 6\.0/i.test(s),
    n >= i ? (y = parseInt(e.css("top")), y || (y = t.scrollTop())) : y = (i - n) / 2,
    $.browser.msie6 && (y += t.scrollTop()),
    {
        x: o,
        y: y
    }
},
LT.namespace("LT.Tab"),
LT.tab = function(e, t, n, a) {
    var i = e.index();
    n && e.addClass(n).siblings().removeClass(n),
    a && t.eq(i).addClass(a).siblings().removeClass(a),
    t.eq(i).show().siblings().hide()
},
LT.namespace("LT.downBox"),
LT.downBox = function(e, t, n, a) {
    return n && (e.hasClass(n) ? e.removeClass(n) : e.addClass(n)),
    t.is(":visible") ? (t.hide(), !1) : (t.show(), !0)
},
LT.namespace("LT.direction"),
LT.direction = function(e) {
    if ("left" == e.direction) {
        e.number < 0 ? e.number = 0 : e.number > e.scrollWrapEle.width() - e.that.width() && (e.number = e.scrollWrapEle.width() - e.that.width()),
        e.that.css({
            left: e.number + "px"
        });
        var t = e.number / (e.scrollWrapEle.width() - e.that.width()),
        n = -(e.hideWrapEle.width() - e.viveWrapEle.width()) * t;
        e.hideWrapEle.css({
            left: Math.ceil(n) + "px"
        })
    } else {
        e.number < 0 ? e.number = 0 : e.number > e.scrollWrapEle.height() - e.that.height() && (e.number = e.scrollWrapEle.height() - e.that.height()),
        e.that.css({
            top: e.number + "px"
        });
        var t = e.number / (e.scrollWrapEle.height() - e.that.height()),
        a = -(e.hideWrapEle.height() - e.viveWrapEle.height()) * t;
        e.hideWrapEle.css({
            top: Math.ceil(a) + "px"
        })
    }
    "function" == typeof e.callback && e.callback(Math.ceil(n), Math.ceil(a))
},
LT.namespace("LT.drag"),
LT.drag = function(e, t) {
    var n, a, i, r = e.clientX - t.that.position().left,
    o = e.clientY - t.that.position().top;
    return t.changeEle && (n = t.changeEle.width(), a = t.changeEle.height()),
    t.scopeEle && (i = $.isWindow(t.scopeEle[0])),
    $(document).on("mousemove",
    function(e) {
        var s = 0,
        c = 0,
        l = 0;
        if (t.scopeEle && (i ? (s = 0, c = 0, l = t.scopeEle.scrollTop()) : (s = t.scopeEle.position().left, c = t.scopeEle.position().top)), t.changeEle) {
            var d = e.clientX - r + t.that.width(),
            h = e.clientY - o + t.that.height() - l;
            t.scopeEle && (d > t.scopeEle.width() - t.changeEle.position().left && (d = t.scopeEle.width() - t.changeEle.position().left + s), h > t.scopeEle.height() - t.changeEle.position().top && (h = t.scopeEle.height() - t.changeEle.position().top + c)),
            t.bRatio && (oSize = LT.scaleZoom({
                maxWidth: d,
                maxHeight: h,
                imgWdith: n,
                imgHeight: a,
                Boolean: !1
            }), d = oSize.w, h = oSize.h),
            t.changeEle.css({
                width: d + "px",
                height: h + "px"
            }),
            "function" == typeof t.callback && t.callback(d, h)
        } else if ("xy" == t.direction.toLowerCase()) {
            var u = e.clientX - r,
            p = e.clientY - o - l;
            t.scopeEle && (0 + s > u ? u = s: u > t.scopeEle.width() - t.that.width() + s && (u = t.scopeEle.width() - t.that.width() + s), 0 + c > p ? p = c: p > t.scopeEle.height() - t.that.height() + c && (p = t.scopeEle.height() - t.that.height() + c)),
            t.that.css({
                left: u + "px",
                top: p + "px"
            }),
            "function" == typeof t.callback && t.callback(u, p)
        } else if ("x" == t.direction.toLowerCase()) {
            var u = e.clientX - r;
            t.scopeEle && (0 + s > u ? u = s: u > t.scopeEle.width() - t.that.width() + s && (u = t.scopeEle.width() - t.that.width() + s)),
            t.that.css({
                left: u + "px"
            }),
            "function" == typeof t.callback && t.callback(u)
        } else if ("y" == t.direction.toLowerCase()) {
            var p = e.clientY - o - l;
            t.scopeEle && (0 + c > p ? p = c: p > t.scopeEle.height() - t.that.height() + c && (p = t.scopeEle.height() - t.that.height() + c)),
            t.that.css({
                top: p + "px"
            }),
            "function" == typeof t.callback && t.callback(p)
        }
    }),
    $(document).on("mouseup",
    function() {
        $(document).off("mousemove"),
        $(document).off("mouseup"),
        "function" == typeof t.callbackUp && t.callbackUp(),
        t.that[0].setCapture && t.that[0].releaseCapture()
    }),
    t.that[0].setCapture && t.that[0].setCapture(),
    !1
},
LT.namespace("LT.cdTest"),
LT.cdTest = function() {},
LT.namespace("LT.findNearest"),
LT.findNearest = function() {},
LT.namespace("LT.scaleZoom"),
LT.scaleZoom = function(e) {
    var t = e.maxHeight / e.maxWidth,
    n = e.imgHeight / e.imgWdith,
    a = function() {
        n >= t ? (e.imgHeight = e.maxHeight, e.imgWdith = e.imgHeight / n) : (e.imgWdith = e.maxWidth, e.imgHeight = e.imgWdith * n)
    };
    return e.Boolean ? Math.max(e.imgWdith, e.imgHeight) > Math.min(e.maxWidth, e.maxHeight) && a() : a(),
    {
        w: e.imgWdith,
        h: e.imgHeight
    }
},
LT.namespace("LT.highlight"),
LT.highlight = function() {
    $(document).delegate('input[data-highlight="highlight"],textarea[data-highlight="highlight"]', "focus",
    function() {
        $(this).addClass("onfocustext")
    }),
    $(document).delegate('input[data-highlight="highlight"],textarea[data-highlight="highlight"]', "blur",
    function() {
        $(this).has("onfocustext") && $(this).removeClass("onfocustext")
    }),
    $(document).delegate('input[data-highlight="highlight"],textarea[data-highlight="highlight"]', "keyup",
    function() {
        var e = $.trim($(this).val()).length;
        0 == e ? $(this).removeClass("onshowtext") : $(this).addClass("onshowtext")
    })
},
LT.namespace("LT.placeholder"),
LT.placeholder = function() {
    var e = $(".J_placeholder"),
    t = window.navigator.userAgent.toLowerCase();
    if (e.length > 0) {
        $.browser.msie10 = $.browser.msie && /msie 10\.0/i.test(t);
        var n = function(e, t) {
            var n;
            n = this,
            n = t ? t: this;
            var a = $.trim($(n).val()).length;
            $.browser.msie && !$.browser.msie10 && (a > 0 ? $(n).prev().hide() : $(n).prev().show()),
            $(n).addClass("onshowtext"),
            0 == a && $(n).removeClass("onshowtext")
        };
        $.support.leadingWhitespace && $.browser.msie && !$.browser.msie10 && $.getScript("pc/common/js/placeholder-fallback.js"),
        e.unbind("keyup", n).bind("keyup", n)
    }
},
LT.namespace("LT.Form"),
LT.Form.Config = {
    Required: "不能为空",
    Text: function(e) {
        return "请输入正确的" + e + "格式"
    },
    Minlength: function(e) {
        return "请填写不少于" + e + "个字符的文本"
    },
    Maxlength: function(e) {
        return "请填写少于" + e + "个字符的文本"
    },
    Remote: function(e) {
        return "您输入的" + e + "已被注册"
    },
    NewRemote: function() {
        var e = new Object;
        return e = GetRequest(),
        '该号码已注册，您可以直接<a class="col_link" href="login.html?returnUrl=' + e.returnUrl + '">&nbsp;登录&nbsp;</a>或者<a class="col_link" href="list.html#findpwd/index?returnUrl=' + e.returnUrl + '">&nbsp;点此找回密码</a>'
    },
    Nonentity: function(e) {
        return "输入的" + e + "不存在"
    },
    Repeat: function(e) {
        return "输入的" + e + "原始" + e + "不一样，请重新输入"
    },
    Equalto: function(e) {
        return "此栏与" + e + "不一致"
    },
    Rangelength: function(e, t) {
        return "请填写" + e + "-" + t + "个字符以内的文本"
    },
    PasswordT: "请输入6-32位密码，数字、字母、符号两种以上组合",
    AuthCode: "请输入6位，数字、字母组合",
    Meg: function(e) {
        return e
    }
},
LT.namespace("LT.copy"),
LT.copy = function(e) {
    e[0].select(),
    $.browser.msie && document.execCommand("Copy")
},
LT.namespace("LT.zoomImg"),
LT.zoomImg = function(e) {
    e.oSmallWrap.delegate("img", "click",
    function() {
        var t = $(this).attr("src");
        t = t.replace(e.sSmallSrc, e.sBigSrc),
        e.oSmallWrap.find("img").hide(),
        e.oBigWrap.find("img").attr("src", t).show()
    }),
    e.oBigWrap.delegate("img", "click",
    function() {
        $(this).hide(),
        e.oSmallWrap.find("img").show()
    })
},
LT.namespace("LT.edit"),
LT.edit = function(e) {
    var t = 140;
    if (e.textareaId.on("keydown keyup",
    function() {
        var n = $(this).val();
        LT.getWordNumber(e.tipsId, n, t, e.btnReleaseId)
    }), e.btnBoldId && e.btnBoldId.length > 0 && (e.btnBoldId.attr("title", "点击后所选文字加粗"), e.btnBoldId.on("click",
    function() {
        LT.insertAtTag(e.textareaId, "[b]", "[/b]");
        var n = e.textareaId.val();
        LT.getWordNumber(e.tipsId, n, t, e.btnReleaseId)
    })), e.btnFaceId && e.btnFaceId.length > 0) {
        e.btnFaceId.attr("title", "在当前位置插入表情");
        var n = function() {
            e.FaceId.hide(),
            $(document).off("click", n)
        };
        e.btnFaceId.on("click",
        function(t) {
            e.FaceId.show(),
            $(document).on("click", n),
            t.stopPropagation()
        }),
        e.FaceId.delegate("li", "click",
        function(a) {
            var i = $(this).attr("data-id");
            LT.insertAtCursor(e.textareaId, i);
            var r = e.textareaId.val();
            LT.getWordNumber(e.tipsId, r, t, e.btnReleaseId),
            e.textareaId.trigger("keyup"),
            e.FaceId.hide(),
            $(document).off("click", n),
            a.stopPropagation()
        })
    }
    if (e.btnImgId && e.btnImgId.length > 0) {
        e.btnImgId.on("change",
        function() {
            $(this).parents("form").trigger("submit")
        }); {
            new AjaxUpload(e.btnImgId, {
                action: "/Files/UpLoadTempImg",
                responseType: "json",
                onSubmit: function(e, t) {
                    if (!t || !/^(jepg|jpg|png)$/.test(t)) return LT.alertSmall("您上传的图片格式不正确！"),
                    !1;
                    var n = $(".J_NewThread_UpImg img").length;
                    return n > 4 ? (LT.alertSmall("您不能再上传更多的图片！"), !1) : !0
                },
                onComplete: function(n, a) {
                    if (1 == a.WS_RET_CODE) {
                        var i = a.WS_RET_DATA,
                        r = $(".J_NewThread_UpImg").width(),
                        o = $(".J_NewThread_UpImg img").length,
                        s = $('<img src="' + i + '" />'),
                        c = $('<input type="hidden" name="imageUploaded[' + o + ']" value="' + i + '" />');
                        s.load(function() {
                            $(".J_NewThread_UpImg").append(s).append(c),
                            s.width() > r && s.width(r),
                            LT.insertAtCursor(e.textareaId, "[img" + (o + 1) + "]");
                            var n = e.textareaId.val();
                            LT.getWordNumber(e.tipsId, n, t, e.btnReleaseId)
                        })
                    } else LT.alertSmall(a.WS_RET_MSG)
                }
            })
        }
    }
},
LT.edit.show = function(e) {
    var t = e.ImgId.children("img").length();
    5 == t && e.btnImgId.hide(),
    e.ImgId.show(),
    e.ImgId.append(e.img)
},
LT.namespace("LT.CustomerReport"),
LT.CustomerReport = function() {
    $(document).delegate(".J_report,.un999", "click",
    function() {
        var customerid = $(this).data("customerid"),
        customertype = $(this).data("customertype"),
        afterreport = $(this).data("afterreport");
        void 0 == afterreport && (afterreport = 0),
        $(this).dialogFn({
            type: "alert",
            title: "举报",
            width: "500px",
            btnshow: !1,
            content: $("#popOfReport").html(),
            showAfter: function() {
                var e = this;
                e.id.find(".yn").hide(),
                $("label").click(function() {
                    $(this).siblings().removeClass("checked"),
                    $(this).addClass("checked"),
                    $("label:last").hasClass("checked") ? (e.id.find(".textareaCom").val(""), e.id.find("#word").text("30"), e.id.find(".yn").show()) : (e.id.find(".textareaCom").val(""), e.id.find("#word").text("30"), e.id.find(".yn").hide())
                }),
                e.id.find("#SubmitThis").click(function() {
                    var t = e.id.find(".textareaCom").val();
                    return $("label:last").hasClass("checked") && "" == t ? void LT.alertSmall("请填写其他原因内容") : (postobj.Category = e.id.find("label.checked").text(), postobj.OtherText = t, postobj.ReportUserID = customerid, postobj.ReportUserType = customertype, $.ajax({
                        type: "POST",
                        url: window.ControllerSite + "/Report/Post",
                        data: postobj,
                        complete: function() {
                            LT.alertSmall("举报成功，感谢您的配合！"),
                            0 == afterreport ? (that.after("<a><span class='J_report f_r'>已举报</span></a>"), that.hide()) : 1 == afterreport && that.text("已举报")
                        }
                    }), void e.hide())
                }),
                e.id.find("#ReturnHide").click(function() {
                    e.id.find(".textareaCom").val(""),
                    e.id.find("#word").text("30"),
                    e.hide()
                }),
                $("#textarea").keyup(function() {
                    var e = $(this).val().length;
                    e > 30 && $(this).val($(this).val().substring(0, 30));
                    var t = 30 - e;
                    0 > t && (t = 0),
                    $("#word").text(t)
                })
            }
        });
        var that = $(this),
        site = $(this).data("site"),
        siteid = $(this).data("siteid"),
        textpanel = $(this).data("textpanel"),
        parent = $(this).data("parentpanel"),
        username = $(this).data("username"),
        text = $(this).closest(parent).find(textpanel).text();
        text && "" != text || (text = $(this).closest(parent).find(textpanel).val(), "undefined" == text && (text = ""));
        var imgpanelClass = $(this).data("imgpanel"),
        imgs = $(imgpanelClass).find("img.J_reportimg"),
        imgarr = [];
        imgs.each(function() {
            imgarr.push($(this).attr("src"))
        });
        for (var postobj = "{",
        i = 0; i < imgarr.length; i++) postobj += '"Images[' + i + ']":"' + imgarr[i] + '"',
        i < imgarr.length - 1 && (postobj += ",");
        postobj += "}",
        postobj = eval("(" + postobj + ")"),
        postobj.ReportSite = site,
        postobj.SiteID = siteid,
        postobj.Text = text,
        postobj.UserName = username
    })
},
LT.namespace("LT.scroll"),
LT.scroll = function(e) {
    var t, n, a, i = 0,
    i = e.height;
    if (nHeight2 = i - 2 * parseInt(e.oScrollContainer.css("top")), i < e.oPanelContainer.height()) {
        e.oViweContainer.css({
            height: i + "px"
        }),
        "y" == e.direction.toLowerCase() ? (n = "y", a = "top") : (n = "x", a = "left"),
        e.oScrollContainer.show().css({
            height: nHeight2 + "px"
        }).addClass("off"),
        t = Math.floor(i / e.oPanelContainer.height() * nHeight2),
        30 > t && (t = 30),
        e.oScrollBtn.css({
            height: t + "px"
        }),
        e.oScrollBtn.unbind("mousedown").on("mousedown",
        function(t) {
            var i = $(this);
            LT.drag(t, {
                that: $(this),
                direction: n,
                callback: function(t) {
                    LT.direction({
                        number: t,
                        direction: a,
                        that: i,
                        scrollWrapEle: e.oScrollContainer,
                        viveWrapEle: e.oViweContainer,
                        hideWrapEle: e.oPanelContainer
                    })
                }
            }),
            t.stopPropagation(),
            t.preventDefault()
        }),
        e.oPanelContainer.unbind("mousewheel").on("mousewheel",
        function(e, t) {
            r($(this), t),
            e.stopPropagation(),
            e.preventDefault()
        }),
        e.oScrollContainer.unbind("mousewheel").on("mousewheel",
        function(e, t) {
            r($(this), t),
            e.stopPropagation(),
            e.preventDefault()
        }),
        e.oScrollContainer.unbind("mouseenter").bind("mouseenter",
        function() {
            $(this).addClass("on")
        }).unbind("mouseleave").bind("mouseleave",
        function() {
            $(this).removeClass("on")
        }).unbind("mousedown").on("mousedown",
        function(t) {
            var n = $(this);
            LT.direction({
                number: t.clientY + $(window).scrollTop() - n.offset().top,
                direction: a,
                that: e.oScrollBtn,
                scrollWrapEle: n,
                viveWrapEle: e.oViweContainer,
                hideWrapEle: e.oPanelContainer
            }),
            t.stopPropagation(),
            t.preventDefault()
        }),
        e.posi && (e.oPanelContainer.css({
            top: -(e.oPanelContainer.height() - i)
        }), e.oScrollBtn.css({
            top: e.oScrollContainer.height() - e.oScrollBtn.height()
        }));
        var r = function(t, n) {
            if (n > 0) var i = e.oScrollBtn.position().top - 10;
            else var i = e.oScrollBtn.position().top + 10;
            LT.direction({
                number: i,
                direction: a,
                that: e.oScrollBtn,
                scrollWrapEle: e.oScrollContainer,
                viveWrapEle: e.oViweContainer,
                hideWrapEle: e.oPanelContainer
            })
        }
    } else e.oViweContainer.css(e.defaultHeight ? {
        height: e.height + "px"
    }: {
        height: e.oPanelContainer.height() + "px"
    }),
    e.resetTop && (e.oPanelContainer.css({
        top: 20
    }), e.oScrollBtn.css({
        top: 0
    })),
    e.oScrollContainer.hide().unbind(),
    e.oScrollBtn.unbind(),
    e.oPanelContainer.unbind()
},
LT.namespace("LT.hover"),
LT.hover = function() {
    $(document).delegate('[data-hover="hover"]', "mouseenter",
    function() {
        $(this).addClass("hovername").siblings().removeClass("hovername")
    }),
    $(document).delegate('[data-hover="hover"]', "mouseleave",
    function() {
        $(this).removeClass("hovername")
    })
},
LT.namespace("LT.goTop"),
LT.goTop = function() {
    $("html, body").animate({
        scrollTop: 0
    },
    300)
},
LT.namespace("LT.getWordNumber"),
LT.getWordNumber = function(e, t, n, a) {
    var t = t.replace(/[^\x00-\xff]/g, "**"),
    i = n - Math.ceil(t.length / 2);
    return i >= 0 ? (a.addClass("btn_bg1").removeClass("btn_bg4"), e.html("还可以输入" + i + "字").removeClass("col_ee5b47"), !0) : (a.addClass("btn_bg4").removeClass("btn_bg1"), e.html("你超出" + Math.abs(i) + "字").addClass("col_ee5b47"), !1)
},
LT.namespace("LT.insertAtTag"),
LT.insertAtTag = function(e, t, n) {
    var a = e.get(0);
    if (window.getSelection) {
        var i = a.selectionStart,
        r = a.selectionEnd,
        o = a.scrollTop,
        s = void 0 != i && void 0 != r ? a.value.substring(i, r) : "";
        0 < s.length && (s = t + s + n),
        a.value = a.value.substring(0, i) + s + a.value.substring(r, a.value.length),
        o > 0 && (a.scrollTop = o),
        a.selectionStart = i + s.length,
        a.selectionEnd = i + s.length,
        a.focus()
    } else a.focus(),
    sel = document.selection.createRange(),
    0 < sel.text.length && (sel.text = t + sel.text + n),
    sel.select()
},
LT.namespace("LT.insertAtCursor"),
LT.insertAtCursor = function(e, t) {
    var n = e.get(0);
    if (document.selection) n.focus(),
    sel = document.selection.createRange(),
    sel.text = t,
    sel.select();
    else {
        var a = n.selectionStart,
        i = n.selectionEnd,
        r = n.scrollTop;
        n.value = n.value.substring(0, a) + t + n.value.substring(i, n.value.length),
        r > 0 && (n.scrollTop = r),
        n.focus(),
        n.selectionStart = a + t.length,
        n.selectionEnd = a + t.length
    }
},
LT.namespace("LT.generateShareLayer"),
LT.generateShareLayer = function() {
    var e, t, n, a, i, r, o = $(this).data("url") ? $(this).data("url") : location.href.replace("#editor", ""),
    s = $(this).attr("data-uid") ? $(this).attr("data-uid") : 0,
    c = ($(this).attr("data-designName") ? $(this).attr("data-designName") : "你的最爱", (new Date).format("yyyy-MM-dd hh:mm:ss")),
    l = new Base64;
    s > 0 ? (e = l.encode("uid=" + s + "&shareWay=weixin&shareTime=" + c).replace("=", "%3D"), t = l.encode("uid=" + s + "&shareWay=qzone&shareTime=" + c).replace("=", "%3D"), n = l.encode("uid=" + s + "&shareWay=qqweibo&shareTime=" + c).replace("=", "%3D"), a = l.encode("uid=" + s + "&shareWay=douban&shareTime=" + c).replace("=", "%3D"), i = l.encode("uid=" + s + "&shareWay=sina&shareTime=" + c).replace("=", "%3D"), r = l.encode("uid=" + s + "&shareWay=renren&shareTime=" + c).replace("=", "%3D")) : (e = l.encode("uid=&shareWay=weixin&shareTime=" + c).replace("=", "%3D"), t = l.encode("uid=&shareWay=qzone&shareTime=" + c).replace("=", "%3D"), n = l.encode("uid=&shareWay=qqweibo&shareTime=" + c).replace("=", "%3D"), a = l.encode("uid=&shareWay=douban&shareTime=" + c).replace("=", "%3D"), i = l.encode("uid=&shareWay=sina&shareTime=" + c).replace("=", "%3D"), r = l.encode("uid=&shareWay=renren&shareTime=" + c).replace("=", "%3D"));
    var d = $(this).data("designid") ? $(this).data("designid") : 0,
    h = ($(this).data("categoryid") ? $(this).data("categoryid") : 0, $(this).data("src") ? $(this).data("src") : $(".renderImage").attr("src"), $(this).data("sharecontent") ? $(this).data("sharecontent") : "", $(this).data("sharetitle") ? $(this).data("sharetitle") : "", o + "?sharetoken=");
    h += e;
    var u = 0,
    p = window.location.href;
    u = p.indexOf("product") > 0 ? designData.DesignId: $(this).attr("data-designid");
    var p = window.location.href,
    m = "";
    m = p.indexOf("product") > 0 ? '						<li class="inline ImgCheck">                                                                           							<img src=' + designData.DesignData.perspectives[0].ImageUrl + ' alt="">                                                                    							<i class="inline spIcon"></i>                                                                       						</li>                                                                                                 						<li class="inline ImgCheck" >                                                                           							<img src=' + designData.DesignData.perspectives[1].ImageUrl + ' alt="">                                                                    							<i class="inline spIcon"></i>                                                                       						</li>                                                                                                 						<li class="inline ImgCheck">                                                                                   							<img src=' + designData.DesignData.perspectives[2].ImageUrl + ' alt="">                                                                    							<i class="inline spIcon"></i>                                                                       						</li>                                                                                                 						<li class="inline ImgCheck last">                                                                              							<img src=' + designData.DesignData.perspectives[3].ImageUrl + ' alt="">                                                                    							<i class="inline spIcon"></i>                                                                       						</li>                                                                                                 ': p.indexOf("MyWorksList") > 0 ? '				    <li class="inline ImgCheck">                                                                           							<img src=' + $(this).parent().parent().parent().siblings().find("img").attr("src") + ' alt="">                                            							<i class="inline spIcon"></i>                                                                       						</li>                                                                                                 ': '				    <li class="inline ImgCheck">                                                                           							<img src=' + $(this).parent().prev().find("img").attr("src") + ' alt="">                                                                    							<i class="inline spIcon"></i>                                                                       						</li>                                                                                                 ';
    var g, f = {
        design_id: u,
        share_platform: "notweixin"
    };
    $.ajax({
        url: window.ControllerSite + "/product/shareinfo",
        type: "post",
        contentType: "application/text; charset=utf-8",
        data: JSON.stringify({
            param: f
        }),
        async: !1,
        dataType: "json",
        success: function(e) {
            return e.iserror ? void LT.alertSmall("分享数据获取失败！") : void(g = e.data)
        },
        error: function() {
            LT.alertSmall("分享数据获取失败！")
        }
    });
    var w = g.title,
    o = g.url,
    T = g.img,
    b = "http://v.t.sina.com.cn/share/share.php?title=" + encodeURIComponent(w) + "&url=" + encodeURIComponent(o) + "&source=bookmark&searchPic=false&pic=" + T,
    v = "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=" + encodeURIComponent(o) + "&desc=" + encodeURIComponent(w) + "&site=&pics=" + T,
    L = "http://www.facebook.com/sharer.php?u=" + encodeURIComponent(o) + "&amp;t=" + encodeURIComponent(w),
    C = "http://twitter.com/intent/tweet?url=" + encodeURIComponent(o) + "&amp;text=" + encodeURIComponent(w);
    
    o = o.substring("0", "27"),
    o = o + "show?designid=" + d;
    var x = '<div class="pop_bd  pd_t20 t_c sizeZero"><div class="img_wrapper inline">	<img id="shareRQ_Img" height="120" width="120" src="list.html#RequestAPI/getQRCode?url=http://m.biyao.com/product/show?designid=' + d + '" alt="" />	<p class="col_666 f12 lineH24">扫一扫，分享给好友！</p>	</div>	<div class="inline"> 		 <ul class="pd_t10 sizeZero">			<li class="inline mg_l15">			<a id="tecent_Share" class="inline share_new sn_4" href="' + v + '" target="_blank"></a>			<p class="col_666 f14 mg_t15">QQ空间</p>		</li>		<li class="inline mg_l15">			<a id="sina_Share" class="inline share_new sn_3" href="' + b + '" target="_blank"></a>			<p class="col_666 f14 mg_t15">新浪微博</p>		</li>		<li class="inline mg_l15">			<a id="facebook_Share" class="inline share_new sn_2" href="' + L + '"  target="_blank"></a>			<p class="col_666 f14 mg_t15">Facebook</p>		</li>		<li class="inline mg_l15">			<a id="twitter_Share" class="inline share_new sn_1" href="' + C + '" target="_blank"></a>			<p class="col_666 f14 mg_t15">Twitter</p>		</li>	 </ul>	</div>	<div id="logindiv"> </div> </div>';
    $(this).dialogFn({
        title: "分享",
        type: "confirm",
        width: "450px",
        content: x,
        btnshow: !1,
        showAfter: function() {
            var e = this;
            $(".weixin35").on("click",
            function() {
                $("#qr").html("").fadeIn("slow").qrcode({
                    render: "canvas",
                    text: h
                }).append('<span class="wxclose wxclose-pos" onclick="$(this).parent().fadeOut()">X</span>')
            });
            var t = "";
            $(".ImgCheck").on("click",
            function() {
                $(this).parent(".shareImgList").find("li").removeClass("checked"),
                $(this).addClass("checked"),
                t = $(this).find("img").attr("src")
            }),
            e.id.find(".textareaCom").live("keyup",
            function() {
                e.id.find(".leavecha").text($(this).attr("maxlength") - this.value.length)
            }),
            $(".shareBtn").on("click",
            function() {
                if ("" == t) return void LT.alertSmall("请选择要分享的图片。");
                var n = $(this).parent().prev().find(".shareWayList").find("li.checked");
                if (n.length <= 0) return void LT.alertSmall("请选择要分享的平台。");
                var a = "";
                $.each(n,
                function() {
                    a = a + "|" + $(this).attr("data")
                });
                var i = $(".textareaCom").val();
                "" == $.trim(i) && (i = $(".textareaCom").attr("placeholder"));
                var r = {
                    text: i,
                    designId: u,
                    imgurl: t,
                    source: a,
                    url: window.ControllerSite + "/product/" + u + "-0.html"
                },
                o = "";
                o = p.indexOf("product") > 0 ? window.ControllerSite: window.MainSite,
                $.ajax({
                    url: o + "/home/SetShare",
                    dataType: "json",
                    type: "POST",
                    data: r,
                    success: function(t) {
                        1 == t.status ? (LT.alertSmall(t.successMeg + "<br>" + t.failMeg), e.hide()) : -1 == t.status || (LT.alertSmall(t.successMeg + "<br>" + t.failMeg), e.hide())
                    },
                    error: function() {},
                    complete: function() {}
                })
            }),
            $("#tecent_Share").bind("click",
            function() {
                addShare(u, 1)
            }),
            $("#sina_Share").bind("click",
            function() {
                addShare(u, 2)
            }),
            $("#facebook_Share").bind("click",
            function() {
                addShare(u, 3)
            }),
            $("#twitter_Share").bind("click",
            function() {
                addShare(u, 4)
            })
        }
    })
},
LT.setRadioEffect = function(e, t, n) {
    $("body").on("click", e,
    function() {
        return 0 == $(this).siblings("label").length || n ? ($(this).toggleClass("checked"), t instanceof Function && t(this), !1) : ($(this).siblings().removeClass("checked"), $(this).addClass("checked"), void(t instanceof Function && t(this)))
    })
};
var urls = {
    mainSite: ""
};
$(function() {
    var e, t;
    t = {
        handler: function() {
            LT.highlight(),
            LT.placeholder(),
            LT.hover()
        }
    },
    e = function() {
        for (var e in t) - 1 == e.indexOf("_") && t[e]()
    } ()
});