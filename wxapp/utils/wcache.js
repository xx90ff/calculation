var dtime = "_deadtime";

function put(e, t, r) {
    wx.setStorageSync(e, t);
    var a = parseInt(r);
    if (0 < a) {
        var n = Date.parse(new Date());
        n = n / 1e3 + a, wx.setStorageSync(e + dtime, n + "");
    } else wx.removeStorageSync(e + dtime);
}

function get(e, t) {
    var r = parseInt(wx.getStorageSync(e + dtime));
    return r && parseInt(r) < Date.parse(new Date()) / 1e3 ? t || void 0 : wx.getStorageSync(e) || t;
}

function remove(e) {
    wx.removeStorageSync(e), wx.removeStorageSync(e + dtime);
}

function clear() {
    wx.clearStorageSync();
}

module.exports = {
    put: put,
    get: get,
    remove: remove,
    clear: clear
};