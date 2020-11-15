<?php get_header(); ?>

<?php 
if( have_rows('content', 'option') ):
while ( have_rows('content', 'option') ) : the_row();
if( get_row_layout() == 'frontpage' ):
$title = get_sub_field('title', 'option');
$pickedPosts = get_sub_field('picked_posts', 'option');
?>

<h2 class="text-center" style="margin-top: 15px;"><?php echo $title ?></h2>
<section class="container content">
<div class="row">
<?php if( $pickedPosts ): ?>
<?php foreach( $pickedPosts as $pickedPost ): 
$permalink = get_permalink( $pickedPost->ID );
$postTitle = get_the_title( $pickedPost->ID );
$postDate = get_the_date( 'j F Y ', $pickedPost->ID);
?>
<div class="col-xs-12 col-md-6 col-lg-4 entry">
<div class="entry-content">

<h3><?php echo $postTitle; ?></h3>
<p>
Publicerat: <span><?php echo $postDate; ?></span></span>
</p>
<a href="<?php echo esc_url($permalink); ?>" class="btn btn-success">Läs Mer</a>
</div>
</div>
<?php endforeach; ?>
<?php endif; ?>

</div>
</section>

<?php endif; 
endwhile;
endif;
?>

<?php get_footer(); ?>
