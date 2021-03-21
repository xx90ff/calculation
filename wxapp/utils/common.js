Object.defineProperty(exports, "__esModule", {
    value: !0
});

var e = wx.getSystemInfoSync(), t = e.windowWidth, s = e.windowHeight, o = e.pixelRatio, n = e.model;

exports.default = {
    covertPxToRpx: function() {
        var e = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : 0, s = e;
        switch (n) {
          case "iPhone 6 Plus":
            s = 1.81 * e;
            break;

          case "iPhone 6":
            s = 2 * e;
            break;

          case "iPhone 5":
            s = 2.34 * e;
            break;

          default:
            s = 750 * e / t;
        }
        return s;
    },
    formatDate: function() {
        var e = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : new Date(), t = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : "yyyy-MM-dd", s = 2 < arguments.length && void 0 !== arguments[2] && arguments[2], o = {
            "M+": e.getMonth() + 1,
            "d+": e.getDate(),
            "h+": s && 12 < e.getHours() ? e.getHours() - 12 : e.getHours(),
            "m+": e.getMinutes(),
            "s+": e.getSeconds(),
            "q+": Math.floor((e.getMonth() + 3) / 3),
            S: e.getMilliseconds()
        };
        for (var n in /(y+)/.test(t) && (t = t.replace(RegExp.$1, (e.getFullYear() + "").substr(4 - RegExp.$1.length))), 
        o) new RegExp("(" + n + ")").test(t) && (t = t.replace(RegExp.$1, 1 == RegExp.$1.length ? o[n] : ("00" + o[n]).substr(("" + o[n]).length)));
        return s && (t += 12 < e.getHours() ? " PM" : " AM"), t;
    },
    systemInfo: e,
    systemWidth: t,
    systemHeight: s,
    systemPixelRatio: o,
    systemModel: n
};