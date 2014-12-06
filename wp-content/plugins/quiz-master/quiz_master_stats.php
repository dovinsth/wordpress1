<?php
/*
Generates Stats Page
*/

function generate_quiz_master_stats_page()
{
?>
<div class="wrap">
<h2>Quiz Master Stats</h2>
<p>This page is currently a work in progress.  If you have any suggestions, comments, and/or questions please use the support widget from the main page.</p>
<p>Currently, the plan is to have each quiz broken down into bar graphs and line graphs showing totals over the last week and totals of all time.</p>
<table>
<tr>
<?php
$quiz_master_stats = get_option('quiz_master_stats');
$l = $quiz_master_stats[10];
echo "<td>Today</td>";
echo "<td>Yesterday</td>";
echo "</tr><tr>";
for ($i = 0; $i <= 9; $i++)
{
	echo "<td>" . $quiz_master_stats[$l] . "</td>";
	if ($l = 0)
		$l = 9;
	else
		$l -= 1;
}
?>
</tr>
</table>
</div>
<?php
}
?>