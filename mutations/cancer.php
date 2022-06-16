<DOCTYPE html>
<head>
<title> Mutation </title>
</head>
<body>

<div class="header">

	<nav>
	<a href="home.html" class ="btn" style="color:black"> Click to go Home </a>
	</nav>

<h1 style="color: black"> Mutations in miRNA </h1>
<p style="color: black"> MicroRNA (miRNA) expression profiles in various human cancers along with their respective pubmed article </p>
</div>

<br>
<br>

<form id="form" method="POST">
    <select name="search1" id="search1">
    <option disabled selected>-- Select Cancer Type --</option>
    <option value="acute leukemia"> acute leukemia </option>
<option value="acute lymphoblastic leukemia"> acute lymphoblastic leukemia </option>
<option value="acute myeloid leukemia"> acute myeloid leukemia </option>
<option value="acute promyelocytic leukemia"> acute promyelocytic leukemia </option>
<option value="adenoid cystic carcinoma"> adenoid cystic carcinoma </option>
<option value="adrenal cortical carcinoma"> adrenal cortical carcinoma </option>
<option value="adult t-cell leukemia"> adult t-cell leukemia </option>
<option value="ampullary adenocarcinoma"> ampullary adenocarcinoma </option>
<option value="anaplastic astrocytoma"> anaplastic astrocytoma </option>
<option value="anaplastic large-cell lymphoma"> anaplastic large-cell lymphoma </option>
<option value="anaplastic thyroid carcinoma"> anaplastic thyroid carcinoma </option>
<option value="astrocytoma"> astrocytoma </option>
<option value="basal cell carcinoma"> basal cell carcinoma </option>
<option value="b-cell lymphoma"> b-cell lymphoma </option>
<option value="bladder cancer"> bladder cancer </option>
<option value="brain cancer"> brain cancer </option>
<option value="breast cancer"> breast cancer </option>
<option value="breast carcinoma"> breast carcinoma </option>
<option value="bronchioloalveolar carcinoma"> bronchioloalveolar carcinoma </option>
<option value="Burkitt lymphoma"> Burkitt lymphoma </option>
<option value="cervical adenocarcinoma"> cervical adenocarcinoma </option>
<option value="cervical cancer"> cervical cancer </option>
<option value="cervical carcinoma"> cervical carcinoma </option>
<option value="cervical squamous cell carcinoma"> cervical squamous cell carcinoma </option>
<option value="cholangiocarcinoma"> cholangiocarcinoma </option>
<option value="chondrosarcoma"> chondrosarcoma </option>
<option value="chordoma"> chordoma </option>
<option value="choriocarcinoma"> choriocarcinoma </option>
<option value="chronic lymphocytic leukemia"> chronic lymphocytic leukemia </option>
<option value="chronic myelogenous leukemia"> chronic myelogenous leukemia </option>
<option value="clear cell renal cell cancer"> clear cell renal cell cancer </option>
<option value="colon cancer"> colon cancer </option>
<option value="colon carcinoma"> colon carcinoma </option>
<option value="colonic adenocarcinoma"> colonic adenocarcinoma </option>
<option value="colorectal adenocarcinoma"> colorectal adenocarcinoma </option>
<option value="colorectal cancer"> colorectal cancer </option>
<option value="colorectal carcinoma"> colorectal carcinoma </option>
<option value="cutaneous t-cell lymphoma"> cutaneous t-cell lymphoma </option>
<option value="diffuse large B-cell lymphoma"> diffuse large B-cell lymphoma </option>
<option value="endometrial cancer"> endometrial cancer </option>
<option value="endometrial serous adenocarcinoma"> endometrial serous adenocarcinoma </option>
<option value="ependymoma"> ependymoma </option>
<option value="epithelial ovarian cancer"> epithelial ovarian cancer </option>
<option value="esophageal adenocarcinoma"> esophageal adenocarcinoma </option>
<option value="esophageal cancer"> esophageal cancer </option>
<option value="esophageal carcinoma"> esophageal carcinoma </option>
<option value="esophageal squamous cell carcinoma"> esophageal squamous cell carcinoma </option>
<option value="extrahepatic cholangiocarcinoma"> extrahepatic cholangiocarcinoma </option>
<option value="follicular cancer"> follicular cancer </option>
<option value="follicular lymphoma"> follicular lymphoma </option>
<option value="follicular thyroid carcinoma"> follicular thyroid carcinoma </option>
<option value="gallbladder carcinoma"> gallbladder carcinoma </option>
<option value="gastric adenocarcinoma"> gastric adenocarcinoma </option>
<option value="gastric cancer"> gastric cancer </option>
<option value="gastrointestinal cancer"> gastrointestinal cancer </option>
<option value="gastrointestinal stromal tumor"> gastrointestinal stromal tumor </option>
<option value="glioblastoma"> glioblastoma </option>
<option value="glioma"> glioma </option>
<option value="head and neck cancer"> head and neck cancer </option>
<option value="head and neck squamous cell carcinoma"> head and neck squamous cell carcinoma </option>
<option value="hepatoblastoma"> hepatoblastoma </option>
<option value="hepatocellular carcinoma"> hepatocellular carcinoma </option>
<option value="Hodgkin's lymphoma"> Hodgkin's lymphoma </option>
<option value="hypopharyngeal cancer"> hypopharyngeal cancer </option>
<option value="hypopharyngeal carcinoma"> hypopharyngeal carcinoma </option>
<option value="hypopharyngeal squamous cell carcinom"> hypopharyngeal squamous cell carcinom </option>
<option value="intrahepatic cholangiocarcinoma"> intrahepatic cholangiocarcinoma </option>
<option value="invasive ductal carcinoma"> invasive ductal carcinoma </option>
<option value="kidney cancer"> kidney cancer </option>
<option value="laryngeal cancer"> laryngeal cancer </option>
<option value="laryngeal carcinoma"> laryngeal carcinoma </option>
<option value="laryngeal squamous cell carcinoma"> laryngeal squamous cell carcinoma </option>
<option value="leiomyosarcoma"> leiomyosarcoma </option>
<option value="liver cancer"> liver cancer </option>
<option value="lung adenocarcinoma"> lung adenocarcinoma </option>
<option value="lung cancer"> lung cancer </option>
<option value="lung carcinoma"> lung carcinoma </option>
<option value="lung squamous cell carcinoma"> lung squamous cell carcinoma </option>
<option value="malignant melanoma"> malignant melanoma </option>
<option value="malignant mesothelioma"> malignant mesothelioma </option>
<option value="malt lymphoma"> malt lymphoma </option>
<option value="mantle cell lymphoma"> mantle cell lymphoma </option>
<option value="medullary thyroid carcinoma"> medullary thyroid carcinoma </option>
<option value="medulloblastoma"> medulloblastoma </option>
<option value="meningioma"> meningioma </option>
<option value="mesenchymal cancer"> mesenchymal cancer </option>
<option value="monocytic leukemia"> monocytic leukemia </option>
<option value="mucinous cystadenocarcinoma"> mucinous cystadenocarcinoma </option>
<option value="multiple myeloma"> multiple myeloma </option>
<option value="nasopharyngeal cancer"> nasopharyngeal cancer </option>
<option value="nasopharyngeal carcinoma"> nasopharyngeal carcinoma </option>
<option value="nephroblastoma"> nephroblastoma </option>
<option value="neuroblastoma"> neuroblastoma </option>
<option value="non-small cell lung cancer"> non-small cell lung cancer </option>
<option value="oral cancer"> oral cancer </option>
<option value="oral carcinoma"> oral carcinoma </option>
<option value="oral squamous cell carcinoma"> oral squamous cell carcinoma </option>
<option value="oropharyngeal cancer"> oropharyngeal cancer </option>
<option value="osteosarcoma"> osteosarcoma </option>
<option value="ovarian cancer"> ovarian cancer </option>
<option value="ovarian carcinoma"> ovarian carcinoma </option>
<option value="pancreatic adenocarcinoma"> pancreatic adenocarcinoma </option>
<option value="pancreatic cancer"> pancreatic cancer </option>
<option value="pancreatic carcinoma"> pancreatic carcinoma </option>
<option value="pancreatic ductal adenocarcinoma"> pancreatic ductal adenocarcinoma </option>
<option value="papillary thyroid carcinoma"> papillary thyroid carcinoma </option>
<option value="pituitary carcinoma"> pituitary carcinoma </option>
<option value="primary cns lymphomas"> primary cns lymphomas </option>
<option value="primary gallbladder carcinoma"> primary gallbladder carcinoma </option>
<option value="primary thyroid lymphoma"> primary thyroid lymphoma </option>
<option value="prostate adenocarcinoma"> prostate adenocarcinoma </option>
<option value="prostate cancer"> prostate cancer </option>
<option value="prostate carcinoma"> prostate carcinoma </option>
<option value="rectal cancer"> rectal cancer </option>
<option value="rectal carcinoma"> rectal carcinoma </option>
<option value="renal cell carcinoma"> renal cell carcinoma </option>
<option value="renal clear cell carcinoma"> renal clear cell carcinoma </option>
<option value="retinoblastoma"> retinoblastoma </option>
<option value="rhabdomyosarcoma"> rhabdomyosarcoma </option>
<option value="serous ovarian cancer"> serous ovarian cancer </option>
<option value="small cell lung cancer"> small cell lung cancer </option>
<option value="splenic marginal zone lymphoma"> splenic marginal zone lymphoma </option>
<option value="squamous carcinoma"> squamous carcinoma </option>
<option value="t-cell lymphoblastic lymphoma"> t-cell lymphoblastic lymphoma </option>
<option value="t-cell lymphoma"> t-cell lymphoma </option>
<option value="thyroid cancer"> thyroid cancer </option>
<option value="thyroid carcinoma"> thyroid carcinoma </option>
<option value="tongue cancer"> tongue cancer </option>
<option value="uterine leiomyoma"> uterine leiomyoma </option>
<option value="uveal melanoma"> uveal melanoma </option>
<option value="waldenstrom's macroglobulinemia"> waldenstrom's macroglobulinemia </option>
  </select>
<input type ="submit" name="submit1" value="Search">

</form>
<br>

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

		$cancer = ($_POST['search1']);

		$sql = "select * from cancer where cancer.cancer like '%$cancer%'";

$result = $conn->query($sql);

		if ($result->num_rows > 0){

		echo "<table><tr><th>MiRNA ID</th> <th>Profile</th> <th>Pubmed Article</th> </tr>";
		while($row = $result->fetch_assoc() ){
		echo "<tr><td>" . $row["mirid"]. "</td><td>" . $row["profile"]."</td> <td>" . $row["pubmed"]. "</td></tr>";
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
	background :#dce775;
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
background-color:#dce775;
color : black;
text-align: center;
border: 1px solid #ddd;
padding: 8px;
}

tr:nth-child(even):hover {
background-color: #9e9d24;
color: white;
}

tr:nth-child(odd):hover {
background-color: #9e9d24;
color: white;
}


.header {
  padding: 8px;
  text-align: center;
  background:#dce775;
  color: white;
  font-size: 25px;
}

form {
	text-align : center;
	font-size: 35px;
}

option {
	font-size: 20px;

}

#search1 {
 width:275px; 
 height: 25px;
 font-size:15px;  
}

nav{
float : right;
}

</style>

</html>