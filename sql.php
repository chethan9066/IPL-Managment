<?php
$database="IPL";
$server="localhost";
$con=mysqli_connect($server,"root","");
$db_select=mysqli_select_db($con,$database);
if(!$db_select)
{
$query="CREATE DATABASE $database";
if(mysqli_query($con,$query))
goto a;
else
echo "Sorry, There was a problem. Try again later.";
}
else
{
a:
mysqli_select_db($con,$database);

$query="Create Table Brand (Name varchar(20) primary key,
Type varchar(20),
Product varchar(20))";
$result=mysqli_query($con,$query);

$query="Create Table Coaches (Sl_No int(3) AUTO_INCREMENT primary key,
FName varchar(20), MName varchar(20), LName  varchar(20),
Age int(3),
Type varchar(10),
Born varchar(20))";
$result=mysqli_query($con,$query);

$query="Create Table Umpires (Sl_No int(3) AUTO_INCREMENT primary key,
FName varchar(20), MName varchar(20), LName  varchar(20),
Age int(3),
Debut int(4))";
$result=mysqli_query($con,$query);

$query="Create Table Teams (TCode varchar(5) primary key,
TName varchar(40),
TOwner varchar(20),
Main_Sponsor varchar(20),
Head_Coach varchar(20),
FOREIGN KEY(Main_Sponsor) REFERENCES Brand(Name))";
$result=mysqli_query($con,$query);

$query="Create Table Stadium (Sl_No int(3) AUTO_INCREMENT primary key,
Name varchar(25),
Location varchar(20),
Total_Seats int(6),
Home_Team varchar(5),
FOREIGN KEY(Home_Team) REFERENCES Teams(TCode))";
$result=mysqli_query($con,$query);

$query="Create Table Batsmen (Sl_No int(3) AUTO_INCREMENT primary key,
FName varchar(20), MName varchar(20), LName  varchar(20),
Age int(3),
Team varchar(5),
Base_Price varchar(10),
Sold_Price varchar(10),
FOREIGN KEY(Team) REFERENCES Teams(TCode))";
$result=mysqli_query($con,$query);

$query="Create Table Bowlers (Sl_No int(3) AUTO_INCREMENT primary key,
FName varchar(20), MName varchar(20), LName  varchar(20),
Age int(3),
Team varchar(5),
Base_Price varchar(10),
Sold_Price varchar(10),
FOREIGN KEY(Team) REFERENCES Teams(TCode))";
$result=mysqli_query($con,$query);

$query="Create Table WicketKeepers (Sl_No int(3) AUTO_INCREMENT primary key,
FName varchar(20), MName varchar(20), LName  varchar(20),
Age int(3),
Team varchar(5),
Base_Price varchar(10),
Sold_Price varchar(10),
FOREIGN KEY(Team) REFERENCES Teams(TCode))";
$result=mysqli_query($con,$query);

$query="Create Table Allrounders (Sl_No int(3) AUTO_INCREMENT primary key,
FName varchar(20), MName varchar(20), LName  varchar(20),
Age int(3),
Team varchar(5),
Base_Price varchar(10),
Sold_Price varchar(10),
FOREIGN KEY(Team) REFERENCES Teams(TCode))";
$result=mysqli_query($con,$query);

$query="Create Table Points_Table (TName varchar(40) primary key,
Matches_Played int(2),
Wins int(2),
Loss int(2),
Points int(3))";
$result=mysqli_query($con,$query);

$query="Create Table Archive (Year int(4) primary key,
Winner varchar(40),
Runner_Up varchar(40))";
$result=mysqli_query($con,$query);

$query="Create Table Matches (Sl_No int(3) AUTO_INCREMENT primary key,
Team_One varchar(5),
Team_Two varchar(5),
Played_On Date,
Played_At varchar(25),
Umpire varchar(20),
Status varchar(20))";
$result=mysqli_query($con,$query);

$query="INSERT INTO Coaches (FName, MName, LName, Age, Type, Born) VALUES ('Stephen','','Fleming',44,'Batting','New Zealand')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Coaches (FName, MName, LName, Age, Type, Born) VALUES ('Ricky','','Ponting',43,'Batting','Australia')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Coaches (FName, MName, LName, Age, Type, Born) VALUES ('Brad','','Hodge',43,'Batting','Australia')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Coaches (FName, MName, LName, Age, Type, Born) VALUES ('Jacques','','Kallis',42,'Batting','South Africa')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Coaches (FName, MName, LName, Age, Type, Born) VALUES ('Mahela,'','Jayawardene',40,'Batting','Sri Lanka')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Coaches (FName, MName, LName, Age, Type, Born) VALUES ('Shane','','Warne',48,'Bowling','Australia')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Coaches (FName, MName, LName, Age, Type, Born) VALUES ('Daniel','','Vettori',39,'Bowling','New Zealand')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Coaches (FName, MName, LName, Age, Type, Born) VALUES ('Tom','','Moody',52,'Batting','Australia')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Brand (Name, Type, Product) VALUES ('VIVO','Presenting','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('JIO','Presenting','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('KINGFISHER','Presenting','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('CEAT Tyres','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Vimal','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Yamaha','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Parle','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Yes Bank','Presenting','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('PolyCab','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Voltas','Presenting','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Havells','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('MakeMyTrip','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Maruti','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Amazon','Presenting','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Goibibo','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Gionee','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Vodafone','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('OPPO','Presenting','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Moov','Media','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Brand (Name, Type, Product) VALUES ('Park Avenue','Media','')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Teams (TName,TCode, TOwner, Main_Sponsor,Head_Coach) VALUES ('Royal Challengers Banglore','RCB','Vijay Mallya','KINGFISHER','Vettori')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Teams (TName,TCode, TOwner, Main_Sponsor,Head_Coach) VALUES ('Kings XI Punjab','KXIP','Priety Zinta','OPPO','Hodge')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Teams (TName,TCode, TOwner, Main_Sponsor,Head_Coach) VALUES ('Kolkata Knight Riders','KKR','Shah Rukh Khan','Moov','Kallis')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Teams (TName,TCode, TOwner, Main_Sponsor,Head_Coach) VALUES ('Chennai Super Kings','CSK','Srinivasam','Gionee','Fleming')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Teams (TName,TCode, TOwner, Main_Sponsor,Head_Coach) VALUES ('Delhi Daredevils','DD','GMR Group','Gionee','Ponting')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Teams (TName,TCode, TOwner, Main_Sponsor,Head_Coach) VALUES ('Mumbai Indians','MI','Mukesh Ambani','JIO','Jayawardene')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Teams (TName,TCode, TOwner, Main_Sponsor,Head_Coach) VALUES ('Rajasthan Royals','RR','Manoj Badale','Havells','Warne')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Teams (TName,TCode, TOwner, Main_Sponsor,Head_Coach) VALUES ('Sunrisers Hyderabad','SRH','Sun TV','Park Avenue','Moody')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Teams (TName,TCode, TOwner, Main_Sponsor,Head_Coach) VALUES ('Deccan Chargers','DC','','','')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Teams (TName,TCode, TOwner, Main_Sponsor,Head_Coach) VALUES ('Rising Pune Supergiant','RPS','','','')";
$result=mysqli_query($con,$query);



$query="INSERT INTO Points_Table (TName, Matches_Played, Wins,Loss,Points) VALUES ('Royal Challengers Banglore','5','4','0','9')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Points_Table (TName, Matches_Played, Wins,Loss,Points) VALUES ('Kings XI Punjab','5','4','0','9')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Points_Table (TName, Matches_Played, Wins,Loss,Points) VALUES ('Kolkata Knight Riders','4','1','3','2')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Points_Table (TName, Matches_Played, Wins,Loss,Points) VALUES ('Chennai Super Kings','4','0','4','0')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Points_Table (TName, Matches_Played, Wins,Loss,Points) VALUES ('Delhi Daredevils','4','3','1','6')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Points_Table (TName, Matches_Played, Wins,Loss,Points) VALUES ('Mumbai Indians','4','1','3','2')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Points_Table (TName, Matches_Played, Wins,Loss,Points) VALUES ('Rajasthan Royals','4','1','3','2')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Points_Table (TName, Matches_Played, Wins,Loss,Points) VALUES ('Sunrisers Hyderabad','4','1','3','2')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Archive (Year,Winner,Runner_UP) VALUES ('2008','Rajasthan Royals','Chennai Super Kings')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Archive (Year,Winner,Runner_UP) VALUES ('2009','Deccan Chargers','Royal Challengers Banglore')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Archive (Year,Winner,Runner_UP) VALUES ('2010','Chennai Super Kings','Mumbai Indians')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Archive (Year,Winner,Runner_UP) VALUES ('2011','Chennai Super Kings','Royal Challengers Banglore')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Archive (Year,Winner,Runner_UP) VALUES ('2012','Kolkata Knight Riders','Chennai Super Kings')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Archive (Year,Winner,Runner_UP) VALUES ('2013','Mumbai Indians','Chennai Super Kings')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Archive (Year,Winner,Runner_UP) VALUES ('2014','Kolkata Knight Riders','Kings XI Punjab')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Archive (Year,Winner,Runner_UP) VALUES ('2020','Mumbai Indians','Chennai Super Kings')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Archive (Year,Winner,Runner_UP) VALUES ('2016','Sunrisers Hyderabad','Royal Challengers Bangalore')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Archive (Year,Winner,Runner_UP) VALUES ('2017','Mumbai Indians','Rising Pune Supergiant')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Archive (Year,Winner,Runner_UP) VALUES ('2018','Royal Challengers Banglore','Kings XI Punjab')";
$result=mysqli_query($con,$query);


$query="INSERT INTO Stadium (Name,Location,Total_Seats,Home_Team) VALUES ('M Chinnaswamy','Banglore','40000','RCB')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Stadium (Name,Location,Total_Seats,Home_Team) VALUES ('PCA ','Mohali','27000','KXIP')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Stadium (Name,Location,Total_Seats,Home_Team) VALUES ('Feroz Shah Kotla','Delhi','42000','DD')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Stadium (Name,Location,Total_Seats,Home_Team) VALUES ('Eden Gardens','Kolkata','66500','KKR')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Stadium (Name,Location,Total_Seats,Home_Team) VALUES ('Wankhede','Mumbai','33000','MI')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Stadium (Name,Location,Total_Seats,Home_Team) VALUES ('Sawai Mansingh','Jaipur','23000','RR')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Stadium (Name,Location,Total_Seats,Home_Team) VALUES ('Rajiv Gandhi ','Hyderabad','60000','SRH')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Stadium (Name,Location,Total_Seats,Home_Team) VALUES ('M A Chidambaram','Chennai','50000','CSK')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Umpires(Fname,Mname,Lname,age,debut) VALUES ('Kumar','','Dharmasena',46,2009)";
$result=mysqli_query($con,$query);
$query="INSERT INTO Umpires(Fname,Mname,Lname,age,debut) VALUES ('Sundaram','','Ravi',51,2011)";
$result=mysqli_query($con,$query);
$query="INSERT INTO Umpires(Fname,Mname,Lname,age,debut) VALUES ('Simon','','Taufel',47,2007)";
$result=mysqli_query($con,$query);
$query="INSERT INTO Umpires(Fname,Mname,Lname,age,debut) VALUES ('Billy','','Bowden',54,2005)";
$result=mysqli_query($con,$query);
$query="INSERT INTO Umpires(Fname,Mname,Lname,age,debut) VALUES ('C','K','Nandan',54,2020)";
$result=mysqli_query($con,$query);
$query="INSERT INTO Umpires(Fname,Mname,Lname,age,debut) VALUES ('Marais','','Erasmus',54,2006)";
$result=mysqli_query($con,$query);
$query="INSERT INTO Umpires(Fname,Mname,Lname,age,debut) VALUES ('Nigel','','Llong',49,2005)";
$result=mysqli_query($con,$query);
$query="INSERT INTO Umpires(Fname,Mname,Lname,age,debut) VALUES ('Nitin','','Menon',34,2017)";
$result=mysqli_query($con,$query);
$query="INSERT INTO Umpires(Fname,Mname,Lname,age,debut) VALUES ('Yeshwanth','','Barde',45,2016)";
$result=mysqli_query($con,$query);
$query="INSERT INTO Umpires(Fname,Mname,Lname,age,debut) VALUES ('Chris','','Gaffaney',42,2010)";
$result=mysqli_query($con,$query);

$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('RCB','CSK','2018-04-07','M Chinnaswamy','Taufel','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('KXIP','SRH','2018-04-08','PCA','Menon','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('MI','RR','2018-04-09','Wankhede','Gaffaney','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('DD','KKR','2018-04-10','Eden Gardens','Menon','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('RCB','SRH','2018-04-11','Rajiv Gandhi','Llong','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('CSK','RR','2018-04-12','M A Chidambaram','Taufel','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('KXIP','KKR','2018-04-13','PCA','Barde','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('MI','DD','2018-04-14','Feroz Shah Kotla','Erasmus','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('RCB','RR','2018-04-20','M Chinnaswamy','Nandan','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('SRH','KKR','2018-04-16','Eden Gardens','Bowden','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('CSK','DD','2018-04-20','M A Chidambaram','Ravi','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('KXIP','MI','2018-04-16','Wankhede','Dharmasena','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('RCB','KKR','2018-04-17','M Chinnaswamy','Bowden','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('RR','DD','2018-04-18','Sawai Mansingh','Erasmus','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('CSK','KXIP','2018-04-19','PCA','Bowden','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('SRH','MI','2018-04-20','Rajiv Gandhi','Llong','Played')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Matches(Team_One,Team_Two,Played_On,Played_At,Umpire,Status) VALUES ('RCB','KXIP','2018-04-20','PCA','Bowden','RAIN- NR')";
$result=mysqli_query($con,$query);


$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Virat','','Kohli',29,'RCB','14Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Moeen','','Ali',30,'RCB','4Cr','6Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Corey','','Anderson',27,'RCB','3Cr','6Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Murugan','','Ashwin',27,'RCB','10L','30L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Yuzvendra','','Chahal',27,'RCB','7Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Aniket','','Choudhary',28,'RCB','10L','20L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Colin','De','Grandhomme',31,'RCB','5Cr','7Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Quinton','De','Kock',25,'RCB','6Cr','9Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Pavan','','Deshpande',28,'RCB','10L','30L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('AB','De','Villers',34,'RCB','10Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Aniruddha','','Joshi',30,'RCB','5L','10L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Sarfaraz','','Khan',20,'RCB','3Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Kulwant','','Khejroliya',26,'RCB','20L','20L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Brendon','','McCullum',36,'RCB','10Cr','10Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mandeep','','Singh',26,'RCB','30L','50L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mohammed','','Siraj',24,'RCB','40L','50L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Pawan','','Negi',25,'RCB','1Cr','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Navdeep','','Saini',25,'RCB','10L','20L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Tim','','Southee',29,'RCB','75L','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Manan','','vohra',24,'RCB','1Cr','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Washington','','Sundar',25,'RCB','25L','50L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Chris','','Woakes',29,'RCB','75L','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Umesh','','Yadav',30,'RCB','75L','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('RaviChandran','','Ashwin',31,'KXIP','8Cr','10Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Akshdeep','','Nath',24,'KXIP','30L','50L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mayank','','Agarwal',27,'KXIP','50L','1Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mayank','','Dagar',21,'KXIP','10L','30L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Ben','','Dwarshuis',23,'KXIP','1Cr','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Aaron','','Finch',31,'KXIP','6Cr','8Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Chris','','Gayle',38,'KXIP','1Cr','1Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Manzoor','','Dar',24,'KXIP','10L','10L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('David','','Miller',28,'KXIP','10Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mujeeb','Ur','Rahman',17,'KXIP','10L','10L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('karun','','Nair',26,'KXIP','50L','1Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Axar','','Patel',24,'KXIP','3Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Lokesh','','Rahul',25,'KXIP','7Cr','11Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Ankit','','Rajpoot',24,'KXIP','50L','50L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Pradeep','','Sahu',32,'KXIP','25L','25L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mohit','','Sharma',29,'KXIP','3Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Barinder','','Sran',25,'KXIP','25L','50L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Allrounder(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Marcus','','Stoinis',28,'KXIP','4Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Manoj','','Tiwary',26,'KXIP','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Andrew','','Tye',28,'KXIP','3Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Yuvraj','','Singh',34,'KXIP','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('M','S','Dhoni',34,'CSK','8Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('K','M','Asif',27,'CSK','50L','50L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Sam','','Billings',29,'CSK','6Cr','7Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Chaitanya','','Bishnoi',27,'CSK','25L','50L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Dwayne','','Bravo',30,'CSK','6Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Deepak','','Chahar',24,'CSK','25L','50L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Faf','Du','Plesis',31,'CSK','6Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Harbajan','','Singh',32,'CSK','3Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Imran','','Tahir',25,'CSK','3Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Ravindra','','jadeja',27,'CSK','3Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Kedar','','Jadhav',27,'CSK','5Cr','7Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Narayan','','Jagadeesan',24,'CSK','25L','50L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('kshitiz','','Sharma',24,'CSK','25L','50L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Monu','','Kumar',26,'CSK','50L','75L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Lungi','','Ngidi',24,'CSK','3Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Suresh','','Raina',30,'CSK','4Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Ambati','','Rayudu',27,'CSK','3Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO allrounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mithcell','','Santner',27,'CSK','4Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Kanishk','','Seth',20,'CSK','10L','20L')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Karn','','Sharma',30,'CSK','1Cr','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Murali','','Vijay',26,'CSK','3Cr','4Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Gautam','','Gambhir',31,'DD','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Abishek','','Sharma',17,'DD','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Avesh','','Khan',23,'DD','2Cr','6Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Trent','','Boult',26,'DD','2Cr','7Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Daniel','','Christian',29,'DD','3Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Sayan','','Ghosh',26,'CSK','3Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Gurkeerat','Mann','Singh',23,'DD','2l','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Shreyas','','Iyer',19,'DD','20l','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Sandeep','','Lamichhane',18,'DD','20l','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Manjot','','Kalra',20,'DD','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Glenn','','Maxwell',26,'DD','2Cr','9Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Amit','','Mishra',31,'DD','2Cr','6Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mohammed','','Shami',29,'DD','2Cr,'5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Chris','','Morris',27,'DD','2Cr','7Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Colin','','Munro',29,'DD','2Cr','10Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Shahbaz','','Nadeem',23,'DD','2Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Naman','','Ohja',26,'CSK','3Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Rishabh','','Pant',19,'DD','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Harshall','','Patel',22,'DD','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Kagiso','','Rabada',21,'DD','2Cr','11Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Jason','','Roy',23,'DD','2Cr','8Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Vijay','','Shankar',21,'DD','20l','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('
Prithvi','','Shaw',23,'DD','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Rahul','','Tiwatiya',22,'DD','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Jayant','','Yadav',23,'DD','20l','1Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Dinesh','','Karthik',26,'KKR','2Cr','9Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Piyush','','Chawla',26,'KKR','2Cr','6Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Tom','','Curran',23,'KKR','2Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Cameron','','Delport',23,'KKR','20l','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Ishank','','Jaggi',19,'KKR','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mitchell','','Johnson',36,'KKR','2Cr','8Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Kuldeep','','Yadav',24,'KKR','2Cr','7Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Chris','','Lynn',30,'KKR','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Kamlesh','','Nagarakoti',26,'KKR','20l','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Sunil','','Narine',25,'KKR','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Nitish','','Rana',19,'KKR','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Andre','','Russel',29,'KKR','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Javon','','Searion',26,'KKR','20l','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Shivam','','Mavi',22,'KKR','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Shubam','','Gill',19,'KKR','20l','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Rinku','','Singh',20,'KKR','2Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Robin','','Uthappa',35,'KKR','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Vinay','','Kumar',33,'KKR','2Cr','8Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Apoorva','','Wankhede',24,'KKR','2Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Rohit','','Sharma',27,'MI','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Jasprit','','Bumrah',24,'MI','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Rahul','','Chahar',21,'MI','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Pat','','Cummins',28,'MI','2Cr','Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Ben','','Cutting',25,'MI','2Cr','7Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Akhila','','Dhananjaya',31,'MI','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('J','P','Duminy',31,'MI','2Cr','7Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('
Ishan','','Kishan',17,'MI','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Sidhesh','','Lad',22,'MI','2Cr','3CR')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Evin','','Lewis',25,'MI','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Sharad','','Lumba',21,'MI','2Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mayank','','Markhande',29,'MI','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mitchell','','Mclenaghan',30,'MI','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mohsin','','Khan',24,'MI','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mustafizur','','Rahman',27,'MI','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('M','
D','Nidheesh',28,'MI','2Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Hardik','','Pandya',22,'MI','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Krunal','','Pandya',25,'MI','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Kieron','','Pollard',34,'MI','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Anukul','','Roy',20,'MI','20l','1Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Pradeep','','Sangwan',25,'MI','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Tajinder','','Singh',23,'MI','20l','70l')";
$result=mysqli_query($con,$query);
$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Aditya','','
tare',24,'MI','2Cr','3Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Sourabh','','Tiwari',27,'MI','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Suryakumar','','Yadav',29,'MI','2Cr','6Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Rohit','','Sharma',27,'MI','2Cr','RTM')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Ajinkya','','Rahane',24,'RR','2Cr','RTM')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Steve','','Smith',28,'RR','2Cr','RTM')";
$result=mysqli_query($con,$query);

$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Sanju','','Samson',22,'RR','2Cr','8.2Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Jos','','Butller',26,'RR','2Cr','5.5Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Rahul','','Tripathi',28,'RR','20l','3Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Prashanth','','Chopra',24,'RR','10l','4.5Cr')";
$result=mysqli_query($con,$query);


$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Stuart','','Binny',33,'RR','2Cr','3.6Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Ben','','Stokes',26,'RR','2Cr','12Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Darcy','','Short',28,'RR','2Cr','6.2Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Jofra','','Archer',29,'RR','2Cr','7.2Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Aryaman','','Birla',28,'RR','10l','90l')";
$result=mysqli_query($con,$query);

$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Mahipallmror','','',22,'RR','10l','40l')";
$result=mysqli_query($con,$query);


$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Midhun','','',27,'RR','10l','25l')";
$result=mysqli_query($con,$query);

$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Anikt','','Sharma',28,'RR','20l','90l')";
$result=mysqli_query($con,$query);

$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Jatin','','Saxena',31,'RR','10l','30l')";
$result=mysqli_query($con,$query);

$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Shreyas','','Gopal',29,'RR','20l','3.6Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Gautham','','Krishnappa',27,'RR','2Cr','6.5Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Jaydev','','Undakat',29,'RR','2Cr','12.5Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Dhawal','','Kulkarni',29,'RR','2Cr','8.5Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Zahir','','Khan',27,'RR','20l','85l')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Ben','','Laughlin',29,'RR','2Cr','6.5Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Digantha','','Chameera',26,'RR','2Cr','2.2Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Anureet','','Singh',30,'RR','20l','60l')";
$result=mysqli_query($con,$query);


$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Bhuvaneshwar','','Kumar',30,'SRH','2Cr','RTM')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Sandeep','','Sharma',27,'SRH','20l','4.5Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Basil','','Thampi',29,'SRH','20l','2.5Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Rashid','','Khan',30,'SRH','2Cr','8.5Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Siddarth ','','Kaul',29,'SRH','1Cr','3.2Cr')";
$result=mysqli_query($con,$query);


$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Billy','','Stanlake',29,'SRH','2Cr','6.5Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO Bowlers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('T','','Natrajan',29,'SRH','20l','3.2Cr')";
$result=mysqli_query($con,$query);

$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Shakib ','Al','Hassan',29,'SRH','2Cr','3.2Cr')";
$result=mysqli_query($con,$query);


$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('David','','Warner',30,'SRH','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Kane','','Williamson',27,'SRH','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Carlos','','Brathwaite',26,'SRH','2Cr','7Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Thanmai','','Agarwal',21,'SRH','20l','70l')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Khaleel','','Ahmed',28,'SRH','2Cr','2Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Ricky','','Bhui',26,'SRH','20l','1Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Manish','','Pandey',26,'SRH','2Cr','12Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Shikhar','','Dhawan',30,'SRH','2Cr','RTM')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Shreevats','','Goswami',22,'SRH','2l','80l')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Alex','','Hales',32,'SRH','2Cr','4Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Deepak','','Hooda',24,'SRH','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Chris','','jordan',25,'SRH','2Cr','5Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO AllRounders(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Yusuf','','Pathan',34,'SRH','2Cr','7Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO WicketKeepers(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('Wriddiman','','Saha',23,'SRH','2Cr','8Cr')";
$result=mysqli_query($con,$query);
$query="INSERT INTO Batsmen(FName,MName,LName,Age,Team,Base_Price,Sold_Price) VALUES('David','','Warner',30,'SRH','2Cr','RTM')";
$result=mysqli_query($con,$query);
echo " Everything Done";
}
?>

