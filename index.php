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
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/project_grid.css">
    <title>Marcus Gibeson</title>

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
            loadContent('homepage');
    
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
    <section id="my-picture">
        <div class="my-picture-title">
            <h1> Marcus Gibeson</h1>
        </div>
        <div class="my_picture">
            <img src="images/placeholder.png" height="100" width="200">
        </div>
        <div class="my-picture-slogan">
            <h3>Building myself one code block at a time</h3>
        </div>
    </section>
    <section id="navigation">
        <div class="navigation-bar">
            <div class="active">
                <a href="#" data-fragment="homepage" id="homepage-link">
                    <span class="text">Homepage</span>
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
    </section>

    <section id="content">
        <section id="main">
            <div id="dynamic-content">
                <main>
                    <h1>Marcus Gibeson</h1>
                </main>
            </div>
        </section>
    </section>
</body>
</html>
