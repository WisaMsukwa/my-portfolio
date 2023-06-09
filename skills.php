<!DOCTYPE html>
<html>
<head>
    <title>My Skills</title>
    <style>
        /* CSS styles for layout and design */

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .skill-list {
            list-style-type: none;
            padding: 0;
        }

        .skill-list li {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .skill-name {
            flex: 0 0 120px;
            font-weight: bold;
            margin-right: 10px;
        }

        .progress-bar {
            flex: 1;
            height: 10px;
            background-color: #ddd;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            background-color: #3498db;
            transition: width 0.5s ease-in-out;
        }

        .skill-level {
            margin-left: 10px;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            margin-left: 10px;
            cursor: pointer;
        }

        .tooltip .tooltip-text {
            visibility: hidden;
            width: 200px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
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
        <!-- Header content here -->
    </header>

    <div class="container">
        <h1>My Skills</h1>

        <!-- Skill list with animations and tooltips -->
        <ul class="skill-list">
            <li>
                <span class="skill-name">Web Designing</span>
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
                <span class="skill-level">60%</span>
                <div class="tooltip">
                    <span class="tooltip-text"> creating visually appealing and user-friendly websites.It encompasses various disciplines such as graphic design, layout design, typography, color theory, and user experience (UX) design</span>
                    See details
                </div>
            </li>
            <br>
            <li>
                <span class="skill-name">Graphic designing</span>
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
                <span class="skill-level">80%</span>
                <div class="tooltip">
                    <span class="tooltip-text">designing of logos, calendars, billboards, flyers, wedding cards, posters etc</span>
                    See details
                </div>
            </li>
            <br>
            <li>
                <span class="skill-name">Photography</span>
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
                <span class="skill-level">50%</span>
                <div class="tooltip">
                    <span class="tooltip-text">wedding pictures, video production, studio pictures and outdoor pictures</span>
                    See details
                </div>
            </li>
            <!-- Add more skills here -->
        </ul>
    </div>

    <script>
        // JavaScript code for animations, tooltips, and progress bar functionality

        // Calculate the width of the progress bar fill based on skill level
        var skillList = document.querySelectorAll('.skill-list li');
        skillList.forEach(function (skill) {
            var progressBarFill = skill.querySelector('.progress-fill');
            var skillLevel = skill.querySelector('.skill-level').textContent;
            progressBarFill.style.width = skillLevel;
        });
    </script>
</body>
</html>
