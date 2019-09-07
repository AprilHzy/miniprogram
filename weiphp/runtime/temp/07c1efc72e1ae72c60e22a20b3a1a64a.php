<?php /*a:2:{s:75:"D:\program\xampp\htdocs\weiphp\application\install/view/index/complete.html";i:1564394434;s:71:"D:\program\xampp\htdocs\weiphp\application\install\view\index\base.html";i:1564394434;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WeiPHP 安装</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="/weiphp/public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/weiphp/public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/weiphp/public/install/css/install.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
        <![endif]-->
        <script src="/weiphp/public/static/jquery-1.10.2.min.js"></script>
        <script src="/weiphp/public/static/bootstrap/js/bootstrap.js"></script>
    </head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="nav-collapse collapse">
                    	<p class="install_logo"><span><img width="50px;" src="/weiphp/public/install/images/install.png"/></span></p>
                    	<ul id="step" class="nav">
                    		
     <li class="done"><a href="javascript:;"><span>&nbsp;&nbsp;</span>安装协议</a></li>
    <li class="done"><a href="javascript:;"><span>&nbsp;&nbsp;</span>环境检测</a></li>
    <li  class="done"><a href="javascript:;"><span>&nbsp;&nbsp;</span>创建数据库</a></li>
    <li class="done"><a href="javascript:;"><span>&nbsp;&nbsp;</span><?php if(app('session')->get('update') == '1'): ?>升级<?php else: ?>安装<?php endif; ?></a></li>
    <li class="done"><a href="javascript:;"><span>&nbsp;&nbsp;</span>完成</a></li>

                    	</ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron masthead">
            <div class="container">
                
    <p><center><?php if(app('session')->get('update') == '1'): ?>升级<?php else: ?>安装<?php endif; ?>完成！</center></p>
	<?php if(isset($info)): ?>
	<?php echo htmlentities($info); ?>
	<?php endif; ?>

            </div>
        </div>


        <!-- Footer
        ================================================== -->
        <footer class="footer">
            <div class="container">
                <div>
                	
    <a class="btn btn-primary btn-large" href="<?php echo SITE_URL; ?>/index.php?s=admin">登录后台</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a class="btn btn-success btn-large" href="<?php echo SITE_URL; ?>/index.php">访问首页</a>

                </div>
            </div>
        </footer>
    </body>
</html>
