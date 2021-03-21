Object.defineProperty(exports, "__esModule", {
    value: !0
});

var util = {
    base64EncodeChars: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",
    base64DecodeChars: new Array(-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1, -1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1),
    base64encode: function(r) {
        var e, t, a, n, o, i;
        for (a = r.length, t = 0, e = ""; t < a; ) {
            if (n = 255 & r.charCodeAt(t++), t == a) {
                e += this.base64EncodeChars.charAt(n >> 2), e += this.base64EncodeChars.charAt((3 & n) << 4), 
                e += "==";
                break;
            }
            if (o = r.charCodeAt(t++), t == a) {
                e += this.base64EncodeChars.charAt(n >> 2), e += this.base64EncodeChars.charAt((3 & n) << 4 | (240 & o) >> 4), 
                e += this.base64EncodeChars.charAt((15 & o) << 2), e += "=";
                break;
            }
            i = r.charCodeAt(t++), e += this.base64EncodeChars.charAt(n >> 2), e += this.base64EncodeChars.charAt((3 & n) << 4 | (240 & o) >> 4), 
            e += this.base64EncodeChars.charAt((15 & o) << 2 | (192 & i) >> 6), e += this.base64EncodeChars.charAt(63 & i);
        }
        return e;
    },
    base64decode: function(r) {
        var e, t, a, n, o, i, c;
        for (i = r.length, o = 0, c = ""; o < i; ) {
            for (;e = this.base64DecodeChars[255 & r.charCodeAt(o++)], o < i && -1 == e; ) ;
            if (-1 == e) break;
            for (;t = this.base64DecodeChars[255 & r.charCodeAt(o++)], o < i && -1 == t; ) ;
            if (-1 == t) break;
            c += String.fromCharCode(e << 2 | (48 & t) >> 4);
            do {
                if (61 == (a = 255 & r.charCodeAt(o++))) return c;
                a = this.base64DecodeChars[a];
            } while (o < i && -1 == a);
            if (-1 == a) break;
            c += String.fromCharCode((15 & t) << 4 | (60 & a) >> 2);
            do {
                if (61 == (n = 255 & r.charCodeAt(o++))) return c;
                n = this.base64DecodeChars[n];
            } while (o < i && -1 == n);
            if (-1 == n) break;
            c += String.fromCharCode((3 & a) << 6 | n);
        }
        return c;
    },
    utf16to8: function(r) {
        var e, t, a, n;
        for (e = "", a = r.length, t = 0; t < a; t++) 1 <= (n = r.charCodeAt(t)) && n <= 127 ? e += r.charAt(t) : (2047 < n ? (e += String.fromCharCode(224 | n >> 12 & 15), 
        e += String.fromCharCode(128 | n >> 6 & 63)) : e += String.fromCharCode(192 | n >> 6 & 31), 
        e += String.fromCharCode(128 | n >> 0 & 63));
        return e;
    },
    utf8to16: function(r) {
        var e, t, a, n, o, i;
        for (e = "", a = r.length, t = 0; t < a; ) switch ((n = r.charCodeAt(t++)) >> 4) {
          case 0:
          case 1:
          case 2:
          case 3:
          case 4:
          case 5:
          case 6:
          case 7:
            e += r.charAt(t - 1);
            break;

          case 12:
          case 13:
            o = r.charCodeAt(t++), e += String.fromCharCode((31 & n) << 6 | 63 & o);
            break;

          case 14:
            o = r.charCodeAt(t++), i = r.charCodeAt(t++), e += String.fromCharCode((15 & n) << 12 | (63 & o) << 6 | (63 & i) << 0);
        }
        return e;
    },
    typeOf: function(r) {
        return null === r ? r + "" : Object.prototype.toString.call(r).slice(8, -1).toLowerCase();
    },
    createRandID: function(r) {
        var e = new Date().getTime(), t = Math.floor(1e8 * Math.random());
        return void 0 !== r ? (e + "" + t).substr(0, r) : e + ":" + t;
    },
    createTimeStamp: function() {
        var r = new Date().getTime();
        return (r - r % 1e3) / 1e3;
    },
    string10to62: function(r) {
        for (var e = "0123456789abcdefghigklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ".split(""), t = e.length, a = +r, n = []; mod = a % t, 
        a = (a - mod) / t, n.unshift(e[mod]), a; ) ;
        return n.join("");
    },
    string62to10: function(r) {
        for (var e = "0123456789abcdefghigklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ", t = e.length, a = (r = String(r)).length, n = 0, o = 0; n < a; ) o += Math.pow(t, n++) * e.indexOf(r.charAt(a - n) || 0);
        return o;
    },
    parseJSON: function parseJSON(JSONData) {
        var returnJSON = !1;
        if (String.prototype.parseJSON) {
            var s = String("(" + JSONData.responseText + ")");
            returnJSON = s.parseJSON(function(r, e) {
                return e;
            });
        } else returnJSON = eval("(" + JSONData.responseText.unfilterJSON() + ")");
        return returnJSON.timestamp || (returnJSON.timestamp = this.createTimeStamp()), 
        returnJSON;
    },
    isArray: function(r) {
        return -1 != r.constructor.toString().indexOf("Array");
    },
    inArray: function(r, e) {
        var t;
        for (t = 0; t < r.length; t++) if (r[t] === e) return !0;
        return !1;
    },
    removeArrayItemByVal: function(r, e) {
        for (var t = 0; t < r.length; ) r[t] == e && r.splice(t, 1), t++;
        return r;
    },
    removeArrayItemById: function(r, e) {
        return !(!util.isArray(r) || isNaN(e)) && (r.splice(e, 1), r);
    },
    checkSpecialString: function(r) {
        return RegExp(/[(\ )(\~)(\!)(\@)(\#)(\$)(\%)(\^)(\&)(\*)(\()(\))(\-)(\_)(\+)(\=)(\[)(\])(\{)(\})(\|)(\\)(\;)(\:)(\')(\")(\,)(\.)(\/)(\<)(\>)(\?)(\)]+/).test(r);
    },
    trim: function(r) {
        return r.replace(/(^[\s　]*)|([\s　]*$)/g, "");
    },
    isCN: function(r) {
        return !!new RegExp(/^[u4E00-u9FA5]+$/).test(r);
    },
    toDBC: function(r) {
        for (var e = "", t = 0; t < r.length; t++) {
            var a = r.charCodeAt(t);
            e += 12288 != a ? 65280 < a && a < 65375 ? String.fromCharCode(a - 65248) : String.fromCharCode(a) : String.fromCharCode(32);
        }
        return e;
    },
    decode: function decode(json) {
        return eval("(" + json + ")");
    },
    analyzeURI: function(r) {
        var e = r.match(/^(([^:\/?#]+):)?(\/\/([^/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/i), t = {}, a = e[4].split(":");
        return 2 == a.length ? (t.domain = a[0], t.port = a[1]) : 1 == a.length && (t.domain = a[0], 
        t.port = "80"), t.http = e[2], t.param = e[7], t.command = e[9], t;
    },
    getUrlParam: function(r, e) {
        var t = r, a = new RegExp("[\\?&]" + e + "=([^&#]*)").exec(t);
        return a ? a[1] : null;
    },
    getValueFromObj: function(r, e) {
        var t = r;
        if (!t) return null;
        for (var a = 0; a < e.length; ++a) {
            if (!t[e[a]]) return null;
            t = t[e[a]];
        }
        return t;
    },
    isEmptyObj: function(r) {
        for (var e in r) if (r.hasOwnProperty(e)) return !1;
        return !0;
    },
    escapeXml: function(r) {
        return r ? r.replace(/&/gm, "&amp;").replace(/</gm, "&lt;").replace(/>/gm, "&gt;").replace(/"/gm, "&quot;") : "";
    },
    unescapeXml: function(r) {
        return r ? r.replace(/&quot;/gm, '"').replace(/&gt;/gm, ">").replace(/&lt;/gm, "<").replace(/&amp;/gm, "&") : "";
    },
    stripTags: function(r, t) {
        t = (((t || "") + "").toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join("");
        return r.replace(/<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi, "").replace(/<\/?([a-z][a-z0-9]*)\b[^>]*>/gi, function(r, e) {
            return -1 < t.indexOf("<" + e.toLowerCase() + ">") ? r : "";
        });
    },
    count: function(r) {
        var e = 0;
        for (var t in r) e++;
        return e;
    },
    getUTF8StringLength: function(r) {
        if (void 0 === r || "" == r) return 0;
        for (var e = 0, t = 0; t < r.length; t++) {
            var a = r.charCodeAt(t);
            a < 127 ? e += 1 : 128 <= a && a <= 2047 ? e += 2 : 2048 <= a && a <= 65535 && (e += 3);
        }
        return e;
    }
};

exports.default = {
    util: util
};