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
    <h2>Please follow links below to register for upcoming events.</h2> <BR>
                    <IMG SRC="<?php echo get_template_directory_uri().'/forms/images/main_logo.jpg'; ?>" NAME="Event Logo" WIDTH=115 HEIGHT=155 BORDER=0>
    <div class="prefix_1">



        <BR> <BR>

            <table CELLPADDING=5px CELLSPACING=0 style="padding: 5px">
                            <tr>



                            </tr>
                            <tr>

                                <td>
                                <B>Lumbini Peace Marathon May 4, 2015 </B><BR>
                                    <a href="<?php echo get_page_link(164); ?>">register here</a><BR>
                                </td>
 

                            </tr>
                            <tr>
                                <td>
                                    <B>World Peace Rally May 4, 2015 </B><BR>
                                    <a href="<?php echo get_page_link(150);?>">register here</a><BR>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <B>International Conference May 4-5, 2015</B><BR>
                                    <a href="<?php echo get_template_directory_uri().'/forms/Registration_For_WPCLN_Inter_Conf_Belgium_2015.pdf' ?>">download here</a><BR>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <B>International Conference Sponsor Form </B><BR>
                                    <a href="<?php echo get_template_directory_uri().'/forms/International_Conference_Sponsor.pdf' ?>">download here</a><BR>
                                </td>

                            </tr>

                        </table>
        </div>


<h2>Recent Posts</h2>

<?php   

    if ($recent_posts)
    {

        foreach( $recent_posts as $recent ){

            echo '<a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> ';
            echo "<BR>";
        }
    }
    else
        {
            echo "Sorry, there is no content right now in this section. We will be updating very soon.";
        }
    ?>


    </div>
</div>



<?php get_footer();?>