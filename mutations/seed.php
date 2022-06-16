<?php
$user = 'root';
$pass = '';
$db = 'mutations';

$db = new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");

$sql = "SELECT * from region where region='Seed'";
if (isset($_POST['submit'])){
	$name=$_POST['miRNA'];
	$sql="SELECT * from region where region='Seed' and miRNA_name='".$name."'";
	$result = $db -> query($sql);
}
$result = $db -> query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title> Seed </title>
</head>

<body>
<div class="header">

	<nav>
	<a href="home.html" class ="btn" style="color:white"> Click to go Home </a>
	</nav>

<h1 style="color: black"> Mutations in miRNA </h1>
<p style="color: black"> Mutations that occur in the seed region of miRNA specifically </p>

</div>

<br>
<br>
<br>
<br>
<center>
		<form action="" method="post">
		<label for="">Enter miRNA name:</label>
		<input type="text" name="miRNA" >
		<input type="submit" value="Search" name="submit">
	</form>
	<br>
	<br>
</center>

<table>
<tr>
<th> miRNA Name </th>
<th> Chromosome </th>
<th> Strand </th>
<th> Allele </th>
<th> Sequence </th>
</tr>

<?php

if ($result -> num_rows >0 ) {
	while ($row = $result -> fetch_assoc()) {
	echo "<tr><td>" .$row["miRNA_name"]."</td><td>".$row["chr_number"]."</td><td>".$row["strand"]."</td><td>".$row["allele"]."</td><td>".$row["Sequence"]."</td></tr>";
}
echo"</table>";
}

else {
echo "0 result";
}

$db -> close();
?>

</table>
</body>

<style>
table {
	border-collapse: collapse;
	border spacing: 0;
	margin-left: auto;
  	margin-right: auto;
	font-size: 15px;
	border: 1px solid #ddd;
}

td {
	text-align: left;
	border: 1px solid #ddd;
  	padding: 8px;
}

tr:nth-child(even) {
background-color: #c5e1a5;
}

th {
background-color: #558b2f;
color : white;
text-align: center;
border: 1px solid #ddd;
padding: 8px;
}

tr:nth-child(even):hover {
background-color: #33691e;
color: white;
}

tr:nth-child(odd):hover {
background-color: #33691e;
color: white;
}


.header {
  padding: 8px;
  text-align: center;
  background: #8bc34a;
  color: white;
  font-size: 25px;
}

nav {
	float : right;
}

</style>
</html>