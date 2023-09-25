<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Crossfit</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="home.css" >
<style>
body {
  font-family: 'Times New Roman', Helvetica, sans-serif; 
  background-color: #9DA1AD;
  color: white
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

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #ff7200;
  padding: 10px;
  width: 80%; 
  margin-left: 130px;
}

.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.sendEmail {
  border-radius: 5px;
  background-color: #ff7200;
  padding: 10px;
  width: 80%; 
  margin-left: 130px;
  font-size: 25px;
}
    
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
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
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/map.jpg" style="width:100%" onclick="openMap()">
	  <br>
	  <br>
	  <br>
	  <br>
	  <div class="sendEmail">
      <a href="mailto:mariaamorgianou.1994@gmail.com?subject=Inquiry%20from%20website" style="color: white;">Click here to send an email</a>
	  </div>
    </div>
    <div class="column">
      <form>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <div class="button-row">
		  <input id="submit" type="submit" value="Submit" class="submit-btn">
        </div>
	  </form>
    </div>
  </div>
</div>
	
<script>
document.getElementById("submit").addEventListener("click", function (event) 
{
  event.preventDefault();
  var firstName = document.getElementById("fname").value;
  var lastName = document.getElementById("lname").value;
  var subject = document.getElementById("subject").value;

  if (firstName === "" || lastName === "" || subject === "") {
    alert("Παρακαλώ συμπληρώστε όλα τα πεδία.");
  } else {
    alert("Το μήνυμά σας στάλθηκε επιτυχώς!");
  }
});

function openMap() {
  var latitude = 59.3293; 
  var longitude = 18.0686; 
  var zoomLevel = 13; 

  var mapUrl = "https://www.google.com/maps?q=" + latitude + "," + longitude + "&z=" + zoomLevel;
  window.open(mapUrl, "_blank");}

</script>

</body>
</html>
