<?php
    require_once 'classes/classes.php';
    require_once 'classes/populator.php';

    $projects = PortfolioPopulator::populateProjects();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="main">
        <div class="container">
            <div id="box">
                <p>This is the projects page</p>

                <div class="clearfix">
                    <?php foreach ($projects as $index => $project): ?>
                        <?php if ($index % 2 == 0): ?>
                            <div class = "left-side-projects">
                                <p>Name: <?= htmlspecialchars($project->getTitle()) ?></p>
                                <p>Description: <?= htmlspecialchars($project->getDescription()) ?></p>
                                <img src="<?= htmlspecialchars($project->getGifLink()) ?> alt="Project Gif" class="project-gif">
                                <div class="img-url">
                                    <img src="<?= htmlspecialchars($project->getImgLink()) ?> alt="Project Image">
                                </div>
                                <p>Technologies Used: <?= htmlspecialchars(implode(', ', $project->getTechnologiesUsed())) ?></p>
                                <p>Project URL: <?= htmlspecialchars($project->getProjectUrl()) ?></p>
                                <p>Repository URL: <?= htmlspecialchars($project->getRepoUrl()) ?></p>
                                <p>Start Date: <?= htmlspecialchars($project->getStartDate()) ?></p>
                                <p>End Date: <?= htmlspecialchars($project->getEndDate()) ?></p>
                                <p>Status: <?= htmlspecialchars($project->getStatus()) ?></p>
                                <p>Contributors: <?= htmlspecialchars(implode(', ', $project->getContributors())) ?></p>
                                <p>Tags: <?= htmlspecialchars(implode(', ', $project->getTags())) ?></p>
                            </div>

                        <?php else: ?>
                            <div class="right-side-projects">
                                <p>Name: <?= htmlspecialchars($project->getTitle()) ?></p>
                                <p>Description: <?= htmlspecialchars($project->getDescription()) ?></p>
                                <img src="<?= htmlspecialchars($project->getGifLink()) ?> alt="Project Gif" class="project-gif">
                                <div class="img-url">
                                    <img src="<?= htmlspecialchars($project->getImgLink()) ?> alt="Project Image">
                                </div>
                                <p>Technologies Used: <?= htmlspecialchars(implode(', ', $project->getTechnologiesUsed())) ?></p>
                                <p>Project URL: <?= htmlspecialchars($project->getProjectUrl()) ?></p>
                                <p>Repository URL: <?= htmlspecialchars($project->getRepoUrl()) ?></p>
                                <p>Start Date: <?= htmlspecialchars($project->getStartDate()) ?></p>
                                <p>End Date: <?= htmlspecialchars($project->getEndDate()) ?></p>
                                <p>Status: <?= htmlspecialchars($project->getStatus()) ?></p>
                                <p>Contributors: <?= htmlspecialchars(implode(', ', $project->getContributors())) ?></p>
                                <p>Tags: <?= htmlspecialchars(implode(', ', $project->getTags())) ?></p>
                            </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </section>

</body>
</html>