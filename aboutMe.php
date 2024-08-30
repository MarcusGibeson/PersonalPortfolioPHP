<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/aboutme.css">
    <style>
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: flex-start; /* Align items at the top */
}

.carousel-wrapper {
    position: relative; /* Create a container for the carousel and arrows */
    width: 60%; /* Match the carousel width */
    margin-top: 20px; /* Adjust margin to control spacing from the top */
}

.carousel {
    width: 100%; /* Set carousel width to 100% of its wrapper */
    overflow: hidden;
    position: relative;
    z-index: 1; /* Ensure the carousel is behind the arrows */
    right: -250px;
}

.carousel-container {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-item {
    min-width: 100%;
    box-sizing: border-box;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #333;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 50%;
    z-index: 2; /* Ensure arrows are above the carousel */
}

.left-arrow {
    left: 185px; /* Moved 50px to the left */
}

.right-arrow {
    right: -315px; /* Moved 50px to the right */
}

.arrow:hover {
    background-color: #555;
}

@media (max-width: 768px) {
    .carousel-wrapper {
        width: 80%; /* Adjust the width on smaller screens */
    }

    .left-arrow, .right-arrow {
        left: -30px; /* Adjust these values for smaller screens if necessary */
        right: -30px;
    }
}
    </style>
</head>
<body>
<div class="carousel-wrapper">
    <div class="carousel">
        <div class="carousel-container">
            <div class="carousel-item">
                <h3>I'm Marcus Gibeson, a Full-Stack Java Developer and US Navy IT Veteran with a passion for technology and continuous learning.</h3>
            </div>
            <div class="carousel-item">
                <h3>In my free time, I enjoy building and fixing PCs, gaming, and exploring new technologies to keep my skills sharp.</h4>
            </div>
            <div class="carousel-item">
                <h3>I hold a certification from WeCanCodeIt and have a year of hands-on programming experience.</h3>
            </div>
            <div class="carousel-item">
                <h3>My expertise lies in building dynamic web applications and solving complex IT challenges.</h3>
            </div>
            <div class="carousel-item">
                <h3>I'm actively seeking opportunities to grow as a developer, whether in a corporate environment or through freelance projects.</h3>
            </div>
            <div class="carousel-item">
                <h3>Feel free to browse my portfolio and reach out if you'd like to collaborate or discuss potential opportunities.</h>
            </div>
        </div>
    </div>
    <button class="arrow left-arrow">&#9664;</button>
    <button class="arrow right-arrow">&#9654;</button>
</div>
    

</body>
</html>