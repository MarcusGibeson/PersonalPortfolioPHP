<?php
    require_once 'classes/classes.php';
    require_once 'classes/populator.php';

    $projects = PortfolioPopulator::populateProjects();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Marcus Gibeson</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/project_grid.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Prevent scrolling on the entire page */
            font-family: Arial, sans-serif;
        }

        #wrapper {
            display: flex;
            height: 100vh;
            width: 100%;
        }

        #my-picture {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            width: 30%; /* 30% of the width */
            box-sizing: border-box;
            padding: 20px;
            background-color: rgba(255, 165, 0, 0.3); /* Orange with transparency */
            border: 2px solid #ffa500; /* Orange border for #my-picture */
        }

        .my-picture-title h1,
        .my_picture img,
        .my-picture-slogan h3 {
            margin: 0;
            text-align: center;
        }

        #navigation-content {
            width: 70%; /* 70% of the width */
            display: flex;
            flex-direction: column;
        }

        .navigation-bar {
            width: 100%;
            background-color: #333;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px 0;
            z-index: 1000;
            border: 2px solid #0000ff; /* Blue border for the navigation bar */
            box-sizing: border-box;
        }

        .navigation-bar a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navigation-bar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navigation-bar .active a {
            background-color: #4CAF50;
            color: white;
        }

        #content {
            flex-grow: 1;
            box-sizing: border-box;
            padding: 20px;
            overflow-y: auto; /* Allow scrolling if content overflows */
            border: 2px solid #008000; /* Green border for #content */
            background-color: rgba(0, 128, 0, 0.3); /* Green with transparency */
        }
    </style>
        <script>
        // Function to load content dynamically
        function loadContent(fragmentName) {
            var url = fragmentName + '.php';
            console.log('Fetching URL:', url);
    
            fetch(url)
                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(function(html) {
                    var contentContainer = document.getElementById('dynamic-content');
                    contentContainer.innerHTML = html;

                    // Call initialization function based on the loaded fragment
                    if (fragmentName === 'projects') {
                        initializeProjects();
                    }
                })
                .catch(function(error) {
                    console.log('Error loading content:', error);
                });
        }

        // Add event listener after DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Load homepage content by default
            loadContent('aboutMe', true);
    
            // Handle navigation clicks
            function handleClickEvent(event) {
                event.preventDefault();
                var fragmentName = event.target.closest('a').getAttribute('data-fragment');

                console.log('Clicked on:', fragmentName);
                loadContent(fragmentName);
    
                // Change the active class
                var currentActive = document.querySelector('.navigation-bar .active');
                if (currentActive) {
                    currentActive.classList.remove('active');
                }
                event.target.closest('div').classList.add('active');
            }
    
            // Attach click listeners to the navigation links
            document.querySelectorAll('.navigation-bar a').forEach(function(link) {
                link.addEventListener('click', handleClickEvent);
            });
        });

        // Initialize project page-specific behaviors
        function initializeProjects() {
    console.log('Initializing Projects...');

    document.querySelectorAll('.project-item').forEach(item => {
        item.addEventListener('click', function(event) {
            console.log('Project clicked:', this.querySelector('.project-title').textContent); // Debug line

            const projectTitle = this.querySelector('.project-title').textContent;
            const projectDetails = <?php echo json_encode($projects); ?>;

            console.log('Project Details:', projectDetails); // Debug line

            const project = projectDetails.find(p => p.title.trim() === projectTitle.trim());

            if (project) {
                document.getElementById('modal-details').innerHTML = `
                    <div style="text-align: center;">
                        <img src="${project.gifLink}" alt="${project.title} GIF" style="max-width: 50%; border-radius: 8px;">
                    </div>
                    <h2>${project.title}</h2>
                    <p>Description: ${project.description}</p>
                    <p>Technologies Used: ${project.technologiesUsed.join(', ')}</p>
                    <p>Project URL: <a href="${project.projectUrl}">${project.projectUrl}</a></p>
                    <p>Repository URL: <a href="${project.repoUrl}">${project.repoUrl}</a></p>
                    <p>Start Date: ${project.startDate}</p>
                    <p>End Date: ${project.endDate}</p>
                    <p>Status: ${project.status}</p>
                    <p>Contributors: ${project.contributors.join(', ')}</p>
                    <p>Tags: ${project.tags.join(', ')}</p>
                `;

                // Set CSS variables for cursor position
                document.documentElement.style.setProperty('--cursor-x', `${event.clientX}px`);
                document.documentElement.style.setProperty('--cursor-y', `${event.clientY}px`);

                // Show the modal
                document.getElementById('project-modal').style.display = 'block';
            } else {
                console.error('Project not found');
            }
        });
    });

    document.querySelector('.close').addEventListener('click', function() {
        document.getElementById('project-modal').style.display = 'none';
    });
}
    </script>
</head>
<body>
    <div id="wrapper">
        <section id="my-picture">
            <div class="my-picture-title">
                <h1>Marcus Gibeson</h1>
            </div>
            <div class="my_picture">
                <!-- Placeholder for image -->
                <img src="images/Image_of_me.jpg" alt="Me!" height="900" width="600">
            </div>
            <div class="my-picture-slogan">
            <h3>Building myself up one code block at a time</h3>
            </div>
            <div class="contact-wrapper">
                <p> Github: Linked in: Email: </p>
            </div>
        </section>
        
        <section id="navigation-content">
            <div class="navigation-bar">
                <div class="active">
                    <a href="#" data-fragment="aboutMe" id="aboutMe-link">
                        <span class="text">About Me</span>
                    </a>
                </div>
                <div>
                    <a href="#" data-fragment="skills" id="skills-link">
                        <span class="text">Skills</span>
                    </a>
                </div>
                <div>
                    <a href="#" data-fragment="projects" id="projects-link">
                        <span class="text">Projects</span>
                    </a>
                </div>
            </div>

            <section id="content">
                <section id="main">
                    <div id="dynamic-content">
                        <!-- Dynamic content will load here -->
                        <main>
                            <h1>About me section</h1>
                        </main>
                    </div>
                </section>
            </section>
        </section>
    </div>
</body>
</html>