//about.js
//获取应用实例
const app = getApp()

Page({
  data: {
    img: '../../images/logo.png',
    title: '圆梦云科技有限公司2',
    intro: '圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,圆梦云科技有限公司1,',
    contab: '联系方式',
    address: '湖北武汉',
    mobile: '112222',
    email: '111@qq.com'
  },
  //事件处理函数
  bindViewTap: function () {
    wx.navigateTo({
      url: '../logs/logs'
    })
  },
  onLoad: function () {
    if (app.globalData.userInfo) {
      this.setData({
        userInfo: app.globalData.userInfo,
        hasUserInfo: true
      })
    } else if (this.data.canIUse) {
      // 由于 getUserInfo 是网络请求，可能会在 Page.onLoad 之后才返回
      // 所以此处加入 callback 以防止这种情况
      app.userInfoReadyCallback = res => {
        this.setData({
          userInfo: res.userInfo,
          hasUserInfo: true
        })
      }
    } else {
      // 在没有 open-type=getUserInfo 版本的兼容处理
      wx.getUserInfo({
        success: res => {
          app.globalData.userInfo = res.userInfo
          this.setData({
            userInfo: res.userInfo,
            hasUserInfo: true
          })
        }
      })
    }
  },
  getUserInfo: function (e) {
    let that = this
    wx.getSetting({
      success(res) {
        if (res.authSetting['scope.userInfo']) {
          console.log('已授权')
          wx.getUserInfo({
            success(res) {
              console.log('获取用户信息成功', res)
              that.setData({
                name: res.userInfo.nickName
              })
            },
            fail(res) {
              console.log('获取用户信息失败', res)
            }
          })
        } else {
          console.log('未授权')
          that.showSettingToast('请授权')
        }
      }
    })

    console.log(e)
    // app.globalData.userInfo = e.detail.userInfo
    // this.setData({
    //   userInfo: e.detail.userInfo,
    //   hasUserInfo: true
    // })

  },
  showSettingToast: function (e) {
    wx.showModal({
      title: '提示',
      confirmText: '去设置',
      showCancel: false,
      content: e,
      success: function (res) {
        if (res.confirm) {
          wx.navigateTo({
            url: '../setting/setting'
          })
        }
      }
    })
  }
})
