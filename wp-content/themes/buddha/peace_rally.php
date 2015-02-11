<?php
/*
Template Name: Peace Rally Form page
*/
?>

<?php
// function redirect($url, $statusCode = 303)
// {
//    header('Location: ' . $url, true, $statusCode);
//    die();
// }
?>

<?php get_header(); ?>

<?php
    // if($_POST){

    //     $username = "root";
    //     $password = "";
    //     $hostname = "localhost"; 

    //     //connection to the database
    //     $dbhandle = mysql_connect($hostname, $username, $password)
    //     or die("Unable to connect to MySQL");
    //     //select database
    //     $selected = mysql_select_db("examples",$dbhandle)
    //      or die("Could not select examples");
    //     //execute the SQL query to save records
    //     $result = mysql_query("sql query here");
        
    //     }
    ?>    


<div class="content">
    <div class="container_12">
        <div class="grid_12">

<!-- ********************   Form starts here *********************** -->
<BR><BR><BR><BR>
<table width="780px">
        <tr>
            <td>
                <IMG SRC="<?php echo get_template_directory_uri().'/forms/images/main_logo.jpg'; ?>" NAME="Picture 0" WIDTH=115 HEIGHT=155 BORDER=0>

            </td>
            <td>
                <p align="center">
                    <FONT FACE="Arial, serif">
                        <FONT COLOR="#7e4e21" SIZE=4 STYLE="font-size: 14pt"><B>World Peace City Lumbini, Nepal <BR> 
                        International Conference 2015</B> <BR></FONT>
                        <FONT COLOR="#ff0000" SIZE=3><B>May 4-5, 2015</B> <BR></FONT>
                        <FONT SIZE=3><B>Bedford Hotel and Congress Centre Brussels</B> <BR><B>Rue Du Midi 135, Brussels, 1000, Belgium</B> <BR></FONT>
                    
                        <FONT COLOR="#ff0000" SIZE=5 STYLE="font-size: 20pt"><B>World Peace Rally and Buddha Jayanti</B> <BR> </FONT>
                        <FONT COLOR="#6a0007" SIZE=4 STYLE="font-size: 16pt"><B>Organization Participation Registration Form</B> <BR></FONT>
                    </FONT>
                </p>
            </td>


        </tr>
    </table>
    <BR><BR><BR>

        <form action="" id="peace_rally_form">

        <table class="form_table">
                        
            <tr>
                <td class="label1">Organization Name: </td>
                <td class="last"> <input type="text" name="organization_name" id="organization_name" /></td>
            </tr>
            <tr>
                <td class="label1"> Address: </td>
                <td class="last"><textarea type="text" name="address" id="address" rows="4" cols="60" /></textarea> </td>
            </tr>
            <tr>
                <td class="label1">Telephone:</td>
                <td><input type="text" name="telephone" id="telephone"/></td>
                <td class="label2"> Fax:</td> 
                <td><input type="text" name="fax" id="fax"/></td>
            </tr>
            <tr>
                <td class="label1">Email:</td>
                <td><input type="text" name="email" id="email"/></td>
                <td class="label2"> Site:</td> 
                <td><input type="text" name="site" id="site"/></td>
            </tr>
            <tr>
                <td class="label1"> Established in:</td>
                <td> <input type="date" name="established" id="established"/></td>
                <td class="label2"> Total Members:</td> 
                <td> <input type="text" name="total_member" id="total_member"/></td>
            </tr>
            <tr>
                <td class="label1">Contact Person: </td>
                <td class="last"> <input type="text" name="contact_person" id="contact_person" /></td>
            </tr>
            <tr>
                <td class="label1"> Designation:</td>
                <td> <input type="text" name="designation" id="designation"/></td>
                <td class="label2"> Tel:</td> 
                <td> <input type="text" name="tel" id="tel"/></td>
            </tr>
            <tr>
                <td class="label1"> Objective: </td>
                <td class="last"><textarea type="text" name="objective" id="objective" rows="5" cols="60" /></textarea> </td>
            </tr>
            <tr>
                <td class="label1">Estimated participants in the rally: </td>
                <td class="last"> <input type="text" name="participant_count" id="participant_count" /></td>
            </tr>
            <tr>
                <td class="label1">Banner Slogan: </td>
                <td class="last"> <textarea type="text" name="banner_slogan" id="banner_slogan" rows="3" cols="50" /></textarea></td>
            </tr>
           <!--  <tr>
                <td> 
                    <input type="submit" class="submit_button">
                </td>
            </tr> -->

        </table>

        
            
        </form>

<BR><BR><BR>
<table width="780px" border="1px solid" CELLPADDING=15px CELLSPACING=0 style="padding: 5px">
    <tr>
        <td>
            <B>Account Name: </B>
        </td>
        <td>
            <p>
                <B>Name: </B> Mr. Ram Kumar Shrestha <BR>
                <B>Address: </B>12 Waurn Park Court, Belmont Victoria - 3216, Australia

            </p>
        </td>
    </tr>
    <tr>
        <td>
            <B>Accounting No: </B>
        </td>
        <td>
            <B>SWIFT CODE:</B> CTB AAU 2S <BR>
            <B>BSB</B>: 063000   <B>Account Number:</B>12166512
        </td>
    </tr>
    <tr>
        <td>
            <B>Banker Name:</B>
        </td>
        <td>
            Commonwealth Bank
        </td>
    </tr>

</table>

<BR><BR>    

<p> <B>If you are from Belgium, please use this information for the payment:</B> </p>

<BR>

<table width="780px" border="1px solid" CELLPADDING=15px CELLSPACING=0 style="padding: 5px" >
    <tr>
        <td>
            <B>Account Name: </B>
        </td>
        <td>
            <p>
                <B>Name: </B>Mr. Damodar Prasad Acharya <BR>
                <B>Address: </B>Brouwersstraat 4/0103, 3000 Leuven, Belgium

            </p>
        </td>
    </tr>
    <tr>
        <td>
            <B>Accounting No: </B>
        </td>
        <td>
            IBAN: BE86 <BR>
            0358        4994 4050 <BR>
            BIC: GEBABEBB


        </td>
    </tr>
    <tr>
        <td>
            <B>Banker Name:</B>
        </td>
        <td>
            BNP PARIBAS FORTIS LEUVEN-CENCRUM <BR>
            Vital Decosterstraat 42

        </td>
    </tr>

</table>

<BR><BR><BR>

<p>
    Participation fee &euro;200.00 paid by cash/ cheque or bank draft. (Proof emailed in <a href="mailto:omram2002@gmail.com">omram2002@gmail.com</a> and <a href="mailto:ram.shrestha009@gmail.com">ram.shrestha009@gmail.com</a> )
</p>
<p>
    <B>Note:</B> Best 3 organizations will have <B>Special Present</B> by our <B>Special Guest</B>. Try to make your presentation as attractive as possible, because our judge committee will judge based on your presentation. 
</p>

<BR><BR>
<p>*Please review the registration form before submitting. </p>

<input form="peace_rally_form" type="submit" class="submit_button"> <!-- Submit Button -->

<BR><BR><BR><BR><BR><BR>


<table align="center">
    <tr>
        <td align="center">
            <B>Organized By</B><BR>
            <img src="<?php echo get_template_directory_uri().'/forms/images/logo_1.jpg'; ?>" WIDTH=115 HEIGHT=155 BORDER=0> <BR>
            <B>Lumbini-Kapilvastu</B><BR>
            <B>Day Movememt</B>
        </td>
        <td align="center">
            <B>In Association with</B><BR>
            <img src="<?php echo get_template_directory_uri().'/forms/images/logo_2.jpg'; ?>" WIDTH=115 HEIGHT=155 BORDER=0> <BR>
            <B>Belgium-Nepal</B><BR>
            <B>Friendship Association</B>
        </td>   
        <td align="center">
            <B>Nepalese Embassy</B><BR>
            <B>Brussels, Belgium</B>
        </td>   
    </tr>
</table>



<!-- ***********************  Form ends here  *********************** -->        
        </div>  
    </div>
</div>






<?php get_footer();?>