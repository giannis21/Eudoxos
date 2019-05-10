<!DOCTYPE HTML>
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
.register {
height:480px;
width:190px;
margin:auto;
border:1px #CCC solid;
padding:10px;
}

.register input {
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
		
			
 <form name="form1" method="post" align='center' action="register_sql.php"> <p>
  <div class='register'>
αριθμος μητρωου: <input type="text" name="mitrwo"  required /><p>
κωδικος: <input type="password" name="kodikos" required/><p>
Όνομα: <input type="text" name="name"   required/><p>
επιθετο: <input type="text" name="surname"  required/><p>
E-mail: <input type="email" name="email" required><p>
εξαμηνο: <input type="number" name="semester" min="1" max="7"  required/><p>

<input type="Submit" name="Submit" value="register">
<a href="login.php">login</a>
</div>

</form>
        
     
      </div>
    </div>
  
</body>
</html>
