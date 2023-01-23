<?php
include("connection.php");
if(isset($_POST['submit']))
{
    $i=$_POST['id'];
    $n=$_POST['name'];
    $so=$_POST['s1'];
    $ss=$_POST['s2'];
    $ao=$_POST['a1'];
    $as=$_POST['a2'];
    $att=$_POST['att'];
    $ch="INSERT INTO details VALUES('$i','$n','$so','$ss','$ao','$as','$att')";
    $k=mysqli_query($conn,$ch);
if($k){
    echo("inserted successfully");
}
}
?>



<html>
<head>
</head>
<body>
<form method="post">
	<label>ktu id:</label>
	<input type="text" name="id"><br>
	<label>NAME:</label>
	<input type="text" name="name"><br>
	<label>series 1:</label>
	<input type="text" name="s1"><br>
	<label>series 2</label>
	<input type="text" name="s2"><br>
	<label>assignment 1:</label>
	<input type="text" name="a1"><br>
	<label>assignment 2:</label>
	<input type="text" name="a2"><br>
	<label>ATTENDANCE:</label>
	<input type="text" name="att"><br>
	<input type="submit" name="submit" value="add">
</form>
</body>
</html>


