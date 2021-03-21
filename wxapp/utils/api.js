function t(t, e) {
    var n = {};
    for (var r in t) 0 <= e.indexOf(r) || Object.prototype.hasOwnProperty.call(t, r) && (n[r] = t[r]);
    return n;
}

var r = Object.assign || function(t) {
    for (var e = 1; e < arguments.length; e++) {
        var n = arguments[e];
        for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (t[r] = n[r]);
    }
    return t;
}, n = "https://api.jixiangjili.com", e = function() {
    var e = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {}, n = e.url, a = void 0 === n ? "" : n, i = e.param, u = void 0 === i ? {} : i, l = t(e, [ "url", "param" ]);
    wx.showLoading({
        title: "请求中，请耐心等待.."
    });
    var p = Date.now();
    return new Promise(function(e, n) {
        wx.request(r({
            url: o(a),
            data: u,
            header: {
                "content-type": "application/json",
                Accept: "application/vnd.jx.v1+json"
            }
        }, l, {
            complete: function(t) {
                wx.hideLoading(), console.log("TimeUsed: " + (Date.now() - p)), 200 <= t.statusCode && t.statusCode < 300 ? e(t.data) : n(t);
            }
        }));
    });
}, o = function(t) {
    return -1 == t.indexOf("://") && (t = n + t), t;
};

module.exports = {
    baseUrl: n,
    _get: function(t) {
        var n = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {};
        return e({
            url: t,
            param: n
        });
    },
    _post: function(t) {
        var n = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {};
        return e({
            url: t,
            param: n,
            method: "post"
        });
    },
    _put: function(t) {
        var n = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {};
        return e({
            url: t,
            param: n,
            method: "put"
        });
    },
    _delete: function(t) {
        var n = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {};
        return e({
            url: t,
            param: n,
            method: "put"
        });
    }
};