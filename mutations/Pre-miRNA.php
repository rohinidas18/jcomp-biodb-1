<?php
$user = 'root';
$pass = '';
$db = 'mutations';
$name='';
$db = new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");
$sql = "SELECT * from region where region='Pre-miRNA'";
$result = $db -> query($sql);


if (isset($_POST['submit'])){
	$name=$_POST['miRNA'];
	$sql="SELECT * from region where region='Pre-miRNA' and miRNA_name='".$name."'";
	$result = $db -> query($sql);

}
$db -> close();
?>
<!DOCTYPE html>
<html>
<head>
<title> Pre-miRNA </title>
</head>

<body>
<div class="header">

	<nav>
	<a href="home.html" class ="btn" style="color:white"> Click to go Home </a>
	</nav>

<h1> Mutations in miRNA </h1>
<p> Mutations that occur in the Pre-miRNA region of miRNA specifically </p>

</div>

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
</tr>
<?php
if ($result -> num_rows >0 ) {
	while ($row = $result -> fetch_assoc()) {
	echo "<tr><td>" .$row["miRNA_name"]."</td><td>".$row["chr_number"]."</td><td>".$row["strand"]."</td></tr>";
}
echo"</table>";
}

else {
echo "0 result";
}
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
background-color: #9ccc65;
}

th {
background-color: #2e7d32;
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
  background: #2e7d32;
  color: white;
  font-size: 25px;
}

nav {
	float : right;
}

</style>
</html>