<?php /*a:7:{s:68:"D:\program\xampp\htdocs\weiphp\application\common\view\base\add.html";i:1564394434;s:71:"D:\program\xampp\htdocs\weiphp\application\common\view\base\common.html";i:1564394434;s:69:"D:\program\xampp\htdocs\weiphp\application\common\view\base\head.html";i:1564394434;s:71:"D:\program\xampp\htdocs\weiphp\application\common\view\base\header.html";i:1564394434;s:69:"D:\program\xampp\htdocs\weiphp\application\common\view\base\_nav.html";i:1564394434;s:71:"D:\program\xampp\htdocs\weiphp\application\common\view\base\footer.html";i:1564394434;s:68:"D:\program\xampp\htdocs\weiphp\application\common\view\base\var.html";i:1564394434;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
<meta content="<?php echo config('WEB_SITE_KEYWORD'); ?>" name="keywords"/>
<meta content="<?php echo config('WEB_SITE_DESCRIPTION'); ?>" name="description"/>
<link rel="shortcut icon" href="/weiphp/public/favicon.ico">
<title><?php echo htmlentities((isset($page_title) && ($page_title !== '')?$page_title:'weiphp')); ?></title>
<link href="/weiphp/public/static/font-awesome/css/font-awesome.min.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet">
<link rel="stylesheet" href="/weiphp/public/static/ymyui/css/ymyui.css">
<!-- <link rel="stylesheet" href="/weiphp/public/static/bootstrap/css/bootstrap.css"> -->
<link href="/weiphp/public/static/base/css/base.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet">
<link href="/weiphp/public/static/base/css/module.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet">
<link href="/weiphp/public/static/base/css/weiphp.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet">
<link rel="stylesheet" href="//at.alicdn.com/t/font_727459_zyp88ew3c6.css"></link>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/weiphp/public/static/bootstrap/js/html5shiv.js?v=<?php echo SITE_VERSION; ?>"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="/weiphp/public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/weiphp/public/static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->
<!-- <script type="text/javascript" src="/weiphp/public/static/bootstrap/js/bootstrap.min.js"></script> -->
<!-- 菜单下拉 -->
<script src="//cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
<script type="text/javascript" src="/weiphp/public/static/ymyui/js/ymyui.min.js"></script>



<script type="text/javascript" src="/weiphp/public/static/uploadify/jquery.uploadify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
<script type="text/javascript" src="/weiphp/public/static/base/js/dialog.js?v=<?php echo SITE_VERSION; ?>"></script>

<script type="text/javascript" src="/weiphp/public/static/webuploader-0.1.5/webuploader.min.js"></script>

<script type="text/javascript" src="/weiphp/public/static/base/js/admin_common.js?v=<?php echo SITE_VERSION; ?>"></script>
<script type="text/javascript" src="/weiphp/public/static/base/js/admin_image.js?v=<?php echo SITE_VERSION; ?>"></script>
<script type="text/javascript" src="/weiphp/public/static/masonry/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="/weiphp/public/static/jquery.dragsort-0.5.2.min.js"></script> 
<script src="//cdn.bootcss.com/limonte-sweetalert2/7.21.1/sweetalert2.all.min.js"></script>
<!-- 封装的jquery表单验证插件，依赖sweetalert2 -->
<script src="/weiphp/public/static/default/lib/formverfiy.js"></script>
<script type="text/javascript">
var  IMG_PATH = "/weiphp/public/static/base/images";
var  STATIC = "/weiphp/public/static";
var  ROOT = "/weiphp/public";
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
       		<img height="52" src="/weiphp/public/static/base/images/logo.png"/>
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
             .form-group select{
                 margin-left: 0;
             }
             .col-sm-8 .uploadrow2{
                 margin-left: -15px;
             }
         </style>
<div class="span9 page_message">
    <section id="contents"> <?php  if(is_array($nav) && count($nav)>1) {  ?>
<ul class="tab-nav nav">
  <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <li class="<?php echo htmlentities($vo['class']); ?>"><a href="<?php echo isset($vo['url']) ? $vo['url'] :''; ?>"><?php echo htmlentities($vo['title']); ?><span class="arrow fa fa-sort-up"></span></a></li>
  <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<?php  }  if(!empty($sub_nav)): ?>
<div class="sub-tab-nav">
       <ul class="sub_tab">
       <?php if(is_array($sub_nav) || $sub_nav instanceof \think\Collection || $sub_nav instanceof \think\Paginator): $i = 0; $__LIST__ = $sub_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li><a class="<?php echo htmlentities($vo['class']); ?>" href="<?php echo htmlentities($vo['url']); ?>"><?php echo htmlentities($vo['title']); ?><span class="arrow fa fa-sort-up"></span></a></li>
       <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
</div> 
<?php endif; if(!empty($normal_tips)): ?>
	<p class="normal_tips"><b class="fa fa-info-circle"></b> <?php echo $normal_tips; ?></p>
<?php endif; ?>
        <div class="tab-content">
            <!-- 表单 -->
            <?php  isset($post_url) || $post_url = U('add?model='.$model['id'], $get_param); ?>
            <form id="form" action="<?php echo htmlentities($post_url); ?>" method="post" class="form-horizontal form-center">
                <?php if(is_array($fields) || $fields instanceof \think\Collection || $fields instanceof \think\Paginator): $i = 0; $__LIST__ = $fields;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;if($field['is_show'] == 4): ?>
                <input type="hidden" class="text" name="<?php echo htmlentities($field['name']); ?>" value="<?php echo I($field['name'], $field['value']); ?>"> <?php endif; if($field['is_show'] == 1 || $field['is_show'] == 2 || ($field['is_show'] == 5 && I($field['name']))): ?>
                
                <div class="form-group row cf toggle-<?php echo htmlentities($field['name']); ?>">
                    <label class="col-sm-2">
                        <?php if(!(empty($field['is_must']) || (($field['is_must'] instanceof \think\Collection || $field['is_must'] instanceof \think\Paginator ) && $field['is_must']->isEmpty()))): ?><span class="need_flag">*</span><?php endif; ?> <?php echo htmlentities($field['title']); ?> </label>

                    <div class="col-sm-8">
                        <?php switch($field['type']): case "num": ?>
                        <input type="number" class="text" name="<?php echo htmlentities($field['name']); ?>" value="<?php echo I($field['name'], $field['value']); ?>"> <?php break; ?>
                        <br /> <?php case "string": ?>
                        <input type="text" class="text input-large" name="<?php echo htmlentities($field['name']); ?>" value="<?php echo I($field['name'], $field['value']); ?>"><?php break; case "textarea": ?>
                        <label class="textarea input-large">
                            <textarea name="<?php echo htmlentities($field['name']); ?>"><?php echo I($field['name'], $field['value']); ?></textarea>
                        </label>
                        <?php break; case "datetime": ?>
                        <input type="datetime" autocomplete="off" name="<?php echo htmlentities($field['name']); ?>" class="text time" value="<?php echo I($field['name'], $field['value']); ?>" placeholder="请选择时间" /> <?php break; case "date": ?>
                        <input type="datetime" autocomplete="off" name="<?php echo htmlentities($field['name']); ?>" class="text date" value="<?php echo I($field['name'], $field['value']); ?>" placeholder="请选择日期" /> <?php break; case "bool": $_result=parse_field_attr($field['extra']);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="check-item">
                            <!--[if !IE]><!-->
                            <input type="radio" class="regular-radio toggle-data" value="<?php echo htmlentities($key); ?>" name="<?php echo htmlentities($field['name']); ?>" id="<?php echo htmlentities($field['name']); ?>_<?php echo htmlentities($key); ?>" toggle-data="<?php echo htmlentities(get_hide_attr($vo)); ?>" <?php if($field['value'] == $key): ?>checked<?php endif; ?> />
                            <label for="<?php echo htmlentities($field['name']); ?>_<?php echo htmlentities($key); ?>"></label>
                            <?php echo htmlentities(clean_hide_attr($vo)); ?>
                            <!--<![endif]-->
                            <!--[if IE]>
                     <input type="radio" value="<?php echo htmlentities($key); ?>"
                   id="<?php echo htmlentities($field['name']); ?>_<?php echo htmlentities($key); ?>" name="<?php echo htmlentities($field['name']); ?>" class="toggle-data" toggle-data="<?php echo htmlentities(get_hide_attr($vo)); ?>"
                  <?php if($field['value'] == $key): ?>checked="checked"<?php endif; ?> />
                  <label for="<?php echo htmlentities($field['name']); ?>_<?php echo htmlentities($key); ?>"></label><?php echo htmlentities(clean_hide_attr($vo)); ?>
                 <![endif]-->


                        </div>

                        
                        <?php endforeach; endif; else: echo "" ;endif; break; case "select": ?>
                        <select name="<?php echo htmlentities($field['name']); ?>">
                            <?php $_result=parse_field_attr($field['extra']);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($key); ?>" class="toggle-data" toggle-data="<?php echo htmlentities(get_hide_attr($vo)); ?>" <?php if($field['value'] == $key): ?>selected<?php endif; ?>><?php echo htmlentities(clean_hide_attr($vo)); ?>
                            </option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>

                        <?php break; case "cascade": ?> <?php echo W('common/cascade/cascade', array('name'=>$field['name'],'value'=>$field['value'],'extra'=>$field['extra'])); break; case "dynamic_select": ?> <?php echo W('common/dynamic_select/dynamic_select', array('name'=>$field['name'],'value'=>'','extra'=>$field['extra'])); break; case "dynamic_checkbox": ?> <?php echo W('common/dynamic_checkbox/dynamic_checkbox', array('name'=>$field['name'],'value'=>'','extra'=>$field['extra'])); break; case "material": ?> <?php echo W('common/material/material', array('name'=>$field['name'],'value'=>'','extra'=>$field['extra'])); break; case "prize": ?> <?php echo W('common/prize/prize', array('name'=>$field['name'],'value'=>'','extra'=>$field['extra'])); break; case "news": ?> <?php echo W('common/news/news', array('name'=>$field['name'],'value'=>'','extra'=>$field['extra'])); break; case "image": ?>
                        <div id="image_<?php echo htmlentities($field['name']); ?>"></div>
                        <?php echo W('common/image/image', array('name'=>$field['name'],'value'=>'','extra'=>$field['extra'])); break; case "radio": $_result=parse_field_attr($field['extra']);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="check-item">
                            <!--[if !IE]><!-->
                            <input type="radio" class="regular-radio toggle-data" value="<?php echo htmlentities($key); ?>" id="<?php echo htmlentities($field['name']); ?>_<?php echo htmlentities($key); ?>" name="<?php echo htmlentities($field['name']); ?>" toggle-data="<?php echo htmlentities(get_hide_attr($vo)); ?>" <?php if($field['value'] == $key): ?>checked<?php endif; ?> />
                            <label for="<?php echo htmlentities($field['name']); ?>_<?php echo htmlentities($key); ?>"></label>
                            <?php echo htmlentities(clean_hide_attr($vo)); ?>
                            <!--<![endif]-->
                            <!--[if IE]>
                     <input type="radio" value="<?php echo htmlentities($key); ?>"
                   id="<?php echo htmlentities($field['name']); ?>_<?php echo htmlentities($key); ?>" name="<?php echo htmlentities($field['name']); ?>" class="toggle-data" toggle-data="<?php echo htmlentities(get_hide_attr($vo)); ?>"
                  <?php if($field['value'] == $key): ?>checked="checked"<?php endif; ?> />
                  <label for="<?php echo htmlentities($field['name']); ?>_<?php echo htmlentities($key); ?>"></label><?php echo htmlentities(clean_hide_attr($vo)); ?>
                 <![endif]-->
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; break; case "checkbox": $_result=parse_field_attr($field['extra']);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="check-item">
                            <input type="checkbox" class="regular-checkbox toggle-data" value="<?php echo htmlentities($key); ?>" id="<?php echo htmlentities($field['name']); ?>_<?php echo htmlentities($key); ?>" name="<?php echo htmlentities($field['name']); ?>[]" toggle-data="<?php echo htmlentities(get_hide_attr($vo)); ?>" <?php if(in_array(($key), is_array($field['value'])?$field['value']:explode(',',$field['value']))): ?>checked="checked" <?php endif; ?>>

                            <label for="<?php echo htmlentities($field['name']); ?>_<?php echo htmlentities($key); ?>"></label>
                            <?php echo htmlentities(clean_hide_attr($vo)); ?> </div>
                        <?php endforeach; endif; else: echo "" ;endif; break; case "editor": ?>
                        <label class="textarea">
                            <textarea name="<?php echo htmlentities($field['name']); ?>" style="width:405px; height:200px;"></textarea>
                            <?php echo W('common/editor/adminArticleEdit', array('name'=>$field['name'],'value'=>$field['value'])); ?> </label>
                        <?php break; case "picture": ?>
                        <div class="col-sm-8">
                            <div class="uploadrow2" data-max="1" title="点击修改图片" rel="<?php echo htmlentities($field['name']); ?>">
                                <input type="file" id="upload_picture_<?php echo htmlentities($field['name']); ?>">
                                <input type="hidden" name="<?php echo htmlentities($field['name']); ?>" id="cover_id_<?php echo htmlentities($field['name']); ?>" />
                                <div class="upload-img-box">
                                </div>

                            </div>
                        </div>
                        
                        <?php break; case "mult_picture": ?>
                        <div class="mult_imgs">
                            <div class="upload-img-view" id='mutl_picture_<?php echo htmlentities($field['name']); ?>'>
                            </div>
                            <div class="col-sm-8">
                                <div class="uploadrow2" data-max="9" title="点击上传图片" rel="<?php echo htmlentities($field['name']); ?>">
                                    <input type="file" id="upload_picture_<?php echo htmlentities($field['name']); ?>">
                                </div>
                            </div>
                            
                        </div>
                        <?php break; case "file": ?>
                        <div class="upload_file">
                        	<div id='upload_file_<?php echo htmlentities($field['name']); ?>' class='uploadrow_file'></div>
                        	<input type="hidden" name="<?php echo htmlentities($field['name']); ?>" value="" data-fileexts="<?php echo htmlentities($field['validate_file_exts']); ?>" data-maxsize="<?php echo htmlentities($field['validate_file_size']); ?>"/>
                            <div class="upload-img-box">
                            </div>
                        </div>
                        <?php break; case "user": ?>
                        <div class="">
                            <div id="userList" class="common_add_list fl"><a href="javascript:;" class="common_add_btn fl" onClick="$.WeiPHP.selectSingleUser('<?php echo U ( 'weixin/UserCenter/lists_choose',array('isAjax'=>1)); ?>','<?php echo htmlentities($field['name']); ?>');"></a></div>
                        </div>
                        <?php break; case "users": ?>
                        <div class="">
                            <div id="userList" class="common_add_list fl">
                                <a href="javascript:;" class="common_add_btn fl" onClick="$.WeiPHP.selectMutiUser('<?php echo U ( 'weixin/UserCenter/lists_choose',array('isAjax'=>1)); ?>',9,'<?php echo htmlentities($field['name']); ?>');"></a>
                            </div>
                        </div>
                        <?php break; case "admin": ?>
                        <div class="">
                            <div id="userList" class="common_add_list fl">
                            </div>
                        </div>

                        <?php break; default: ?>
                        <input type="text" class="text input-large" name="<?php echo htmlentities($field['name']); ?>" value="<?php echo I($field['name'], $field['value']); ?>"> <?php endswitch; ?>
                        <span class="form-text text-muted">
                <?php if(!(empty($field['remark']) || (($field['remark'] instanceof \think\Collection || $field['remark'] instanceof \think\Paginator ) && $field['remark']->isEmpty()))): ?>（<?php echo $field['remark']; ?>）<?php endif; ?>
                </span> 
                    </div>
                    <br />
                </div>
                <?php endif; ?> <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php echo htmlentities((isset($extra_html) && ($extra_html !== '')?$extra_html:'')); ?>

        </div>
        <div class="">
            <div class="offset-sm-2 col-sm-8">
                <button class="btn btn-primary submit-btn  ajax-post" id="submit" type="submit" target-form="form-horizontal"><?php echo htmlentities((isset($submit_name) && ($submit_name !== '')?$submit_name:'确 定')); ?></button>
            </div>
        </div>
        </form>
</div>
</section>
</div>



      <!-- 底部 -->
      <div class="wrap bottom" style="background:#fff; border-top:#ddd;">
    <p class="copyright">本系统由<a href="https://www.weiphp.cn" target="_blank">WeiPHP</a>强力驱动</p>
</div>

<script type="text/javascript">

(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/weiphp/public", //当前网站地址
		"APP"    : "__APP__", //当前项目地址
		"PUBLIC" : "/weiphp/public", //项目公共目录地址
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

	
    
<link href="/weiphp/public/static/datetimepicker/css/datetimepicker.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet" type="text/css"> <?php if(config('COLOR_STYLE')=='blue_color') echo '
<link href="/weiphp/public/static/datetimepicker/css/datetimepicker_blue.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet" type="text/css"> '; ?>
<link href="/weiphp/public/static/datetimepicker/css/dropdown.css?v=<?php echo SITE_VERSION; ?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/weiphp/public/static/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="/weiphp/public/static/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js?v=<?php echo SITE_VERSION; ?>" charset="UTF-8"></script>
<script type="text/javascript">
$('#submit').click(function() {
    $('#form').submit();
});
$(function() {
    //初始化上传图片插件
    initUploadImg();
    initUploadFile();

    $('.time').datetimepicker({
        format: 'yyyy-mm-dd hh:ii',
        language: "zh-CN",
        minView: 0,
        autoclose: true
    });
    $('.date').datetimepicker({
        format: 'yyyy-mm-dd',
        language: "zh-CN",
        minView: 2,
        autoclose: true
    });
    showTab();

    $('.toggle-data').each(function() {
        var data = $(this).attr('toggle-data');
        if (data == '') return true;

        if ($(this).is(":selected") || $(this).is(":checked")) {
            change_event(this)
        }
    });
    $('.toggle-data').bind("click", function() { change_event(this) });
    $('select').change(function() {
        $('.toggle-data').each(function() {
            var data = $(this).attr('toggle-data');
            if (data == '') return true;

            if ($(this).is(":selected") || $(this).is(":checked")) {
                change_event(this)
            }
        });
    });
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
