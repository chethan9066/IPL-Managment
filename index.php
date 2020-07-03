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
font-family: Noto;
src: url(Resources/NotoSans-Bold.ttf);
}

.table-fill {
  	width: 95%;
	background-color: white;
	font-size:75%;
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
	font-family:Noto;
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
	font-family:Noto;
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
          <li class="active"><a href="#" id="A">Home</a></li>
          <li><a href="Teams.php" id="A">Teams</a></li>
          <li><a href="Venues.php" id="A">Venues</a></li>
          <li><a href="Officials.php" id="A">Officials</a></li>
          <li><a href="Fixings.php" id="A">Fixings</a></li>
          <li><a href="Archive.php" id="A">Archive</a></li>
         </ul>
      </div>
    </div>
  </nav>
</div>

<br>
<table width="100%">
<tr><td width="50%">
<div class="container" style="width:100%;float:left;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel"style="border:solid 2px white;">
    <div class="carousel-inner">
      <div class="item">
        <img src="Resources/CSK.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="Resources/KKR.jpg" alt="Chicago" style="width:100%;">
      </div>

            <div class="item">
        <img src="Resources/RR.jpg" alt="Chicago" style="width:100%;">
      </div>

            <div class="item">
        <img src="Resources/MI.jpg" alt="Chicago" style="width:100%;">
      </div>

            <div class="item">
        <img src="Resources/SRH.jpg" alt="Chicago" style="width:100%;">
      </div>
    
          <div class="item">
        <img src="Resources/DD.jpg" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="Resources/KXIP.jpg" alt="Chicago" style="width:100%;">
      </div>

      <div class="item active">
        <img src="Resources/RCB.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</td>
<td width="40%">
<div id="ptable">
<?php
$database="IPL";
$server="localhost";
$flag=0;
$con=mysqli_connect($server,"root","");
mysqli_select_db($con,$database);
if(mysqli_query($con,"DESCRIBE Points_Table"))
{
$query="SELECT * FROM Points_Table
order by Points DESC";
$result=mysqli_query($con,$query);
if ($result->num_rows > 0)
{
echo '<table class="table-fill">
<thead><tr>
<th>TEAM</th>
<th>PLD</th>
<th>WON</th>
<th>LOST</th>
<th>PTS</th>
</tr></thead><tbody class="table-hover">';
while ($row = $result->fetch_assoc())
{
echo '<tr><td>'.$row['TName'].'</td>
<td>'.$row['Matches_Played'].'</td>
<td>'.$row['Wins'].'</td>
<td>'.$row['Loss'].'</td>
<td>'.$row['Points'].'</td>';
;
}
echo '</tbody></table>';
} 
}
else 
{
echo 'No Players Details';
}
mysqli_close($con);
?>
</div>
</td></tr>
</table>
<br>
<center>
<div style="color:DCB44F;font-size:500%;background-color:white;">
<img src="Resources/RCB.png" style="width:5%"/>#EE SALA CUP NAMDE
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
