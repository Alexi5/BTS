<?php
 */
get_header(); ?>
<div class="clear"></div>
</header> <!-- / END HOME SECTION  -->
<div id="content" class="site-content">
	<div class="container">
	<?php
		<div id="primary" class="content-area">
			<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); 
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					endwhile; 
			</main><!-- #main -->
		</div><!-- #primary -->
	<?php
	</div><!-- .container -->
<?php get_footer(); ?>