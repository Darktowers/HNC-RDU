<?php get_header(); ?>
<body>
	 
    <div class="wrap-single">
		<?php rewind_posts(); ?>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		
		<article class="article">
			<header class="article-header">
				<figure class="article-img">
					<?php the_post_thumbnail('full'); ?>
				</figure>
				<div class="wrap">
			      	<h1 class="article-title"><?php the_title(); ?></h1>
				</div>
			</header>
		<div class="content">
			<footer class="article-footer">
				<figure class="author-img">
					<?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?>
				</figure>
				<p class="article-autor"><?php the_author_nickname();  ?></p>
				<div class="article-date"><?php unset($previousday);the_date('Y-m-d');?></div>
			</footer>
		</div>
		<div class="content post-content">
			<?php the_content(); ?>	
		</div>
		</article>

		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
			<h3>No hemos encontrado nada</h3>
		<?php endif; ?>
		</div>
</body>
</html>