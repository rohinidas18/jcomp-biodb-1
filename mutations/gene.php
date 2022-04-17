<DOCTYPE html>
<head>
<title> Mutation </title>
</head>
<body>

<div class="header">

	<nav>
	<a href="home.html"> <image src="home_button.png" width="25" height="25"> </a>
	</nav>
<h1> Mutations in miRNA </h1>
<p> Browse genes associated with cancer risk that contain miRNA related somatic mutations </p>
</div>

<br>
<br>

<form method="post">
Enter Gene : &nbsp; <input type="text" name="search"> <br><br>
<input type ="submit" name="submit1" value="Select">
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "mutations";
$link_address = "http://localhost/mirna-database/mutations/cancer.php";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

if(isset($_POST['submit1'])) {	
	$gene = ($_POST['search']);
	$sql = "select * from genes where genes.gene_name like '%$gene'";
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0){
			echo "<table><tr><th>GeneName</th> <th>Marker</th> <th>Study type </th> <th>Disease</th><th>Pubmed ID </th></tr>";
		while($row = $result->fetch_assoc() ){
		echo "<tr><td>" . $row["gene_name"]. "</td><td>" . $row["COL2"]."</td> <td>" . $row["COL3"]. "</td><td>" . $row["COL4"]. "</td><td>" . $row["COL5"]. "</td></tr>";
    }
    
echo "</table>";

echo '<div class="first">';
echo '<a class="hero-btn" href="'.$link_address.'"> Clear Response </a>';
echo '</div>';            		
} 
else {
	echo "0 records";
}
}
?>

</body>

<style>

.first {
	width=80%;
	margin : auto;
	text-align: center;
	padding-top:100px;
}

.hero-btn {
	display: inline-block;
	text-decoration: none;
	color : black;
	border : 1px solid black;
	padding : 12px 34px;
	font-size: 15px;
	background : transparent;
	position : relative;
	cursor : pointer;
	border-radius: 12px;
}

.hero-btn:hover{
	border: 1px solid #f44336;
	background : #e667bd;
	transition: 1s;
}

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
background-color: #e667bd;
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
  background: #e667bd;
  color: white;
  font-size: 25px;
}

form {
	text-align : center;
	font-size: 25px;
}

option {
	font-size: 20px;

}

#search1 {
 width:275px; 
 height: 25px;
 font-size:15px;  
}

nav {
float : right;
}


</style>

</html>
		