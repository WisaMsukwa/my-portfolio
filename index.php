<!DOCTYPE html>
<html>
<head>
  <title>portifolio</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
     header {
        background-color: #f1f1f1;
        padding: 20px;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav li {
        margin-right: 15px;
    }

    nav a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    nav a:hover {
        color: #555;
    }
   .slideshow-container {
      position: relative;
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
    }

    /* Slides */
    .mySlides {
      display: none;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 18px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* The dots */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }
    .sidebar {
    
    ol{
      list-style: none;
      font-family: serif;
      font-size: 16px;
    }

    .menu li a i {
    color: white; 
  }
   .search-form {
  position: fixed;
  top: 10px;
  right: 10px;
  display: flex;
  border-radius: 10px;
  overflow: hidden;
}

.search-input {
  padding: 10px;
  border: solid;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}

.search-button {
  background-color: #333;
  color: #fff;
  padding: 10px;
  border: none;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

    .content {
      margin-left: 300px;
      padding: 20px;
    }
    body{
     margin-left: 11%;
    }
     p {
    font-family: serif;
    font-size: 16px;
    font-style: ;
  }

  ul {
    font-family: serif;
    font-size: 16px;
  }
    footer {
      background-color: silver;
      padding: 10px;
      text-align: center;
    }
    .image-container {
      text-align: center;

    }
    h1{
       text-align: center;
    }
    .footer {
    display: flex;
    justify-content: space-between;
  }
  .column {
    flex: 1;
  }
  .footer-line {
  border: solid;
  border-top: 1px white;
  margin: 10px 0;
}
  </style>
<script>
    $(document).ready(function(){
      $('.slideshow').slick({ dots: true });
    });
  </script>
</head>
<body>
<header>
 <div>
  <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="skills.php">Skills</a></li>
        </ul>
    </nav>

  <script>
    // Smooth scroll function
    function smoothScroll(event) {
      event.preventDefault();

      const target = event.target.getAttribute("href");

      // Scroll smoothly only when navigating to a different page
      if (window.location.pathname !== target) {
        window.location.href = target;
      }
    }

    // Attach smooth scroll event listener to navigation links
    const navigationLinks = document.querySelectorAll("nav a");
    navigationLinks.forEach(link => {
      link.addEventListener("click", smoothScroll);
    });
  </script>

  <form class="search-form">
    <input type="text" placeholder="Search" class="search-input">
    <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
  </form>
</div>
</header>

<section>
    <h1>Wisa Msukwa</h1>
   <div class="image-container">
     <img src="wisa.jpg" style="height:250px; width:300px" alt="this is the picture">
  </div>
  <div class="main-container">
    <!DOCTYPE html>
<html>
<head>
  <title>Dynamic Greeting</title>
  <script>
    // Get the current time
    var currentTime = new Date();
    var currentHour = currentTime.getHours();

    // Define the greeting based on the time of the day
    var greeting;
    if (currentHour < 12) {
      greeting = "Good morning";
    } else if (currentHour < 18) {
      greeting = "Good afternoon";
    } else {
      greeting = "Good evening";
    }

    // Display the greeting
    window.onload = function() {
      document.getElementById("greeting").innerHTML = greeting;
    };
  </script>
</head>
<body>
  <h1 id="greeting"></h1>
</body>


<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wisa";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM home";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["about_us"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    // Close the connection
    $conn->close();
    ?>
  <h2>Web Development Projects</h2>

<fieldset>
  <legend><h3>College Online Accommodation Web</h3></legend>
  <center>
    <div class="web-slideshow-container">
      <div class="web-slide">
        <img src="calendar.jpg" style="height:300px; width:500px" alt="Slide 1">
      </div>
      <div class="web-slide">
        <img src="logo.jpg" style="height:300px; width:500px" alt="Slide 2">
      </div>
      <div class="web-slide">
        <img src="wedding.jpg" style="height:300px; width:500px" alt="Slide 3">
      </div>

      <!-- Web slideshow navigation dots -->
      <div style="text-align:center">
        <span class="web-dot"></span>
        <span class="web-dot"></span>
        <span class="web-dot"></span>
      </div>
    </div>
    <a href="projects.html">View Site</a>
  </center>
</fieldset>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // Web Slideshow
  var webSlideIndex = 0;
  showWebSlides();

  function showWebSlides() {
    var i;
    var webSlides = document.getElementsByClassName("web-slide");
    var webDots = document.getElementsByClassName("web-dot");

    for (i = 0; i < webSlides.length; i++) {
      webSlides[i].style.display = "none";
    }

    webSlideIndex++;

    if (webSlideIndex > webSlides.length) {
      webSlideIndex = 1;
    }

    for (i = 0; i < webDots.length; i++) {
      webDots[i].className = webDots[i].className.replace(" active", "");
    }

    webSlides[webSlideIndex - 1].style.display = "block";
    webDots[webSlideIndex - 1].className += " active";

    setTimeout(showWebSlides, 4000); // Change slide every 4 seconds
  }

  
</script>

<form id="contactForm" onsubmit="validateForm(event)">
  <label for="name">Name:</label> <br>
  <input type="text" id="name" value="fullname"required>
  <br>

  <label for="email">Email:</label> <br>
  <input type="email" id="email" value="email" required>
  <br>

  <label for="message">Message:</label> <br>
  <textarea id="message" value="your message"required></textarea>
   <br>

  <button type="submit">Submit</button>
</form>

<script>
  function validateForm(event) {
    event.preventDefault(); // Prevent form submission

    // Get form inputs
    var nameInput = document.getElementById("name");
    var emailInput = document.getElementById("email");
    var messageInput = document.getElementById("message");

    // Check if inputs are valid
    if (nameInput.checkValidity() && emailInput.checkValidity() && messageInput.checkValidity()) {
      // Perform form submission or further processing here
      alert("Form submitted successfully!");
      // Reset form
      document.getElementById("contactForm").reset();
    } else {
      // Display validation error messages
      if (!nameInput.checkValidity()) {
        alert("Please enter a valid name.");
      }

      if (!emailInput.checkValidity()) {
        alert("Please enter a valid email address.");
      }

      if (!messageInput.checkValidity()) {
        alert("Please enter a message.");
      }
    }
  }
</script>


<footer><br>
    <p>Follow us on <a href="www.facebook.com">Facebook</a> <a href="www.twitter.com">Twitter</a> <a
                href="www.instagram.com">Instagram</a></p>
    <br>
</footer>

</body>
</html>
                      