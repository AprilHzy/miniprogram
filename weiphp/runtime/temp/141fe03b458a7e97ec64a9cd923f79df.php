<?php /*a:2:{s:76:"D:\program\xampp\htdocs\weiphp\application\home/view/file/upload_dialog.html";i:1564394434;s:69:"D:\program\xampp\htdocs\weiphp\application\common\view\base\head.html";i:1564394434;}*/ ?>
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

<body style="background:#fff; padding:40px 0;">
  <section id="upload_dialogContent">
  	<div class="upload_img_tab">
    	<a class="current" href="javascript:;" onClick="switchTab(this,1);">本地上传</a>
        <a href="javascript:;" onClick="switchTab(this,2);">系统图标</a>
        <a href="javascript:;" onClick="switchTab(this,3);">最近上传</a>
    </div>
    <div class="tab_content" id="tab1" style="padding:20px; display:block">
      <form id="form"  method="post" class="form-horizontal form-center" enctype="multipart/form-data">
        <div style="padding: 5px 5px 15px 5px;color: #aaaaaa;"><span>提示：图片大小不超过2M</span></div>
        <div class="mult_imgs">
                <div class="upload-img-view" id='mutl_picture'>
                   
                </div>
               <!--  <div class="controls uploadrow2" data-max="9" title="点击上传图片">
                  <input type="file"  id="upload_picture">
                </div> -->
                <div id="upload_picture" class="controls uploadrow2" data-max="9" title="点击上传图片">
                </div>
            </div>    
      </form>
	</div>
    <div class="tab_content load_piclist_box" id="tab2" style="padding:20px;"></div>
	<div class="tab_content load_piclist_box" id="tab3" style="padding:20px;"></div>
  </section>
  <div class="upload_dialog_bar"><a id="conBtn" class="btn" href="javascript:;" onClick="confirmImage();">确定</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="border-btn" href="javascript:;" onClick="window.parent.$.Dialog.close();">取消</a></div>
</body>
<script type="text/javascript">
var maxCount = parseInt("<?php echo I('max'); ?>");
var fieldName =  "<?php echo I('field'); ?>";
var uploader = WebUploader.create({
	
	fileSingleSizeLimit: 2097152,//限制上传单个文件大小

	// 设置文件上传域的name
	fileVal:'download',

    // 选完文件后，是否自动上传。
    auto: true,

    // swf文件路径
    swf: STATIC+"/webuploader-0.1.5/Uploader.swf",

    // 文件接收服务端。
    server: UPLOAD_PICTURE,

    // 选择文件的按钮。可选。
    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
    pick: '#upload_picture',

    // 只允许选择图片文件。
    accept: {
        title: 'Images',
        extensions: 'gif,jpg,jpeg,png,bmp',
        mimeTypes: 'image/*'
	},
	//不压缩
	compress: false
});
var uploadImgWidth = $('#upload_picture').width()
$('.webuploader-pick').height(uploadImgWidth).width(uploadImgWidth);

// 文件上传成功，给item添加成功class, 用样式标记上传成功。
uploader.on( 'uploadSuccess', function( file,res ) {
	var src = res.url || ROOT + res.path;
	var $li = $(
            '<div id="'+file.id+'" class="upload-pre-item22 check" onclick="toggleCheck(this);"><img width="100" height="100" src="'+src+'"/>'
				+'<input type="hidden" name="picId[]" value="'+res.id+'"/><span class="ck-ico"></span></div>'
            ),
        $img = $li.find('img');

     var $list = $('#upload_picture').siblings('.upload-img-view');

	 if(res.status){

		$list.append( $li );
		if(maxCount==1){
				$("#mutl_picture .upload-pre-item22").each(function(index, element) {
					$(element).removeClass('check');
				});
				$li.addClass('check');
			}
	 } else {
			window.parent.updateAlert(res.info);
			setTimeout(function(){
				window.parent.$('#top-alert').find('button').click();
			},1500);
		}
    // $list为容器jQuery实例
	console.log(res)
    $( '#'+file.id ).addClass('upload-state-done');
});
// 文件上传过程中创建进度条实时显示。
uploader.on( 'uploadProgress', function( file, percentage ) {
    var $li = $( '<div class="upload_loading" style="width:100px;height:100px;float:right;text-align:center"><img src="'+IMG_PATH+'/loading.gif"/></div>'),
        $percent = $('.upload-img-view').find('.upload_loading');

		if ( !$percent.length ) {
				$percent = $('#upload_picture').siblings('.upload-img-view').append( $li );
			}
});
// 完成上传完了，成功或者失败，先删除进度条。
uploader.on( 'uploadComplete', function( file ) {
     $('.upload-img-view').find('.upload_loading').remove();
});
// 文件上传失败，显示上传出错。
uploader.on( 'uploadError', function( file ) {
    window.parent.updateAlert('上传失败');
});

/**
 * 验证文件格式以及文件大小
 */
uploader.on("error", function (type) {
	console.log(type)
    if (type == "Q_TYPE_DENIED") {
    	window.parent.updateAlert("请上传gif,jpg,jpeg,png,bmp格式文件");
    } else if (type == "F_EXCEED_SIZE") {
    	window.parent.updateAlert("图片大小不能超过2M");
    } else if (type == "F_DUPLICATE") {
    	window.parent.updateAlert("请不要选择上传相同的图片");
    } else {
    	window.parent.updateAlert("上传出错！请检查后重新上传！错误代码"+type);
    }

});

/* 
$('#upload_picture').uploadify({
	"height"          : 100,
	"width"           : 100,
	"swf"             : STATIC+"/uploadify/uploadify.swf",
	"fileObjName"     : "download",
	"buttonText"      : "上传图片",
	"uploader"        : UPLOAD_PICTURE,
	'cancelImg'		  : 'JS/jquery.uploadify-v2.1.0/cancel.png',
	'removeTimeout'	  : 1,
	'fileTypeExts'	  : '*.jpg; *.png; *.gif;',
	"onUploadSuccess" : function(file, data, response) {
		var data = $.parseJSON($.trim(data));
		if(data.code){
			src = data.url || ROOT + data.path;
			$addImg = $('<div class="upload-pre-item22 check" onclick="toggleCheck(this);"><img width="100" height="100" src="' + src + '"/>'
				+'<input type="hidden" name="picId[]" value="'+data.id+'"/><!--<em onClick="if(confirm(\'确认删除？\')){$(this).parent().remove();}">&nbsp;</em>--><span class="ck-ico"></span></div>');
			$("#mutl_picture").append($addImg);
			if(maxCount==1){
				$("#mutl_picture .upload-pre-item22").each(function(index, element) {
					$(element).removeClass('check');
				});
				$addImg.addClass('check');
			}
		} else {
			window.parent.updateAlert(data.msg);
			setTimeout(function(){
				window.parent.$('#top-alert').find('button').click();
			},1500);
		}
	},
	"onUploadError" : function(file, data, response,errorString) {
		window.parent.updateAlert(data.msg);
	},
}); */
function switchTab(obj,index){
	$('#tab'+index).show().siblings('.tab_content').hide();
	$(obj).addClass('current').siblings().removeClass('current');
	if(index!=1 && !$(obj).hasClass('loaded')){
		if(index==2){
			//加载系统
			$(obj).addClass('loaded');
			$('#tab2').load("<?php echo U('home/File/system_pics',array('dir'=>I('dir'))); ?>");
		}else if(index==3){
			//加载最近
			$(obj).addClass('loaded');
			$('#tab3').load("<?php echo U('home/File/user_pics'); ?>");
		}
	}
}
//切换图标分类
function switchPicCate(obj,tabIndex){
	$('#tab'+tabIndex).empty();
	$('#tab'+tabIndex).load($(obj).data('href'));
}
//选中图片
function toggleCheck(obj){
	var curItems = $('.tab_content:visible .check');
	var checkCount = curItems.length;
	if(maxCount>1){
		if(checkCount==maxCount && !$(obj).hasClass('check')){
			window.parent.updateAlert('图片不能超过'+maxCount+'张!');
			return;
		}
		$(obj).toggleClass('check');
	}else{
		if(!$(obj).hasClass('check')){
			$(obj).addClass('check').siblings().removeClass('check');
		}
	}
}
function confirmImage(){
	

	var curItems = $('.tab_content:visible .check');
	var checkCount = curItems.length;
	if(checkCount==0){
		swal(
		  '错误',
		  '请选择上传图片！',
		  'error'
		)
		return;
	}
	if(checkCount>9) {
		swal(
		  '错误',
		  '总图片不可超过9张哦！',
		  'error'
		)
		return;
	}

	curItems.each(function(index, element) {

		var picId = $(element).find('input[type="hidden"]').val();
		var src = $(element).find('img').attr('src');

        if(maxCount>1){
			$addImg = $('<div class="upload-pre-item22"><img width="100" height="100" src="' + src + '"/>'
				+'<input type="hidden" name="'+fieldName+'[]" value="'+picId+'"/><em onClick="if(confirm(\'确认删除？\')){$(this).parent().remove();}">&nbsp;</em></div>');
			window.parent.$("#mutl_picture_"+fieldName).append($addImg);

			
			
			window.parent.$("#mutl_picture_"+fieldName).dragsort('destroy');
			window.parent.$("#mutl_picture_"+fieldName).dragsort({
			    itemSelector: ".upload-pre-item22", dragSelector: ".upload-pre-item22", dragBetween: false, placeHolderTemplate: "<div class='upload-pre-item22'></div>",dragSelectorExclude:'em',dragEnd: function() {$(".upload-pre-item22").attr('style','')}
		    });
		}else{	
			
		console.log('#cover_id_'+fieldName);
			window.parent.$('#cover_id_'+fieldName).parent().find('.upload-img-box').html(
				'<div class="upload-pre-item2" style="width:100%;height:100px;max-height:100px"><img width="100%" height="100" src="' + src + '"/></div><em class="edit_img_icon">&nbsp;</em>'
			).show();




			window.parent.$('#cover_id_'+fieldName).val(picId);
			window.parent.$('.weixin-cover-pic').attr('src',src);
			var callback = window.parent.$('#cover_id_'+fieldName).data('callback');
			
			if(callback){
				eval('window.parent.'+callback+'("'+fieldName+'",'+picId+',"'+src+'")');
			}
		}
	});
	window.parent.$.Dialog.close();
}


</script>
</html>
