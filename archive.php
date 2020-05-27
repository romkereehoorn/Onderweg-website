<?php get_header();?>

<div class="uk-container">

<h1><?php single_cat_title();?></h1>

<?php if (have_posts()) : while(have_posts()) : the_post();?>

    <div class="uk-card">
        <div class="uk-card-body">
            <h3><?php the_title();?></h3>
            <?php the_excerpt();?>
            <a href="<?php the_permalink();?>" class="uk-button uk-button-default">Read More</a>
        </div>
   </div>

<?php endwhile; endif;?>

</div>


<?php get_footer();?>