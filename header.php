<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/gotop.js"></script>
<!--[if lte IE	6]>
<script type="text/javascript" src="http://www.webrebuild.org/webrebuild_api.js"></script>
<![endif]-->
</head>
<?php flush(); ?>
<body>
<div class="wrap">
	<div class="head">
    	<div class="logo_hold">
        	<h1 class="logo">
            	<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
            </h1>
        </div>
        
      <!--  <ul class="nav">
            <li class="nav-index active"><a class="nav-item" href="#">首页</a></li>
            <li class="nav-explore"><a class="nav-item" href="#">发现</a></li>
        </ul>
        -->
 <ul class="nav">
<li<?php if (is_home()) { echo ' class="current-cat"';} ?>><a title="Home" class="nav-item"  href="/">首页</a></li>
<?php
$currentcategory = '';

// 以下这行代码用于在导航栏添加分类列表，
// 如果你不想添加分类到导航中，
// 请删除 54 - 64 行代码
if  (!is_page() && !is_home()) {
    $catsy = get_the_category();
    $myCat = $catsy[0]->cat_ID;
    $currentcategory = '&current_category='.$myCat;
}
//目录列表(已屏蔽)
// wp_list_categories('depth=1&title_li=&show_count=0&hide_empty=0&child_of=0'.$currentcategory);
// 以下这行代码用于在导航栏添加页面列表
// 如果你不想添加页面到导航中，
// 请删除63 - 64行代码
wp_list_pages('depth=1&title_li=&exclude=104&sort_column=menu_order');
?>
</ul>
        <div class="user">
        	<a class="login" href="/wp-login.php">登陆</a>
        	<a class="register" href="/wp-register.php">注册</a>
        </div>
      <?php $rand_posts = get_posts('numberposts=1&orderby=rand&category=6');  foreach( $rand_posts as $post ) : ?>
   <li class="hi"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
      	<!--<?php wp_list_pages('depth=1&include=68&title_li='); ?>-->
    </div>