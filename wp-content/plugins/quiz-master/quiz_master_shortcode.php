<?php
/*
This function is the heart of the Quiz Master.
It displays either the quiz or the completion screen and manages the emails.
Please be very careful when editing this script.
*/
function quiz_master_shortcode($atts)
{
	extract(shortcode_atts(array(		'quiz' => 1,		'bar' => 'default bar',	), $atts));
		
	///Important Variables
	$quiz_number = $quiz - 1;
	$quiz_master_section = "quiz_master_questions_" . $quiz_number;
	$quiz_master_data = get_option($quiz_master_section);
	$quiz_master_number_section = "quiz_master_question_amount_" . $quiz_number;
	$quiz_master_table_width = get_option('quiz_master_table_width');
	$quiz_master_above_quiz_message = get_option('quiz_master_quiz_above_message');
	$quiz_master_competion_message = get_option('quiz_master_completion_message');
	$quiz_master_user_email_message = get_option('quiz_master_user_email_message');
	$quiz_master_require_name = get_option('quiz_master_require_name');
	$quiz_master_require_phone_number = get_option('quiz_master_require_phone_number');
	$quiz_master_require_business = get_option('quiz_master_require_business');
	$quiz_master_require_email = get_option('quiz_master_require_email');
	$quiz_master_show_name = get_option('quiz_master_show_name');
	$quiz_master_show_phone_number = get_option('quiz_master_show_phone_number');
	$quiz_master_show_business = get_option('quiz_master_show_business');
	$quiz_master_show_email = get_option('quiz_master_show_email');
	$quiz_master_send_user_email = get_option('quiz_master_send_user_email');
	$quiz_master_send_admin_email = get_option('quiz_master_send_admin_email');
	$quiz_master_admin_email = get_option('quiz_master_admin_email');
	$quiz_master_include_questions_email = get_option('quiz_master_show_quiz_email');
	$quiz_master_are_correct = get_option('quiz_master_are_correct');
	$quiz_master_uses_points = get_option('quiz_master_use_points');
	$quiz_master_show_correct_points = get_option('quiz_master_show_correct');
	$quiz_master_font_color = get_option('quiz_master_font_color');
	$quiz_master_stats = get_option('quiz_master_stats');
	$quiz_master_header_name = get_option('quiz_master_from_name');
	$quiz_master_header_address = get_option('quiz_master_from_address');
	$headers = 	"From: " . $quiz_master_header_name . " <" . $quiz_master_header_address . '> ' . "\r\n\\";
	$quiz_master_amount_questions = get_option($quiz_master_number_section);
	$quiz_master_amount_questions -= 1;
	$quiz_master_display = "";
	$success = $_POST["action"];
	$user_name= $_POST["username"];
	$user_email= $_POST["email"];
	$user_business= $_POST["businessname"];
	$user_phone_number= $_POST["phonenumber"];
	for ($i=0; $i<=$quiz_master_amount_questions; $i++)
	{
		$user_answers[$i]= $_POST['quiz' . $i];
	}
	
	
	///See if anything was required that was not filled out 
	if ($quiz_master_require_name and $success == 'update' and $user_name == '')
	{
		echo "<script>alert('Name is Required')</script>";
		$success = '';
	}
	if ($quiz_master_require_email and $success == 'update' and $user_email == '')
	{
		echo "<script>alert('Email is Required')</script>";
		$success = '';
	}
	if ($quiz_master_require_business and $success == 'update' and $user_business == '')
	{
		echo "<script>alert('Business is Required')</script>";
		$success = '';
	}
	if ($quiz_master_require_phone_number and $success == 'update' and $user_phone_number == '')
	{
		echo "<script>alert('Phone Number is Required')</script>";
		$success = '';
	}
	
	
	
	
	///Display the quiz
	if ($success != 'update')
	{
		$quizzes_viewed = get_option('quiz_master_quiz_views');
		$quizzes_viewed += 1;
		update_option('quiz_master_quiz_views', $quizzes_viewed);
		$quiz_master_display .= "
		<style>
		div.quiz_table {
		padding: 0 0.6em;
		margin: 5px 0 15px;
		-moz-border-radius: 3px;
		-khtml-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
		text-align: left;
		color: " . $quiz_master_font_color . "; 
		}
		div.quiz_table input[type='radio'] {
		background-color:blue;
		margin: 0;
		}
		</style>
		";
		if ($quiz_master_table_width == 0)
			$quiz_master_table_caption = "";
		else
			$quiz_master_table_caption = 'width=' . $quiz_master_table_width;
		$quiz_master_display .= "<div class='quiz_table'>";
		$quiz_master_display .= "<form action='" . $PHP_SELF . "' method='post'>";
		$quiz_master_display .= "<table " . $quiz_master_table_caption . " style='left;'>";
		$quiz_master_display .="<thead>";
		$quiz_master_display .= "<p>&nbsp;</p>";
		if ($quiz_master_show_name)
		{
			$quiz_master_display .= "<tr valign='top'>";
			$quiz_master_display .= "<td align='left'>";
			$quiz_master_display .= "Name: ";
			$quiz_master_display .= "</td><td>";
			$quiz_master_display .= "<input type='text' name='username'/><br />";
			$quiz_master_display .= "</td>";
			$quiz_master_display .= "</tr>";
		}
		if ($quiz_master_show_business)
		{
			$quiz_master_display .= "<tr valign='top'>";
			$quiz_master_display .= "<td align='left'>";
			$quiz_master_display .= "Business: ";
			$quiz_master_display .= "</td><td>";
			$quiz_master_display .= "<input type='text' name='businessname'/><br />";
			$quiz_master_display .= "</td>";
			$quiz_master_display .= "</tr>";
		}
		if ($quiz_master_show_email)
		{
			$quiz_master_display .= "<tr valign='top'>";
			$quiz_master_display .= "<td align='left'>";
			$quiz_master_display .= "Email: ";
			$quiz_master_display .= "</td><td>";
			$quiz_master_display .= "<input type='text' name='email'/><br />";
			$quiz_master_display .= "</td>";
			$quiz_master_display .= "</tr>";
		}
		if ($quiz_master_show_phone_number)
		{
			$quiz_master_display .= "<tr valign='top'>";
			$quiz_master_display .= "<td align='left'>";
			$quiz_master_display .= "Phone Number: ";
			$quiz_master_display .= "</td><td>";
			$quiz_master_display .= "<input type='text' name='phonenumber'/><br />";
			$quiz_master_display .= "</td>";
			$quiz_master_display .= "</tr>";
		}
		$quiz_master_display .= "<tr><td colspan='2' align='left'>";
		if ($quiz_master_above_quiz_message != "")
			$quiz_master_display .= "<br />" . $quiz_master_above_quiz_message . "";
		$quiz_master_display .= "</td></tr>";
		for ($i=0; $i<=$quiz_master_amount_questions; $i++)
		{
			$quiz_master_display .= "<tr><td colspan='2' align='left'>";
			$quiz_master_display .= "
			<br />" . $quiz_master_data[$i][0] . "";
			$quiz_master_display .= "</td></tr>";
			if ($quiz_master_data[$i][1][0] != "")
			{
				$quiz_master_display .= "<tr><td colspan='2' align='left'>";
				$quiz_master_display .= "<input type='radio' name='quiz" . $i . "' value='" . $quiz_master_data[$i][1][0] . "'>" . $quiz_master_data[$i][1][0] . "
				<br />";
				$quiz_master_display .= "</td></tr>";
			}
			if ($quiz_master_data[$i][2][0] != "")
			{
				$quiz_master_display .= "<tr><td colspan='2' align='left'>";
				$quiz_master_display .= "<input type='radio' name='quiz" . $i . "' value='" . $quiz_master_data[$i][2][0] . "'>" . $quiz_master_data[$i][2][0] . "
				<br />";
				$quiz_master_display .= "</td></tr>";
			}
			if ($quiz_master_data[$i][3][0] != "")
			{
				$quiz_master_display .= "<tr><td colspan='2' align='left'>";
				$quiz_master_display .= "<input type='radio' name='quiz" . $i . "' value='" . $quiz_master_data[$i][3][0] . "'>" . $quiz_master_data[$i][3][0] . "
				<br />";
				$quiz_master_display .= "</td></tr>";
			}
			if ($quiz_master_data[$i][4][0] != "")
			{
				$quiz_master_display .= "<tr><td colspan='2' align='left'>";
				$quiz_master_display .= "<input type='radio' name='quiz" . $i . "' value='" . $quiz_master_data[$i][4][0] . "'>" . $quiz_master_data[$i][4][0] . "
				<br />";
				$quiz_master_display .= "</td></tr>";
			}
			if ($quiz_master_data[$i][5][0] != "")
			{
				$quiz_master_display .= "<tr><td colspan='2' align='left'>";
				$quiz_master_display .= "<input type='radio' name='quiz" . $i . "' value='" . $quiz_master_data[$i][5][0] . "'>" . $quiz_master_data[$i][5][0] . "
				<br />";
				$quiz_master_display .= "</td></tr>";
			}
			if ($quiz_master_data[$i][6][0] != "")
			{
				$quiz_master_display .= "<tr><td colspan='2' align='left'>";
				$quiz_master_display .= "<input type='radio' name='quiz" . $i . "' value='" . $quiz_master_data[$i][6][0] . "'>" . $quiz_master_data[$i][6][0] . "
				<br />";
				$quiz_master_display .= "</td></tr>";
			}
			if ($quiz_master_data[$i][7][0] != "")
			{
				$quiz_master_display .= "<tr><td colspan='2' align='left'>";
				$quiz_master_display .= "<input type='radio' name='quiz" . $i . "' value='" . $quiz_master_data[$i][7][0] . "'>" . $quiz_master_data[$i][7][0] . "
				<br />";
				$quiz_master_display .= "</td></tr>";
			}
			if ($quiz_master_data[$i][8][0] != "")
			{
				$quiz_master_display .= "<tr><td colspan='2' align='left'>";
				$quiz_master_display .= "<input type='radio' name='quiz" . $i . "' value='" . $quiz_master_data[$i][8][0] . "'>" . $quiz_master_data[$i][8][0] . "
				<br />";
				$quiz_master_display .= "</td></tr>";
			}
		}
		$quiz_master_display .= "<tr><td>&nbsp;</td></tr>";
		$quiz_master_display .= "<tr><td colspan='2'>";
		$quiz_master_display .= "
			<input type='hidden' name='action' value='update' />";
		$quiz_master_display .= "
			<input type='submit' value='Submit Quiz' />";
		$quiz_master_display .= "</td></tr>";
		$quiz_master_display .= "</thead>";
		$quiz_master_display .= "</table>";
		$quiz_master_display .= "</form>";
		$quiz_master_display .= "</div>";
	}
	///Display the completion screen
	else
	{
		$quizzes_taken = get_option('quiz_master_quiz_taken');
		$quizzes_taken += 1;
		update_option('quiz_master_quiz_taken', $quizzes_taken);
		if (mktime() > $quiz_master_stats[11])
		{
			if ($quiz_master_stats[10] == 9)
				$quiz_master_stats[10] = 0;
			else
				$quiz_master_stats[10] = $quiz_master_stats[10] + 1;
			$quiz_master_stats[11] = mktime();
		}
		$quiz_master_stats[$quiz_master_stats[10]] += 1;
		update_option('quiz_master_stats', $quiz_master_stats);
		$quiz_master_display .= "<p>" . $quiz_master_competion_message . "</p>";
			///Correct/Incorrect System
			if ($quiz_master_are_correct)
			{
				if ($quiz_master_show_correct_points)
				{
					$quiz_master_display .= "<br /><p> Answers:";
				}
				$quiz_master_number_correct = 0;
				for ($i=0; $i<=$quiz_master_amount_questions; $i++)
				{
					if ($quiz_master_show_correct_points)
					{
						$quiz_master_display .= "<br />";
					}
					$quiz_master_correct_answer = "";
					if ($quiz_master_show_correct_points)
					{
						$quiz_master_display .= "Your Answer: " . $user_answers[$i] . " " . "Correct Answer: ";
					}
					for ($l=1; $l<=8; $l++)
					{
						if ($quiz_master_data[$i][$l][1])
						{
							if ($quiz_master_show_correct_points)
							{
								$quiz_master_display .= $quiz_master_data[$i][$l][0];
							}
							$quiz_master_correct_answer = $quiz_master_data[$i][$l][0];
							break;
						}						
					}
					if ($quiz_master_correct_answer == $user_answers[$i])
					{
						$quiz_master_number_correct += 1;
					}
				}
				if ($quiz_master_show_correct_points)
				{
					$quiz_master_display .= "<br />";
					$quiz_master_display .= "You had " . $quiz_master_number_correct . " correct answers.";
					$quiz_master_display .= "<br />";
				}
				$quiz_master_questions_amount = $quiz_master_amount_questions + 1;
				$quiz_master_quiz_score = $quiz_master_number_correct/$quiz_master_questions_amount;
				$quiz_master_quiz_score *= 100;
				if ($quiz_master_show_correct_points)
				{
					$quiz_master_display .= "This gives you a score of " . $quiz_master_quiz_score . " %.";
					$quiz_master_display .= "</p>";
				}
			}
			
			//Point System
			if ($quiz_master_uses_points)
			{
				$quiz_master_point_score = 0;
				for ($i=0; $i<=$quiz_master_amount_questions; $i++)
				{
					for ($l=1; $l<=8; $l++)
					{
						if ($quiz_master_data[$i][$l][0] == $user_answers[$i])
						{
							$quiz_master_point_score += $quiz_master_data[$i][$l][2];
							break;
						}						
					}
				
				}
				if ($quiz_master_show_correct_points)
				{	
					$quiz_master_display .= "<p>Your score is " . $quiz_master_point_score . ".</p>";
				}
			}
		
		
		///Email sent to user
		$message = "";
		if ($quiz_master_send_user_email)
		{
			if ($user_email != "")
			{
				$message = "";
				if ($user_name != "")
				{
					$message .= "Dear " . $user_name . ":";
					$message .= "\n";
					$message .= "\n";
				}
				$message .= $quiz_master_user_email_message . "\n" . "\n";

				wp_mail($user_email ,'Quiz Results',$message,$headers);
			}
		}
		
		
		///Email sent to admin
		if ($quiz_master_send_admin_email)
		{
			$message = "";
			$message .= "A quiz has recently been completed";
			if ($user_name != "")
				$message .= " by ". $user_name;
			$message .= ".";
			$message .= "\n";
			if ($user_email != "")
			{
				$message .= " The email of the user is " . $user_email;
				$message .= "\n";
			}
			if ($user_phone_number !="")
			{
				$message .= "The phone number of the user is " . $user_phone_number;
				$message .= "\n";
			}
			if ($user_business != "")
			{
				$message .= " The quiz was taken by a member of the company: " . $user_business;
				$message .= "\n";
			}
			$message .= "The answers given were as follows:" . "\n" . "\n";
			for ($i=0; $i<=$quiz_master_amount_questions; $i++)
			{
				if ($quiz_master_include_questions_email)
				{
					$message .= $quiz_master_data[$i][0] . "\n";
					if ($quiz_master_data[$i][1][0] != "")
					{
						$message .= $quiz_master_data[$i][1][0] . "\n";
					}
					if ($quiz_master_data[$i][2][0] != "")
					{
						$message .= $quiz_master_data[$i][2][0] . "\n";
					}
					if ($quiz_master_data[$i][3][0] != "")
					{
						$message .= $quiz_master_data[$i][3][0] . "\n";
					}
					if ($quiz_master_data[$i][4][0] != "")
					{
						$message .= $quiz_master_data[$i][4][0] . "\n";
					}
					if ($quiz_master_data[$i][5][0] != "")
					{
						$message .= $quiz_master_data[$i][5][0] . "\n";
					}
					if ($quiz_master_data[$i][6][0] != "")
					{
						$message .= $quiz_master_data[$i][6][0] . "\n";
					}
					if ($quiz_master_data[$i][7][0] != "")
					{
						$message .= $quiz_master_data[$i][7][0] . "\n";
					}
					if ($quiz_master_data[$i][8][0] != "")
					{
						$message .= $quiz_master_data[$i][8][0] . "\n";
					}						
				}
				$quotenumber = $i + 1;
				$message .= "Answer Chosen: " . $user_answers[$i] . "\n";
				$message .= "\n";
			}
			$message .= "\n";
			if ($quiz_master_are_correct)
			{
				$message .= "This gives the user a score of " . $quiz_master_quiz_score . "%.";
				$message .= "\n";
			}
			if ($quiz_master_uses_points)
			{
				$message .= "This gives the user a score of " . $quiz_master_point_score . ".";
				$message .= "\n";
			}
			$message .= "\n";
			$message .= "\n";
			$message .= " This email was generated by the Quiz Master script created by Frank Corso";
			if ($quiz_master_admin_email != "")
				wp_mail($quiz_master_admin_email ,'Quiz Master Results',$message,$headers);
		}
	}
	return $quiz_master_display;
}
?>