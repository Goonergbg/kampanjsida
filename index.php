<?php get_header(); ?>

<section class="container content">
<div class="row">
<?php while(have_posts()): the_post(); ?>

<div class="col-xs-12 col-md-6 col-lg-4 entry">
<div class="entry-content" style="border-bottom: 1px solid black;">
<h3><?php the_title(); ?></h3>
<p>
Publicerat: <span> <?php the_time(get_option('date_format') ); ?></span>
</p>
<a href="<?php the_permalink(); ?>" class="btn btn-success">Läs Mer</a>
</div>
</div>

<?php endwhile; ?>
</div>
</section>

<?php get_footer(); ?>
