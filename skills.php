<?php
    require_once 'classes/classes.php';
    require_once 'classes/populator.php';

    $skills = PortfolioPopulator::populateSkills();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <style>
        @keyframes slideInFromLeft {
    from {
        transform: translateX(-100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideInFromRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}
        .skills-list {
            list-style-type: none;
            padding: 0;
        }
        .bar {
            width: 100%;
            background-color: #f3f3f3;
            border-radius: 25px;
            margin-bottom: 10px;
        }

        .bar-fill {
            height: 25px;
            border-radius: 25px;
            text-align: right;
            padding-right: 10px;
            color: white;
            line-height: 25px;
        }

        .excellent { background-color: #4caf50;}
        .very-good { background-color: #2196f3;}
        .good { background-color: #ff9800;}
        .needs-improvement { background-color: #f44336;}

        .bar-fill.slide-in-left {
    animation: slideInFromLeft 1.5s forwards;
}

.bar-fill.slide-in-right {
    animation: slideInFromRight 1.5s forwards;
}
    </style>
    <title>Marcus' Skills</title>
</head>
<body>
<section class="main">
        <div class="container">
            <div id="box">
                <div>
                    <ul class="skills-list">
                        <!-- <?php var_dump($skills)?> -->
                        <?php foreach ($skills as $skill): ?>
                            <li>
                                <div class="bar">
                                    <div
                                    style="width: <?= htmlspecialchars($skill->getPercentage()) ?>%;" 
                                    class=" bar-fill <?= htmlspecialchars(str_replace(' ', '-', strtolower($skill->getRating()))) ?>">
                                        <?= htmlspecialchars($skill->getLanguage()) . ' ' . htmlspecialchars($skill->getPercentage()) . '%' ?>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
            </div>
        </div>
    </section>
</body>
</html>