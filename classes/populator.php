<?php

class PortfolioPopulator {


    public static function populateProjects() {
        //image placeholder
        $image = "images/placeholder.png";

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

        //Donut Clicker
        $donutContributors = ["Marcus Gibeson"];
        $donutTechUsed = ["HTML", "CSS", "JavaScript"];
        $donutTags = ["JavaScript", "HTML", "CSS", "Game"];

        //Virtual Pet
        $petContributors = ["Marcus Gibeson"];
        $petTechUsed = ["Java"];
        $petTags = ["Java", "Command Console", "Game"];

        //Virtual Pets Amok
        $amokContributors = ["Marcus Gibeson", "Timothy Asberry", "Lukretia Deacon", "Kerwyn Daniel", "Jose Carmona"];
        $amokTechUsed = ["HTML", "Java"];
        $amokTags = ["HTML", "Java", "Springboot", "Maven", "Web Program"];

        return [
            new Project(
                1,
                "Personal Portfolio",
                "My personal portfolio of all my projects",
                "images/projects/portfolio.png",
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
                2,
                "Asteroid Xtreme",
                "description here", 
                "images/projects/asteroidXtreme.png",
                "images/project_gifs/asteroidXtreme.gif",
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
                3,
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
                4,
                "Home & Family Task",
                "A chore task manager set up as a website for use for people who want to create a chore list for people in the house.",
                "images/projects/HomeFamilyTask.png",
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
            new Project(
                5,
                "20 Sided Dice",
                "A 20-side dice simulator that always records rolls in a database. Complete with database wipe and weighted rolls option",
                "images/projects/roll_d20.png",
                "images/project_gifs/roll_d20.gif",
                "Project Link URL here",
                "GITHUB URL here",
                $diceTechUsed,
                "2023-12-14",
                "2024-8-18",
                "Complete",
                $diceContributors,
                $diceTags
            ),
            new Project(
                6,
                "Donut Clicker",
                "Create a clicker game using a donut and using it to spend on buying upgrades",
                "images/projects/donut_clicker.jpg",
                $image,
                "Project Link URL here",
                "GITHUB URL here",
                $donutTechUsed,
                "2023-6-10",
                "2023-6-18",
                "Complete",
                $donutContributors,
                $donutTags
            ),
            new Project(
                7,
                "Virtual Pet",
                "Tamadachi-style game to care for a pet, command console-only",
                "images/projects/Virtual_Pet.png",
                "images/project_gifs/VirtualPet.gif",
                "Project Link URL here",
                "GITHUB URL here",
                $petTechUsed,
                "2023-6-24",
                "2023-7-2",
                "Complete",
                $petContributors,
                $petTags
            ),
            new Project(
                8,
                "Virtual Pets Amok",
                "First group project to create a Vet clinic simulator to handle CRUD operations",
                "images/projects/VirtualPetsAmok.png",
                "images/project_gifs/VirtualPetsAmok.gif",
                "Project Link URL here",
                "GITHUB URL here",
                $amokTechUsed,
                "2023-7-14",
                "2023-8-12",
                "Complete",
                $amokContributors,
                $amokTags
            )

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