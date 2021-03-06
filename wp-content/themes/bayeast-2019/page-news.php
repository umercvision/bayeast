<?php
/**
 * The template for displaying all projects
 *
 * Template Name: News
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bay_East_2019
 */
 get_header();

 ?>
 <div id="primary" class="content-area">
 	<main id="main" class="site-main">
   <?php get_template_part( 'template-parts/hero' );?>

   <div class="blog_content">
     <div class="container">
       <?php
       while ( have_posts() ) :
         the_post();
         get_template_part( 'template-parts/content', 'page' );
       endwhile; // End of the loop.
       ?>
     </div>
   </div>

 	<div class="posts-group">
		<div class="posts-filter_container">
		</div>
		<div class="posts-listing_container container">
		</div>

    <div class="posts-pagination_container container">
		</div>
 	</div>
 	</main><!-- #main -->
 </div><!-- #primary -->
 <?php
 // get_sidebar();
 get_footer();
