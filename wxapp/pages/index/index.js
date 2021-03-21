var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(a) {
  return typeof a;
} : function(a) {
  return a && "function" == typeof Symbol && a.constructor === Symbol && a !== Symbol.prototype ? "symbol" : typeof a;
}, a = "function" == typeof Symbol && "symbol" == _typeof(Symbol.iterator) ? function(a) {
  return void 0 === a ? "undefined" : _typeof(a);
} : function(a) {
  return a && "function" == typeof Symbol && a.constructor === Symbol && a !== Symbol.prototype ? "symbol" : void 0 === a ? "undefined" : _typeof(a);
}, e = (getApp(), require("../../utils/jixiang").default), t = require("../../utils/comnovo").default, l = require("../../utils/legalVacationData").default, r = require("../../utils/yiJiData").default, n = require("../../utils/jiXiongShenData").default, i = require("../../utils/taiShenData").default, s = require("../../utils/festivalData").default, D = require("../../utils/jiShenDirection").default;

Page({
  data: {
    cnWeekNameSimple: [ "日", "一", "二", "三", "四", "五", "六" ],
    cnWeekNameFull: [ "星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六" ],
    hasShortcutInstalled: !1,
    show: 2,
    initialDay: {
      realYear: 2e3,
      realMonth: 1,
      fullMonthString: "01",
      realDay: 1,
      fullDayString: "01",
      realWeek: 0,
      timeStamp: 0
    },
    selectedDay: {
      realYear: 2e3,
      realMonth: 1,
      fullMonthString: "01",
      realDay: 1,
      fullDayString: "01",
      realWeek: 0,
      weekOfYear: 1,
      fullWeekOfYearString: "01",
      isToday: !1,
      lunarInfo: {},
      chineseCalendarInfo: {},
      beSuitToDo: "",
      beAvoidToDo: "",
      hasFestival: !1,
      festivalList: [],
      hoursJixiong: [],
      prevDayInfo: {
        realYear: 1989,
        realMonth: 6,
        realDay: 20
      },
      nextDayInfo: {
        realYear: 1989,
        realMonth: 6,
        realDay: 20
      },
      todaysIntvalNumber: 0,
      todaysIntvalString: ""
    },
    commonData: {
      legalVacationList: {}
    }
  },
  onLoad: function(a) {
    var n = this;
    setTimeout(function() {
      n.setData({
        show: 1
      });
    }, 3e3);
    var e = getApp().globalData.y, r = getApp().globalData.m, i = getApp().globalData.d, o = new Date();
    null != e && null != r && null != i && (o = new Date(e, parseInt(r) - 1, i));
    var s = o.getFullYear(), D = o.getMonth() + 1, y = o.getDate(), d = o.getDay(), h = t.util.createTimeStamp();
    n.setData({
      "initialDay.realYear": s,
      "selectedDay.realYear": s,
      "initialDay.realMonth": D,
      "selectedDay.realMonth": D,
      "initialDay.realDay": y,
      "selectedDay.realDay": y,
      "initialDay.realWeek": d,
      "selectedDay.realWeek": d,
      "initialDay.fullMonthString": D < 10 ? "0" + D : "" + D,
      "initialDay.fullDayString": y < 10 ? "0" + y : "" + y,
      "initialDay.timeStamp": h,
      "commonData.legalVacationList": l.LegalVacatioList
    }), n.updateSelectedDayInfo(), wx.showShareMenu({
      withShareTicket: !1,
      menus: [ "shareAppMessage", "shareTimeline" ]
    });
  },
  parseFestivalDay: function(e, t) {
    if ("object" != (void 0 === e ? "undefined" : a(e)) || "object" != (void 0 === t ? "undefined" : a(t))) return [];
    var l = {};
    for (var n in t) {
      var r = {};
      for (var i in t[n]) {
        for (var o = [], s = 0; s < t[n][i].length; s++) 6 < parseInt(t[n][i][s].P) && o.push(t[n][i][s]);
        0 < o.length && (r[i] = o);
      }
      l[n] = r;
    }
    var D = l.S, y = l.L, d = l.W, h = [], c = e.realMonth < 10 ? "0" + e.realMonth : "" + e.realMonth, u = c + "" + (e.realDay < 10 ? "0" + e.realDay : "" + e.realDay);
    D.hasOwnProperty(u) && (h = h.concat(D[u]));
    var f = (e.lunarInfo.lMonth < 10 ? "0" + e.lunarInfo.lMonth : "" + e.lunarInfo.lMonth) + (e.lunarInfo.lDay < 10 ? "0" + e.lunarInfo.lDay : "" + e.lunarInfo.lDay);
    y.hasOwnProperty(f) && (h = h.concat(y[f]));
    var g = c + "" + function(a, e, t) {
      for (var l = e - 1, n = new Date(a, l, t).getDay(), r = 0, i = 1; i <= t; i++) new Date(a, l, i).getDay() === n && ++r;
      return r + "" + n;
    }(e.realYear, e.realMonth, e.realDay), p = {};
    return e.lunarInfo.isTerm && (p.P = 17, p.V = "清明" == e.lunarInfo.Term ? "清明节" : e.lunarInfo.Term,
        p.Y = 1900, p.L = e.lunarInfo.Term, p.K = e.lunarInfo.Term, h.push(p)), d.hasOwnProperty(g) && (h = h.concat(d[g])),
        h.sort(function(a, e) {
          var t = a.P;
          return e.P - t;
        }), h;
  },
  doGoBackToday: function() {
    this.setData({
      "selectedDay.realYear": this.data.initialDay.realYear,
      "selectedDay.realMonth": this.data.initialDay.realMonth,
      "selectedDay.realDay": this.data.initialDay.realDay
    }), this.updateSelectedDayInfo();
  },
  updateSelectedDayInfo: function() {
    var a = new Date(this.data.selectedDay.realYear, this.data.selectedDay.realMonth - 1, this.data.selectedDay.realDay), t = e.lunarCalendar.getChineseCalendarInfo(a, r.YiJi, n.JiXiongShen, i.TaiShenWei, D.JiShenDirection);
    this.setData({
      "selectedDay.chineseCalendarInfo": t
    });
    var l = a.getDay();
    this.setData({
      "selectedDay.realWeek": l
    });
    var o = !1;
    this.data.selectedDay.realYear == this.data.initialDay.realYear && this.data.selectedDay.realMonth == this.data.initialDay.realMonth && this.data.selectedDay.realDay == this.data.initialDay.realDay && (o = !0),
        this.setData({
          "selectedDay.isToday": o
        });
    var y = this.data.selectedDay.realMonth < 10 ? "0" + this.data.selectedDay.realMonth : "" + this.data.selectedDay.realMonth;
    this.setData({
      "selectedDay.fullMonthString": y
    });
    var d = this.data.selectedDay.realDay < 10 ? "0" + this.data.selectedDay.realDay : "" + this.data.selectedDay.realDay;
    this.setData({
      "selectedDay.fullDayString": d
    });
    var h = e.lunarCalendar.solar2lunar(this.data.selectedDay.realYear, this.data.selectedDay.realMonth, this.data.selectedDay.realDay);
    this.setData({
      "selectedDay.lunarInfo": h
    });
    var c = e.calendarUtil.getWeekNumberOfYear(this.data.selectedDay.realYear, this.data.selectedDay.realMonth, this.data.selectedDay.realDay);
    this.setData({
      "selectedDay.weekOfYear": c
    });
    var u = c < 10 ? "0" + c : "" + c;
    this.setData({
      "selectedDay.fullWeekOfYearString": u
    });
    var f, g = this.parseFestivalDay(this.data.selectedDay, s.FestivalList);
    f = 0 < g.length, this.setData({
      "selectedDay.hasFestival": f,
      "selectedDay.festivalList": g
    }), this.getHoursJixiongList(), this.getDayInterval();
    var p = a.getTime(), m = (p - p % 1e3) / 1e3, S = new Date(1e3 * (m - 86400)), v = new Date(1e3 * (m + 86400));
    this.setData({
      "selectedDay.prevDayInfo.realYear": S.getFullYear(),
      "selectedDay.prevDayInfo.realMonth": S.getMonth() + 1,
      "selectedDay.prevDayInfo.realDay": S.getDate(),
      "selectedDay.nextDayInfo.realYear": v.getFullYear(),
      "selectedDay.nextDayInfo.realMonth": v.getMonth() + 1,
      "selectedDay.nextDayInfo.realDay": v.getDate()
    });
  },
  doShowPrevOrNextDayCalendar: function(a) {
    var e = a.currentTarget.dataset, t = e.year, l = e.month, n = e.day;
    this.setData({
      "selectedDay.realYear": t,
      "selectedDay.realMonth": l,
      "selectedDay.realDay": n
    }), this.updateSelectedDayInfo();
  },
  getDayInterval: function() {
    var a = new Date(this.data.initialDay.realYear, this.data.initialDay.realMonth - 1, this.data.initialDay.realDay).getTime(), e = (a - a % 1e3) / 1e3, t = new Date(this.data.selectedDay.realYear, this.data.selectedDay.realMonth - 1, this.data.selectedDay.realDay).getTime(), l = ((t - t % 1e3) / 1e3 - e) / 86400, n = "";
    if (l < 0) switch (l) {
      case -1:
        n = "昨天";
        break;

      case -2:
        n = "前天";
        break;

      default:
        n = Math.abs(l) + "天前";
    }
    if (0 < l) switch (l) {
      case 1:
        n = "明天";
        break;

      case 2:
        n = "后天";
        break;

      default:
        n = Math.abs(l) + "天后";
    }
    this.setData({
      "selectedDay.todaysIntvalNumber": l,
      "selectedDay.todaysIntvalString": n
    });
  },
  onHide: function() {
    this.setData({
      tabbarRefresh: !1
    });
  },
  onShow: function() {
    this.setData({
      tabbarRefresh: !0
    });
    var a = getApp().globalData.y, e = getApp().globalData.m, n = getApp().globalData.d, r = new Date();
    null != a && null != e && null != n && (r = new Date(a, parseInt(e) - 1, n));
    var i = r.getFullYear(), o = r.getMonth() + 1, s = r.getDate(), D = r.getDay(), y = t.util.createTimeStamp();
    this.setData({
      "initialDay.realYear": i,
      "selectedDay.realYear": i,
      "initialDay.realMonth": o,
      "selectedDay.realMonth": o,
      "initialDay.realDay": s,
      "selectedDay.realDay": s,
      "initialDay.realWeek": D,
      "selectedDay.realWeek": D,
      "initialDay.fullMonthString": o < 10 ? "0" + o : "" + o,
      "initialDay.fullDayString": s < 10 ? "0" + s : "" + s,
      "initialDay.timeStamp": y,
      "commonData.legalVacationList": l.LegalVacatioList
    }), this.updateSelectedDayInfo();
  },
  getHoursJixiongList: function() {
    for (var a = new Date(this.data.selectedDay.realYear, this.data.selectedDay.realMonth - 1, this.data.selectedDay.realDay), t = new Date(), l = t.getHours(), n = e.lunarCalendar.getLunarHourIndex(l), r = [], i = 0; i < 12; i++) {
      var o = {
        indexNum: i + 1,
        jixiongString: "",
        isNow: !1
      }, s = e.lunarCalendar.getStemsBranchHourAsString(a, i), D = e.lunarCalendar.jixiongStatusOfDateTime(a, 2 * i);
      o.jixiongString = s + "" + D, n === i && a.getFullYear() === t.getFullYear() && a.getMonth() === t.getMonth() && a.getDate() === t.getDate() && (o.isNow = !0),
          r.push(o);
    }
    this.setData({
      "selectedDay.hoursJixiong": r
    });
  },
  onShareAppMessage: function() {
    return {
      title: this.data.selectedDay.realYear + "." + this.data.selectedDay.fullMonthString + "." + this.data.selectedDay.fullDayString + " 农历" + this.data.selectedDay.lunarInfo.IMonthCn + this.data.selectedDay.lunarInfo.IDayCn + " " + this.data.selectedDay.lunarInfo.ncWeek,
      path: "pages/index/index",
      success: function(a) {
        wx.showToast({
          title: "转发成功",
          icon: "none",
          duration: 2e3
        });
      },
      fail: function(a) {
        wx.showToast({
          title: "转发失败",
          icon: "none",
          duration: 2e3
        });
      }
    };
  },
  onShareTimeline: function(a) {
    return {};
  },
  toShou(){
    wx.navigateTo({
      url: '../shou/index',
    })
  },
  toSuan(){
    wx.navigateTo({
      url: '../suan/index',
    })
  },
  toQi(){
    wx.navigateTo({
      url: '../qi/index',
    })
  },
  toContact(){
    wx.navigateTo({
      url: '../contact/index',
    })
  }
});