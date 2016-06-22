<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>后台管理中心</title>

	<link rel="stylesheet" href="http://localhost/news_publish/img/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="img/css/ie.css" type="text/css" media="screen" />
	<script src="img/js/html5.js"></script>
	<![endif]-->
	<script src="http://localhost/news_publish/img/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="http://localhost/news_publish/img/js/hideshow.js" type="text/javascript"></script>
	<script src="http://localhost/news_publish/img/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://localhost/news_publish/img/js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function()
    	{
      	  $(".tablesorter").tablesorter();
   	 }
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="#">后台管理面板</a></h1>
			<h2 class="section_title"></h2><div class="btn_view_site"><a href="index.php">查看网站</a></div>
		</hgroup>
	</header> <!-- end of header bar -->

	<section id="secondary_bar">
		<div class="user">
			<p>admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php?c=admin">后台管理中心</a> <div class="breadcrumb_divider"></div> <a class="current">首页</a></article>
		</div>
	</section><!-- end of secondary bar -->

	<aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="index.php?c=admin&a=newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="index.php?c=admin&a=showNewsList">管理新闻</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="index.php?c=admin&a=loginOut">退出登录</a></li>
	</ul>

	<footer>

	</footer>
</aside><!-- end of sidebar -->

	<section id="main" class="column">
		<article class="module width_full">
			<header><h3>站点统计</h3></header>
			<div class="module_content">
				<p>本站共有新闻<?php echo ($newsnum); ?>篇</p>
				<div class="clear"></div>
			</div>
		</article><!-- end of stats article -->

		<div class="clear"></div>

		<div class="spacer"></div>
	</section>


</body>

</html>