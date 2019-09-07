Page({

  /**
   * 页面的初始数据
   */
  data: {
    items: [
      { name: '微商城', value: '0' },
      { name: '微社区', value: '1' },
      { name: '小程序', value: '2', checked: 'true' },
      {name:'公众号',value:'3'},
    ],
    area:['湖北省','武汉市','洪山区']
  },
  switchChange(e){
    console.log('值为：' + e.detail.value);
  },
  sliderchange:function(e){
    console.log('值为：' + e.detail.value);
  },
  bindRegionChange:function(e){
    console.log('值为：'+e.detail.value);
    this.setData({
      region:e.detail.value
    })
  },
  checkboxChange:function(e){
    console.log(e.detail.value);
  },
  radioChange:function(e){
    console.log(e.detail.value);
  },
  formSubmit:function(e){
    var that = this;
    wx.request({
      url: 'http://192.168.1.104/weiphp/public/index.php/feedback/feedback/addFeedback',
      data:e.detail.value,
      method:'GET',
      header:{
        'Content-Type':'application/json'
      },
      success:function(res){
        console.log(res);
      }
    })
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    
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