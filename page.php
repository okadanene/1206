<?php get_header();?>
<main>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: ?>
    <?php endif; ?>
</main>
<!-- セクション3ここまで -->
<?php get_footer(); ?>
