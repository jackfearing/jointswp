<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->

	<section class="entry-content group" itemprop="articleBody">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
	</section> <!-- end article section -->

	<?php get_template_part( 'parts/content', 'social' ); ?>

	<?php get_template_part( 'parts/nav', 'footer-tags' ); ?>

</article> <!-- end article -->