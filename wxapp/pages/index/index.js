// index.js
// 获取应用实例
const app = getApp()

Page({
  data: { 
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
})
