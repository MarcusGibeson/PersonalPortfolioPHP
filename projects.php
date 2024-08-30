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
    
    <title>Document</title>
    <link rel="stylesheet" href="css/project_grid.css">
</head>
<body>

<section class="main">
    <div class="container">
        <div id="box">
            <!-- Popup Modal -->
<div id="project-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="modal-details">
            <!-- Project details will be dynamically added here -->
        </div>
    </div>
</div>
            <div id="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-item">
                        <img src="<?= htmlspecialchars($project->getImgLink()) ?>" alt="Project Image" class="project-image">
                        <div class="project-title"><?= htmlspecialchars($project->getTitle()) ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>




</body>
</html>