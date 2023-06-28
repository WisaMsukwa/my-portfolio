<!DOCTYPE html>
<html>
<head>
    <title>My Projects</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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

        header {
            background-color: gray;
            color: black;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        .filters {
            margin-bottom: 20px;
        }

        .project {
            display: inline-block;
            width: calc(33.33% - 20px);
            margin: 10px;
            padding: 10px;
            background-color: #f2f2f2;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
            cursor: pointer;
        }

        .project:hover {
            transform: translateY(-5px);
        }

        .project img {
            max-width: 100%;
            height: auto;
        }

        .project-title {
            margin: 10px 0;
            font-weight: bold;
        }

        .project-description {
            margin-bottom: 10px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
            padding-top: 50px;
        }

        .modal-content {
            margin: auto;
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            color: #333;
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .progress-bar {
            width: 100%;
            background-color: #f2f2f2;
            height: 20px;
            margin-bottom: 10px;
        }

        .progress-bar-fill {
            height: 100%;
            background-color: #4CAF50;
            width: 0;
            transition: width 1s;
        }

        .search-container {
            margin-bottom: 20px;
        }

        .search-input {
            padding: 10px;
            width: 200px;
            font-size: 16px;
        }

        ul {
            list-style: none;
        }
    </style>
</head>
<body>
<header>
    <h1>My Projects</h1>
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
    <div class="filters">
        <label for="category">Filter by Category:</label>
        <select id="category">
            <option value="all">All</option>
            <option value="web">Web</option>
            <option value="mobile">Mobile</option>
            <option value="desktop">Desktop</option>
        </select>
    </div>

    <div class="search-container">
        <label for="search">Search:</label>
        <input type="text" id="search" class="search-input" placeholder="Search...">
    </div>

    <div id="project-list">
        <!-- Project items will be dynamically added here -->
    </div>

    <div id="project-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modal-title"></h2>
            <div id="modal-description"></div>
            <div class="progress-bar">
                <div class="progress-bar-fill"></div>
            </div>
        </div>
    </div>
</div>

<script>
    // Sample project data
    var projects = [
        {
            title: "Logo",
            category: "web",
            description: "This is a Seventh Day logo.. click to view progress",
            image: "logo.jpg",
            progress: 70
        },
        {
            title: "flyer",
            category: "mobile",
            description: "This flyer was designed within a day. click to view progress",
            image: "p1.jpg",
            progress: 40
        },
        {
            title: "Calendar",
            category: "desktop",
            description: "Sample calendars for some companies. click to view progress",
            image: "calendar.jpg",
            progress: 90
        },
        {
            title: "Wedding",
            category: "desktop",
            description: "Sample wedding pictures taken by me. click to view progress",
            image: "wedding.jpg",
            progress: 90
        }
        // Add more project objects here
    ];

    // Create project elements and add to the DOM
    var projectList = document.getElementById("project-list");

    projects.forEach(function (project) {
        var projectItem = document.createElement("div");
        projectItem.classList.add("project");

        if (project.image) {
            var projectImage = document.createElement("img");
            projectImage.src = project.image;
            projectImage.alt = project.title;
            projectItem.appendChild(projectImage);
        }

        var projectTitle = document.createElement("h3");
        projectTitle.classList.add("project-title");
        projectTitle.textContent = project.title;

        var projectDescription = document.createElement("p");
        projectDescription.classList.add("project-description");
        projectDescription.textContent = project.description;

        projectItem.appendChild(projectTitle);
        projectItem.appendChild(projectDescription);

        // Open modal when project item is clicked
        projectItem.addEventListener("click", function () {
            openModal(project);
        });

        projectList.appendChild(projectItem);
    });

    // Filtering projects based on category
    var categorySelect = document.getElementById("category");
    categorySelect.addEventListener("change", function () {
        var selectedCategory = categorySelect.value;
        filterProjects(selectedCategory);
    });

    function filterProjects(category) {
        var projectItems = document.getElementsByClassName("project");

        for (var i = 0; i < projectItems.length; i++) {
            var projectItem = projectItems[i];

            if (category === "all" || projectItem.classList.contains(category)) {
                projectItem.style.display = "inline-block";
            } else {
                projectItem.style.display = "none";
            }
        }
    }

    // Searching projects based on title or description
    var searchInput = document.getElementById("search");
    searchInput.addEventListener("input", function () {
        var searchTerm = searchInput.value.toLowerCase();
        searchProjects(searchTerm);
    });

    function searchProjects(term) {
        var projectItems = document.getElementsByClassName("project");

        for (var i = 0; i < projectItems.length; i++) {
            var projectItem = projectItems[i];
            var projectTitle = projectItem.getElementsByClassName("project-title")[0].textContent.toLowerCase();
            var projectDescription = projectItem.getElementsByClassName("project-description")[0].textContent.toLowerCase();

            if (projectTitle.includes(term) || projectDescription.includes(term)) {
                projectItem.style.display = "inline-block";
            } else {
                projectItem.style.display = "none";
            }
        }
    }

    // Modal functionality
    var modal = document.getElementById("project-modal");
    var modalTitle = document.getElementById("modal-title");
    var modalDescription = document.getElementById("modal-description");
    var progressBarFill = document.querySelector(".progress-bar-fill");

    function openModal(project) {
        modalTitle.textContent = project.title;
        modalDescription.textContent = project.description;

        if (project.progress) {
            progressBarFill.style.width = project.progress + "%";
        }

        modal.style.display = "block";
    }

    // Close the modal when the close button is clicked
    var closeButton = document.querySelector(".close");
    closeButton.addEventListener("click", function () {
        modal.style.display = "none";
    });

    // Close the modal when clicking outside the modal content
    window.addEventListener("click", function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
</script>
</body>
</html>
