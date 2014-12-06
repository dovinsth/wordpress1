<?php

function quiz_master_generate_admin_page()
{
	$success = $_POST["quiz_master_clear"];
	if ($success == 'clear_questions')
	{
		$data = "";
		$questions = array
		(
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
		update_option('quiz_master_questions' , $questions);	
	}
	$quiz_master_temp_data = get_option('quiz_master_questions_0');
	$quiz_master_data = $quiz_master_temp_data;
	?>
	<style type="text/css">
		div.quiz_admin input[type='text'] {
		border-color:#000000;
		color:#3300CC; 
		cursor:hand;
		}
		textarea{
		border-color:#000000;
		color:#3300CC; 
		cursor:hand;
		}
		</style>
	<div class="wrap">
	<div class="quiz_admin">
	<h2>Quiz One</h2>
	<table class="wide" style="text-align: left; white-space: nowrap;">
	<thead>
	<?php
	echo "<form action='" . $PHP_SELF . "' method='post'>";
	echo "<input type='hidden' name='quiz_master_clear' value='clear_questions' />";
	echo "<input type='submit' value='Clear Questions' />";
	echo "</form>";
	?>

	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options'); ?>
	
	<tr valign="top">
	<th scope="row">How Many Questions in this quiz?</th>
	<td><select name="quiz_master_question_amount_0"><?php  $opt_ply = get_option('quiz_master_question_amount_0'); ?>
		<option value="1" <?php if( $opt_ply == '1'){ echo 'selected'; } ?>>1</option>
		<option value="2" <?php if( $opt_ply == '2'){ echo 'selected'; } ?>>2</option>
		<option value="3" <?php if( $opt_ply == '3'){ echo 'selected'; } ?>>3</option>
		<option value="4" <?php if( $opt_ply == '4'){ echo 'selected'; } ?>>4</option>
		<option value="5" <?php if( $opt_ply == '5'){ echo 'selected'; } ?>>5</option>
		<option value="6" <?php if( $opt_ply == '6'){ echo 'selected'; } ?>>6</option>
		<option value="7" <?php if( $opt_ply == '7'){ echo 'selected'; } ?>>7</option>
		<option value="8" <?php if( $opt_ply == '8'){ echo 'selected'; } ?>>8</option>
		<option value="9" <?php if( $opt_ply == '9'){ echo 'selected'; } ?>>9</option>
		<option value="10" <?php if( $opt_ply == '10'){ echo 'selected'; } ?>>10</option>
		<option value="11" <?php if( $opt_ply == '11'){ echo 'selected'; } ?>>11</option>
		<option value="12" <?php if( $opt_ply == '12'){ echo 'selected'; } ?>>12</option>
		<option value="13" <?php if( $opt_ply == '13'){ echo 'selected'; } ?>>13</option>
		<option value="14" <?php if( $opt_ply == '14'){ echo 'selected'; } ?>>14</option>
		<option value="15" <?php if( $opt_ply == '15'){ echo 'selected'; } ?>>15</option>
		<option value="16" <?php if( $opt_ply == '16'){ echo 'selected'; } ?>>16</option>
		<option value="17" <?php if( $opt_ply == '17'){ echo 'selected'; } ?>>17</option>
		<option value="18" <?php if( $opt_ply == '18'){ echo 'selected'; } ?>>18</option>
		<option value="19" <?php if( $opt_ply == '19'){ echo 'selected'; } ?>>19</option>
		<option value="20" <?php if( $opt_ply == '20'){ echo 'selected'; } ?>>20</option>
		</select></td>
	</tr>
	
	<tr valign="top">
	<th scope='row'>&nbsp;</th>
	<td>&nbsp;</td>
	<td>Correct  </td>
	<td> Points</td>
	</tr>
	
	<?php
	$quiz_master_question_amount = get_option('quiz_master_question_amount_0');
	for ($i=0; $i<=$quiz_master_question_amount -1; $i++)
	{
		for ($l=1; $l<=8; $l++)
		{
			$name_id[$l] = "quiz_master_questions_0[" . $i . "][" . $l . "][1]";
			if ($quiz_master_data[$i][$l][1])
				$is_checked[$l] = "checked='checked'";
			else
				$is_checked[$l] = "";
		}
		$quiz_master_current_num = $i + 1;
		echo "<tr valign='top'>
		<th scope='row'>&nbsp;</th>
		<td>&nbsp;</td>
		</tr>";
		
		echo "<tr valign='top'>
		<th scope='row'>Question  " . $quiz_master_current_num . "</th>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][0]' value='" . $quiz_master_data[$i][0] . "' /></td>
		</tr>";
		
		echo "<tr valign='top'>
		<th scope='row'>First Answer</th>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][1][0]' value='" . $quiz_master_data[$i][1][0] . "' /></td>		
		<td>";
		?>
		<input name="<?php echo $name_id[1]; ?>" id=<?php echo $name_id[1]; ?> type='checkbox' value='1' <?php echo $is_checked[1]; ?> /></td>
		<?php
		echo "<td><input type='text' name='quiz_master_questions_0[" . $i . "][1][2]' value='" . $quiz_master_data[$i][1][2] . "' /></td>
		</tr>";
		
		echo "<tr valign='top'>
		<th scope='row'>Second Answer</th>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][2][0]' value='" . $quiz_master_data[$i][2][0] . "' /></td>
		<td>";
		?>
		<input name="<?php echo $name_id[2]; ?>" id=<?php echo $name_id[2]; ?> type='checkbox' value='1' <?php echo $is_checked[2]; ?> /></td>
		<?php
		echo "</td>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][2][2]' value='" . $quiz_master_data[$i][2][2] . "' /></td>
		</tr>";
		
		echo "<tr valign='top'>
		<th scope='row'>Third Answer</th>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][3][0]' value='" . $quiz_master_data[$i][3][0] . "' /></td>
		<td>";
		?>
		<input name="<?php echo $name_id[3]; ?>" id=<?php echo $name_id[3]; ?> type='checkbox' value='1' <?php echo $is_checked[3]; ?> /></td>
		<?php
		echo "</td>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][3][2]' value='" . $quiz_master_data[$i][3][2] . "' /></td>
		</tr>";
		
		echo "<tr valign='top'>
		<th scope='row'>Fourth Answer</th>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][4][0]' value='" . $quiz_master_data[$i][4][0] . "' /></td>
		<td>";
		?>
		<input name="<?php echo $name_id[4]; ?>" id=<?php echo $name_id[4]; ?> type='checkbox' value='1' <?php echo $is_checked[4]; ?> /></td>
		<?php
		echo "</td>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][4][2]' value='" . $quiz_master_data[$i][4][2] . "' /></td>
		</tr>";

		echo "<tr valign='top'>
		<th scope='row'>Fifth Answer</th>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][5][0]' value='" . $quiz_master_data[$i][5][0] . "' /></td>
		<td>";
		?>
		<input name="<?php echo $name_id[5]; ?>" id=<?php echo $name_id[5]; ?> type='checkbox' value='1' <?php echo $is_checked[5]; ?> /></td>
		<?php
		echo "</td>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][5][2]' value='" . $quiz_master_data[$i][5][2] . "' /></td>
		</tr>";

		echo "<tr valign='top'>
		<th scope='row'>Sixth Answer</th>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][6][0]' value='" . $quiz_master_data[$i][6][0] . "' /></td>
		<td>";
		?>
		<input name="<?php echo $name_id[6]; ?>" id=<?php echo $name_id[6]; ?> type='checkbox' value='1' <?php echo $is_checked[6]; ?> /></td>
		<?php
		echo "</td>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][6][2]' value='" . $quiz_master_data[$i][6][2] . "' /></td>
		</tr>";

		echo "<tr valign='top'>
		<th scope='row'>Seventh Answer</th>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][7][0]' value='" . $quiz_master_data[$i][7][0] . "' /></td>
		<td>";
		?>
		<input name="<?php echo $name_id[7]; ?>" id=<?php echo $name_id[7]; ?> type='checkbox' value='1' <?php echo $is_checked[7]; ?> /></td>
		<?php
		echo "</td>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][7][2]' value='" . $quiz_master_data[$i][7][2] . "' /></td>
		</tr>";	
		
		echo "<tr valign='top'>
		<th scope='row'>Eigth Answer</th>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][8][0]' value='" . $quiz_master_data[$i][8][0] . "' /></td>
		<td>";
		?>
		<input name="<?php echo $name_id[8]; ?>" id=<?php echo $name_id[8]; ?> type='checkbox' value='1' <?php echo $is_checked[8]; ?> /></td>
		<?php
		echo "</td>
		<td><input type='text' name='quiz_master_questions_0[" . $i . "][8][2]' value='" . $quiz_master_data[$i][8][2] . "' /></td>
		</tr>";	
		
	}
	?>
	
	</thead>
	</table>


	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="quiz_master_questions_0,quiz_master_question_amount_0" />

	<p class="submit">
	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
	</p>
	
	</form>
	</div>
	</div>


<?php
}
?>