
#### 注册小程序

#### 要做一个cms内容管理系统。有列表、详情、关于我们、反馈表单

1. 配置页面，lists、detail、about、form。
全局配置添加 tabBar。

1. 做lists页面。
主要用到了模板template，列表渲染。然后是页面布局。

1. 然后做详情页面。
用到了wx.navigateTo和wx.navigateBack。页面布局。

1. 然后是关于我们，图片、文字展示。
再然后是表单。主要用到的是表单组件，button、checkbox、form、input、picker、radio、slider、switch。

以上全部是静态数据，然后使用weiphp创建后台模块，添加数据。

1. 使用网络->发起请求的API，wx.request（），请求数据。使用wx.showLoading（）、wx.showToast（）、wx.showModal（）给予提示。

1. 列表页。每次请求两条数据，点击加载更多，就继续添加，使用wx.setStorage（）和wx.getStorage（），在客户端存储。
2. 判断设备网络，wx.getNetworkType，非WiFi情况下给予提示。请求数据失败，给予提示。
没有更多数据时，给予提示。

1. 通过列表中每一项的id获取详细信息，存储在客户端，无网络情况下取值。
表单提交。

在界面->导航栏API中，wx.setNavigationBarTitle（）、wx.showNavigationBarLoading（）。
导航栏文字设置和加载更多时的loading。

现在想想，还真是超级简单啊，多看看文档就会了。
