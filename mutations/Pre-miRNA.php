<!DOCTYPE html>
<html>
<head>
<title> Pre-miRNA </title>
</head>

<body>
<div class="header">

	<nav>
	<a href="home.html"> <image src="home_button.png" width="25" height="25"> </a>
	</nav>

<h1> Mutations in miRNA </h1>
<p> Mutations that occur in the Pre-miRNA region of miRNA specifically </p>

</div>

<br>
<br>


<table>
<tr>
<th> miRNA Name </th>
<th> Chromosome </th>
<th> Strand </th>
</tr>

<?php
$user = 'root';
$pass = '';
$db = 'mutations';

$db = new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");

$sql = "SELECT * from region where region='Pre-miRNA'";
$result = $db -> query($sql);

if ($result -> num_rows >0 ) {
	while ($row = $result -> fetch_assoc()) {
	echo "<tr><td>" .$row["miRNA_name"]."</td><td>".$row["chr_number"]."</td><td>".$row["strand"]."</td></tr>";
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
background-color: #f2f2f2;
}

th {
background-color: #e85848;
color : white;
text-align: center;
border: 1px solid #ddd;
padding: 8px;
}

tr:nth-child(even):hover {
background-color: #787878;
color: white;
}

tr:nth-child(odd):hover {
background-color: #787878;
color: white;
}


.header {
  padding: 8px;
  text-align: center;
  background: #e85848;
  color: white;
  font-size: 25px;
}

nav {
	float : right;
}

</style>
</html>