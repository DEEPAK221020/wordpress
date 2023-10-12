<?php
get_header();

?>

<div class="container top-sec mt-5">
    <div class="row sec1">



    <div class="col-3">

    <div class="row mb-3"> <h3><b> Filter </b></h3></div> 

<div class="brands"> All Brands </div>
<?php
        $brands = get_terms('brand');
        $brn=1;
        foreach ($brands as $brand)
       {
       ?>
<div class="form-check">
                  <input id="<?php echo "cb-brand-".$brn; ?>" class="cb-brand form-check-input" type="checkbox" name="brands[]" value="<?php echo $brand->name ; ?>" />
                  <label class="form-check-label" for="<?php echo "cb-brand-".$brn; ?>"><?php echo $brand->name ; ?></label>
                </div>
                <?php 
            $brn++;
            }  ?>

<br> 
                <!-- Years -->

                <div class="years"> All Years </div>
<?php
        $years = get_terms('year');

        $yrs = 1;

        foreach ($years as $year)
       {
       ?>
<div class="form-check">
                  <input id="<?php echo "cb-year-".$yrs; ?>" class="cb-year form-check-input" type="checkbox" name="years[]" value="<?php echo $year->name ; ?>" />
                  <label class="form-check-label" for="<?php echo "cb-year-".$yrs; ?>"><?php echo $year->name ; ?></label>
                </div>
                <?php  
            $yrs++;
            
            }  ?>

<br>
<!-- Models -->

<div class="models"> All Models </div>
<?php
        $models = get_terms('model');
        $mdl=1;
        foreach ($models as $model)
       {
       ?>
<div class="form-check">
                  <input id="<?php echo "cb-model-".$mdl; ?>" class="cb-model form-check-input" type="checkbox" name="models[]" value="<?php echo $model->name ; ?>" />
                  <label class="form-check-label" for="<?php echo "cb-model-".$mdl; ?>"><?php echo $model->name ; ?></label>
                </div>
                <?php
            $mdl++;
            }  ?>

</div>



        <div class="col-9" id="car-listings">

        <div class="row">

<?php
$args = array(
    'post_type' => 'cars',
    'posts_per_page' => -1,
);

$cars = new WP_Query($args);

if ($cars->have_posts()) :
    while ($cars->have_posts()) : $cars->the_post();
?>

<div class=" mycard col-4 <?php echo get_the_terms(get_the_ID(), 'brand')[0]->name.' '.get_the_terms(get_the_ID(), 'year')[0]->name.' '.get_the_terms(get_the_ID(), 'model')[0]->name; ?> ">
    <div class="card mb-5 " style="width: 18rem;">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h4 class="card-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
    <h6 class="card-subtitle mb-2 text-body-secondary"> <span class="brnd"> <?php echo get_the_terms(get_the_ID(), 'brand')[0]->name; ?> </span> | <span class="yr"> <?php echo get_the_terms(get_the_ID(), 'year')[0]->name; ?></span> | <span class="mdl"><?php echo get_the_terms(get_the_ID(), 'model')[0]->name; ?></span></h6>
  </div>        
</div>
</div>
      
<?php
    endwhile;
endif;
wp_reset_postdata();

?>

</div>

</div>



</div>
</div>

<?php


get_footer();
