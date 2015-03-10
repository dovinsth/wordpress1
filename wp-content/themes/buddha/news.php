<?php 
/*
Template Name: News page
*/
?>


<?php get_header(); ?> 

<!-- This is News page.. -->


<?php $args = array(
    'numberposts' => 5,
    'offset' => 0,
    'category' => get_cat_ID('news') ,
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


<h2>Recent Posts</h2>

        <h1>
<?php   
    if ($recent_posts)
    {

        foreach( $recent_posts as $recent ){

            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
            echo "<BR>";
        }
    }
    else
        {
            echo "Sorry, there is no content right now in this section. We will be updating very soon.";
        }
    
?>

        </h1>
    </div>
</div>




<?php get_footer();?>
