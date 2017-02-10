<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<STYLE TYPE="text/css">
#header
{
  height: 50px;
  background: #0099d9;
  color: #fff;

}

#webhead
{
  margin-top: 10px;
  font-family: "Segoe Print";
  margin-left: 10px;
  font-size: 24px;
}
</STYLE>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "mycollege";

$email=$_POST['email'];
$collegename=$_POST['collegename'];
$stress=$_POST['stress'];
$freedom=$_POST['freedom'];
$rules=$_POST['rules'];
$fineradio=$_POST['fine'];
$raggingradio=$_POST['ragging'];
$hostelradio=$_POST['hostel'];
$facultyradio=$_POST['faculty'];
$infrastructureradio=$_POST['infrastructure'];
$exposureradio=$_POST['exposure'];
$campusplacementradio=$_POST['campusplacement'];
$univrankholderradio=$_POST['univrankholder'];

$con = new mysqli($servername,$username,$password,$databasename);

if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
} 
else
{
$slt = "insert into survey values('','$email','$collegename','$stress','$freedom','$rules','$fineradio','$raggingradio','$hostelradio','$facultyradio','$infrastructureradio','$exposureradio','$campusplacementradio','$univrankholderradio')";
$y=mysqli_query($con,$slt);
}
$con -> close();
?>
<div data-role = "page" >
	<div data-role="header" id="header">
<div id="webhead">
<font id"text">mycollege</font>
</div></div>
	<div data-role = "main" class= "ui-content">
<div id="box">
	<h2>

    <ul>
                  <li>Thanks For Providing Us your College Details</li>
                  <li>At no Circumstances , Your data will be leaked out</li>
                  <li>Details Provided are for the benifits of The Students </li>



    </ul>

	</h2>
</div>
<div data-role="footer">
<h1>Beta Version | Developed By Smazee Studio </h1>
</div>
</div>
</body>
</html>