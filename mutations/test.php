<!DOCTYPE html>
<html>
<head>
<title> CLASH </title>
</head>

<body>
<div class="header">
	<nav>
	<a href="home.html" class ="btn" style="color:black"> Click to go Home </a>
	</nav>
<h1 style="color:black"> Mutations in miRNA </h1>
<p style="color:black"> Mutations in experimentally identified miRNA target sites: CLASH </p>

</div>

<br>
<br>
<p> Page </p>

<table>
<tr>
<th> Reference Sequence </th>
<th> Gene Symbol </th>
<th> MicroRNA name </th>
<th> Mutation ID </th>
<th> Mutation Chromosome </th>
<th> Mutation Location </th>
<th> Mutation Observed </th>
</tr>

<?php

$mysqli = NEW MySQLi('localhost','root','','mutations');

$rpp = 2500;

isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;

if($page>1) {
	$start = ($page * $rpp) - $rpp;
}
else {
$start=0;
}

$resultSet = $mysqli->query("SELECT refseq FROM clash_1");

$numRows = $resultSet->num_rows;

$totalPages = $numRows/$rpp;

$resultSet = $mysqli -> query("SELECT * FROM clash_1 LIMIT $start, $rpp");


for($x = 1;$x <= $totalPages + 1; $x++)
{
	echo '<div class="pagination">';
	echo "<a href='?page=$x'> $x </a>";
	echo '</div>';
}

while($rows = $resultSet -> fetch_assoc()) {

	$refseq = $rows['refseq'];
	$symbol = $rows['symbol'];
	$microRNA_name = $rows['microRNA_name'];
	$mutid = $rows['mutid'];
	$mutchr = $rows['mutchr'];
	$mutloc = $rows['mutloc'];
	$mutobserve = $rows['mutobserve'];

	echo "<tr><td>$refseq</td><td>$symbol</td><td>$microRNA_name</td><td>$mutid</td><td>$mutchr</td><td>$mutloc</td><td>$mutobserve</td></tr>";
}

echo "</table><p />";



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
background-color: #ef9a9a;
color : black;
text-align: center;
border: 1px solid #ddd;
padding: 8px;
}

tr:nth-child(even):hover {
background-color: #e57373;
color: white;
}

tr:nth-child(odd):hover {
background-color: #e57373;
color: white;
}


.header {
  padding: 8px;
  text-align: center;
  background: #ef9a9a;
  color: white;
  font-size: 25px;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination:hover{
	border: 1px solid #f44336;
	background : #ef9a9a;
	transition: 1s;
}


nav {
float : right;
}

</style>
</html>