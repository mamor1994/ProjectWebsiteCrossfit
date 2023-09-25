<?php
$dbconn = mysqli_connect('localhost', 'root', '', 'mydatabase');

if (!$dbconn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($dbconn, "utf8");

if(isset($_POST['mybtn']) && $_POST['mybtn']==='Save') {
    $name = $_POST['name'];
    $email    = $_POST['email'];  
    $address  = $_POST['address']; 
    $state    = $_POST['state'];
    $zip      = $_POST['zip'];
    $phone    = $_POST['phone'];
    $type     = $_POST['type'];
    $card     = $_POST['card'];
    
    $sql = "INSERT INTO `users`(`name`, `email`, `address`, `state`, `zip`, `phone`, `type`, `card`) VALUES ('$name','$email','$address','$state','$zip','$phone','$type','$card') ";
    
    $result = mysqli_query($dbconn, $sql);
    
    if($result){
        echo "<script> alert('Data saved into Database')</script>";
    }
    else
    {
        echo "<script> alert('Failed to insert data')</script>";
    }   
}
?>

<?php
$dbconn = mysqli_connect('localhost', 'root', '', 'mydatabase');

if (!$dbconn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($dbconn, "utf8");

if(isset($_POST['searchdata'])) {
    $search = $_POST['search'];
    
    $sql = "SELECT * FROM users WHERE email ='$search' ";
    
    $data = mysqli_query($dbconn, $sql);
    
    $result = mysqli_fetch_assoc($data);
	
	if($result){
        echo "<script> alert('Data searched successfully')</script>";
	}
	else
    {
        echo "<script> alert('Failed to search data')</script>";
    } 
}
?>	

<!DOCTYPE html>
<html lang="gr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="favicon.png" type="image/png">
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
@media screen
{
   body {
      font-family: 'Times New Roman', Helvetica, sans-serif; 
      background-color: #9DA1AD;
      color: white;
   }

   * {
      box-sizing: border-box;
      overflow-x: hidden;
   }

   .logo{
        color: #ff7200;
        font-size: 35px;
        font-family: 'Times New Roman';
        padding-left: 20px;
        float: left;
        padding-top: 10px;	
        font-size: 50px;
   }
    
   .container 
   { 
      display: flex; 
      justify-content: flex;
      align-items: center;
      padding: 10px;
      flex-direction: column;
      background-color: #ff7200;
      width: 80%;
      margin-left: 145px;
	  margin-top: 1px
   }
    
   .container form
   {
      font-weight: bold;
      border: 3px solid #f1f1f1;
      padding: 10px;
      width: 800px;
      background: transparent;
      outline: none;
      border: none;
   }
   .container form .row
   {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
   }
    
   .container form .row .col
   {
      flex: 1 1 150px;
      color: #fff; 
   }
    
   .container form .row .col .title
   {
      font-size: 20px;
      color: #fff;
      padding-bottom: 5px;
      text-transform: uppercase;
   }
    
   .container form .row .col .inputBox
   {
      margin: 15px 0;
   }
    
   .container form .row .col .inputBox span
   {
      margin-bottom: 10px;
      display: block;
   }
    
   .container form .row .col .inputBox input
   {
      width: 80%;
      border: 1px solid #ccc;
      padding: 10px 15px;
      font-size: 15px;
      text-transform: none;
   }
    
   .container form .row .col .inputBox input:focus {
      outline: none;
      border: 1px solid blue;
   }
	
   .container form .row .col .flex
   {
      display: flex;
      gap: 15px;
   }
    
   .container form .row .col .flex .inputBox
   {
      margin-top: 5px;
      width: 42.5%;
   }
    
   .container form .row .col .flex .inputBox select
   {
      margin-top: 1px;
      width: 100%; 
      padding: 10px;
      font-size: 14px; 
      cursor: pointer;
   }
    
   .container form .row .col .inputBox select
   {
      margin-top: 5px;
      width: 45%;
      padding: 10px;
      font-size: 14px; 
      cursor: pointer;
   }
    
   .container form .row .col .inputBox img
   {
      height: 50px;
      margin-top: 5px;
      width: 100%;
      filter: drop-shadow(0 0 1px #000);
   }
    
   .container form .submit-btn
   {
      width: 20%;
      padding: 12px;
      font-size: 17px;
      background: #27ae60;
      color: #fff;
      margin-top: 5px;
      cursor: pointer;
      text-align: center;
      flex: 1;
      margin-right: 70px;
   }
    
   .container form .submit-btn:hover
   {
      background: #2ecc71;
   }
    
   .container form .clear-btn
   {
      width: 20%;
      padding: 12px;
      font-size: 17px;
      background: #cc8d2e;
      color: #fff;
      margin-top: 5px;
      cursor: pointer;
      text-align: center;
      flex: 1;
      margin-right: 70px;
   }
    
   .container form .clear-btn:hover
   {
      background: #ccaf2e;
   }
    
   .container form .print-btn
   {
      width: 20%;
      padding: 12px;
      font-size: 17px;
      background: #3e2ecc;
      color: #fff;
      margin-top: 5px;
      cursor: pointer;
      text-align: center;
      flex: 1;
      margin-right: 70px;
   }
    
   .container form .print-btn:hover
   {
      background: #2e5bcc;
   }
    
   .container form .button-row 
   {
      display: flex;
      align-items: center;
      margin-top: 20px;
      justify-content: center;
   }
    
   .container form .button-row p 
   {
      color: red;
      margin-top: 10px;
   }
    
   .error 
   { 
      color: red;
       
   }
    
   .container form .row .col .inputBoxSearch span
   {
      margin-bottom: 10px;
      display: flex;
   }
	
   .container form .inputBoxSearch input[type=text] 
   {
      padding: 10px;
      font-size: 17px;
      border: 1px solid grey;
      width: 80%;
      background: #f1f1f1;
	  flex: 1;
    }
    
   .container form .inputBoxSearch button 
    {
	  display: flex;
      padding: 13px 15px; 
	  background: #2196F3;
      color: white;
      font-size: 17px;
      border: 1px solid grey;
      cursor: pointer;
      margin-left: 302px;
	  margin-top: -44px;
    }
    
    .container form .inputBoxSearch button:hover 
    {
      background: #0b7dda;
    }
	
    .error {
      color: red;
      font-size: 12px;
}


}
@media print
{
   @page {
       size: auto;   
       margin: 0mm; 
   }
	
   body 
   {
       background: none;
       font-family: 'Times New Roman', Helvetica, sans-serif; 
	   margin: 0;
   }
    
   * {
      box-sizing: border-box;
   }
 
   .container 
   {
      display: flex; 
      justify-content: flex;
      align-items: center;
      padding: 10px;
      flex-direction: column;
      width: 80%;
      margin-left: 145px;
	  margin-top: 1px
   }
    
	
   .container form 
   {
      border: none;
      background: none;
      box-shadow: none;
      color: #000;
	  font-weight: bold;
      padding: 10px;
      width: 800px;
      background: transparent;
      outline: none;
      border: 1;
   }
	
   .container form .row
   {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
   }
    
   .container form .row .col
   {
      flex: 1 1 150px;
      color: #fff; 
   }
    
   .container form .row .col .title
   {
      font-size: 20px;
      color: #fff;
      padding-bottom: 5px;
      text-transform: uppercase;
   }
    
   .container form .row .col .inputBox
   {
      margin: 15px 0;
   }
    
 .container form .row .col .inputBox span
   {
      margin-bottom: 10px;
      display: block;
   }
    
   .container form .row .col .inputBox input
   {
      width: 80%;
      border: 2px solid #ccc;
      padding: 10px 15px;
      font-size: 15px;
      text-transform: none;
   }
	
   .container form .row .col .flex
   {
      display: flex;
      gap: 15px;
   }
    
   .container form .row .col .flex .inputBox
   {
      margin-top: 5px;
      width: 42.5%;
   }
    
   .container form .row .col .flex .inputBox select
   {
      margin-top: 1px;
      width: 100%; 
      padding: 10px;
      font-size: 14px; 
	  background: #ccc;
   }
    
   .container form .row .col .inputBox select
   {
      margin-top: 5px;
      width: 45%;
      padding: 10px;
      font-size: 14px; 
   }
    
   .container form .row .col .inputBox img
   {
      height: 50px;
      margin-top: 5px;
      width: 100%;
      filter: drop-shadow(0 0 1px #000);
   }
    
   .container form .submit-btn
   {
      width: 20%;
      padding: 12px;
      font-size: 17px;
      margin-top: 5px;
      text-align: center;
      flex: 1;
      margin-right: 70px;
	  background: #ccc;
   }
    
   .container form .clear-btn
   {
      width: 20%;
      padding: 12px;
      font-size: 17px;
      margin-top: 5px;
      text-align: center;
      flex: 1;
      margin-right: 70px;
      background: #ccc;
   }
    
   .container form .print-btn
   {
      width: 20%;
      padding: 12px;
      font-size: 17px;
      margin-top: 5px;
      text-align: center;
      flex: 1;
      margin-right: 70px;
      background: #ccc;
   }
    
   .container form .button-row 
   {
      display: flex;
      align-items: center;
      margin-top: 20px;
      justify-content: center;
   }
    
   .container form .button-row p 
   {
      margin-top: 10px;
   }
    
   .container form .row .col .inputBoxSearch span
   {
      display: none;  

   }
	
   .container form .inputBoxSearch input[type=text] 
   {
      display: none;  
    }
    
   .container form .inputBoxSearch button 
    {
      display: none;  
    }
    
   #type,
   #card 
   {
      display: none;  
   }
    
   #image
   {
      filter: grayscale(100%);
   }
    
   .navbar 
   {
	  filter: grayscale(100%);

   }
}
</style>
</head>
<body>
<div class="navbar">
     <div class="icon">
          <h2 class="logo">CrossFit</h2>  
     </div>	
     <div class="menu">		
        <ul>
            <li><a href="home.php">HOME</a></li>	
            <li><a href="about.php">ABOUT</a></li>	
            <li><a href="workouts.php">WORKOUTS</a></li>
            <li><a href="register.php">REGISTER</a></li>
            <li><a href="resume.php">RESUME</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>				
     </div>        				
</div>	 
<div class="container">
<form id="searchForm" method="POST" action="">
	  <div class="row">   
		   <div class="col">
				  <h3 class="title">Personal Details</h3>
				  <div class="inputBox">
					 <span>Name:</span>
					 <input id="name" name="name" type="text" placeholder="ΑΘηνά" value="<?php if (isset($_POST['searchdata'])) {echo $result['name']; } ?>">
					 <span id="nameError" class="error"></span>
				  </div>
				  <div class="inputBox">
					 <span>Email:</span>
					 <input id="email" name="email" type="text" placeholder="example@example.com" value="<?php if (isset($_POST['searchdata'])) {echo $result['email']; } ?>">
					 <span id="emailError" class="error"></span>
				  </div>			  
				  <div class="inputBox">
					 <span>Address:</span>
					 <input id="address" name="address" type="text" value="<?php if (isset($_POST['searchdata'])) {echo $result['address']; } ?>">
					 <span id="addressError" class="error"></span>
				  </div>
				  <div class="flex">
					 <div class="inputBox">
						 <span>State:</span>
					   	 <select id="state" name="state">
							  <option value="Not Selected">Select a state</option>
                              <option value="Austria"
                              <?php 
                              if ($result['state'] == 'Austria') 
                              {
                                 echo "selected"; 
                              } 
                              ?>     
                              >Austria</option>
                             
                              <option value="Belgium"
                              <?php 
                              if ($result['state'] == 'Belgium') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Belgium</option>
            
							  <option value="Bulgaria"
                              <?php 
                              if ($result['state'] == 'Bulgaria') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Bulgaria</option>
                             
                              <option value="Switzerland"
                              <?php 
                              if ($result['state'] == 'Switzerland') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Switzerland</option>
                             
                              <option value="Cyprus"
                              <?php 
                              if ($result['state'] == 'Cyprus') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Cyprus</option>
                             
                              <option value="Czechia"
                              <?php 
                              if ($result['state'] == 'Czechia') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Czechia</option>
                             
                              <option value="Germany"
                              <?php 
                              if ($result['state'] == 'Germany') 
                              {
                                 echo "selected"; 
                              } 
                              ?>           
                              >Germany</option>
                             
                              <option value="Denmark"
                              <?php 
                              if ($result['state'] == 'Denmark') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Denmark</option>
                             
                              <option value="Estonia"
                              <?php 
                              if ($result['state'] == 'Estonia') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Estonia</option>
                             
                              <option value="Spain"
                              <?php 
                              if ($result['state'] == 'Spain') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Spain</option>
                             
                              <option value="Finland"
                              <?php 
                              if ($result['state'] == 'Finland') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Finland</option>
                             
                              <option value="France"
                              <?php 
                              if ($result['state'] == 'France') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >France</option>
                             
                              <option value="Greece"
                              <?php 
                              if ($result['state'] == 'Greece') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Greece</option>
                             
                              <option value="Croatia"
                              <?php 
                              if ($result['state'] == 'Croatia') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Croatia</option>
                             
                              <option value="Hungary"
                              <?php 
                              if ($result['state'] == 'Hungary') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Hungary</option>
                             
                              <option value="Ireland"
                              <?php 
                              if ($result['state'] == 'Ireland') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Ireland</option>
                             
                              <option value="Iceland"
                              <?php 
                              if ($result['state'] == 'Iceland') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Iceland</option>
                             
                              <option value="Italy"
                              <?php 
                              if ($result['state'] == 'Italy') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Italy</option>
                             
                              <option value="Liechtenstein"
                              <?php 
                              if ($result['state'] == 'Liechtenstein') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Liechtenstein</option>
                             
                              <option value="Lithuania"
                              <?php 
                              if ($result['state'] == 'Lithuania') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Lithuania</option>
                             
                              <option value="Luxembourg"
                              <?php 
                              if ($result['state'] == 'Luxembourg') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Luxembourg</option>
                             
                              <option value="Latvia"
                              <?php 
                              if ($result['state'] == 'Latvia') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Latvia</option>
                             
                              <option value="Malta"
                              <?php 
                              if ($result['state'] == 'Malta') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Malta</option>
                             
                              <option value="Netherlands"
                              <?php 
                              if ($result['state'] == 'Netherlands') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Netherlands</option>
                             
                              <option value="Norway"
                              <?php 
                              if ($result['state'] == 'Norway') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Norway</option>
                             
                              <option value="Poland"
                              <?php 
                              if ($result['state'] == 'Poland') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Poland</option>
                             
                              <option value="Portugal"
                              <?php 
                              if ($result['state'] == 'Portugal') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Portugal</option>
                             
                              <option value="Romania"
                              <?php 
                              if ($result['state'] == 'Romania') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Romania</option>
                             
                              <option value="Sweden"
                              <?php 
                              if ($result['state'] == 'Sweden') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Sweden</option>
                             
                              <option value="Slovenia"
                              <?php 
                              if ($result['state'] == 'Slovenia') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Slovenia</option>
                             
                              <option value="Slovakia"
                              <?php 
                              if ($result['state'] == 'Slovakia') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Slovakia</option>
                             
                              <option value="Turkey"
                              <?php 
                              if ($result['state'] == 'Turkey') 
                              {
                                 echo "selected"; 
                              } 
                              ?> 
                              >Turkey</option>
						 </select>
						 <span id="stateError" class="error"></span>
					 </div>
					 <div class="inputBox">
						 <span>Zip Code:</span>
						 <input id="zip" name="zip" type="text" placeholder="11111" pattern="[0-9]{5}" maxlength="5" value="<?php if (isset($_POST['searchdata'])) {echo $result['zip']; } ?>">
				    	 <span id="zipError" class="error"></span>
					 </div>			 
				  </div>			  
				  <div class="inputBox">
					 <span>Phone:</span>
					 <input id="phone" name="phone" type="text" placeholder="+30210xxxxxxx" pattern="\+30210\d{7}" maxlength="13" value="<?php if (isset($_POST['searchdata'])) {echo $result['phone']; } ?>">
					 <span id="phoneError" class="error"></span>
				  </div>
		   </div>
          <br>
	       <div class="col">
		   
				  <h3 class="title">Payment</h3>
				  <div class="inputBox">
					 <span>Cards Accepted:</span>
					 <img id="image" src="images/payment.png" alt="">
				  </div>
				  <div class="inputBox">
					 <span>Choose type:</span>
				   	 <select id="type" name="type">
					    <option value="Not Selected">Select a type</option>
					    <option value="MasterCard"
                        <?php 
                        if ($result['type'] == 'MasterCard') 
                        {
                            echo "selected"; 
                        } 
                        ?>
                        >MasterCard</option>
	    			    <option value="Visa"
                        <?php 
                        if ($result['type'] == 'Visa') 
                        {
                            echo "selected"; 
                        } 
                        ?>        
                        >Visa</option>
					    <option value="American Express"
                        <?php 
                        if ($result['type'] == 'American Express') 
                        {
                            echo "selected"; 
                        } 
                        ?>     
                        >American Express</option>
				     </select>
		    		 <span id="typeError" class="error"></span>
		    	  </div>
				  <div class="inputBox">
					 <span>Card Number:</span>
					 <input id="card" name="card" type="text" placeholder="1234123412341234" pattern="[0-9]{16}" maxlength="16" value="<?php if (isset($_POST['searchdata'])) {echo $result['card']; } ?>">
					 <span id="cardError" class="error"></span>
				  </div>
                  <br>
                  <br>
                  <br>
                  <div class="inputBoxSearch">
					 <span>Search with email:</span>
					 <input id="searchInput" name="search" type="text">
                        <button id="search" name="searchdata" type="submit"><i class="fa fa-search" style="color: blue;"></i></button>
				  </div>        
		    </div>	
	  </div>
	  <div class="button-row">
		  <input id="mybtn" name="mybtn" type="submit" value="Save" class="submit-btn">
		  <input id="clear" name="clear" type="reset" value="Clear" class="clear-btn">
		  <input id="print" name="print" type="button" value="Print" class="print-btn">
      </div>
<br> 	
</form> 
</div>
</body>
<script>
document.getElementById("mybtn").addEventListener("click", function (event) 
{
	var errors = [];
	var zip = document.getElementById("zip").value;
	var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var card = document.getElementById("card").value;
    var type = document.getElementById("type").value;
    var state = document.getElementById("state").value;
    var name = document.getElementById("name").value;
    var address = document.getElementById("address").value;


    if (name === "")
	{
		event.preventDefault();
		errors.push("Το πεδίο του ονόματος είναι κενό.");
		document.getElementById("name").style.border = "2px solid red";
		document.getElementById("nameError").textContent = "Το πεδίο του ονόματος είναι κενό.";
	}
	else
	{
		if (!/^[Ά-Ώΐ-ώ\s]*$/.test(name) || !/[ΆΈΉΊΌΎΏάέήίόύώ]/.test(name)) 	
		{
			event.preventDefault();
			errors.push("Το πεδίο του ονόματος είναι λάθος, επιτρέπονται ελληνικοί χαρακτήρες με πλήρης στίξη.");
			document.getElementById("name").style.border = "2px solid red";
			document.getElementById("nameError").textContent = "Το πεδίο του ονόματος είναι λάθος, επιτρέπονται ελληνικοί χαρακτήρες με πλήρης στίξη.";
		} 
		else 
		{
			document.getElementById("name").style.border = "";
			document.getElementById("nameError").textContent = "";
		}
	}
	
    if (address === "")
	{
		event.preventDefault();
        errors.push("Το πεδίο της διεύθυνσης είναι κενό.");
        document.getElementById("address").style.border = "2px solid red";
        document.getElementById("addressError").textContent = "Το πεδίο της διεύθυνσης είναι κενό.";
	}
	else
	{
		const words = address.split(' ');
		let isValid = true;
		for (const word of words) 
		{
			if (!/^[Ά-Ώΐ-ώ\s]*$/.test(word) || !/[ΆΈΉΊΌΎΏάέήίόύώ]/.test(word)) {
				isValid = false;
				break;
			}
		}
			if (!isValid) 
			{
				event.preventDefault();
				errors.push("Το πεδίο της διεύθυνσης είναι λάθος, επιτρέπονται ελληνικοί χαρακτήρες με πλήρης στίξη.");
				document.getElementById("address").style.border = "2px solid red";
				document.getElementById("addressError").textContent = "Το πεδίο της διεύθυνσης είναι λάθος, επιτρέπονται ελληνικοί χαρακτήρες με πλήρης στίξη.";
			} 
			else 
			{
				document.getElementById("address").style.border = "";
				document.getElementById("addressError").textContent = "";
			}	
	    
	}
	
	if (email === "")
	{
		event.preventDefault();
		errors.push("Το πεδίο του email είναι κενό.");
		document.getElementById("email").style.border = "2px solid red";
		document.getElementById("emailError").textContent = "Το πεδίο του email είναι κενό.";
	}
	else
	{
		if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) 
		{
			event.preventDefault();
			errors.push("Το πεδίο του email είναι λάθος.");
			document.getElementById("email").style.border = "2px solid red";
			document.getElementById("emailError").textContent = "Το πεδίο του email είναι λάθος.";
		}
		else 
		{
			document.getElementById("email").style.border = "";
			document.getElementById("emailError").textContent = "";
		}
	}
	
    if (state === "Not Selected") 
	{
	    event.preventDefault();
        errors.push("Παρακαλώ επιλέξτε τον πεδίο της χώρας.");
        document.getElementById("state").style.border = "2px solid red";
	    document.getElementById("stateError").textContent = "Παρακαλώ επιλέξτε τον πεδίο της χώρας.";
    } 
	else 
	{
        document.getElementById("state").style.border = "";
		document.getElementById("stateError").textContent = "";
    }
	
	if (phone === "")
	{
		event.preventDefault();
		errors.push("Το πεδίο του τηλεφώνου είναι κενό.");
		document.getElementById("phone").style.border = "2px solid red";
		document.getElementById("phoneError").textContent = "Το πεδίο του τηλεφώνου είναι κενό.";
	}
	else
	{
		if (!/\+30210\d{7}$/.test(phone)) 
		{
			event.preventDefault();
			errors.push("Το πεδίο του τηλεφώνου είναι λάθος.");
			document.getElementById("phone").style.border = "2px solid red";
			document.getElementById("phoneError").textContent = "Το πεδίο του τηλεφώνου είναι λάθος.";
		} 
		else 
		{
			document.getElementById("phone").style.border = "";
			document.getElementById("phoneError").textContent = "";
		}
	}
	
	if (zip === "")
	{
		event.preventDefault();
		errors.push("Το πεδίο του ταχ. κωδικού είναι κενό.");
		document.getElementById("zip").style.border = "2px solid red";
		document.getElementById("zipError").textContent = "Το πεδίο του ταχ. κωδικού είναι κενό.";
	}
	else
	{
		if (!/^\d{5}$/.test(zip)) 
		{
			event.preventDefault();
			errors.push("Το πεδίο του ταχ. κωδικού είναι λάθος.");
			document.getElementById("zip").style.border = "2px solid red";
			document.getElementById("zipError").textContent = "Το πεδίο του ταχ. κωδικού είναι λάθος.";
		} 
		else 
		{
			document.getElementById("zip").style.border = "";
			document.getElementById("zipError").textContent = "";
		}
	}
	
	if (type === "Not Selected") 
	{
	    event.preventDefault();
        errors.push("Παρακαλώ επιλέξτε τον τύπο της πιστωτικής κάρτας.");
        document.getElementById("type").style.border = "2px solid red";
		document.getElementById("typeError").textContent = "Παρακαλώ επιλέξτε τον τύπο της πιστωτικής κάρτας.";
    } 
	else 
	{
        document.getElementById("type").style.border = "";
		document.getElementById("typeError").textContent = "";
    }
	
	if (card === "")
	{
		event.preventDefault();
		errors.push("Το πεδίο της πιστωτικής κάρτας είναι κενό.");
		document.getElementById("card").style.border = "2px solid red";
		document.getElementById("cardError").textContent = "Το πεδίο της πιστωτικής κάρτας είναι κενό.";
	}
	else
	{
		if (!/^\d{16}$/.test(card)) 
		{
			event.preventDefault();
			errors.push("Ο αριθμός της πιστωτικής κάρτας πρέπει να είναι 16 ψηφία.");
			document.getElementById("card").style.border = "2px solid red";
			document.getElementById("cardError").textContent = "Ο αριθμός της πιστωτικής κάρτας πρέπει να είναι 16 ψηφία.";
		} 
		else 
		{
			document.getElementById("card").style.border = "";
			document.getElementById("cardError").textContent = "";
		}
	}

	var errorsElement = document.getElementById("errors");
	if (errors.length > 0) 
	{
	    event.preventDefault();
		var errorMessage = "Παρακαλώ ελέγξτε τα πεδία:\n" + errors.join("\n");
		alert(errorMessage);
	} 
	else if (errors.length == 0)
	{
        document.getElementById("errors").textContent = "";
	}
}); 	
</script>
	
	
<script>	
document.getElementById("print").addEventListener("click", function () 
{
    window.print();
});

var zip = document.getElementById("zip");    
var phone = document.getElementById("phone");    
var card = document.getElementById("card");
zip.oninput = function() {
   this.value = this.value.replace(/[^0-9]/g, "");
}
phone.oninput = function() {
   this.value = this.value.replace(/[^0-9+]/g, "");
}
card.oninput = function() {
   this.value = this.value.replace(/[^0-9]/g, "");
}
</script>
 

<script>	
window.onbeforeunload = function(event) 
{
    const nameValue = document.getElementById("name").value;
    const emailValue = document.getElementById("email").value;
    const addressValue = document.getElementById("address").value;
    const zipValue = document.getElementById("zip").value;
    const phoneValue = document.getElementById("phone").value;
    const cardValue = document.getElementById("card").value;
    const stateValue = document.getElementById("state").value;
    const typeValue = document.getElementById("type").value;

    const stateSelect = document.getElementById("state");
    const firstStateOption = stateSelect.options[0].value;
    const typeSelect = document.getElementById("state");
    const firstTypeOption = typeSelect.options[0].value;
	
    if ((nameValue || emailValue || addressValue || zipValue || phoneValue || cardValue) || (stateValue !== firstStateOption || typeValue !== firstTypeOption)) 
	{
        event.returnValue = "Είστε βέβαιοι ότι θέλετε να ανανεώσετε τη σελίδα;";
    }
}
</script>	

	
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.getElementById('searchForm');
    const searchInput = searchForm.querySelector('[name="search"]');
    
    searchForm.addEventListener('submit', function(event) {
        const searchValue = searchInput.value;
        searchForm.action = '?search=' + encodeURIComponent(searchValue);
        searchForm.submit();
    });
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const clearButton = document.getElementById('clear');
    
    if (clearButton) {
        clearButton.addEventListener('click', function() {
            const url = window.location.href.split('?')[0];
            history.pushState({}, '', url);
            window.location.reload();
        });
    }
});
</script>	
</html>



