<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<title>current Information</title>
</head>
<body>
<div id="wrapper">
<?php
include('includes/header.php');
include('includes/nav2.php');
?>
    <br></br>
 <center>

<div id="content">
<form  class="nave" action="vieww.php" method="post" accept-charset='UTF-8'>
     <filedset width="20">
        <table  cellpadding="10" cellspacing="6" bodercolor="blue" border="0" >
	<tr ><td>
	<label for='Department'><h4> Department:</h4></label></td>
            <td>
        <select name="formDepartment" required style="width: 170px;">
		<option value="">Select a Department...</option>
                <option value="100">Computer Application</option>
                <option value="101">Chemical Engineering</option>
		<option value="102">Civil Engineering</option>
                <option value="103">Computer Science and Engineering</option>
		<option value="104">Electical and Electronics Engineering</option>
		<option value="105">Electronics and Communication Engineering</option>
                <option value="106">Instrumentation and Control Engineering</option>
		<option value="107">Mechanical Engineering</option>
                <option value="108">Metallurgical and Materials Engineering</option>
                <option value="109">Production Engineering</option>

	</select>
            </td> </tr> 
             <tr ><td>
        <label for='userID' ><h4>Semester  :</h4></label></td>
        <td>
        <select name="semester" required style="width: 170px;">
		<option value="">Select a semester...</option>
                <option value="1">semester_1</option>
		<option value="2">semester_2</option>
		<option value="3">semester_3</option>
		<option value="4">semester_4</option>
		<option value="5">semester_5</option>
                <option value="6">semester_6</option>
		<option value="7">semester_7</option>
		<option value="8">semester_8</option>
	</select>
    	</td></tr>

          </table><br></br><br></br>
     <table  cellpadding="3" cellspacing="3" bodercolor="blue" align="center" >
    <tr><td>
            <input type="submit" name="view" value="View" style="background-color:cyan; width: 100px;" />
       </td></tr>
        </table>
         </fieldset>
</form>

</div> <!-- end #content -->
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

</center>
    <br/><br/><br/><br/><br/><br/><br/>
<?php
include('includes/footer.php');
?>
</div> <!-- End #wrapper -->
</body>
</html>


