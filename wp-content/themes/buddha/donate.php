<?php
/*
Template Name: Donate page
*/
?>


<?php get_header(); ?>
<div class="container_12">
    <div class="grid_13" >
<?php   
        echo Paypal_payment_accept();


    ?>


    </div>
</div>

<?php get_footer();?>