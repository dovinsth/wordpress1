<?php
/*
These functions creates the dashboard elements
*/
function quiz_master_add_dashboard()
{
		$quiz_master_loads = get_option('quiz_master_quiz_views');
		$quiz_master_submits = get_option('quiz_master_quiz_taken');
		echo '<tr>';
		echo '<td class="first b"><a href="">' . $quiz_master_loads . '</a></td>';
		echo '<td class="t"><a href="">Quizzes Loaded</a></td>';
		echo '<td class="b"><a href="">' . $quiz_master_submits . '</a></td>';
		echo '<td class="last t"><a href="">Quizzes Taken</a></td>';
		echo '</tr>';
}
?>