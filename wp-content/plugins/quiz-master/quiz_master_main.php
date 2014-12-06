<?php
/*
Generates the Main Admin Panel for Quiz Master
*/

function generate_quiz_master_main_page()
{
	$success = $_POST["quiz_master_clear_counter"];
	if ($success == 'clear_totals')
	{
		$quiz_master_totals = 0;
		update_option('quiz_master_quiz_views' , $quiz_master_totals);	
		update_option('quiz_master_quiz_taken' , $quiz_master_totals);	
	}
	
	
	
	add_meta_box("wpss_mrts", 'Quiz Master', "quiz_wpss_mrt_meta_box", "quiz_wpss");  
	add_meta_box("wpss_mrts", 'In This Update', "quiz_wpss_mrt_meta_box2", "quiz_wpss2"); 
	add_meta_box("wpss_mrts", 'Support', "quiz_wpss_mrt_meta_box3", "quiz_wpss3");
	add_meta_box("wpss_mrts", 'Future Releases', "quiz_wpss_mrt_meta_box4", "quiz_wpss4");
	add_meta_box("wpss_mrts", 'Contribution', "quiz_wpss_mrt_meta_box5", "quiz_wpss5");  	
	add_meta_box("wpss_mrts", 'Brainstorm Idea', "quiz_wpss_mrt_meta_box6", "quiz_wpss6");
	?>
	<style type="text/css">
		div.quiz_email_support {
		text-align: left;
		}
		div.quiz_email_support input[type='text'] {
		border-color:#000000;
		color:#3300CC; 
		cursor:hand;
		}
		textarea{
		border-color:#000000;
		color:#3300CC; 
		cursor:hand;
		}
		div.donation {
		border-width: 1px;
		border-style: solid;
		padding: 0 0.6em;
		margin: 5px 0 15px;
		-moz-border-radius: 3px;
		-khtml-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
		background-color: #ffffe0;
		border-color: #e6db55;
		text-align: center;
		}
		donation.p {	margin: 0.5em 0;
		line-height: 1;
		padding: 2px;
		}
		p em {
		padding-left: 1em;
		color: #555;
		font-weight: bold;
		}
	</style>
	<div class="wrap">
	<h2>Quiz Master</h2>
	
	<h3>Version 2.1.1</h3>
	
	<p>Add the Quiz Master to any page and/or post by using the shortcode [quizmaster quiz=1].  Thank you everyone who has given feedback to the direction of this plugin.</p>
	
	<div style="float:left; width:60%;" class="inner-sidebar1">
		<?php do_meta_boxes('quiz_wpss','advanced','');  ?>	
	</div>
	
	<div style="float:right; width:36%; " class="inner-sidebar1">
		<?php do_meta_boxes('quiz_wpss2','advanced',''); ?>	
	</div>
			
	<!--<div style="clear:both"></div>-->
						
	<div style="float:left; width:60%;" class="inner-sidebar1">
		<?php do_meta_boxes('quiz_wpss3','advanced','');  ?>	
	</div>
	
	<div style="float:right; width:36%; " class="inner-sidebar1">
		<?php do_meta_boxes('quiz_wpss4','advanced',''); ?>	
	</div>
	
	<!--<div style="clear:both"></div>-->
						
	<!--<div style="float:left; width:100%;" class="inner-sidebar1">
		<?php /* do_meta_boxes('quiz_wpss6','advanced','');  */?>	
	</div>-->
	
	<div style="float:right; width:36%; " class="inner-sidebar1">
		<?php do_meta_boxes('quiz_wpss5','advanced',''); ?>	
	</div>

	</div>
	<?php
}

function quiz_wpss_mrt_meta_box()
{
	?>
	<div>
	<table width='100%'>
	<tr>
	<td align='left'>Times Quiz Page Loaded</td>
	<td align='right'><?php echo get_option('quiz_master_quiz_views'); ?></td>
	</tr>
	<tr>
	<td align='left'>Times Quiz Taken</td>
	<td align='right'><?php echo get_option('quiz_master_quiz_taken'); ?></td>
	</tr>
	<tr>
	<td align='left'>
	<?php
	echo "<form action='" . $PHP_SELF . "' method='post'>";
	echo "<input type='hidden' name='quiz_master_clear_counter' value='clear_totals' />";
	echo "<input type='submit' value='Clear Totals' />";
	echo "</form>";
	?>	
	</td>
	</tr>
	</table>
	</div>
	<?php
}

function quiz_wpss_mrt_meta_box2()
{
	?>
	<div>
	<table width='100%'>
	<tr>
	<td align='left'>2.1.1 (January 22, 2010)</td>
	</tr>
	<tr>
	<td align='left'>* Added 2nd Quiz Library</td>
	</tr>
	<tr>
	<td align='left'>* Added Ability To Change Font Color</td>
	</tr>
	<tr>
	<td align='left'>* Added Email Headers Options</td>
	</tr>
	<tr>
	<td align='left'>* Created New Options Page</td>
	</tr>
	<tr>
	<td align='left'>* Added Faq Page</td>
	</tr>
	<tr>
	<td align='left'>* Fixed Correct Answer Score Bug</td>
	</tr>
	</table>
	</div>
	<?php
}

function quiz_wpss_mrt_meta_box3()
{
	/*
	Copyright 2009, Vasculus
	Please do not re-use this email script without contacting me.
	*/
	$quiz_master_email_success = $_POST["action"];
	$user_name = $_POST["username"];
	$user_email = $_POST["email"];
	$user_message = $_POST["message"];
	$quiz_master_email_message = "";
	if ($quiz_master_email_success == update and $user_email != "" and $user_message != "")
	{
		wp_mail('fpcorso@vasculus.com' ,'Support From Quiz Master Plugin','Message from ' . $user_name . ' at ' . $user_email . " It says: " . "\n" . $user_message);
		$quiz_master_email_message = "<p>Message Sent</p>";
	}
	else if ($quiz_master_email_success == update and $user_email == "")
	{
		$quiz_master_email_message = "<p>Please Enter Email</p>";
	}
	else if ($quiz_master_email_success == update and $user_message == "")
	{
		$quiz_master_email_message = "<p>Please Enter In Your Message</p>";
	}
	?>
	<div class='quiz_email_support'>
	<form action="<?php echo $PHP_SELF; ?>" method='post'>
	<input type='hidden' name='action' value='update' />
	<table width='100%'>
	<tr>
	<td>If there is something you would like to suggest to add or even if you just want 
	to let me know if you like the plugin or not, feel free to use the email form below.</td>
	</tr>
	<tr>
	<td><?php echo $quiz_master_email_message; ?></td>
	</tr>
	<tr>
	<td align='left'><p>Name: <input type='text' name='username'/></p></td>
	</tr>
	<tr>
	<td align='left'><p>Email: <input type='text' name='email'/></p></td>
	</tr>
	<tr>
	<td align='left'><p>Message: </p></td>
	</tr>
	<tr>
	<td align='left'><p><TEXTAREA NAME="message" COLS=40 ROWS=6></TEXTAREA></p></td>
	</tr>
	<tr>
	<td align='left'><input type='submit' value='Send Email' /></td>
	</tr>
	<tr>
	<td align='left'></td>
	</tr>
	</table>
	</form>
	</div>
	<?php
}

function quiz_wpss_mrt_meta_box4()
{
	?>
	<div>
	<table width='100%'>
	<tr>
	<td align='left'>* Option to Randomly Select from Library</td>
	</tr>
	<tr>
	<td align='left'>* Language Translations</td>
	</tr>
	<tr>
	<td align='left'>* Ability To Save And Look-Up Taken Quizzes</td>
	</tr>
	<tr>
	<td align='left'>* Ability To Edit Quiz Fonts Styles</td>
	</tr>
	<tr>
	<td align='left'>* Add Statistics Page</td>
	</tr>
	<tr>
	<td align='left'>* Add Widget Function</td>
	</tr>
	</table>
	</div>
	<?php
}
function quiz_wpss_mrt_meta_box5()
{
	?>
	<div>
	<table width='100%'>
	<tr>
	<td align='left'>
	I have spent a lot of time in development for this plugin. If you like it, please help by donating today.
	</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td>Thank you to all those who have donated so far:</td>
	</tr>
	<tr>
	<td>1. Steven C. Keith</td>
	</tr>
	<tr>
	<td>2. Anonymous</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td>
	<div class="donation">
	<p>
	<a href='http://www.pledgie.com/campaigns/6398'>
	<img alt='Click here to lend your support to: Quiz Master and make a donation at www.pledgie.com !' src='http://www.pledgie.com/campaigns/6398.png?skin_name=chrome' border='0' />
	</a><em>Is this plugin useful for you? If you like it, please help the developer by donating today.</em>
	</p>
	</div>
	</td>
	</tr>
	</table>
	</div>
	<?php
}
function quiz_wpss_mrt_meta_box6()
{
	?>
	<div>
	<table width='100%'>
	<tr>
	<td align='left'>
	Box Six
	</td>
	</tr>
	</table>
	</div>
	<?php
}
?>