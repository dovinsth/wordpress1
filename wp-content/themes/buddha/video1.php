<?php 
/*
Template Name: Video1 page
*/
?>


<?php get_header(); ?> 



<?php $page_id = get_ID_by_slug("videos");
$post = get_post_field('post_content', $page_id);

?>

<div class="container_12">
    <div class="grid_10">
<!--     <video width="320" height="240" controls> 
        <source src="http://localhost/wordpress1/wp-content/uploads/2014/12/Ronaldinho-bags-an-injury-time-assist-OovPFnne5X0.mp4" type="video/mp4">
    </video> -->
<!-- Add photo plugin here -->  

        <h2>
<?php   
    if ($post)
    {

        

            // echo "hello";
            echo $post;
        
    }
    else
        {
            echo "Sorry, there is no content right now in this section. We will be updating very soon.";
        }
    
?>

        </h2>
    </div>
</div>




<?php get_footer();?>