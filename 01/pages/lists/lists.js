// lists.js
var app = getApp()

Page({

  /**
   * 页面的初始数据
   */
  data: {
    newsList: [],
    lastid:1
  },
  loadData:function(lastid){
    var limit = 2;
    var that = this;

    wx.showLoading({
      title: '加载中'
    })

    wx.showNavigationBarLoading();

    wx.request({
      url:'http://192.168.1.104/weiphp/public/index.php/cms/cms/getList',
      data:{
        lastid:lastid,
        limit: limit
      },
      header:{
        'content-type':'application/json'
      },
      success(res){
        console.log(res);
        wx.getNetworkType({
          success(res) {
            const networkType = res.networkType;
            if (networkType != 'wifi' && lastid == 1) {
              wx.showModal({
                title: '温馨提示',
                content: '当前不在wifi网络下，会产生流量',
                showCancel: false,
                success(res) {
                  if (res.confirm) {
                    console.log('ok')
                  }
                }
              })
            }
          }
        })

        var len = res.data.length;

        if (!len){
          wx.showToast({
            title: '没有更多文章了',
            icon: 'none',
            duration: 5000
          })
        }else{
          that.setData({
            lastid: res.data[len - 1].id+1
          });

          var dataArr = that.data.newsList;
          var newData = dataArr.concat(res.data);
          that.setData({
            newsList: newData
          })
          wx.setStorage({
            key:'cmsList',
            data:that.data.newsList
          })
        }
      },
      fail:function(err){
        wx.getStorage({
          key:'cmsList',
          success(res){
            console.log(res);
            that.setData({
              newsList:res.data
            })
            var len = that.data.newsList.length;
            that.setData({
              lastid:that.data.newsList[len-1].id+1
            })
          }
        })
        wx.showToast({
          title:'当前网络异常，请稍后重试！',
          icon:'none',
          duration:2000
        })
      },
      complete:function(){
        wx.hideLoading();
        wx.hideNavigationBarLoading();
      }
    })
  },
  loadMore:function(event){
    
    var id = event.currentTarget.dataset.lastid;
    this.loadData(id);
    
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    wx.setNavigationBarTitle({
      title:'文章列表'
    })
    this.loadData(1);
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  }
})