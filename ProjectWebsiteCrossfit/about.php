<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Crossfit</title>
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="about.css">
</head>
<body>
  <div class="main">
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
    <div class="content">
      <h1>Advantages and Disadvantages</h1>
      <h2 id="advantages">Advantages:</h2>
      <ul id="advantagesList">
        <li>Versatile and comprehensive workouts: CrossFit incorporates a wide range of movements and exercises, offering a well-rounded approach to fitness. It includes weightlifting, cardio, gymnastics, and more, providing a comprehensive workout that targets multiple muscle groups.</li><br>
        <li>Functional fitness: CrossFit focuses on improving functional movements that mimic real-life activities. This can be beneficial for everyday tasks and can enhance overall strength, endurance, and flexibility.</li><br>
        <li>Community and support: CrossFit is known for its strong sense of community. Participating in group workouts can provide motivation, support, and camaraderie. The group dynamic can push individuals to achieve more than they might on their own.</li> <br>
        <li>Constant variation: CrossFit workouts are often varied, which helps prevent boredom and plateaus. The constantly changing routines challenge participants and keep them engaged.</li>
      </ul>
	  <h2 id="disadvantages" style="display: none;">Disadvantages:</h2>
      <ul id="disadvantagesList" style="display: none;">
        <li>Risk of injury: Due to the high-intensity nature of CrossFit, there is an increased risk of injury, especially for beginners or those with inadequate training.</li><br>
        <li>Emphasis on intensity over technique: CrossFit workouts often prioritize completing exercises quickly or for time. This focus on intensity can sometimes lead to sacrificing proper form and technique, which increases the risk of injury.</li><br>
        <li>Lack of individualization: CrossFit classes are typically designed for a group setting and may not cater to individual needs or fitness goals.</li><br>
        <li>Cost and accessibility: CrossFit memberships can be expensive compared to traditional gym memberships. Additionally, the availability of CrossFit gyms may be limited in some areas, making it less accessible for individuals who don't have a nearby facility.</li>
      </ul>
    </div>
  </div>
  <script>
    function toggleAdvantagesAndDisadvantages() {
      var advantages = document.getElementById("advantages");
      var advantagesList = document.getElementById("advantagesList");
      var disadvantages = document.getElementById("disadvantages");
      var disadvantagesList = document.getElementById("disadvantagesList");

      if (advantages.style.display === "block") {
        advantages.style.display = "none";
        advantagesList.style.display = "none";
        disadvantages.style.display = "block";
        disadvantagesList.style.display = "block";
      } else {
        advantages.style.display = "block";
        advantagesList.style.display = "block";
        disadvantages.style.display = "none";
        disadvantagesList.style.display = "none";
      }
    }

    setInterval(toggleAdvantagesAndDisadvantages, 4500);  
  </script>  
</body>
</html>
