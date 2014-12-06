<?php
/*
The install/uninstall functions for Quiz Master
*/

function quiz_master_install()
{

	$data = "Name";
	if ( ! get_option('quiz_master_from_name'))
	{
		add_option('quiz_master_from_name');
	}
	
	$data = "Email Address";
	if ( ! get_option('quiz_master_from_address'))
	{
		add_option('quiz_master_from_address');
	}
	
	$data = true;
	if ( ! get_option('quiz_master_are_correct'))
	{
		add_option('quiz_master_are_correct' , $data);
   	}
	
	$data = false;
	if ( ! get_option('quiz_master_show_quiz_email'))
	{
		add_option('quiz_master_show_quiz_email' , $data);
   	}
	
	$data = false;
	if ( ! get_option('quiz_master_use_points'))
	{
		add_option('quiz_master_use_points' , $data);
   	}
	
	$data = 0;
	if ( ! get_option('quiz_master_table_width'))
	{
		add_option('quiz_master_table_width' , $data);
   	}
	
	$data = 0;
	if ( ! get_option('quiz_master_quiz_views'))
	{
		add_option('quiz_master_quiz_views' , $data);
   	}
	
	$data = 0;
	if ( ! get_option('quiz_master_quiz_taken'))
	{
		add_option('quiz_master_quiz_taken' , $data);
   	}
	
	$data = false;
	if ( ! get_option('quiz_master_show_correct'))
	{
		add_option('quiz_master_show_correct' , $data);
   	}
	
	$data = true;
	if ( ! get_option('quiz_master_show_name'))
	{
		add_option('quiz_master_show_name' , $data);
   	} 
	
	$data = true;
	if ( ! get_option('quiz_master_require_name'))
	{
		add_option('quiz_master_require_name' , $data);
   	}

	$data = false;
	if ( ! get_option('quiz_master_show_business'))
	{
		add_option('quiz_master_show_business' , $data);
   	} 	
	
	$data = false;
	if ( ! get_option('quiz_master_require_business'))
	{
		add_option('quiz_master_require_business' , $data);
   	} 
	
	$data = true;
	if ( ! get_option('quiz_master_show_email'))
	{
		add_option('quiz_master_show_email' , $data);
   	} 
	
	$data = true;
	if ( ! get_option('quiz_master_require_email'))
	{
		add_option('quiz_master_require_email' , $data);
   	} 
	
	$data = false;
	if ( ! get_option('quiz_master_show_phone_number'))
	{
		add_option('quiz_master_show_phone_number' , $data);
   	} 
	
	$data = false;
	if ( ! get_option('quiz_master_require_phone_number'))
	{
		add_option('quiz_master_require_email' , $data);
   	} 
	
	$data = true;
	if ( ! get_option('quiz_master_send_user_email'))
	{
		add_option('quiz_master_send_user_email' , $data);
   	}
	
	$data = "Thank you for testing the Quiz Master";
	if ( ! get_option('quiz_master_user_email_message'))
	{
		add_option('quiz_master_user_email_message' , $data);
   	}

	$data = false;
	if ( ! get_option('quiz_master_send_admin_email'))
	{
		add_option('quiz_master_send_admin_email' , $data);
   	}

	$data = "";
	if ( ! get_option('quiz_master_admin_email'))
	{
		add_option('quiz_master_admin_email' , $data);
   	}

	$data = "Please take the quiz below:";
	if ( ! get_option('quiz_master_quiz_above_message'))
	{
		add_option('quiz_master_quiz_above_message' , $data);
   	}
	
	$data = "Enter Completion Text Here";
	if ( ! get_option('quiz_master_completion_message'))
	{
		add_option('quiz_master_completion_message' , $data);
   	}
	
	$data = true;
	if ( ! get_option('quiz_master_display_order'))
	{
		add_option('quiz_master_display_order' , $data);
   	} 

	$data = 1;
	if ( ! get_option('quiz_master_question_amount_0'))
	{
		add_option('quiz_master_question_amount_0' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_0' , $data);
	}
	
	$data = 1;
	if ( ! get_option('quiz_master_question_amount_1'))
	{
		add_option('quiz_master_question_amount_1' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_1' , $data);
	}
	
	$data = 1;
	if ( ! get_option('quiz_master_question_amount_2'))
	{
		add_option('quiz_master_question_amount_2' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_2' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_3'))
	{
		add_option('quiz_master_question_amount_3' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_3' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_4'))
	{
		add_option('quiz_master_question_amount_4' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_4' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_5'))
	{
		add_option('quiz_master_question_amount_5' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_5' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_6'))
	{
		add_option('quiz_master_question_amount_6' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_6' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_7'))
	{
		add_option('quiz_master_question_amount_7' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_7' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_8'))
	{
		add_option('quiz_master_question_amount_8' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_8' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_9'))
	{
		add_option('quiz_master_question_amount_9' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_9' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_10'))
	{
		add_option('quiz_master_question_amount_10' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_10' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_11'))
	{
		add_option('quiz_master_question_amount_11' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_11' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_12'))
	{
		add_option('quiz_master_question_amount_12' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_12' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_13'))
	{
		add_option('quiz_master_question_amount_13' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_13' , $data);
	}
	
		$data = 1;
	if ( ! get_option('quiz_master_question_amount_14'))
	{
		add_option('quiz_master_question_amount_14' , $data);
   	}
	else
	{
		update_option('quiz_master_question_amount_14' , $data);
	}
	
	$data = "#000000";
	if ( ! get_option('quiz_master_font_color'))
	{
		add_option('quiz_master_font_color' , $data);
   	}
	
	$data = array(0,0,0,0,0,0,0,0,0,0,0);
	if ( ! get_option('quiz_master_stats'))
	{
		add_option('quiz_master_stats' , $data);
   	}
	
	
	$data = "Enter In Your Questions and Answers";
	/*
	$questions = array
	(
		array($data,$data,$data,$data,$data),
		array($data,$data,$data,$data,$data),
		array($data,$data,$data,$data,$data)
	);
	*/
	$questions = array
	(
			array
			(
				$data,
				array($data,true,$data),
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data)
			),
			array
			(
				$data,
				array($data,false,$data),
				array($data,true,$data),
				array($data,false,$data),
				array($data,false,$data)
			),
			array
			(
				$data,
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data)
			),
			array
			(
				$data,
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data)
			),
			array
			(
				$data,
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data)
			),
			array
			(
				$data,
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data)
			),
			array
			(
				$data,
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data)
			),
			array
			(
				$data,
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data),
				array($data,false,$data)
			)
	);
	if ( ! get_option('quiz_master_questions_0'))
	{
		add_option('quiz_master_questions_0' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_0' , $questions);
	}
		
	if ( ! get_option('quiz_master_questions_1'))
	{
		add_option('quiz_master_questions_1' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_1' , $questions);
	}
	
	if ( ! get_option('quiz_master_questions_2'))
	{
		add_option('quiz_master_questions_2' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_2' , $questions);
	}
		
	if ( ! get_option('quiz_master_questions_3'))
	{
		add_option('quiz_master_questions_3' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_3' , $questions);
	}
	
		if ( ! get_option('quiz_master_questions_4'))
	{
		add_option('quiz_master_questions_4' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_4' , $questions);
	}
		
	if ( ! get_option('quiz_master_questions_5'))
	{
		add_option('quiz_master_questions_5' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_5' , $questions);
	}
	
		if ( ! get_option('quiz_master_questions_6'))
	{
		add_option('quiz_master_questions_6' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_6' , $questions);
	}
		
	if ( ! get_option('quiz_master_questions_7'))
	{
		add_option('quiz_master_questions_7' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_7' , $questions);
	}
	
		if ( ! get_option('quiz_master_questions_8'))
	{
		add_option('quiz_master_questions_8' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_8' , $questions);
	}
		
	if ( ! get_option('quiz_master_questions_9'))
	{
		add_option('quiz_master_questions_9' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_9' , $questions);
	}
	
		if ( ! get_option('quiz_master_questions_10'))
	{
		add_option('quiz_master_questions_10' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_10' , $questions);
	}
		
	if ( ! get_option('quiz_master_questions_11'))
	{
		add_option('quiz_master_questions_11' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_11' , $questions);
	}
	
		if ( ! get_option('quiz_master_questions_12'))
	{
		add_option('quiz_master_questions_12' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_12' , $questions);
	}
		
	if ( ! get_option('quiz_master_questions_13'))
	{
		add_option('quiz_master_questions_13' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_13' , $questions);
	}
	
		if ( ! get_option('quiz_master_questions_14'))
	{
		add_option('quiz_master_questions_14' , $questions);
   	}
	else
	{
		update_option('quiz_master_questions_14' , $questions);
	}
}

function quiz_master_uninstall()
{
	/*
	///These functions will erase all question data when the plugin is deactivated.
	///These are used for testing purposes.  Uncomment at your own risk.
	delete_option('quiz_master_are_correct');
	delete_option('quiz_master_use_points');
	delete_option('quiz_master_show_correct');
	delete_option('quiz_master_require_name');
	delete_option('quiz_master_require_business');
	delete_option('quiz_master_require_email');
	delete_option('quiz_master_send_user_email');
	delete_option('quiz_master_send_admin_email');
	delete_option('quiz_master_admin_email');
	delete_option('quiz_master_display_order');
	delete_option('quiz_master_completion_message');
	delete_option('quiz_master_quiz_above_message');
	delete_option('quiz_master_user_email_message');
	delete_option('quiz_master_show_name');
	delete_option('quiz_master_show_business');
	delete_option('quiz_master_show_email');
	delete_option('quiz_master_show_phone_number');
	delete_option('quiz_master_require_phone_number');
	delete_option('quiz_master_table_width');
	delete_option('quiz_master_version_email_sent');
	delete_option('quiz_master_font_color');
	delete_option('quiz_master_stats');
	///delete_option('quiz_master_question_amount');
	//delete_option('quiz_master_questions_0');
	//delete_option('quiz_master_questions_1');
	///delete_option('quiz_master_quiz_views');
	///delete_option('quiz_master_quiz_taken');
	*/
	delete_option('quiz_master_questions');
}
?>