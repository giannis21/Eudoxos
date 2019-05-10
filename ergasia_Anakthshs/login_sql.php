<!DOCTYPE HTML>
<?php session_start()
?>
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
          <li class="selected"><a href="#">Είσοδος</a></li>
          <li><a href="eisodos_systhma.php">Στοιχεία φοιτητή</a></li>
          <li><a href="diloseis.php">δήλωση συγγραμάτων</a></li>
          <li><a href="antikastasi.php">αντικατάσταση βιβλίου</a></li>
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
              <li><a href="#">δήλωση συγγραμάτων</a></li>
              <li><a href="#">αντικατάσταση βιβλίου</a></li>
			 
              
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
 <?php                                           //efoson mpei se auth thn selida mporei na plohgh8ei
        header('Cache-Control: no cache');       //bazo ayth thn entolh epeidi otan 8elo na guriso ap ton browser piso perimeni na pari post apo kato..kai etsi dn xreiazete na parei ta post apo kato kai dn krasari
		 
	  $kodikos=$_POST["kodikos"];
    $name=$_POST["name"];
		global $flag;
	  $flag=0;
		$conn= mysqli_connect("localhost","root", ""); //σύνδεση με την mysql
		if (!$conn)
		{
		die('Η σύνδεση απέτυχε: ' . mysql_error());
		}
		mysqli_select_db($conn,"proj"); //επιλογή της ΒΔ (mydb)
		$result = mysqli_query($conn,"SELECT kodikos,eksamino,username FROM foithths  where kodikos='$kodikos'"); 
		 while($row = mysqli_fetch_array($result)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
					{
						if($row['kodikos']==$kodikos && $name==$row['username']) //elenxo an o xrhsths einai egkiros dld an iparxei mesa sth bash dedomenon
						{$flag=1;
						$_SESSION['eksamino']=$row['eksamino']; 
						$_SESSION["kodikos"]=$kodikos;}          //to apo8ikeuo ws session gia na to xrisimopoihso wste na emfaniso to katallhlo eksamino
					}


		mysqli_close($conn);

		if($flag!=1)  //se periptosi po0 den uparxei o xrhsths 
			header("Location: login.php?message=τα στοιχεία που έδωσες δεν υπάρχουν");  //se periptosi po0 den iparxo0n ta stoixeia me petaei sto login pali gia na ksana kanei login pernontas toy ena minima
		else
		{?> <h1> <center> H είσοδος ολοκληρώθηκε..</center> <h1><?php } 
	
		?>
			

      </div>
    </div>
    
</body>
</html>
