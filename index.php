<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Wel come to Online Exam</title>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css"> 
    <style>
        body{
            
    background-image: url('1.jpg');
    background-size: cover;
        }
    </style>
    </head>
<body >
    
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Online Exam</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Registration</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
        </ul>
    </div>
</nav>
            <?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 align=center>Wel come to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result  </a></td>
  </tr>
</table>';
   
		exit;
		

}


?>
<center><h1>Welcome To Online Exam</h1></center> 

  <center> <form name="form1" method="post" action="">
      <table width="200" border="0" >
        <tr>
          <td><span >Login ID </span></td>
          <td><input bgcolor="red" class='form-control'  name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span>Password</span></td>
          <td><input name="pass"class='form-control'  type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit"class='btn btn-primary' id="submit" value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="white"><div align="center"><span><a href="signup.php">New Student</a></span></div></td>
          </tr>
      </table>
    </form></center>


</body>
</html>
