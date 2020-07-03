<html>
<head>
<title>IPL 2018</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
@font-face {
font-family: Noto Sans;
src: url(Resources/NotoSans-Bold.ttf);
}

a
{
text-decoration:none;
}
.table-fill {
  	width: 95%;
	background-color: white;
	font-size:100%;
}
 
.table-fill th {
	text-align:center;
 	padding:15px;
}

.table-fill tr {
  color:#666B85;
  	padding:15px;
}
   
.table-fill td {
	text-align:center;
  	background:#FFFFFF;
  	padding:10px 20px;
}

.table-fill tr:nth-child(odd) td {
 	 background:#EBEBEB;
}
  
body
{
	font-family:Noto Sans;
	margin:0;
	background-size: 100%;
	background-color: DarkBlue;
	background-image: url("Resources/bg.png");
	background-repeat:no-repeat;
	background-position:center;
}
#A
{
	color:white;
}
li:hover
{
	background-color:orange;
}
#logo
{
	font-family:Noto Sans;
	font-size:300%;
}
</style>
</head>
<body>
<div class="example3">
  <nav class="navbar navbar-inverse navbar-static-top" style="background-color:darkblue;border:none;">
    <div class="container">
      <div class="navbar-header">
<ul class="nav navbar-nav navbar-right" style="background-color:DCB44F">
          <li><a href="#" id="A">VIVO IPL</a></li>
</ul>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right" style="background-color:DCB44F">
          <li><a href="index.php" id="A">Home</a></li>
          <li><a href="Teams.php" id="A">Teams</a></li>
          <li><a href="Venues.php" id="A">Venues</a></li>
          <li><a href="Officials.php" id="A">Officials</a></li>
          <li><a href="Fixings.php" id="A">Fixings</a></li>
          <li><a href="Archive.php" id="A">Winners</a></li>
         
         </ul>
      </div>
    </div>
  </nav>
</div>

<br>
<center>
<div id="ptable">
<div style="color:DCB44F;font-size:500%;background-color:white;width:95%">
IPL Teams</div>
<?php
$database="IPL";
$server="localhost";
$flag=0;
$con=mysqli_connect($server,"root","");
mysqli_select_db($con,$database);
if(mysqli_query($con,"DESCRIBE Teams"))
{
$query="SELECT * FROM Teams
where TOwner <> ''";
$result=mysqli_query($con,$query);
if ($result->num_rows > 0)
{
echo '<table class="table-fill">
<thead><tr>
<th colspan="2">Team</th>
<th>Owner</th>
<th>Sponsor</th>
</tr></thead><tbody class="table-hover">';
while ($row = $result->fetch_assoc())
{
echo '<tr><td>'.$row['TCode'].'</td>
<td>'.$row['TName'].'</td>
<td>'.$row['TOwner'].'</td>
<td>'.$row['Main_Sponsor'].'</td>
<td><a href="'.$row['TCode'].'.php" style="text-decoration:none;">SQUAD</a></td>'
;
}
echo '</tbody></table>';
} 
}
else 
{
echo 'No student Details';
}
mysqli_close($con);
?>
</div>
<br>
<div style="color:DCB44F;font-size:500%;background-color:white;">
<img src="Resources/RCB.png" style="width:5%;"/>#EE SALA CUP NAMDE
</div>
</center>
<style>
.footer {
font-size:75%;
    position: fixed;
    width: 100%;	
    height:7%;
    background-color: black;
    color: white;
    text-align: center;
    padding:1%;
}
</style>
<div class="footer">
Project By,
Chethan, Harshith, Swaroop & Yashwanth
</div>
</body>
</html>
