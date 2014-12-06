<?php
function get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}





if (function_exists(register_nav_menus))
{
  register_nav_menus( 
  	array(
		'mainmenu' => "Main menu"
	) 
  );
}



 

 ?>