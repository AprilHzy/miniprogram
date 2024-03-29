<?php /*a:2:{s:69:"D:\program\xampp\htdocs\weiphp\application\admin/view/model/edit.html";i:1564394434;s:71:"D:\program\xampp\htdocs\weiphp\application\admin\view\publics\base.html";i:1564394434;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo htmlentities($meta_title); ?>|WeiPHP管理平台</title>
    <link href="/weiphp/public/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="/weiphp/public/admin/css/base.css?v=<?php echo SITE_VERSION; ?>" media="all">
    <link rel="stylesheet" type="text/css" href="/weiphp/public/admin/css/common.css?v=<?php echo SITE_VERSION; ?>" media="all">
    <link rel="stylesheet" type="text/css" href="/weiphp/public/admin/css/module.css?v=<?php echo SITE_VERSION; ?>" />
    <link rel="stylesheet" type="text/css" href="/weiphp/public/admin/css/style.css?v=<?php echo SITE_VERSION; ?>" media="all">
    <link rel="stylesheet" type="text/css" href="/weiphp/public/admin/css/store.css?v=<?php echo SITE_VERSION; ?>" media="all">
	<link rel="stylesheet" type="text/css" href="/weiphp/public/admin/css/<?php echo htmlentities(app('config')->get('COLOR_STYLE')); ?>.css?v=<?php echo SITE_VERSION; ?>" media="all">
     <!--[if lt IE 9]>
    <script type="text/javascript" src="/weiphp/public/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/weiphp/public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/weiphp/public/admin/js/jquery.mousewheel.js?v=<?php echo SITE_VERSION; ?>"></script>
    <!--<![endif]-->
    
</head>
<body <?php if(empty($top_menu['core_side_menu']) || (($top_menu['core_side_menu'] instanceof \think\Collection || $top_menu['core_side_menu'] instanceof \think\Paginator ) && $top_menu['core_side_menu']->isEmpty())): ?>style="padding-left:0;"<?php endif; ?>>
    <!-- 头部 -->
    <div class="header">
        <!-- Logo -->
        <?php if(config('SYSTEM_LOGO')) { ?>
        <span class="logo" style="float: left;margin-left: 2px;width: 198px;height: 49px;background:url('<?php echo config('SYSTEM_LOGO'); ?>') no-repeat " >

        <?php  }else{  ?>
        <span class="logo" style="float: left;margin-left: 2px;width: 198px;height: 49px;background:url('/weiphp/public/static/base/images/logo.png') no-repeat 0 -22px" >

        <?php } ?>
        </span>
        <!-- /Logo -->

        <!-- 主导航 -->
        <ul class="main-nav">
            <?php if(is_array($top_menu['core_top_menu']) || $top_menu['core_top_menu'] instanceof \think\Collection || $top_menu['core_top_menu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $top_menu['core_top_menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ca): $mod = ($i % 2 );++$i;?>
                <li data-id="<?php echo htmlentities($ca['id']); ?>" class="<?php echo htmlentities($ca['class']); ?>"><a href="<?php echo htmlentities($ca['url']); ?>" target="<?php echo htmlentities($ca['target']); ?>"><?php echo htmlentities($ca['title']); ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- /主导航 -->

        <!-- 用户栏 -->
        <div class="user-bar">
            <a href="javascript:;" class="user-entrance"><i class="icon-user"></i></a>
            <ul class="nav-list user-menu hidden">
                <li class="manager">你好，<em title="<?php echo htmlentities(get_nickname($mid)); ?>"><?php echo htmlentities(get_nickname($mid)); ?></em></li>
                <li><a href="<?php echo U('home/Index/index'); ?>">返回前台</a></li>
                <li><a href="<?php echo U('admin/User/updatePassword'); ?>">修改密码</a></li>
                <li><a href="<?php echo U('admin/User/updateNickname'); ?>">修改昵称</a></li>
                <li><a href="<?php echo U('admin/Publics/logout'); ?>">退出</a></li>
            </ul>
        </div>
    </div>
    <!-- /头部 -->

    <!-- 边栏 -->
    <?php if(!(empty($top_menu['core_side_menu']) || (($top_menu['core_side_menu'] instanceof \think\Collection || $top_menu['core_side_menu'] instanceof \think\Paginator ) && $top_menu['core_side_menu']->isEmpty()))): ?>
    <div class="sidebar">
        <!-- 子导航 -->
        
            <div id="subnav" class="subnav">
                    <!-- 子导航 -->
					<h3><i class="icon icon-unfold"></i><?php echo htmlentities($now_top_menu_name); ?></h3>                        
                        <ul class="side-sub-menu">
                            <?php if(is_array($top_menu['core_side_menu']) || $top_menu['core_side_menu'] instanceof \think\Collection || $top_menu['core_side_menu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $top_menu['core_side_menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <li class="<?php echo htmlentities($vo['class']); ?>" data-id="<?php echo htmlentities($vo['id']); ?>"> <a class="item" href="<?php echo htmlentities($vo['url']); ?>" target="<?php echo htmlentities($vo['target']); ?>"> <?php echo htmlentities($vo['title']); ?> </a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>

                    <!-- /子导航 -->
            </div>
        
        <!-- /子导航 -->
    </div>
    <?php endif; ?>
    <!-- /边栏 -->

    <!-- 内容区 -->
    <div id="main-content">
        <div id="top-alert" class="fixed alert alert-error" style="display: none;">
            <button class="close fixed" style="margin-top: 4px;">&times;</button>
            <div class="alert-content">这是内容</div>
        </div>
        
        <div id="main" class="main">
            
            <!-- nav -->
            <?php if(!(empty($_show_nav) || (($_show_nav instanceof \think\Collection || $_show_nav instanceof \think\Paginator ) && $_show_nav->isEmpty()))): ?>
            <div class="breadcrumb">
                <span>您的位置:</span>
                <assign name="i" value="1" />
                <?php if(is_array($_nav) || $_nav instanceof \think\Collection || $_nav instanceof \think\Paginator): if( count($_nav)==0 ) : echo "" ;else: foreach($_nav as $k=>$v): if($i == count($_nav)): ?>
                    <span><?php echo htmlentities($v); ?></span>
                    <?php else: ?>
                    <span><a href="<?php echo htmlentities($k); ?>"><?php echo htmlentities($v); ?></a>&gt;</span>
                    <?php endif; ?>
                    <assign name="i" value="$i+1" />
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <?php endif; ?>
            <!-- nav -->
            

            
	<div class="main-title cf">
		<h2>编辑模型</h2>
	</div>

	<!-- 标签页导航 -->
	<div class="tab-wrap">
		<ul class="tab-nav nav">
			<li data-tab="tab1" class="current"><a href="javascript:void(0);">基 础</a></li>
			<li data-tab="tab2"><a href="javascript:void(0);">设 计</a></li>
			<li data-tab="tab3"><a href="javascript:void(0);">列表定义</a></li>
            <li><a href="<?php echo U('Admin/attribute/index','model_id='.$info['id']); ?>">字段管理</a></li>
		</ul>
		<div class="tab-content">
			<!-- 表单 -->
			<form id="form" action="<?php echo U('update'); ?>" method="post" class="form-horizontal doc-modal-form">
				<!-- 基础 -->
				<div id="tab1" class="tab-pane in tab1">
					<div class="form-item cf">
						<label class="item-label">模型标识<span class="check-tips">（请输入文档模型标识）</span></label>
						<div class="controls">
							<input type="hidden" name="name" value="<?php echo htmlentities($info['name']); ?>"><?php echo htmlentities($info['name']); ?>
						</div>
					</div>
					<div class="form-item cf">
						<label class="item-label">模型名称<span class="check-tips">（请输入模型的名称）</span></label>
						<div class="controls">
							<input type="text" class="text input-large" name="title" value="<?php echo htmlentities($info['title']); ?>">
						</div>
					</div>
					<div class="form-item cf">
						<label class="item-label">所属应用</label>
						<div class="controls">
                                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;if($info['addon'] == $key): ?> <input type="hidden" name="addon" value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($m); ?> <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>                    
				</div>

				<div id="tab2" class="tab-pane tab2">					
					<div class="form-item cf">
					<label class="item-label">新增按钮</label>
					<div class="controls">
                    <input type="radio" name="add_button" value="1" <?php if($info['add_button']==1): ?>checked="checked"<?php endif; ?> > 显示
                    <input type="radio" name="add_button" value="0" <?php if($info['add_button']==0): ?>checked="checked"<?php endif; ?> > 隐藏 
					</div>
				</div>
                <div class="form-item cf">
					<label class="item-label">批量删除按钮</label>
					<div class="controls">
                           <input type="radio" name="del_button" value="1" <?php if($info['del_button']==1): ?>checked="checked"<?php endif; ?> > 显示
                           <input type="radio" name="del_button" value="0" <?php if($info['del_button']==0): ?>checked="checked"<?php endif; ?> > 隐藏 
					</div>
				</div>  
                <div class="form-item cf">
					<label class="item-label">全选复选框</label>
					<div class="controls">
                           <input type="radio" name="check_all" value="1" <?php if($info['check_all']==1): ?>checked="checked"<?php endif; ?> > 显示
                           <input type="radio" name="check_all" value="0" <?php if($info['check_all']==0): ?>checked="checked"<?php endif; ?> > 隐藏 
					</div>
				</div>  
                <div class="form-item cf">
					<label class="item-label">搜索功能</label>
					<div class="controls">
                           <input type="radio" name="search_button" value="1" <?php if($info['search_button']==1): ?>checked="checked"<?php endif; ?> > 显示
                           <input type="radio" name="search_button" value="0" <?php if($info['search_button']==0): ?>checked="checked"<?php endif; ?> > 隐藏 
					</div>
				</div>            
				<div class="form-item cf">
					<label class="item-label">默认搜索字段<span class="check-tips">（默认列表模板的默认搜索项）</span></label>
					<div class="controls">
						<input type="text" class="text input-large" name="search_key" value="<?php echo htmlentities($info['search_key']); ?>">
					</div>
				</div>
				<div class="form-item cf">
					<label class="item-label">列表每页条数<span class="check-tips">（默认列表模板的分页属性）</span></label>
					<div class="controls">
						<input type="text" class="text input-small" name="list_row" value="<?php echo htmlentities((isset($info['list_row']) && ($info['list_row'] !== '')?$info['list_row']:20)); ?>">
					</div>
				</div>
			</div>
            <div id="tab3" class="tab-pane tab3">				
				<div class="form-item cf">
					<label class="item-label">列表定义<span class="check-tips">（默认列表模板的展示规则）</span></label>
					<div style="margin: 15px 0; " class="specTable data-table">
						<table cellspacing="1" cellpadding="0">
							<thead>
								<tr>
                                    <th align="center" style="width: 150px">数据源</th>
									<th align="center">字段</th>
                                    <th align="center" style="width: 150px">列名</th>
									<th align="center" style="width: 100px">宽度</th>
									<th align="center" style="width: 150px">排序</th>
									<th align="center" style="width: 150px">操作</th>
								</tr>
							</thead>
							<tbody id="list_data_tbody">
								<?php if(is_array($list_grid) || $list_grid instanceof \think\Collection || $list_grid instanceof \think\Paginator): $sort = 0; $__LIST__ = $list_grid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cd): $mod = ($sort % 2 );++$sort;$name = $key;if($name=='ids'){ $cd['come_from']=1; } ?>
								<tr class="list_tr" rel="<?php echo htmlentities($sort); ?>">
									<td align="center">
                                    <select name="come_from[<?php echo htmlentities($sort); ?>]" class="select_type">
											<option value="0"<?php if($cd['come_from'] == '0'): ?>selected<?php endif; ?> >表字段 </option>
											<option value="1"<?php if($cd['come_from'] == '1'): ?>selected<?php endif; ?> >管理操作 </option>
									</select></td>
                                    <td align="center">
                                    <div class="select_field">
                                          <select name="field[<?php echo htmlentities($sort); ?>]" class="select_field_event">
                                              <?php if(is_array($fields) || $fields instanceof \think\Collection || $fields instanceof \think\Paginator): $i = 0; $__LIST__ = $fields;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                              <option value="<?php echo htmlentities($key); ?>"<?php if($name == $key): ?>selected<?php endif; ?> ><?php echo htmlentities($vo['title']); ?></option>
                                              <?php endforeach; endif; else: echo "" ;endif; ?>
                                          </select>
                                    </div>
                                    <div class="custom_field">
                                    <table cellspacing="1" cellpadding="0">
                                        <tbody>
                                            <?php if(is_array($cd['href']) || $cd['href'] instanceof \think\Collection || $cd['href'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cd['href'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <tr class="list_tr_tr">
                                                <td align="center" style="width: 100px"><input type="text" value="<?php echo htmlentities($vo['title']); ?>"  class="form-control" name="url_title[<?php echo htmlentities($sort); ?>][]" style="width:100px"></td>
                                                <td align="center" style="width: 150px"><input type="text" value="<?php echo htmlentities($vo['url']); ?>"  class="form-control" name="url_url[<?php echo htmlentities($sort); ?>][]" style="width:150px"></td>
                                                         
                                                <td align="center" style="width: 30px"><a href="javascript:void(0);" onclick="move_up(this)" title="向上"class="sub_move_up">↑</a>&nbsp;&nbsp;&nbsp;
                                                <a href="javascript:void(0);" onclick="move_down(this)" title="向下"class="sub_move_down">↓</a>&nbsp;&nbsp;&nbsp;</td>
                                                <td style="width: 30px"><a href="javascript:void(0);" onclick="remove_tr(this)">删除</a></td>
                                            </tr>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>                              
                                            <tr>
                                                <td colspan="4"><a href="javascript:void(0);" onclick="add_tr_tr(this)">+增加链接</a></td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                    </div>                                    
                                    </td>    
                                    <td align="center"><input type="text" value="<?php echo htmlentities($cd['title']); ?>" class="form-control attr_title" name="attr_title[<?php echo htmlentities($sort); ?>]"></td>                                
									<td align="center"><input type="text" value="<?php echo htmlentities($cd['width']); ?>" class="form-control" name="width[<?php echo htmlentities($sort); ?>]" placeholder="自动" style="width:50px"> px</td>
									<td><input type="radio" name="is_sort[<?php echo htmlentities($sort); ?>]" value="0" <?php if($cd['is_sort']==0): ?>checked="checked"<?php endif; ?> > 不可排序 
                                    <input type="radio" name="is_sort[<?php echo htmlentities($sort); ?>]" value="1" <?php if($cd['is_sort']==1): ?>checked="checked"<?php endif; ?> > 可排序</td>
									<td><a href="javascript:void(0);" onclick="move_up(this)" title="向上"class="move_up">↑</a>&nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0);" onclick="move_down(this)" title="向下"class="move_down">↓</a>&nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0);" onclick="remove_tr(this)">删除</a></td>
								</tr>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								<tr class="more_tr">
									<td colspan="6"><a href="javascript:add_tr()">+增加新列</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>				
			</div>            

			<!-- 按钮 -->
			<div class="form-item cf">
				<label class="item-label"></label>
				<div class="controls edit_sort_btn">
					<input type="hidden" name="id" value="<?php echo htmlentities((isset($info['id']) && ($info['id'] !== '')?$info['id']:0)); ?>" />
					<button class="btn submit-btn ajax-post no-refresh" type="submit"
						target-form="form-horizontal">确 定</button>
					<button class="btn btn-return"
						onclick="javascript:history.back(-1);return false;">返 回</button>
				</div>
			</div>
		</form>
	</div>
</div>
<table style="display: none">
	<tr id="default_tr">
        <td align="center">
        <select name="come_from[sort_id]" class="select_type">
                <option value="0" selected>表字段</option>
                <option value="1">管理操作</option>
        </select> 
        </td>
        <td align="center">
        <div class="select_field">
        <select name="field[sort_id]" class="select_field_event">
                <?php if(is_array($fields) || $fields instanceof \think\Collection || $fields instanceof \think\Paginator): $i = 0; $__LIST__ = $fields;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($vo['title']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        </div>
        <div class="custom_field">
        <table cellspacing="1" cellpadding="0">
            <tbody>
                <tr class="list_tr_tr">
                    <td align="center" style="width: 100px"><input type="text" value="编辑"  class="form-control" name="url_title[sort_id][]" style="width:100px"></td>
                    <td align="center" style="width: 150px"><input type="text" value="[EDIT]"  class="form-control" name="url_url[sort_id][]" style="width:150px"></td>
                             
                    <td align="center" style="width: 30px"><a href="javascript:void(0);" onclick="move_up(this)" title="向上"class="sub_move_up">↑</a>&nbsp;&nbsp;&nbsp;
                    <a href="javascript:void(0);" onclick="move_down(this)" title="向下"class="sub_move_down">↓</a>&nbsp;&nbsp;&nbsp;</td>
                    <td style="width: 30px"><a href="javascript:void(0);" onclick="remove_tr(this)">删除</a></td>
                </tr>
                <tr class="list_tr_tr">
                    <td align="center" style="width: 100px"><input type="text" value="删除"  class="form-control" name="url_title[sort_id][]" style="width:100px"></td>
                    <td align="center" style="width: 150px"><input type="text" value="[DELETE]"  class="form-control" name="url_url[sort_id][]" style="width:150px"></td>
                             
                    <td align="center" style="width: 30px"><a href="javascript:void(0);" onclick="move_up(this)" title="向上"class="sub_move_up">↑</a>&nbsp;&nbsp;&nbsp;
                    <a href="javascript:void(0);" onclick="move_down(this)" title="向下"class="sub_move_down">↓</a>&nbsp;&nbsp;&nbsp;</td>
                    <td style="width: 30px"><a href="javascript:void(0);" onclick="remove_tr(this)">删除</a></td>
                </tr>
                <tr class="list_tr_tr">
                    <td align="center" style="width: 100px"><input type="text" value="预览"  class="form-control" name="url_title[sort_id][]" style="width:100px"></td>
                    <td align="center" style="width: 150px"><input type="text" value="preview?id=[id]"  class="form-control" name="url_url[sort_id][]" style="width:150px"></td>
                             
                    <td align="center" style="width: 30px"><a href="javascript:void(0);" onclick="move_up(this)" title="向上"class="sub_move_up">↑</a>&nbsp;&nbsp;&nbsp;
                    <a href="javascript:void(0);" onclick="move_down(this)" title="向下"class="sub_move_down">↓</a>&nbsp;&nbsp;&nbsp;</td>
                    <td style="width: 30px"><a href="javascript:void(0);" onclick="remove_tr(this)">删除</a></td>
                </tr>                                
                <tr>
                    <td colspan="4"><a href="javascript:void(0);" onclick="add_tr_tr(this)">+增加链接</a></td>
                </tr>
            </tbody>
        </table> 
        </div>
        </td>
        <td align="center"><input type="text" value=""  class="form-control attr_title" name="attr_title[sort_id]"></td>
        <td align="center"><input type="text" value="" class="form-control" name="width[sort_id]" placeholder="自动" style="width:50px"> px</td>
        <td>
        <input type="radio" name="is_sort[sort_id]" value="0" checked="checked"> 不可排序 
        <input type="radio" name="is_sort[sort_id]" value="1"> 可排序</td>
        <td><a href="javascript:void(0);" onclick="move_up(this)" title="向上"class="move_up">↑</a>&nbsp;&nbsp;&nbsp;
        <a href="javascript:void(0);" onclick="move_down(this)" title="向下"class="move_down">↓</a>&nbsp;&nbsp;&nbsp;
        <a href="javascript:void(0);" onclick="remove_tr(this)">删除</a></td>
	</tr>
    <tr id="default_tr_tr">
    <td align="center" style="width: 100px"><input type="text" value=""  class="form-control" name="url_title[sort_id][]" style="width:100px"></td>
    <td align="center" style="width: 150px"><input type="text" value=""  class="form-control" name="url_url[sort_id][]" style="width:150px"></td>             
    <td align="center" style="width: 30px"><a href="javascript:void(0);" onclick="move_up(this)" title="向上"class="sub_move_up">↑</a>&nbsp;&nbsp;&nbsp;
    <a href="javascript:void(0);" onclick="move_down(this)" title="向下"class="sub_move_down">↓</a>&nbsp;&nbsp;&nbsp;</td>
    <td style="width: 30px"><a href="javascript:void(0);" onclick="remove_tr(this)">删除</a></td>
</tr>
</table>


        </div>
        <div class="cont-ft">
            <div class="copyright">
                <div class="fl">感谢使用<a href="https://www.weiphp.cn" target="_blank">WeiPHP</a>管理平台</div>
                <div class="fr">V<?php echo config('SYSTEM_UPDATRE_VERSION'); ?></div>
            </div>
        </div>
    </div>
    <!-- /内容区 -->
    <script type="text/javascript">
	var  IMG_PATH = "/weiphp/public/admin/images";
	var  STATIC = "/weiphp/public/static";
	var  ROOT = "/weiphp/public";
	var  UPLOAD_PICTURE = "<?php echo U('home/File/upload_picture',array('session_id'=>session_id())); ?>";
	var  UPLOAD_FILE = "<?php echo U('home/File/upload',array('session_id'=>session_id())); ?>";
    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "/weiphp/public", //当前网站地址
            "APP"    : "__APP__", //当前项目地址
            "PUBLIC" : "/weiphp/public", //项目公共目录地址
            "DEEP"   : "<?php echo config('URL_PATHINFO_DEPR'); ?>", //PATHINFO分割符
            "MODEL"  : ["<?php echo config('URL_MODEL'); ?>", "<?php echo config('URL_CASE_INSENSITIVE'); ?>", "<?php echo config('URL_HTML_SUFFIX'); ?>"],
            "VAR"    : ["<?php echo config('VAR_MODULE'); ?>", "<?php echo config('VAR_CONTROLLER'); ?>", "<?php echo config('VAR_ACTION'); ?>"]
        }
    })();
    </script>
    <script type="text/javascript" src="/weiphp/public/static/think.js?v=<?php echo SITE_VERSION; ?>"></script>
    <script type="text/javascript" src="/weiphp/public/static/jquery.dragsort-0.5.2.min.js"></script>
    <script type="text/javascript" src="/weiphp/public/static/base/js/admin_common.js?v=<?php echo SITE_VERSION; ?>"></script>
    <script type="text/javascript">
        +function(){
            var $window = $(window), $subnav = $("#subnav"), url;
            $window.resize(function(){
                $("#main").css("min-height", $window.height() - 130);
            }).resize();

            /* 左边菜单显示收起 */
            $("#subnav").on("click", "h3", function(){
                var $this = $(this);
                $this.find(".icon").toggleClass("icon-fold");
                $this.next().slideToggle("fast").siblings(".side-sub-menu:visible").
                      prev("h3").find("i").addClass("icon-fold").end().end().hide();
            });

            $("#subnav h3 a").click(function(e){e.stopPropagation()});

            /* 头部管理员菜单 */
            $(".user-bar").mouseenter(function(){
                var userMenu = $(this).children(".user-menu ");
                userMenu.removeClass("hidden");
                clearTimeout(userMenu.data("timeout"));
            }).mouseleave(function(){
                var userMenu = $(this).children(".user-menu");
                userMenu.data("timeout") && clearTimeout(userMenu.data("timeout"));
                userMenu.data("timeout", setTimeout(function(){userMenu.addClass("hidden")}, 100));
            });

	        /* 表单获取焦点变色 */
	        $("form").on("focus", "input", function(){
		        $(this).addClass('focus');
	        }).on("blur","input",function(){
				        $(this).removeClass('focus');
			        });
		    $("form").on("focus", "textarea", function(){
			    $(this).closest('label').addClass('focus');
		    }).on("blur","textarea",function(){
			    $(this).closest('label').removeClass('focus');
		    });

            // 导航栏超出窗口高度后的模拟滚动条
            var sHeight = $(".sidebar").height();
            var subHeight  = $(".subnav").height();
            var diff = subHeight - sHeight; //250
            var sub = $(".subnav");
            if(diff > 0){
                $(window).mousewheel(function(event, delta){
                    if(delta>0){
                        if(parseInt(sub.css('marginTop'))>-10){
                            sub.css('marginTop','0px');
                        }else{
                            sub.css('marginTop','+='+10);
                        }
                    }else{
                        if(parseInt(sub.css('marginTop'))<'-'+(diff-10)){
                            sub.css('marginTop','-'+(diff-10));
                        }else{
                            sub.css('marginTop','-='+10);
                        }
                    }
                });
            }
        }();
    </script>
    
<script type="text/javascript" src="/weiphp/public/static/jquery.dragsort-0.5.2.min.js"></script> 
<script	type="text/javascript" charset="utf-8">


function init(){
	hide_move()
	hide_sub_move()
	
	$('.select_type').each(function(){ select_type(this); });
	$('.select_type').change(function(){ select_type(this); });
	
	$('.select_field_event').each(function(){ select_field_event(this); });
	$('.select_field_event').change(function(){ select_field_event(this); });
}

$(function(){
    showTab()
	//add_tr()
	init()
	
	//拖曳插件初始化
	$(".needdragsort").dragsort({
	     dragSelector:'li',
	     placeHolderTemplate: '<li class="draging-place">&nbsp;</li>',
	     dragBetween:true,	//允许拖动到任意地方
	     dragEnd:function(){
	    	 var self = $(this);
	    	 self.find('input').attr('name', 'field_sort[]');
	     }
	 });	
});

//增加问题
var tr_sort_id = 0;
function add_tr(){
	var list_count = 0;
	$('.list_tr').each(function() {
		list_count += 1;
		var sort_id = $(this).attr('rel');
		if(sort_id>tr_sort_id) tr_sort_id = sort_id;
    });	
	
	tr_sort_id += 1;
	
	re = new RegExp("sort_id", "g");
	str  = $('#default_tr').html().replace(re, tr_sort_id);
	//console.log(str);
	var html = '<tr class="list_tr" rel="'+tr_sort_id+'">'+ str +'</tr>';
	if(list_count==0)
	  $('#list_data_tbody tr').before(html);	
	else
	  $('.list_tr:last').after(html);
	  
	init()
}
function add_tr_tr(_this){
    var tr_sort_id = $(_this).parents('.list_tr').attr('rel')
	
	re = new RegExp("sort_id", "g");
	str  = $('#default_tr_tr').html().replace(re, tr_sort_id);
	console.log(str);
	var html = '<tr class="list_tr_tr" rel="'+tr_sort_id+'">'+ str +'</tr>';

	$(_this).parent().parent().parent().before(html);	

	  
	init()
}
//删除问题
function remove_tr(_this){	
	$(_this).parent().parent().remove();
	init()
}
//排序--向上
function move_up(obj) { 
  var objParentTR = $(obj).parent().parent(); 
  var prevTR = objParentTR.prev(); 
  if (prevTR.length > 0) { 
	prevTR.insertAfter(objParentTR); 
  }
  init()
} 
//排序--向下
function move_down(obj) { 
  var objParentTR = $(obj).parent().parent(); 
  var nextTR = objParentTR.next(); 
  if (nextTR.length > 0) { 
	nextTR.insertBefore(objParentTR); 
  } 
  init()
} 
//第一行只显示向下，最后一行只显示向上
function hide_move(){
	$('.move_up').each(function() {
		$(this).show();
    });
	$('.move_down').each(function() {
		$(this).show();
    });	
	$('.list_tr:first').find('.move_up').hide();
	$('.list_tr:last').find('.move_down').hide();
}
function hide_sub_move(){
	$('.sub_move_up').each(function() {
		$(this).show();
    });
	$('.sub_move_down').each(function() {
		$(this).show();
    });	
	$('.custom_field').each(function() {
          $(this).find('.list_tr_tr:first').find('.sub_move_up').hide();
	      $(this).find('.list_tr_tr:last').find('.sub_move_down').hide();
    });
}

//选择问题类型
function select_type(_this){
	var type = $(_this).val();
	
	var input = $(_this).parents('.list_tr').find('.attr_title')
	var field_title = $(_this).parents('.list_tr').find('.select_field_event').find("option:selected").text();

	var old_val = input.val()
	if(type==1){
		$(_this).parent().next().find('.select_field').hide();
		$(_this).parent().next().find('.custom_field').show();

		if(old_val==''|| old_val==field_title){
			input.val('操作')
		}
	}else{
		$(_this).parent().next().find('.select_field').show();
		$(_this).parent().next().find('.custom_field').hide();
		
		if(old_val=='操作'){
			input.val(field_title)
		}
	}
}
function select_field_event(_this){
	var name = $(_this).find("option:selected").text()
	var input = $(_this).parents('.list_tr').find('.attr_title')
	var old_val = input.val()

	if(old_val==''){
	    input.val(name)
	}else{
		var flat = false
		$(_this).find('option').each(function (){  

			if($(this).text()==old_val){
			    flat = true 
			}
        });
		
		if(flat){
			input.val(name)
		}
	}
}
</script>
</body>
</html>
