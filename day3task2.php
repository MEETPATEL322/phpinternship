<html>
<head>
<title>Demo Registration Form</title>
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:SlateBlue;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:white; font-size: 11pt; font-style: normal;
text-align:; background-color: SlateBlue; border-collapse: collapse; border: 2px solid navy}
table.inner{border: 0px}
</style>
</head>
<body>
<h3>ENTER STUDENTS MARKS</h3>
<form action="Display-Marks.php" method="POST">
<table align="center" cellpadding = "10">
<!-- First Name -->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30" required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<!-- Last Name -->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30" required/>
(max 30 characters a-z and A-Z)
<td>
</tr>
<td>Science and Technology</td>
<td><input type="text" name="number1" maxlength="2" />
(out of 100)
</td>
</tr>
<tr>
<td>Mathematics</td>
<td><input type="text" name="number2" maxlength="2" />
(out of 100)
</td>
</tr>
<tr>
<td>Social Science</td>
<td><input type="text" name="number3" maxlength="2" />
(out of 100)
</td>
</tr>
<tr>
<td>English</td>
<td><input type="text" name="number4" maxlength="2" />
(out of 100)
</td>
</tr>
<tr>
<td>Hindi</td>
<td><input type="text" name="number5" maxlength="2" />
(out of 100)
</td>
</tr>
<td>Gujarati</td>
<td><input type="text" name="number6" maxlength="2" />
(out of 100)
</td>
</tr>
<td>Sanskrit</td>
<td><input type="text" name="number7" maxlength="2" />
(out of 100)
</td>
<td>Computer</td>
<td><input type="text" name="number8" maxlength="2" />
(out of 100)
</td>
</tr>
</tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
<?php

$Total = number1 + number2 + number3 + number4 + number5 + number6 + number7 + number8;
echo "Total Marks = <b> $Total </b><br />";
$Percentage = ($Total * 100) / 500;
echo "Percentage = <b> $Percentage </b><br />";
if($Percentage > 75)
{ echo "Grage = Distinction";}
elseif($Percentage > 60)
{ echo "Grage = First Class";}
elseif($Percentage > 50)
{ echo "Grage = Second Class";}
elseif($Percentage > 40)
{ echo "Grage = Third Class";}
else
{ echo "Fail";}
?>
</table> 
</form> 
</body>
</html>