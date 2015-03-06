<?php
/*
Template Name: Peace Rally Single page
*/
?>


<?php get_header(); ?>

<div class="container_12">
    <div class="grid_14" >


<?php 
$id = $_GET['Id'];

  try{ 
     
    $hostname = "localhost";
    $username = "worldami_live";
    $password = "changeme@2";

   $dbhandle = mysql_connect($hostname, $username, $password) 
     or die("Unable to connect to MySQL");

   //select a database to work with
   $selected = mysql_select_db("worldami_live_db",$dbhandle) 
     or die("Could not select worldami_live_db");

   $query = "SELECT * FROM Peace_Rally WHERE Id=$id";
   $result = mysql_query($query)
     or die('A error occured: ' . mysql_error());

   //close the connection
   mysql_close($dbhandle);

   // $record = mysql_fetch_array($result);

   $str = "\n \n Details are as follows \n \n";
   echo nl2br($str);
   // echo "\n\n\n";


   $o = '<table width="780px" border="1px solid" CELLPADDING=15px CELLSPACING=0 style="padding: 5px">
		<tbody>';
       while ( $record = mysql_fetch_array($result) )
           { 
        
               $o .= '<tr>
   						<td>Id</td>
   						<td>'.$record['Id'].'</td>
						</tr>

					  <tr>
   						<td>Organization Name</td>
   						<td>'.$record['organization_name'].'</td>
						</tr>


					  <tr>
   						<td>address</td>
   						<td>'.$record['address'].'</td>
						</tr>

					  <tr>
   						<td>telephone</td>
   						<td>'.$record['telephone'].'</td>
						</tr>

					  <tr>
   						<td>fax</td>
   						<td>'.$record['fax'].'</td>
						</tr>

					  <tr>
   						<td>email</td>
   						<td>'.$record['email'].'</td>
						</tr>

					  <tr>
   						<td>site</td>
   						<td>'.$record['site'].'</td>
						</tr>

					  <tr>
   						<td>established</td>
   						<td>'.$record['established'].'</td>
						</tr>

					  <tr>
   						<td>total_member</td>
   						<td>'.$record['total_member'].'</td>
						</tr>

					  <tr>
   						<td>contact_person</td>
   						<td>'.$record['contact_person'].'</td>
						</tr>

					  <tr>
   						<td>designation</td>
   						<td>'.$record['designation'].'</td>
						</tr>

					  <tr>
   						<td>tel</td>
   						<td>'.$record['tel'].'</td>
						</tr>

					  <tr>
   						<td>objective</td>
   						<td>'.$record['objective'].'</td>
						</tr>

					  <tr>
   						<td>participant_count</td>
   						<td>'.$record['participant_count'].'</td>
						</tr>

					  <tr>
   						<td>banner_slogan</td>
   						<td>'.$record['banner_slogan'].'</td>
						</tr>
						';
                        
           }              
        $o .= '</tbody></table>';
        echo $o;
       
    //free result set memory
        mysql_free_result($result);

    //close the connection
        mysql_close($dbhandle);





  } catch(Exception $e){  
        redirect( get_template_directory_uri().'error.php');
  }
?>


<BR> <BR>

<a href="../peace-rally-registration"><u>Back</u></a>


	</div>
</div>


<?php get_footer();?>