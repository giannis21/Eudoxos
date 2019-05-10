<!DOCTYPE HTML>
<?php session_start()?>
<html>

<head>
  <title>ΕΥΔΟΞΟΣ</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><span class="logo_colour">ΕΥΔΟΞΟΣ</span></a></h1>
          <
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="login.php">Είσοδος</a></li>
          <li><a href="#">Στοιχεία φοιτητή</a></li>
          <li><a href="#">δήλωση συγγραμάτων</a></li>
          <li><a href="#">αντικατάσταση βιβλίου</a></li>
          <li><a href="#">Ο λογαριασμός μου</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>ΜΕΝΟΥ</h3>
            <ul>
              <li><a href="#">Στοιχεία φοιτητή</a></li>
              <li><a href="#">δήλωση συγγραμάτων</a></li>
              <li><a href="#">αντικατάσταση βιβλίου</a></li>
              <li><a href="#">Ο λογαριασμός μου</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3><img src="dilosi.png" alt="" style="width:156px;height:73px;"></h3>
          </div>
         
        </div>
      </div>
      <div id="content">
        <h1>Καλώς ήρθες στον Ευδοξο</h1>
		
			
<?php
header('Cache-Control: no cache');
$mitrwo=$_POST["mitrwo"];
$kwdikos=$_POST["kodikos"];
$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$semester=$_POST["semester"];

$conn= mysqli_connect("localhost","root", ""); //σύνδεση με την mysql
if (!$conn)
{
die('Η σύνδεση απέτυχε: ' . mysql_error());
}



mysqli_select_db($conn,"proj"); //επιλογή της ΒΔ (mydb)
//sql1="insert into foit_math values('$kwdikos',)
$sql="insert into foithths values('$mitrwo','$kwdikos','$name','$surname','$email','$semester',30,0);" ;
$result = mysqli_query($conn,$sql); //επιλογή όλων 
if(!$result)
{die('i eggrafh apetixe'.mysql_error());}
mysqli_close($conn); //των εγγραφών από τον πίνακα persons
?>
Η εγγραφη ολοκληρωθηκε!Μπορεις τωρα να κανεις login <a href="login.php">εδω</a>
        
     
      </div>
    </div>
 
</body>
</html>
