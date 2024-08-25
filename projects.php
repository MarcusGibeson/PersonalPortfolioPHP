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
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const projects = <?php echo json_encode($projects); ?>;
        console.log('Projects:', projects); // Debugging line
        const modal = document.getElementById('project-modal');
        const modalDetails = document.getElementById('modal-details');
        const closeBtn = document.querySelector('.close');

        document.querySelectorAll('.project-item').forEach(item => {
            item.addEventListener('click', function(event) {
                const projectId = this.getAttribute('data-id');
                console.log('Clicked project ID:', projectId); // Debugging line

                // Find the project by ID
                const project = projects.find(p => p.id === Number(projectId));
                console.log('Found project:', project); // Debugging line

                if (project) {
                    modalDetails.innerHTML = `
                        <img src="${project.gifLink}" alt="${project.title} GIF" style="width:200px; height:200px;">
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

                    modal.style.display = 'block';
                    modal.style.left = `${event.clientX}px`;
                    modal.style.top = `${event.clientY}px`;
                }
            });
        });

        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });
    });
</script>

    <title>Marcus' Projects</title>
    <link rel="stylesheet" href="css/project_grid.css">

</head>
<body>
    <section class="main">
        <div id="box">
        <div id="projects-grid">
            <?php foreach ($projects as $project): ?>
                <div class="project-item" data-id="<?= htmlspecialchars($project->getId())?>">
                    <img src="<?= htmlspecialchars($project->getImgLink()) ?>" alt="Project Image" class="project-image" height="200px" width=" 300px" >
                    <p class="project-title"><?= htmlspecialchars($project->getTitle()) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Popup Modal -->
        <div id="project-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div id="modal-details">
                    <!-- Project details will be dynamically added here -->
                </div>
            </div>
        </div>
    </div>
    </section>

</body>
</html>