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
          <li class="selected"><a href="diloseis.php">δήλωση συγγραμάτων</a></li>
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
              <li><a href="#">δήλωση συγγραμάτων</a></li>
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
    $kodikos=$_SESSION['kodikos'];

    $conn= mysqli_connect("localhost","root", ""); //σύνδεση με την mysql
	if (!$conn)
	{
	die('Η σύνδεση απέτυχε: ' . mysql_error());
	}
	mysqli_select_db($conn,"proj"); //επιλογή της ΒΔ (mydb)

		if($_SESSION['eksamino']==1)
		{
			f('Επισκόπηση τρέχουσας δήλωσης','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση');    	 //kalo thn sinarthsh me thn antistoixi sinartisi 
		}																															//epeidi 8elo mono sto trexon eksamino na emfanizete "episkopisi neas dilosis"
		else if($_SESSION['eksamino']==2)																							 //mesa sto opoio 9a mporo na kano kai tis antistoixes leito0rgies
		{	
			f('Επισκόπηση','Επισκόπηση τρέχουσας δήλωσης','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση');    
		}
		else if($_SESSION['eksamino']==3)
		{
			f('Επισκόπηση','Επισκόπηση','Επισκόπηση τρέχουσας δήλωσης','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση');    
		}
		else if($_SESSION['eksamino']==4)
		{
			f('Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση τρέχουσας δήλωσης','Επισκόπηση','Επισκόπηση','Επισκόπηση');
		}
		else if($_SESSION['eksamino']==5)
		{   
			f('Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση τρέχουσας δήλωσης','Επισκόπηση','Επισκόπηση');	   
		}
		else if($_SESSION['eksamino']==6)
		{
			f('Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση τρέχουσας δήλωσης','Επισκόπηση');	    	
		}
		else 
		{
			f('Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση','Επισκόπηση τρέχουσας δήλωσης');		   
		}
		 



mysqli_close($conn);
		}else{ //se periptosi po0 ta sessions einai kena simeni oti o xristis exi aposinde8ei opote prepei na sinde8ei ksana gia na sinexisi?>
	         <h1>Κάνε login για να συνεχίσεις</h1>

			 <form name="form1" method="post" align='center' action="login_sql.php"> <p>
			 <div class='login'>
			συνθηματικο: <input type="text" name="name" required /><p>

			κωδικος: <input type="password" name="kodikos" required /><p>

			<input type="Submit" name="Submit" value="login">
			<a href="register.php">register</a> 
           <?php } 
		function f($parameter1,$parameter2,$parameter3,$parameter4,$parameter5,$parameter6,$parameter7) 
					{
					echo "<center> <h1>Λίστα δηλώσεων</h1></center>";
					 echo "<table border=1 align=center width=500>";
					 echo "<tr>";
						echo "<td> <center> ΠΕΡΙΟΔΟΣ </center></td>";
						echo "<td> <center> ΕΞΑΜΗΝΑ  </center></td>";
						echo "<td> <center> ΜΑΘΗΜΑΤΑ </center></td>";
					echo "</tr>";	

					echo "<tr>";
						echo "<td> ΧΕΙΜΕΡΙΝΟ </td>";
						echo "<td> 1ο ΕΞΑΜΗΝΟ </td>";
						echo "<td><li><a href=eksamina.php?trexon=1>$parameter1</a></td>";    //<a href="products.php?cat=lightning">Lighting</a>
					echo "</tr>";	

					echo "<tr>";
						echo "<td> ΕΑΕΡΙΝΟ </td>";
						echo "<td> 2ο ΕΞΑΜΗΝΟ </td>";
						echo "<td><li><a href=eksamina.php?trexon=2>$parameter2</a></td>";
					echo "</tr>";	

					echo "<tr>";
						echo "<td> ΧΕΙΜΕΡΙΝΟ </td>";
						echo "<td> 3ο ΕΞΑΜΗΝΟ </td>";
						echo "<td><li><a href=eksamina.php?trexon=3>$parameter3</a></td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td> ΕΑΕΡΙΝΟ </td>";
						echo "<td> 4ο ΕΞΑΜΗΝΟ </td>";
						echo "<td><li><a href=eksamina.php?trexon=4>$parameter4</a></td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td> ΧΕΙΜΕΡΙΝΟ </td>";
						echo "<td> 5ο ΕΞΑΜΗΝΟ </td>";
						echo "<td><li><a href=eksamina.php?trexon=5>$parameter5</a></td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td> ΕΑΕΡΙΝΟ </td>";
						echo "<td> 6ο ΕΞΑΜΗΝΟ </td>";
						echo "<td><li><a href=eksamina.php?trexon=6>$parameter6</a></td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td> ΧΕΙΜΕΡΙΝΟ </td>";
						echo "<td> 7ο ΕΞΑΜΗΝΟ </td>";
						echo "<td><li><a href=eksamina.php?trexon=7>$parameter7</a></td>";
					echo "</tr>";
					}
     				?>
</div>
</form>
	  
	 
        
     
      </div>
    </div>
    
</body>
</html>
