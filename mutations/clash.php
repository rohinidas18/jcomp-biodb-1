<?php
$user = 'root';
$pass = '';
$db = 'mutations';

$db = new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");

$sql = "SELECT * from clash_1 LIMIT 5000";
$result = $db -> query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title> CLASH </title>
</head>

<body>
<div class="header">
<h1> Mutations in miRNA </h1>
<p> Mutations in experimentally identified miRNA target sites: CLASH </p>

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
<th> Reference Sequence </th>
<th> Gene Symbol </th>
<th> MicroRNA name </th>
<th> Mutation ID </th>
<th> Mutation Chromosome </th>
<th> Mutation Location </th>
<th> Mutation Observed </th>
</tr>

<?php

if ($result -> num_rows >0 ) {
	while ($row = $result -> fetch_assoc()) {
	echo "<tr><td>" .$row["refseq"]."</td><td>".$row["symbol"]."</td><td>".$row["microRNA_name"]."</td><td>".$row["mutid"]."</td><td>".$row["mutchr"]."</td><td>".$row["mutloc"]."</td><td>".$row["mutobserve"]."</td></tr>";
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

</style>
</html>