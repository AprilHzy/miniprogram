function loadInfo(id, obj) {
  var key = 'info_' + id;
  var info = {};
  wx.getStorage({
    key:key,
    success(res){
      info = res.data;
      if(info){
        obj.setData({
          info: info
        })
      }
    },
    fail:function(){
      wx.request({
        url: 'http://192.168.1.104/weiphp/public/index.php/cms/cms/getDetail',
        data: { id: id },
        header: {
          'Content-Type': 'application/json'
        },
        success: function (res) {
          obj.setData({
            info: res.data
          })
          wx.setStorage({
            key: key,
            data: res.data
          });
        },
        fail: function (err) {
          wx.showToast({
            title: '当前网络异常，请稍后重试！',
            icon: 'none',
            duration: 2000,
            success:function(){
              setTimeout(function(){
                wx.navigateBack();
              },3000)
            }
          })
        }
      })
    }
  })
}
module.exports = {
  loadInfo:loadInfo
}