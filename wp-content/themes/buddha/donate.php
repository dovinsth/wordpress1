<?php
/*
Template Name: Donate page
*/
?>


<?php get_header(); ?>

<div class="container_12">
    <div class="grid_10" align="center">
<?php   
        echo Paypal_payment_accept();

    ?>
    </div>
</div>

<?php get_footer();?>