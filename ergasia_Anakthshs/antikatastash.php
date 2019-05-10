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
          <li><a href="eisodos_systhma.php">Στοιχεία φοιτητή</a></li>
          <li ><a href="diloseis.php">δήλωση συγγραμάτων</a></li>
          <li class="selected"><a href="#">αντικατάσταση βιβλίου</a></li>
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
              <li><a href="#">αντικατάσταση βιβλίου</a></li>
			  <li><a href="login.php">Αποσύνδεση</a></li>
              
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            
            <h3><img src="antallagi.png" alt="" style="width:156px;height:73px;"></h3>
          </div>
         
        </div>
      </div>
      <div id="content">
        
		
			
     <?php 
	if(isset($_SESSION["kodikos"]) || isset($_SESSION["name"]))
        {
	    $flag1=0; //tsekaro na do an o sigkekrimenos foithts exei kanei dilosi
		  $conn= mysqli_connect("localhost","root", ""); //σύνδεση με την mysql
		if (!$conn)
		{
		die('Η σύνδεση απέτυχε: ' . mysql_error());
		}
		mysqli_select_db($conn,"proj"); //επιλογή της ΒΔ (mydb)
		$result8 = mysqli_query($conn,"SELECT flag FROM foithths  where kodikos='$_SESSION[kodikos]'"); 
		while($row = mysqli_fetch_array($result8)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
			{
				$flag1= $row['flag'];       //perno apo thn basi dedomenon to flag po0 exei o foithths gia na do an exei kanei thn dilosi to0
			}
					 
        if($flag1==1)
			 { 
      
		$result = mysqli_query($conn,"SELECT username,onoma,pontoi FROM foithths  where kodikos='$_SESSION[kodikos]'"); 
		 while($row = mysqli_fetch_array($result)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
					{
						?><h1><?php 
						echo "Επιλέξτε ένα βιβλίο που θέλετε να αντικαταστήσετε: "."<BR>";
						
						?></h1> <?php
						$result1 = mysqli_query($conn,"SELECT name FROM biblio_foit  where kodikos='$_SESSION[kodikos]'"); 
						echo "<form=forma2 method=post> ";
						 echo "<table>";
						while($row1 = mysqli_fetch_array($result1)) 
						{
							echo "<tr>";
							?><td> <a href="antik.php?trexon_book=<?php echo $row1['name'] ?>"> <?php echo $row1['name'] ?></td> <?php
							echo "</tr>";
						}
						echo "</table>";
						echo "</form>";  
						
					}

           
		mysqli_close($conn);
         
			 
        }
			 else{echo "<h1> δεν εχει γίνει η δήλωση..! Κάντε δήλωση <a href=diloseis.php>εδώ  </a>";}
	}else{?>	
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
