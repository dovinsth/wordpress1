<?php
/*
Template Name: Peace marathon Registration page
*/
?>

<?php get_header();?>

<div class="container_12">
    <div class="grid_14" >


<BR><BR>

<?php

  try{ 
     
    $hostname = "localhost";
    $username = "worldami_live";
    $password = "changeme@2";

   $dbhandle = mysql_connect($hostname, $username, $password) 
     or die("Unable to connect to MySQL");

   //select a database to work with
   $selected = mysql_select_db("worldami_live_db",$dbhandle) 
     or die("Could not select worldami_live_db");

   $query = "SELECT * FROM Peace_Marathon";
   $result = mysql_query($query)
     or die('A error occured: ' . mysql_error());
   
   //close the connection
   mysql_close($dbhandle);


   $o = '<table width="1000px" border="1px solid" CELLPADDING=15px CELLSPACING=0 style="padding: 5px">
         <thead>
         <tr>
         <th>Id</th>
         <th>Person Name</th>
         <th>Address</th>
         <th>Telephone</th>
         <th>Fax</th>
         <th>Email</th>
         <th>Age Group</th>
         </tr>
         </thead><tbody>';

      while ( $record = mysql_fetch_array($result) )
          {
              $o .= '<tr>
                      <td>'.$record ['Id'].'</td>
                      <td>'.$record ['person_name'].'</td>
                      <td>'.$record ['address'].'</td>
                      <td>'.$record ['telephone'].'</td>
                      <td>'.$record ['fax'].'</td>
                      <td>'.$record ['email'].'</td>
                      <td>'.$record ['age_group'].'</td>
                      </tr>';
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



    </div>
</div>



<?php get_footer();?>

