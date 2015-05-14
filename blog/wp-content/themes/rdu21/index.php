<?php get_header(); ?>
<body>
	 
    <div class="wrap wrap-l">
		<?php rewind_posts(); ?>
		<?php query_posts( $query_string.'posts_per_page=10'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		
		<article class="post">
			<a href="<?php the_permalink(); ?>">
			<figure>
				<?php the_post_thumbnail('medium'); ?>
			</figure>
			<header class="post-header">
				<h3 class="post-titulo"><?php the_title(); ?></h3>
			</header>
			</a>
			<footer class="post-footer">
				<p class="post-autor"><?php the_author_nickname(); ?></p>
				<div class="post-date"><?php unset($previousday);the_date('Y-m-d');?></div>
			</footer>
		</article>

		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
			<h3>No hemos encontrado nada</h3>
		<?php endif; ?>
		</div>
<?php get_footer(); ?>