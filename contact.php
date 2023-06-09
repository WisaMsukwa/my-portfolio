<!DOCTYPE html>
<html>
<head>
    <title>Contact Me</title>
    <style>
        /* CSS styles for layout and design */

        body {
            font-family: Arial, sans-serif;
            background-color: silver;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .contact-info {
            text-align: center;
            margin-bottom: 30px;
        }

        .map-container {
            text-align: center;
            margin-bottom: 30px;
        }

        #contact-form {
            text-align: center;
        }

        #contact-form label {
            display: block;
            margin-bottom: 10px;
        }

        #contact-form input,
        #contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }

        #contact-form button {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        #contact-form button:hover {
            background-color: #2980b9;
        }
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

    </style>
</head>
<body>
    <header>
         <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="skills.php">Skills</a></li>
        </ul>
    </nav>
    </header>

    <div class="container">
        <h1>Contact Me</h1>

        <div class="contact-info">
            
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
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Phone:" . $row["phone"]. "<br>";
            echo "Email: " . $row["email"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    // Close the connection
    $conn->close();
    ?>

        
            <p>Address: Mzuzu University, Mzuzu, Malawi</p>
        </div>

        <div class="map-container">
           <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=33.9667%2C-10.6667%2C35.8000%2C-9.9667&amp;layer=mapnik" width="600" height="450" frameborder="0" scrolling="no"></iframe>

        </div>
        <form id="contact-form">
            <h2>Send a Message</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        // JavaScript code for form validation and AJAX submission

        var contactForm = document.getElementById('contact-form');

        contactForm.addEventListener('submit', function (event) {
            event.preventDefault();

            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            // Perform form validation here

            // Send form data using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_contact.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    // Handle the AJAX response here
                    console.log(xhr.responseText);
                }
            };
            xhr.send('name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email) + '&message=' + encodeURIComponent(message));
        });
    </script>
</body>
</html>
