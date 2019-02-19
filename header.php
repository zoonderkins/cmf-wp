<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style/content.css?v=1.2">
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
		<a href="<?php echo site_url(); ?>" class="logo">
				<img src="<?php bloginfo('template_directory')?>/img/logo.png" alt="">
			</a>
    <?php
			wp_nav_menu( array(
        'container' => 'ul',
        'menu' => 'menu1',
        'menu_class' => 'menu'
        ) );
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