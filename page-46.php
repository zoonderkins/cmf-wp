<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style/style.css?ver=1.1">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/fontawesome/css/fontawesome-all.css">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/img/favicon.png">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/style.js"></script>
	<?php wp_head(); ?>
</head>

<body >
	<div class="container">
    <a id="hamburger-icon" href="#" title="Menu">
			<span class="line line-1"></span>
			<span class="line line-2"></span>
			<span class="line line-3"></span>
		</a>
		<div class="left">
			<a href="<?php echo site_url(); ?>" class="logo">
				<img src="<?php bloginfo('template_directory')?>/img/logo.png" alt="">
			</a>
			<a href="#" class="intro">
				<div class="title">關於<br>蒙特梭利</div>
			</a>
		</div>
		<div class="right">
    <?php
			wp_nav_menu( array(
        'container' => 'ul',
        'menu' => 'menu1',
        'menu_class' => 'menu'
				) );
				// if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher ();
		?>
		
			<div class="marquee1">
			<?php $query = new WP_Query( array( 'post_type' => 'marquee' ) );
						if ( $query->have_posts() ) : 
						?>
						<marquee>
						<ul>
					<?php 
						while ( $query->have_posts() ) : $query->the_post();
						?>
							<li> <a  href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></li>
  					<?php
						endwhile;
						?> 
						</ul>
						</marquee>
						<?php
						endif ;
						wp_reset_postdata();
						?>
			</div>
			<div class="banner"> 
				<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
			</div>
			<div class="content">
				<div class="news">
					<a href="#" class="title">最新消息</a>

					<?php $query = new WP_Query(array( 'category_name' => 'latest-news',
					 	'posts_per_page' => 10
				));
						if ( $query->have_posts() ) : 
						?>
						<ul class="news-feed">
						<?php 
						while ( $query->have_posts() ) : $query->the_post();
						?>
							<li> <a class="news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></li>
    					<!--  the_content() ; -->
  					<?php
						endwhile;
						?> 
						</ul>
						<?php
						endif ;
						wp_reset_postdata();
						?>
				</div>
				<div class="social">
					<a href="https://www.facebook.com/montessoritwfans" class="media fb">
						<img src="<?php bloginfo('template_directory')?>/img/fb.png" alt="">
						<div class="text">Facebook</div>
					</a>
					<a href="https://www.youtube.com/user/montessori7188/feed" class="media youtube">
						<img src="<?php bloginfo('template_directory')?>/img/yt.png" alt="">
						<div class="text">Youtube</div>
					</a>
					<a href="" class="media wechat">
						<img src="<?php bloginfo('template_directory')?>/img/wc.png" alt="">
						<div class="text">微信公眾</div>
					</a>
					<a href="" class="media weibo">
						<img src="<?php bloginfo('template_directory')?>/img/wb.png" alt="">
						<div class="text">新浪微博</div>
					</a>
				</div>
			</div>
		</div> <!-- END right -->
					</div>
<?php 
	get_footer();?>
