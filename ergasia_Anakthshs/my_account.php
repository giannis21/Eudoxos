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
          <li><a href="antikatastash.php">αντικατάσταση βιβλίου</a></li>
          <li class="selected" ><a href="my_account.php">Ο λογαριασμός μου</a></li>
		  
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
          </div>
          
        </div>
      </div>
      <div id="content">
        
		
			
     <?php 
	    if(isset($_SESSION["kodikos"]) || isset($_SESSION["name"]))
        {
        $conn= mysqli_connect("localhost","root", ""); //σύνδεση με την mysql
		if (!$conn)
		{
		die('Η σύνδεση απέτυχε: ' . mysql_error());
		}
		mysqli_select_db($conn,"proj"); //επιλογή της ΒΔ (mydb)
		$result = mysqli_query($conn,"SELECT username,onoma,pontoi,flag FROM foithths  where kodikos='$_SESSION[kodikos]'"); 
		 while($row = mysqli_fetch_array($result)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
					{
						?><h1><?php
						echo "Όνομα χρήστη: ".$row['onoma']."<BR>";  
						echo "Αριθμός μητρώου: ".$row['username']."<BR>";
						echo "Πόντοι που απομένουν: ".$row['pontoi']."<br>";
						if($row['flag']==1)
					    	echo "Τα βιβλία που έχετε επιλέξει είναι:<br>";
					    else
							echo "δεν έχει γίνει ακόμα καταχώρηση<br>";
						?></h1> <?php
						$result1 = mysqli_query($conn,"SELECT name FROM biblio_foit  where kodikos='$_SESSION[kodikos]'"); 
						echo "<table>";
						while($row1 = mysqli_fetch_array($result1)) 
						{
							echo "<tr>";
							echo "<td> $row1[name]  </td>";
							echo "</tr>";
						}
						echo "</table>";
						
						
					}

           
		mysqli_close($conn);
        }else{ 
		?>		 <h1>Κάνε login για να συνεχίσεις</h1>

			 <form name="form1" method="post" align='center' action="login_sql.php"> <p>
			 <div class='login'>
			συνθηματικο: <input type="text" name="name" required /><p>

			κωδικος: <input type="password" name="kodikos" required /><p>

			<input type="Submit" name="Submit" value="login">
			<a href="register.php">register</a> 
           <?php }  ?>


        
     
      </div>
    </div>
    
</body>
</html>
