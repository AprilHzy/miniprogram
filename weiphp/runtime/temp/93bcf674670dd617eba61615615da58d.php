<?php /*a:6:{s:84:"D:\program\xampp\htdocs\weiphp5.0-master\application\weixin\view\publics\step_0.html";i:1564394434;s:81:"D:\program\xampp\htdocs\weiphp5.0-master\application\common\view\base\common.html";i:1564394434;s:79:"D:\program\xampp\htdocs\weiphp5.0-master\application\common\view\base\head.html";i:1564394434;s:81:"D:\program\xampp\htdocs\weiphp5.0-master\application\common\view\base\header.html";i:1564394434;s:81:"D:\program\xampp\htdocs\weiphp5.0-master\application\common\view\base\footer.html";i:1564394434;s:78:"D:\program\xampp\htdocs\weiphp5.0-master\application\common\view\base\var.html";i:1564394434;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
<meta content="<?php echo config('WEB_SITE_KEYWORD'); ?>" name="keywords"/>
<meta content="<?php echo config('WEB_SITE_DESCRIPTION'); ?>" name="description"/>
<link rel="shortcut icon" href="/weiphp5.0-master/public/favicon.ico">
<title><?php echo htmlentities((isset($page_title) && ($page_title !== '')?$page_title:'weiphp')); ?></title>
<link href="/weiphp5.0-master/public/static/font-awesome/css/font-awesome.min.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet">
<link rel="stylesheet" href="/weiphp5.0-master/public/static/ymyui/css/ymyui.css">
<!-- <link rel="stylesheet" href="/weiphp5.0-master/public/static/bootstrap/css/bootstrap.css"> -->
<link href="/weiphp5.0-master/public/static/base/css/base.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet">
<link href="/weiphp5.0-master/public/static/base/css/module.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet">
<link href="/weiphp5.0-master/public/static/base/css/weiphp.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet">
<link rel="stylesheet" href="//at.alicdn.com/t/font_727459_zyp88ew3c6.css"></link>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/weiphp5.0-master/public/static/bootstrap/js/html5shiv.js?v=<?php echo SITE_VERSION; ?>"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="/weiphp5.0-master/public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/weiphp5.0-master/public/static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->
<!-- <script type="text/javascript" src="/weiphp5.0-master/public/static/bootstrap/js/bootstrap.min.js"></script> -->
<!-- 菜单下拉 -->
<script src="//cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
<script type="text/javascript" src="/weiphp5.0-master/public/static/ymyui/js/ymyui.min.js"></script>



<script type="text/javascript" src="/weiphp5.0-master/public/static/uploadify/jquery.uploadify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
<script type="text/javascript" src="/weiphp5.0-master/public/static/base/js/dialog.js?v=<?php echo SITE_VERSION; ?>"></script>

<script type="text/javascript" src="/weiphp5.0-master/public/static/webuploader-0.1.5/webuploader.min.js"></script>

<script type="text/javascript" src="/weiphp5.0-master/public/static/base/js/admin_common.js?v=<?php echo SITE_VERSION; ?>"></script>
<script type="text/javascript" src="/weiphp5.0-master/public/static/base/js/admin_image.js?v=<?php echo SITE_VERSION; ?>"></script>
<script type="text/javascript" src="/weiphp5.0-master/public/static/masonry/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="/weiphp5.0-master/public/static/jquery.dragsort-0.5.2.min.js"></script> 
<script src="//cdn.bootcss.com/limonte-sweetalert2/7.21.1/sweetalert2.all.min.js"></script>
<!-- 封装的jquery表单验证插件，依赖sweetalert2 -->
<script src="/weiphp5.0-master/public/static/default/lib/formverfiy.js"></script>
<script type="text/javascript">
var  IMG_PATH = "/weiphp5.0-master/public/static/base/images";
var  STATIC = "/weiphp5.0-master/public/static";
var  ROOT = "/weiphp5.0-master/public";
var  UPLOAD_PICTURE = "<?php echo U('home/File/upload_picture',array('session_id'=>session_id())); ?>";
var  UPLOAD_FILE = "<?php echo U('home/File/upload',array('session_id'=>session_id())); ?>";
var  UPLOAD_DIALOG_URL = "<?php echo U('home/File/upload_dialog',array('session_id'=>session_id())); ?>";
var COPY_PAGE_URL = "<?php echo U('home/index/copy'); ?>";
</script>

    
</head>
<body>
	

	<!-- 主体 -->

<?php  //验证登录
  if(!is_login() && empty(cookie( '__forward__'))){
  $forward = cookie('__forward__');
            empty( $forward ) && cookie('__forward__', $_SERVER['REQUEST_URI']);
  //return redirect(U('home/user/login',array('from'=>4)));
  }  ?>
<div id="main-container" class="admin_container">
  <?php if(!(empty($top_menu['core_side_menu']) || (($top_menu['core_side_menu'] instanceof \think\Collection || $top_menu['core_side_menu'] instanceof \think\Paginator ) && $top_menu['core_side_menu']->isEmpty()))): ?>
    <div class="sidebar">
      <!-- 左侧栏用户信息 -->
      <div class="user-info">
        

        <a href="#" class="user-info-head">
            <img class="admin_head url" src="<?php echo SITE_URL; ?>/static/base/images/admin.jpg"/>
        </a>

        <div class="user-info-name"><?php echo htmlentities(getShort($myinfo['nickname'],4)); ?><i class="pl_5 fa fa-sort-down"></i>
          <div class="user-info-dropdown">
          <a href="<?php echo U('home/User/profile'); ?>">修改密码</a>
          <a href="<?php echo U('home/User/logout'); ?>">退出</a>
        </div>
        </div>

        
      </div>
      
    
      <div id="sidenav">
        <ul class="sidenav_sub">
          <?php if(is_array($top_menu['core_side_menu']) || $top_menu['core_side_menu'] instanceof \think\Collection || $top_menu['core_side_menu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $top_menu['core_side_menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="<?php echo htmlentities($vo['class']); ?>" data-id="<?php echo htmlentities($vo['id']); ?>"> <a href="<?php echo htmlentities($vo['url']); ?>"  target="<?php echo htmlentities($vo['target']); ?>"> <?php echo htmlentities($vo['title']); ?> </a><b class="active_arrow"></b></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="bar"></div>
        </ul>

      </div>

    </div>

  <?php endif; ?>
   
    <div class="main_body admin-body">
      <!-- 头部 -->
      <!-- 提示 -->
<div id="top-alert" class="top-alert-tips alert-error" style="display: none;">
  <a class="close" href="javascript:;"><b class="fa fa-times-circle"></b></a>
  <div class="alert-content"></div>
</div>


<!-- 导航条
================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="wrap">

       <a class="brand" title="<?php echo config('WEB_SITE_TITLE'); ?>" href="<?php echo U('home/index/main'); ?>">
       		<img height="52" src="/weiphp5.0-master/public/static/base/images/logo.png"/>
       </a>
      <?php  $index_2 = parse_name(MODULE_NAME) . '/' . parse_name(CONTROLLER_NAME) . '/*' ; $index_3 = parse_name(MODULE_NAME) . '/' . parse_name(CONTROLLER_NAME) . '/' . parse_name(ACTION_NAME );  ?>

            <div class="top_nav">
                <?php if(is_login()): ?>
                    <ul class="nav" style="margin-right:0">
                        <?php if(is_array($top_menu['core_top_menu']) || $top_menu['core_top_menu'] instanceof \think\Collection || $top_menu['core_top_menu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $top_menu['core_top_menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    	<li class="<?php echo htmlentities($vo['class']); ?>"><a href="<?php echo htmlentities($vo['url']); ?>" target="<?php echo htmlentities($vo['target']); ?>"><?php echo htmlentities($vo['title']); ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
</div>
      <!-- /头部 -->
      
<style>
    .setting_step.app_setting a{
        width:33%;
    }
</style>
  <div class="wrap">
	<section id="contents">
  
  <div class="setting_step app_setting">
         <a class="step step_cur_1" href="<?php echo U('weixin/publics/step_0',array('id'=>$id)); ?>">1.增加基本信息</a>
         <a class="step " style="cursor:deault;" >2.配置公众平台</a>
         <a class="step " style="cursor:deault;">3.保存接口配置</a>
  </div>     
  
  <div class="tab-content"> 
    <!-- 表单 -->
    <form class="form-horizontal bind_step_form" method="post" action="<?php echo U('weixin/Publics/step_0'); ?>" id="form" style="overflow:hidden; zoom:1">
      <!-- 基础文档模型 -->
      <div class="tab-pane in tab1" id="tab1">
        <div class="item_wrap">
      	 <div class="form-group row cf">
          <label class="col-sm-2"> <span class="need_flag">*</span> 公众号类型 </label>
          <div class="col-sm-8">
                <select name="type">
                   <option value="0" <?php if($info['type'] == '0'): ?>selected<?php endif; ?> >普通订阅号</option>
                   <option value="1" <?php if($info['type'] == '1'): ?>selected<?php endif; ?> >微信认证订阅号</option>
                   <option value="2" <?php if($info['type'] == '2'): ?>selected<?php endif; ?> >普通服务号</option>
                   <option value="3" <?php if($info['type'] == '3'): ?>selected<?php endif; ?> >微信认证服务号</option>
                </select>
                <span class="form-text text-muted"> （请正确选择，公众号类型对应的接口如果没有权限，相关的功能将不显示）</span>
          </div>
        </div>        
      	 <div class="form-group row cf toggle-public_name">
          <label class="col-sm-2"> <span class="need_flag">*</span> 公众号名称 </label>
          <div class="col-sm-8">
            <input type="text" value="<?php echo htmlentities($info['public_name']); ?>" name="public_name" class="text input-large">
          </div>
        </div>
        <div class="form-group row cf toggle-public_id">
          <label class="col-sm-2"> <span class="need_flag">*</span> 原始ID </label>
          <div class="col-sm-8">
            <input type="text" value="<?php echo htmlentities($info['public_id']); ?>" name="public_id" class="text input-large">
            <span class="form-text text-muted"> （请正确填写，保存后不能再修改，且无法接收到微信的信息） </span>
          </div>
        </div>
        </div>     
        <div class="form-group row cf mt_10 bind_step_form_next_item">
          <div class="offset-sm-2">
            <input type="hidden" name="id" value="<?php echo htmlentities(intval($id)); ?>">
          <button target-form="form-horizontal" type="submit" id="submit" class="btn btn-primary submit-btn ajax-post">下一步</button>
          <span style="vertical-align: bottom;" class="ml-3">配置信息遇到问题？<a style="vertical-align: bottom;" href="<?php echo U('home/index/lead'); ?>" target="_blank">点击查看接入指引</a></span>
          </div>
        </div>
      </div>
    </form>
  </div>
  
  <!--帮助消息
  <div class="help_content">
      <h3>帮助信息</h3>
      <p>以上消息可以从公众平台里找到，如下图</p>
      <p><img src="<?php echo SITE_URL; ?>/home/images/help01.png" width="800"></p>
      <a name="setting"></a>
       <p>配置域名授权：在开发者中心，功能列表里配置，配置授权域名如下图</p>
      <p><img src="<?php echo SITE_URL; ?>/home/images/help05.png" width="800"></p>
       <p>配置JS接口安全域名，在公众号设置-功能配置里面配置，配置JS安全域名如下图</p>
      <p><img src="<?php echo SITE_URL; ?>/home/images/help06.png" width="800"></p>
  </div>
  -->
</section>



      <!-- 底部 -->
      <div class="wrap bottom" style="background:#fff; border-top:#ddd;">
    <p class="copyright">本系统由<a href="https://www.weiphp.cn" target="_blank">WeiPHP</a>强力驱动</p>
</div>

<script type="text/javascript">

(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/weiphp5.0-master/public", //当前网站地址
		"APP"    : "__APP__", //当前项目地址
		"PUBLIC" : "/weiphp5.0-master/public", //项目公共目录地址
		"DEEP"   : "<?php echo config("pathinfo_depr"); ?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo config("URL_MODEL"); ?>", "<?php echo config("URL_CASE_INSENSITIVE"); ?>", "<?php echo config("URL_HTML_SUFFIX"); ?>"],
		"VAR"    : ["<?php echo config("VAR_MODULE"); ?>", "<?php echo config("VAR_CONTROLLER"); ?>", "<?php echo config("VAR_ACTION"); ?>"]
	}
})();
</script>

<div style="display:none"><?php echo $tongji_code; ?></div>


    </div>
    



</div>

	<!-- /主体 -->

	
    
  <link href="/weiphp5.0-master/public/static/datetimepicker/css/datetimepicker.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet" type="text/css">
  <?php if(config('COLOR_STYLE')=='blue_color') echo '
    <link href="/weiphp5.0-master/public/static/datetimepicker/css/datetimepicker_blue.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet" type="text/css">
    '; ?>
  <link href="/weiphp5.0-master/public/static/datetimepicker/css/dropdown.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/weiphp5.0-master/public/static/datetimepicker/js/bootstrap-datetimepicker.js"></script> 
  <script type="text/javascript" src="/weiphp5.0-master/public/static/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js?v=<?php echo SITE_VERSION; ?>" charset="UTF-8"></script> 
  <script type="text/javascript">
$('#submit').click(function(){
    $('#form').submit();
});

$(function(){
	 initUploadImg();
    $('.time').datetimepicker({
        format: 'yyyy-mm-dd hh:ii',
        language:"zh-CN",
        minView:0,
        autoclose:true
    });
    $('.date').datetimepicker({
        format: 'yyyy-mm-dd',
        language:"zh-CN",
        minView:2,
        autoclose:true
    });	
    showTab();
});
</script> 
 <!-- 用于加载js代码 -->
    <div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
        
    </div>
  <!-- /底部 -->
  
  <script>
    // 判断一下侧边栏是否存在 
    $(function() {
      if(!$('.user-info-name').length > 0) {
        // 不存在
        $('.main_body').removeClass('admin-body')
      }
    })
  </script>
</body>
</html>
