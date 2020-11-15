<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head();  ?>
</head>
<body <?php body_class(); ?>>

<?php 
if( have_rows('content', 'option') ):
while ( have_rows('content', 'option') ) : the_row();
if( get_row_layout() == 'nav' ):
$logo = get_sub_field('logo', 'option');
elseif( get_row_layout() == 'header' ): 
$headerImage = get_sub_field('header_image', 'option');
?>
<header class="site-header" style="background-image:url(<?php echo $headerImage; ?>);">
<nav>
<div class="container">
<div class="row">
<a href="<?php echo esc_url(home_url('/')) ?>">
<img src="<?php echo $logo; ?>">
</a>
</div> 
</div> 
</nav> 

<?php endif; 
endwhile;
endif;
?>

<div class="container">
<div class="row">
<div class="col-md-7">
<div class="page-title">
<?php if(is_front_page() || is_home()):  ?>
<?php $description = get_bloginfo('name');?>
<h1 class="title"><span><?php echo $description; ?></span></h1>
<?php else: ?>
<h1 class="title"><span><?php the_title(); ?></span></h1>
<?php endif; ?>
</div>
</div>
</div>
</div>
</header>
