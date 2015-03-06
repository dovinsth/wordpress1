<?php
/*
Template Name: Peace Rally Registration page
*/
?>

<?php get_header();?>

<div class="container_12">
    <div class="grid_14" >
<BR> <BR>
<p>Only partial information have been displayed here. Please click on <B>Id</B> to view all information about respective entry.</p>


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

   $query = "SELECT * FROM Peace_Rally";
   $result = mysql_query($query)
     or die('A error occured: ' . mysql_error());
   
   //close the connection
   mysql_close($dbhandle);


   $o = '<table width="1000px" border="1px solid" CELLPADDING=15px CELLSPACING=0 style="padding: 5px">
         <thead>
         <tr>
         <th>Id</th>
         <th>Organization Name</th>
         <th>Address</th>
         <th>Telephone</th>
         <th>Email</th>
         <th>Site</th>
         </tr>
         </thead><tbody>';


      while ( $record = mysql_fetch_array($result) )
          { 
              $o .= '<tr>
                      <td>'.'<a href="../peace-rally-single?Id='.$record ['Id'].'">'.$record ['Id'].'</a>'.'</td>
                      <td>'.$record ['organization_name'].'</td>
                      <td>'.$record ['address'].'</td>
                      <td>'.$record ['telephone'].'</td>
                      <td>'.$record ['email'].'</td>
                      <td>'.$record ['site'].'</td>
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



