<footer>
<div class="container">
<div class="row">
<?php 
if( have_rows('content', 'option') ):
while ( have_rows('content', 'option') ) : the_row();
if( get_row_layout() == 'footer1' ):
$titleFooter1 = get_sub_field('title', 'option');
$link = get_sub_field('link', 'option');
$linkText = get_sub_field('link_text', 'option');
elseif( get_row_layout() == 'footer2' ): 
$titleFooter2 = get_sub_field('title', 'option');
$textFooter2 = get_sub_field('text', 'option');
elseif( get_row_layout() == 'footer3' ): 
$titleFooter3 = get_sub_field('title', 'option');
$textFooter3 = get_sub_field('text', 'option');
elseif( get_row_layout() == 'copyright_footer' ): 
$copyrightText = get_sub_field('text', 'option');
?>

<div class="col-sm-4">
<h3><?php echo $titleFooter1; ?></h3>
<p><a href="<?php echo $link; ?>"><?php echo $linkText; ?></a></p>
</div>
<div class="col-sm-4">
<h3><?php echo $titleFooter2; ?></h3>
<p><?php echo $textFooter2; ?></p>

</div>
<div class="col-sm-4">
<h3><?php echo $titleFooter3; ?></h3>
<p><?php echo $textFooter3; ?></p>

</div>
</div>
</div>
<p class="text-center site-info">
<?php echo $copyrightText; ?> <?php echo date('Y'); ?>
</p>

<?php 
endif; 
endwhile;
endif;
?>
</footer>
<?php wp_footer(); ?>
</body>

</html>
