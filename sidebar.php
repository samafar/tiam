<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://github.com/samafar/tiam/
 *
 * @package Tiam
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>