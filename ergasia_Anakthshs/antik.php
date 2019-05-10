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
          <li><a href="diloseis.php">δήλωση συγγραμάτων</a></li>
          <li class="selected"><a href="antikatastash.php">αντικατάσταση βιβλίου</a></li>
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
            <h3><img src="antallagi.png" alt="" style="width:156px;height:73px;"></h3>
          </div>
          
        </div>
      </div>
      <div id="content">
       
		
			
 <?php
   header('Cache-Control: no cache');
   if(isset($_SESSION["kodikos"]) || isset($_SESSION["name"]))
        {
            $trexon=$_GET['trexon_book'];   //to biblio po0 epelekse o xrhsths na antikatasthsei
			echo "Η αρχική σας επιλογή ήταν: ";echo "<strong><ins>$trexon</ins></strong>";
			 $conn= mysqli_connect("localhost","root", ""); //σύνδεση με την mysql
			if (!$conn)
			{
			die('Η σύνδεση απέτυχε: ' . mysql_error());
			}
			mysqli_select_db($conn,"proj"); //επιλογή της ΒΔ (mydb)
			
		    echo "<form name='forma1' method='POST'>";     
			echo "<table>";                                    //ftiaxno pinaka po0 8a xei mono to ena ma8ima kai ta biblia oste na mporesei na allaksi biblio
			                                                   //sto parakato select epilego to onoma ma8imatos po0 anikei to biblio po0 epelekse o xrisths 
              $result2=mysqli_query($conn,"select onoma from mathima,biblio,biblio_foit where mathima.math_id=biblio.math_id and biblio.name=biblio_foit.name and biblio_foit.name='$_GET[trexon_book]' and biblio_foit.kodikos='$_SESSION[kodikos]';");
			while($table = mysqli_fetch_array($result2)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
				{   
					echo "<tr>";	
					echo "<th rowspan=3>$table[onoma]</th>";	//emfanizo to ma8ima po0 briskete to biblio pros antikatastash			
																//sto parakato select kano select ta 3 biblia po0 aniko0n sto parapano ma8ima po0 briskete ston pinaka $table
			        $result = mysqli_query($conn,"select name from biblio,mathima where biblio.math_id=mathima.math_id and semester_id=(SELECT eksamino FROM foithths WHERE kodikos='$_SESSION[kodikos]') and mathima.onoma='$table[onoma]'; ");
              		
					while($table1=mysqli_fetch_array($result))
					   {
						   ?>
						 <td> 
						  <input type='radio' name="radio" value="<?php echo $table1['name']?>"> <?php echo $table1['name'] ?> 
						 </td> </tr> <?php				   
					   }
				 
				}	
               
              ?><BR><input type="submit" name="submit" value="Καταχώρηση αντικατάστασης" />
					</table>
					</form>
				<?php	  
			
			  if (isset($_POST['submit']))   //an patiso kataxorisi
				 {
					if(isset($_POST['radio']))  //an einai klikasrismeno to radio
								{ 							
									$result7 = mysqli_query($conn,"update biblio_foit set name='$_POST[radio]' where kodikos='$_SESSION[kodikos]' and name='$_GET[trexon_book]';"); 
									  if(!$result7)
									{die('Η εγγραφή απέτυχε'.mysql_error());}
 									else{
									   echo "Η αντικατάσταση έγινε επιτυχώς..!!";}
								}else{}
				 }
		mysqli_close($conn);
		echo "<a href=antikatastash.php><h3> Πίσω</h3></a>";
}else{
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
