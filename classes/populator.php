<?php

class PortfolioPopulator {

    public static function populateProjects() {
        //image placeholder
        $image = "placeholder.png";

        //Portfolio arrays
        $portfolioContributors = ["Marcus Gibeson"];
        $portfolioTechUsed = ["PHP", "HTML", "CSS", "JavaScript"];
        $portfolioTags = ["PHP", "HTML", "CSS", "JavaScript"];

        //Asteroid arrays
        $asteroidTechUsed = ["Java", "LibGDX"];
        $asteroidContributors = ["Marcus Gibeson", "Joshua Whittington"];
        $asteroidTags = ["Game", "Java", "LibGDX"];

        //Pacman arrays
        $pacmanTechUsed = ["Java", "LibGDX"];
        $pacmanContributors = ["Marcus Gibeson"];
        $pacmanTags =  ["Game", "Java", "LibGDX"];

        //H&F Task arrays
        $homeFamilyTaskContributors = ["Marcus Gibeson", "Timothy Asberry", "Esperanza Raji", "Lukretia Deacon", "Matial Medou Ovono", "Rukshan Kodithuwakku"];
        $homeFamilyTaskTags = ["Java", "Springboot", "HTML", "CSS", "JavaScript", "Program"];
        $homeFamilyTaskTechUsed = ["Java", "Springboot", "Maven", "HTML", "CSS", "JavaScript"];



        //20-side Dice
        $diceContributors = ["Marcus Gibeson"];
        $diceTechUsed = ["PHP", "SQL", "HTML", "CSS", "JavaScript"];
        $diceTags = ["Web Program", "PHP", "SQL", "HTML", "CSS"];
        return [
            new Project(
                "Personal Portfolio",
                "My personal portfolio of all my projects",
                $image,
                $image,
                "Project Link URL here",
                "GITHUB URL here",
                $portfolioTechUsed,
                "2023-8-23",
                "none",
                "Incomplete",
                $portfolioContributors,
                $portfolioTags
            ),
            new Project(
                "Asteroid Xtreme",
                "description here", 
                $image,
                $image,
                "Project Link URL HERE", 
                "GITHUB URL HERE",
                $asteroidTechUsed,
                "2024-04-15",
                "null",
                "Incomplete",
                $asteroidContributors,
                $asteroidTags
            ),
            new Project(
                "Pacman Xtreme",
                "description here",
                $image,
                $image,
                "Project Link URL here",
                "GITHUB URL here",
                $pacmanTechUsed,
                "2024-04-07",
                "null",
                "Incomplete",
                $pacmanContributors,
                $pacmanTags
            ),
            new Project(
                "Home & Family Task",
                "A chore task manager set up as a website for use for people who want to create a chore list for people in the house.",
                $image,
                $image,
                "Project Link URL here",
                "GITHUB URL here",
                $homeFamilyTaskTechUsed,
                "2023-09-16",
                "2023-10-9",
                "Complete",
                $homeFamilyTaskContributors,
                $homeFamilyTaskTags
            ),

        ];
    }

    public static function populateSkills() {
        return [
            new Skill("Java", 90, "Excellent"),
            new SKill("JavaScript", 85, "Very Good"),
            new Skill("HTML", 90, "Excellent"),
            new Skill("CSS", 75, "Very Good"),
            new Skill("PHP", 70, "Very Good"),
            new Skill("Python", 60, "Good"),
            new Skill("C#", 40, "Needs Improvement"),
            new Skill("SQL", 40, "Needs Improvement")
        ];
    }
}