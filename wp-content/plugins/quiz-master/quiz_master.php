<?php

/*

Plugin Name: Quiz Master

Plugin URI: http://webdesign.vasculus.com/wordpress-plugins/

Description: This adds a quiz function to your website.

Author: Frank Corso

Version: 2.1.1

Author URI: http://www.vasculus.com/

*/

/*  Copyright 2010, Vasculus  (email : fpcorso@vasculus.com)



    This program is free software; you can redistribute it and/or modify

    it under the terms of the GNU General Public License as published by

    the Free Software Foundation; either version 2 of the License, or

    (at your option) any later version.



    This program is distributed in the hope that it will be useful,

    but WITHOUT ANY WARRANTY; without even the implied warranty of

    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the

    GNU General Public License for more details.



    You should have received a copy of the GNU General Public License

    along with this program; if not, write to the Free Software

    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

///Files to Include
include("quiz_master_shortcode.php");
include("quiz_master_admin.php");
include("quiz_master_quiz_two.php");
include("quiz_master_install.php");
include("quiz_master_support.php");
include("quiz_master_main.php");
include("quiz_master_dashboard.php");
include("quiz_master_stats.php");
include("quiz_master_options_page.php");
include("quiz_master_faq.php");


///Activation Actions
register_activation_hook( __FILE__, 'quiz_master_install');
register_deactivation_hook( __FILE__, 'quiz_master_uninstall');
add_action('admin_menu', 'add_quiz_master_menu');
add_shortcode('quizmaster', 'quiz_master_shortcode');
add_action('right_now_table_end', 'quiz_master_add_dashboard');


///Create Admin Pages
function add_quiz_master_menu() 
{
	if (function_exists('add_menu_page'))
	{
		add_menu_page('Quiz Master', 'Quiz Master', 8, __FILE__, 'generate_quiz_master_main_page');
		add_submenu_page(__FILE__, 'Options', 'Options', 8, 'quiz_master_options', 'quiz_master_generate_option_page');
		add_submenu_page(__FILE__, 'Quiz One', 'Quiz One', 8, 'quiz_master_quiz_one', 'quiz_master_generate_admin_page');
		add_submenu_page(__FILE__, 'Quiz Two', 'Quiz Two', 8, 'quiz_master_quiz_two', 'quiz_master_generate_admin_quiz_two');
		///add_submenu_page(__FILE__, 'Stats', 'Stats', 8, 'quiz_master_stats', 'generate_quiz_master_stats_page');
		add_submenu_page(__FILE__, 'Faq', 'Faq', 8, 'quiz_master_faq', 'generate_quiz_master_faq_page');
		add_submenu_page(__FILE__, 'Support Forum', 'Support Forum', 8, 'quiz_master_support_forum', 'generate_quiz_master_support_page');
	}
}


/*
How I am setting up the Quiz Arrays
[Questions]
	[Quiz 1]
		[Question 1]
			[Question]
			[Answer 1]
				[Answer]
				[Correct]
				[Points]
			[Answer 2]
				[Answer]
				[Correct]
				[Points]
			[Answer 3]
				[Answer]
				[Correct]
				[Points]
			[Answer 4]
				[Answer]
				[Correct]
				[Points]
*/
?>