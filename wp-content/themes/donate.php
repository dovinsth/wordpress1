<?php
/*
Template Name: Donate page
*/
?>


<?php get_header(); ?>
<div class="container_12">
    <div class="grid_13" >
    <h1>For Donation, please proceed here</h1> <BR>
<?php echo do_shortcode( '[paypal_donation_button]' ); ?> <BR> <BR>
<!-- 
<h1>For Donation using Credit/Debit Cards, please proceed here</h1> <BR>

<iframe src="https://donorbox.org/embed/lumbini-kapilvastu-global-campaign-lumbini_kapilvastu-global-campaign" width="100%" height="800px" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
 -->

    </div>
</div>

<?php get_footer();?>