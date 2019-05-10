<!DOCTYPE HTML>
<?php session_start()?>
<html>

<head>
  <title>ΕΥΔΟΞΟΣ</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
    <style> 
 div1 {
    
    margin-top: 35px;
    margin-bottom: 10px;
    margin-right: 0px;
    margin-left: 1660px;
	font-size: 30px;
}
.login {
height:110px;
width:190px;
margin:auto;
border:1px #CCC solid;
padding:10px;
}

.login input {
padding:5px;
margin:5px

}
</style>
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
          <li ><a href="#">Είσοδος</a></li>
          <li class="selected"><a href="">Στοιχεία φοιτητή</a></li>
           <li><a href="diloseis.php">δήλωση συγγραμάτων</a></li>
          <li><a href="antikatastash.php">αντικατάσταση βιβλίου</a></li>
          <li><a href="my_account.php">Ο λογαριασμός μου</a></li>
		 
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
              <li><a href="eisodos_systhma.php">Στοιχεία φοιτητή</a></li>
              <li><a href="diloseis.php">δήλωση συγγραμάτων</a></li>
              <li><a href="antikatastash.php">αντικατάσταση βιβλίου</a></li>
			  <li><a href="login.php">Αποσύνδεση</a></li>
              
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3><img src="dilosi.png" alt="" style="width:156px;height:73px;"></h3>
            </form>
          </div>
         
        </div>
      </div>
      <div id="content">
       
		
 <?php
if(isset($_SESSION["kodikos"]) || isset($_SESSION["name"]))
        {echo " <h1>Καλώς ήρθες στον Ευδοξο</h1>";
$kodikos=$_SESSION["kodikos"];

$conn= mysqli_connect("localhost","root", ""); //σύνδεση με την mysql
if (!$conn)
{
die('Η σύνδεση απέτυχε: ' . mysql_error());
}
mysqli_select_db($conn,"proj"); //επιλογή της ΒΔ (mydb)

$result = mysqli_query($conn,"SELECT username,kodikos,onoma ,epitheto, email ,eksamino ,pontoi FROM foithths  where kodikos='$kodikos'"); //kano select ta stoixeia to0 foithth
 echo "<table border=1 align=center  width=500 >";																									  //oste na ta emfaniso se enan pinaka po0 
    while($row = mysqli_fetch_array($result)) //μετατροπή των στοιχείων εγγραφής σε ένα Array								              //ftiaxno apo kato
			{
				//if($row['mitrwo']==$kodikos)
					
			//	{   
				    echo "<tr>";
                       echo "<th <td colspan=2 > <center><strong>Στοιχεια φοιτητη</strong></center> </td> </th>";
                    echo "</tr>";	
					
				    echo "<tr>";
                        echo "<td> Ονομα φοιτητη </td>";
					    echo "<td> $row[onoma] </td>";
                    echo "</tr>";	
					
				    echo "<tr>";
                       echo "<td> επωνυμο φοιτητη </td>";
					   echo "<td> $row[epitheto] </td>";
                    echo "</tr>";	
					
					echo "<tr>";
                       echo "<td> αριθμος μητρωου </td>";
					   echo "<td> $row[username] </td>";
                    echo "</tr>";	

					echo "<tr>";
                       echo "<td> Κωδικός </td>";
					   echo "<td> $row[kodikos] </td>";
                    echo "</tr>";
					
					echo "<tr>";
                       echo "<td> email </td>";
					   echo "<td> $row[email] </td>";
                    echo "</tr>";	
						
					echo "<tr>";
                      echo "<td> εξαμηνο φοιτητη</td>";
					  echo "<td> $row[eksamino] </td>";
                    echo "</tr>";	
					
					echo "<tr>";
                      echo "<td> ποντοι </td>"; 
					  echo "<td> $row[pontoi] </td>";
                    echo "</tr>";	
					
			//	break;}
				
					

			}

echo "<br />"; //αναδίπλωση γραμμής 

mysqli_close($conn);
}else{                                 //se periptosi po0 ta sessions einai kena simeni oti o xristis exi aposinde8ei opote prepei na sinde8ei ksana gia na sinexisi
?>
             <h1>Κάνε login για να συνεχίσεις</h1>

			 <form name="form1" method="post" align='center' action="login_sql.php"> <p>
			 <div class='login'>
			συνθηματικο: <input type="text" name="name" required /><p>

			κωδικος: <input type="password" name="kodikos" required /><p>

			<input type="Submit" name="Submit" value="login">
			<a href="register.php">register</a> 
           <?php } ?>
        
     
      </div>
    </div>
   
</body>
</html>
 
 
 
 
 
 
 
 
 
 
 
 
 
 