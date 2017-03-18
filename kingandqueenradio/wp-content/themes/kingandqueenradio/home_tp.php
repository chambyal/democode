<?php
/*
 * Template Name: Home template
 */
get_header(); ?>
<!--div class="slider">
<img src="<?php // echo get_stylesheet_directory_uri(); ?>/images/banner.png" alt=""  />
<!--div class="site-content">
</div-->
</div!-->
<div id="content" class="site-content">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

<div class="bottom-section">

<div class="latest">
<h2>Latest Varieties posts</h2>
<?php
 $postslist = get_posts('numberposts=2&order=DESC&orderby=date');
 foreach ($postslist as $post) :
    setup_postdata($post);
 ?>
		<div class="post-content">
			<?php twentysixteen_post_thumbnail(); ?>
	
			<div class="intro-post"><?php the_title( sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			
		<?php the_excerpt( ); ?>
	
<a class="readmore" href="<?php the_permalink(); ?>"> Read More &rarr; </a>

	
		</div></div>
 <?php endforeach; ?>
</div>
		
<div class="varieties">

<?php get_sidebar(); ?>

<!--ul>
<?php /*
	$args = array( 'numberposts' => '10' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .  $recent["post_title"].'</a> </li> ';
	}
 */?>
</ul-->
</div>
</div>
		
	</main><!-- .site-main -->

	<?php // get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php// get_sidebar(); ?>
<?php get_footer(); ?>
