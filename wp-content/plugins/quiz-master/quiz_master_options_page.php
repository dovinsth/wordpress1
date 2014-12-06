<?php

function quiz_master_generate_option_page()
{	
	?>
	<style type="text/css">
	div.quiz_options input[type='text'] {
		border-color:#000000;
		color:#3300CC; 
		cursor:hand;
		}
	</style>
	<div class="wrap">
	<div class='quiz_options'>
	<h2>Quiz Master Options</h2>
		
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options'); ?>
	
	<table class="wide" style="text-align: left; white-space: nowrap;">
	<thead>
	
	<tr valign="top">
	<th scope="row">Table Width (Use 0 to have it automatically set)</th>
	<td>
	<input type="text" name="quiz_master_table_width" value="<?php echo get_option('quiz_master_table_width'); ?>" />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Font Color</th>
	<td>
	<input type="text" name="quiz_master_font_color" value="<?php echo get_option('quiz_master_font_color');?>" />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Message Displayed Above Quiz</th>
	<td>
	<input type="text" name="quiz_master_quiz_above_message" value="<?php echo get_option('quiz_master_quiz_above_message'); ?>" />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Message Displayed After Taking Quiz</th>
	<td>
	<input type="text" name="quiz_master_completion_message" value="<?php echo get_option('quiz_master_completion_message'); ?>" />
	</td>
	</tr>
	
	<tr valign="top">
	<th class="check-column">This quiz uses the correct/incorrect system for its answers</th>
	<td>
	<input name="quiz_master_are_correct" id="quiz_master_are_correct" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_are_correct')); ?> />
	</td>
	</tr>
	
	<tr valign="top">
	<th class="check-column">This quiz uses the point system for its answers</th>
	<td>
	<input name="quiz_master_use_points" id="quiz_master_use_points" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_use_points')); ?> />
	</td>
	</tr>
	
	<tr valign="top">
	<th class="check-column">Show Score/Correct and Incorrect Answers upon Completion</th>
	<td>	
	<input name="quiz_master_show_correct" id="quiz_master_show_correct" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_show_correct')); ?> />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope='row'>&nbsp;</th>
	<td>Ask For </td>
	<td> Require</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Name</th>
	<td>
	<input name="quiz_master_show_name" id="quiz_master_show_name" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_show_name')); ?> />
	</td>
	<td>
	<input name="quiz_master_require_name" id="quiz_master_require_name" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_require_name')); ?> />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Business</th>
	<td>
	<input name="quiz_master_show_business" id="quiz_master_show_business" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_show_business')); ?> />
	</td>
	<td>
	<input name="quiz_master_require_business" id="quiz_master_require_business" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_require_business')); ?> />
	</td>
	</tr>

	<tr valign="top">
	<th scope="row">Email</th>
	<td>
	<input name="quiz_master_show_email" id="quiz_master_show_email" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_show_email')); ?> />
	</td>
	<td>
	<input name="quiz_master_require_email" id="quiz_master_require_email" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_require_email')); ?> />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Phone Number</th>
	<td>
	<input name="quiz_master_show_phone_number" id="quiz_master_show_phone_number" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_show_phone_number')); ?> />
	</td>
	<td>
	<input name="quiz_master_require_phone_number" id="quiz_master_require_phone_number" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_require_phone_number')); ?> />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Send User Email Upon Completion if required</th>
	<td>
	<input name="quiz_master_send_user_email" id="quiz_master_send_user_email" type="checkbox" value="1" <?php echo checked('1', get_option('quiz_master_send_user_email')); ?> />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Message of the email sent to the user</th>
	<td>
	<TEXTAREA NAME="quiz_master_user_email_message" COLS=20 ROWS=10><?php echo get_option('quiz_master_user_email_message'); ?></TEXTAREA>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Send Email to Address Below</th>
	<td>
	<input name="quiz_master_send_admin_email" id="quiz_master_send_admin_email" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_send_admin_email')); ?> />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Email Address</th>
	<td>
	<input type="text" name="quiz_master_admin_email" value="<?php echo get_option('quiz_master_admin_email'); ?>" />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Include Questions And All Answers In Admin Email</th>
	<td>
	<input name="quiz_master_show_quiz_email" id="quiz_master_show_quiz_email" type="checkbox" value="1" <?php checked('1', get_option('quiz_master_show_quiz_email')); ?> />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Name Of Person Email Sent From</th>
	<td>
	<input type="text" name="quiz_master_from_name" value="<?php echo get_option('quiz_master_from_name'); ?>" />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Email Address Of Person Email Sent From</th>
	<td>
	<input type="text" name="quiz_master_from_address" value="<?php echo get_option('quiz_master_from_address'); ?>" />
	</td>
	</tr>
	
	<!--<tr valign="top">
	<th scope="row">Display questions in order</th>
	<td>
	<input name="quiz_master_display_order" id="quiz_master_display_order" type="checkbox" value="1" <?php /*checked('1', get_option('quiz_master_display_order')); */?> />
	</td>
	</tr>-->

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="quiz_master_are_correct,quiz_master_show_correct,quiz_master_require_name,quiz_master_show_business,quiz_master_require_email,
	quiz_master_require_business,quiz_master_send_user_email,quiz_master_send_admin_email,quiz_master_admin_email,quiz_master_show_email,quiz_master_show_phone_number,
	quiz_master_display_order,quiz_master_quiz_above_message,quiz_master_completion_message,quiz_master_show_name,quiz_master_from_address,
	quiz_master_require_phone_number,quiz_master_user_email_message,quiz_master_table_width,quiz_master_use_points,quiz_master_show_quiz_email,quiz_master_from_name" />

	<p class="submit">
	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
	</p>
	
	</form>
	</thead>
	</table>
	</div>
	</div>

<?php
}
?>