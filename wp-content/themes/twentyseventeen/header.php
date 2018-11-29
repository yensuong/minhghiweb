<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="minhghisite">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<!--? php get_template_part( 'template-parts/header/header', 'image' ); ?-->

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php



	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	// if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
	// 	echo '<div class="single-featured-image-header">';
	// 	echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
	// 	echo '</div><!-- .single-featured-image-header -->';
	// endif;
if ( (  ( is_page() && ! twentyseventeen_is_frontpage() ) )  ) :
        if(has_post_thumbnail( get_queried_object_id() )){
            $banner = get_the_post_thumbnail_url(get_queried_object_id(), 'full');
        }else{
            $bannerInfo = wp_get_attachment_image_src(212, 'full');
            $banner = $bannerInfo[0];
        }
        echo '<div class="subbanner">';
        echo '<div class="single-featured-image-header" style="background-image: url(\''.$banner.'\')">';
        //echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
        echo '</div><!-- .single-featured-image-header -->';
        $custom = get_post_custom();
        if(isset($custom['subbanner-label']) || isset($custom['subbanner-sublabel'])){
            echo '<div class="container">';
            if(isset($custom['subbanner-sublabel'])){
                echo '<div class="subbanner-sublabel">'.$custom['subbanner-sublabel'][0].'</div>';
            }
            if(isset($custom['subbanner-label'])){
                echo '<div class="subbanner-label">'.$custom['subbanner-label'][0].'</div>';
            }
            echo '</div>';
        }
        echo '</div><!-- subbanner -->';
    elseif( is_single() || is_category() || is_tax() || is_search()):
        $banner = wp_get_attachment_image_src(212, 'full');
		$logan = '';
		switch(pll_current_language()){
			case 'en':
				$logan = get_option( 'activity_en', '' );
			break;
			case 'vi':
				$logan = get_option( 'activity_vi', '' );
			break;
		}
		
        $style = '';
        if($banner){
            $style = 'style="background-image: url(\''.$banner[0].'\')"';
        }
        echo '<div class="subbanner">';
        echo '<div class="single-featured-image-header" '.$style.'>';
        //echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
        echo '</div><!-- .single-featured-image-header -->';
        echo '<div class="container">';
        echo '<div class="subbanner-sublabel">'.$logan.'</div>';
        //echo '<div class="subbanner-label">'.'research'.'</div>';
        echo '</div>';
        echo '</div><!-- subbanner -->';
    endif;


	?>
	<?php echo do_shortcode( '[responsive_slider]' ); ?>
	<div class="site-content-contain">
		<div id="content" class="site-content">
