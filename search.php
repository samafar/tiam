<?php
/**
 * The template for displaying search results pages
 *
 * @link https://github.com/samafar/tiam/blob/master/search.php
 *
 * @package Tiam
 */

get_header();
?>

<?php 

if (have_posts()): 
printf(esc_html__('Search Results for: %s', 'tiam'), '<span>' . get_search_query() . '</span>');

while (have_posts()):
    the_post();

/**
 * Run the loop for the search to output the results.
 * If you want to overload this in a child theme then include a file
 * called content-search.php and that will be used instead.
 */
    get_template_part('template-parts/content', 'search');

endwhile;

the_posts_navigation();

else:

    get_template_part('template-parts/content', 'none');

endif;
?>

<?php
get_sidebar();
get_footer();
