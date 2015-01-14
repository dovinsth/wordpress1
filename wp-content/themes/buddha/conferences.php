<?php 
/*
Template Name: Conferences page
*/
?>


<?php get_header(); ?> 




<?php $args = array(
    'numberposts' => 5,
    'offset' => 0,
    'category' => get_cat_ID('conferences') ,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'include' => '',
    'exclude' => '',
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );

    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>
<div class="container_12">
    <div class="grid_10">

<!-- Add photo plugin here -->  

        <h2>
<?php   
    foreach( $recent_posts as $recent ){

        echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
    }
?>

        </h2>
    </div>
</div>



<?php get_footer();?>