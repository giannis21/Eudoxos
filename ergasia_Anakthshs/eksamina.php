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
header('Cache-Control: no cache');
  if(isset($_SESSION["kodikos"]) || isset($_SESSION["name"]))
        {

          
			 $conn= mysqli_connect("localhost","root", ""); //σύνδεση με την mysql
			if (!$conn)
			{
			die('Η σύνδεση απέτυχε: ' . mysql_error());
			}
			mysqli_select_db($conn,"proj"); //επιλογή της ΒΔ (mydb)
			
	   
				if($_GET['trexon']==$_SESSION['eksamino'])	  //to $_GET['trexon'] einai to link po0 epelekse o xrhsths  dhladi to analogo eksamino..mpeno mesa mono an o trexon xrhsths exei idio me auto to link po0 epeleksa
				{   
				    $counter1=1;							 // ton xrisimopoiw gia na ftiakso thn forma me ta radio buttons
			        $flag1=0;                                //tsekaro na do an o sigkekrimenos foithts exei kanei dilosi
					 	$result8 = mysqli_query($conn,"SELECT flag FROM foithths  where kodikos='$_SESSION[kodikos]'"); 
		                        while($row = mysqli_fetch_array($result8)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
									{
										$flag1= $row['flag'];        
									}
					 if($flag1==0)   //an o xrhsths den exei kanei dilosi
					 {
							 $result2 = mysqli_query($conn,"SELECT onoma FROM mathima WHERE semester_id=(SELECT eksamino FROM foithths WHERE kodikos='$_SESSION[kodikos]'); ");
							 //me auth thn enotlh exoun ginei select ola ta ma8imata pou briskonte sto analogo eksamino 
							 //opote xrisimopoiw to metrhth ayton gia na mporo na emfanizo parakatw mono ena ma8ima apo tin basi dedomenon
							 
							if($_SESSION['eksamino']==1)    
								$counter=1;
							else if($_SESSION['eksamino']==2)
								$counter=6;
							else if($_SESSION['eksamino']==3)
								$counter=11;
							else if($_SESSION['eksamino']==4)
								$counter=17;
							else if($_SESSION['eksamino']==5)
								$counter=23;
							else if($_SESSION['eksamino']==6)
								$counter=31;
							else if($_SESSION['eksamino']==7)
								$counter=40;
							?><form action="" method='post'><?php
								

							
							 echo "<table border=1 align=center >";       //dimio0rgo enan pinaka me ta ma8imata kai ta biblia po0 exoun
					  
							 while($row1 = mysqli_fetch_array($result2)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
								  {	    
								
									echo "<tr>";	
									echo "<th rowspan=3>$row1[onoma]</th>";
									$result = mysqli_query($conn,"select name from biblio,mathima where biblio.math_id=mathima.math_id and semester_id=(SELECT eksamino FROM foithths WHERE kodikos='$_SESSION[kodikos]') and mathima.math_id='$counter'; ");
								   ?><fieldset id='$counter1'> <?php //me to parapano select emfanizo ta ma8imata to0 antistoixo0 eksaminou alla ta emfanizo ena-ena afo0 prepei to math_id na nai iso me ton metrhth po0 auksani se ka8e epanalipsi
									                                 //to counter1 parapano prepei na nai idio me to name sto parakato radio button gia na do0lepsei sosta
								   while($row = mysqli_fetch_array($result)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
									  {	    
											?>	
											 <td> 
											  <input type='radio' value="<?php echo $row["name"] ?>" name="<?php echo $counter1?>"> <?php echo $row['name'] ?> 
											 </td> </tr> <?php           //dimio0rgo dinamika ta radio buttons kai apo dipla bazo to antistoixo ma8ima
									  }                       
									
									   ?></fieldset><?php
									  $counter=$counter+1; 
									  $counter1=$counter1+1;
								  }
								  ?><input type="submit" name="submit" value="Καταχώρηση αγοράς" />
								   </form>
								   </table> <?php	
								   
							 mysqli_close($conn);
							 if (isset($_POST['submit']))  //an o xrhsths exei pathsei to ko0mpi kataxorisi agoras kalei thn sinarthsh auth
							 {
								  kataxorisi_agoras($counter1);
							 }
							 
						  $conn= mysqli_connect("localhost","root", ""); //σύνδεση με την mysql
								if (!$conn)
								{
								die('Η σύνδεση απέτυχε: ' . mysql_error());
								}
								mysqli_select_db($conn,"proj"); //επιλογή της ΒΔ (mydb) 
						}
						else{
							?>  <h1>Η δήλωση έχει γίνει.</h1>Αν θες να την τροποποιήσεις πήγαινε στην επιλογή <a href="antikatastash.php">αντικατάσταση βιβλίου.</a> <?php
					           
			    	 }
				}
				else           //se periptosi po0 to eksamino po0 patise o xrhsths gia proepiskopisi den einai to eksamino po0 briskete apla emfanizo ta ma8imata xoris na mporei na dilosei kati se ayth th periptosi
				{   if($_GET['trexon']==1)   
					{     echo "<table  border=1 align=center>";   
						 $result2 = mysqli_query($conn,"SELECT onoma FROM mathima WHERE semester_id=1; ");
						 while($row1 = mysqli_fetch_array($result2)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
							  {	  
   							        echo "<tr>";
							        echo "<td><center>$row1[onoma]<BR></center></td>";
									echo "</tr>";
							  }
						 echo "</table>";
				    }
					else if($_GET['trexon']==2)
						{
							echo "<table  border=1 align=center>"; 
						 $result2 = mysqli_query($conn,"SELECT onoma FROM mathima WHERE semester_id=2; ");
						 while($row1 = mysqli_fetch_array($result2)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
							  {	      
							        echo "<tr>";
							        echo "<td><center>$row1[onoma]<BR></center></td>";
									echo "</tr>";
							  }
							  echo "</table>";
				    }
					else if($_GET['trexon']==3)
						{
							echo "<table  border=1 align=center>"; 
						 $result2 = mysqli_query($conn,"SELECT onoma FROM mathima WHERE semester_id=3; ");
						 while($row1 = mysqli_fetch_array($result2)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
							  {	      
							        echo "<tr>";
							        echo "<td><center>$row1[onoma]<BR></center></td>";
									echo "</tr>";
							  }
							  echo "</table>";
				    }
					else if($_GET['trexon']==4)
						{
							echo "<table  border=1 align=center>"; 
						 $result2 = mysqli_query($conn,"SELECT onoma FROM mathima WHERE semester_id=4; ");
						 while($row1 = mysqli_fetch_array($result2)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
							  {	      
							        echo "<tr>";
							        echo "<td><center>$row1[onoma]<BR></center></td>";
									echo "</tr>";
							  }
							  echo "</table>";
				    }
					else if($_GET['trexon']==5)
						{
						 echo "<table  border=1 align=center>"; 
						 $result2 = mysqli_query($conn,"SELECT onoma FROM mathima WHERE semester_id=5; ");
						 while($row1 = mysqli_fetch_array($result2)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
							  {	      
							        echo "<tr>";
							        echo "<td><center>$row1[onoma]<BR></center></td>";
									echo "</tr>";
							  }
							  echo "</table>";
				    }
					else if($_GET['trexon']==6)
						{
							echo "<table  border=1 align=center>"; 
						 $result2 = mysqli_query($conn,"SELECT onoma FROM mathima WHERE semester_id=6; ");
						 while($row1 = mysqli_fetch_array($result2)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
							  {	      
							        echo "<tr>";
							        echo "<td><center>$row1[onoma]<BR></center></td>";
									echo "</tr>";
							  }
							  echo "</table>";
				    }
					else if($_GET['trexon']==7)
						{
							echo "<table  border=1 align=center>"; 
						 $result2 = mysqli_query($conn,"SELECT onoma FROM mathima WHERE semester_id=7; ");
						 while($row1 = mysqli_fetch_array($result2)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
							  {	      
							        echo "<tr>";
							        echo "<td><center>$row1[onoma]<BR></center></td>";
									echo "</tr>";
							  }
							  echo "</table>";
				    }
				}
					}else{//se periptosi po0 ta sessions einai kena simeni oti o xristis exi aposinde8ei opote prepei na sinde8ei ksana gia na sinexisi?>
	  <h1>Κάνε login για να συνεχίσεις</h1>

			 <form name="form1" method="post" align='center' action="login_sql.php"> <p>
			 <div class='login'>
			συνθηματικο: <input type="text" name="name" required /><p>

			κωδικος: <input type="password" name="kodikos" required /><p>

			<input type="Submit" name="Submit" value="login">
			<a href="register.php">register</a> 
           <?php } 

	function kataxorisi_agoras($counter1)
		{  
						$conn1= mysqli_connect("localhost","root", ""); //σύνδεση με την mysql
						if (!$conn1)
						{
						die('Η σύνδεση απέτυχε: ' . mysql_error());
						}
						mysqli_select_db($conn1,"proj"); //επιλογή της ΒΔ (mydb)
						
				    	      $count_purchase=0; //me auto ton metrhth metrao ta radio buttons po0 einai klikarismena diladi ta posa biblia 8elei na agorasei o foithths 
							                    // oste na mporeso na tsekaro an exei arketo0s pontous gia na agorasei 
							  $flag_eisagogis=0; 
							  
							  for($i=1;$i<=$counter1;$i++) //o counter1 po0 perniete os parametros einai ola ta ma8imata..opote elenxo gia ola ta ma8imata poia einai settarismena apo kato
								{
								   if(isset($_POST[$i]))
										{  			 
											$count_purchase=$count_purchase+1;	//metrao  auta ta ma8imata po0 exo0n epilextei
										}
				
							  }
							   
							   $result5 = mysqli_query($conn1,"SELECT pontoi FROM foithths  where kodikos='$_SESSION[kodikos]'"); //kano select to0s ponto0s 
											while($row = mysqli_fetch_array($result5)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
												{
													if($row['pontoi']<$count_purchase*5)// elenxo an to sinolo ton pontwn einai mikrotero apo to pli8os twn bibliwn po0 exo0n epilextei(epi*5 po0 einai pontoi gia ka8e biblio)
													{ 
														
														echo "<h3>Η αγορά δεν μπορεί να γίνει, οι πόντοι σας ειναι κατω απο 0</h3> ";
													}          
													else    //an diladi exo to peri8orio na agoraso
													{
														for($i=1;$i<=$counter1;$i++)
														 {
														   
															if(isset($_POST[$i]))  //elenxo pali ta biblia po0 exo0n epilextei
																{                  //kai apo kato ta kataxoro ston pinaka biblio_foit
																 
																   $result3 = mysqli_query($conn1,"insert into biblio_foit values('$_SESSION[kodikos]','$_POST[$i]');"); //επιλογή όλων 
																   if(!$result3)
																   {die('i eggrafh apetixeeeee'.mysql_error());}
															       
																   //kano to flag to0 foithth 1 po0 simeni oti exei ginei i dilosi oste na mhn ton afisei na ksanadilosei
																   
																    $result7 = mysqli_query($conn1,"update foithths set flag='1' where kodikos='$_SESSION[kodikos]';"); //επιλογή όλων 
																   if(!$result7)
																  {die('i eggrafh apetixe'.mysql_error());}
														       }	
														}
											        }
											} 
												
												
							 echo "Η αγορά έγινε επιτυχώς!";
		                 
		mysqli_close($conn1);
		}	
echo "<a href=diloseis.php><h3> Πίσω</h3></a>";		

        ?>
     
      </div>
    </div>
   
</body>
</html>
