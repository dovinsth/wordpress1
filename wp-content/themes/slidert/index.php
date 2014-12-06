<?php get_header(); ?>

		<div id="slides">
			<div class="slides_container">
           <?php //echo nggShowSlideshow([id],[width],[height]); ?>
           
           <?php
$newnggShortcodes = new NextGEN_Shortcodes;
echo $newnggShortcodes->show_gallery( array("id"=>1,"images"=>4,"template"=>"popular") );

?>

<?php get_footer(); ?>