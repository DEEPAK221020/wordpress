<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
?>

<div class="container align-items-center text-center">
    <div class="car-details">
        <h1><?php the_title(); ?></h1>
        <?php the_post_thumbnail('medium', ['class' => 'img-thumbnail']); ?>
        <h6 class="card-subtitle mb-2 text-body-secondary"> <span class="brnd"> <?php echo get_the_terms(get_the_ID(), 'brand')[0]->name; ?> </span> | <span class="yr"> <?php echo get_the_terms(get_the_ID(), 'year')[0]->name; ?></span> | <span class="mdl"><?php echo get_the_terms(get_the_ID(), 'model')[0]->name; ?></span></h6> <br>

        <p> <?php the_content();?> </p>
        
        <a href="http://localhost/webart-test/"> Back To Home </a>
        
        </div>
    </div>
<?php
    endwhile;
endif;
get_footer();




?>