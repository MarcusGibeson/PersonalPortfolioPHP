<?php

    require_once 'classes/populator.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
<script>
        // Load content function for dynamic web pages
        function loadContent(fragmentName) {
            var url = fragmentName + '.php';
            console.log('Fetching URL:', url);
    
            fetch(url)
                .then(function (response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(function (html) {
                    var contentContainer = document.getElementById('dynamic-content');
                    contentContainer.innerHTML = html;
                })
                .catch(function(error) {
                    console.log('Error', error);
                });
        }
    
        // Add event listener to monitor dynamic-content switch
        document.addEventListener('DOMContentLoaded', function() {
            loadContent('homepage');
    
            function handleClickEvent(event) {
                event.preventDefault();
                var fragmentName = event.target.getAttribute('data-fragment');
                loadContent(fragmentName);
    
                // Change the active class
                var currentActive = document.querySelector('.navigation-bar .active');
                if (currentActive) {
                    currentActive.classList.remove('active');
                }
                event.target.closest('div').classList.add('active');
            }
    
            // Different fragments connected event listener with link
            document.querySelectorAll('.navigation-bar a').forEach(function(link) {
                link.addEventListener('click', handleClickEvent);
            });
        });
    </script>
    <link rel="stylesheet" href="css/style.css">
    <title>Marcus Gibeson</title>
</head>

<body>
        <section id="navigation">
		<div class="navigation-bar">
			<div class="active">
				<a href="homepage.php" id="homepage-link" onclick="loadContent('homepage');">
                    <span class="text">Homepage</span>
                </a>
			</div>
            <div>
				<a href="skills.php" id="skills-link" onclick="loadContent('skills');">
                    <span class="text">Skills</span>
                </a>
			</div>
			<div>
				<a href="projects.php" id="projects-link" onclick="loadContent('projects');">
                    <span class="navigation">Projects</span>
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
</body>
</html>