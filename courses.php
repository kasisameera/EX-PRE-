<?php

/* =========================
   COURSE DATA
   ========================= */

$courses = [

    [
        "icon" => "💻",
        "title" => "Programming",
        "description" => "Learn programming concepts and improve your coding skills.",
        "topics" => ["C Programming", "Java", "Python", "Data Structures"],
        "progress" => 70
    ],

    [
        "icon" => "🌐",
        "title" => "Web Development",
        "description" => "Learn how to create modern and responsive websites.",
        "topics" => ["HTML", "CSS", "JavaScript", "PHP & MySQL"],
        "progress" => 50
    ],

    [
        "icon" => "🧠",
        "title" => "Data Structures",
        "description" => "Understand important data structures and algorithms.",
        "topics" => ["Arrays", "Stacks & Queues", "Trees", "Graphs"],
        "progress" => 40
    ],

    [
        "icon" => "🗄️",
        "title" => "DBMS",
        "description" => "Learn database concepts and SQL fundamentals.",
        "topics" => ["Database Basics", "ER Model", "Normalization", "SQL"],
        "progress" => 60
    ],

    [
        "icon" => "🔗",
        "title" => "Computer Networks",
        "description" => "Understand networking concepts and communication protocols.",
        "topics" => ["Network Basics", "OSI Model", "TCP/IP", "Network Security"],
        "progress" => 35
    ],

    [
        "icon" => "🤖",
        "title" => "AI & Machine Learning",
        "description" => "Explore the basics of Artificial Intelligence and Machine Learning.",
        "topics" => ["AI Basics", "Machine Learning", "Algorithms", "Model Training"],
        "progress" => 25
    ]

];

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>EX-PRE | Courses & Learning</title>


    <style>

        /* =========================
           RESET
           ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }


        /* =========================
           BODY
           ========================= */

        body {
            background: #f5f0e6;
            color: #3f3548;
        }


        /* =========================
           NAVBAR
           ========================= */

        nav {
            background: #a693c2;

            padding: 18px 50px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #f5f0e6;
        }


        nav ul {
            list-style: none;

            display: flex;

            gap: 30px;
        }


        nav ul li a {
            text-decoration: none;

            color: #f5f0e6;

            font-weight: bold;

            transition: 0.3s;
        }


        nav ul li a:hover {
            color: #e7dcc6;
        }


        /* =========================
           HEADER
           ========================= */

        .header {
            background: #c6b5d8;

            text-align: center;

            padding: 55px 20px;
        }


        .header h1 {
            font-size: 40px;

            margin-bottom: 12px;

            color: #3f3548;
        }


        .header p {
            font-size: 17px;

            color: #59486a;
        }


        /* =========================
           SEARCH
           ========================= */

        .search-container {
            text-align: center;

            padding: 30px 20px;
        }


        .search-container input {
            width: 60%;

            padding: 14px 20px;

            border: 2px solid #a693c2;

            border-radius: 30px;

            background: #f5f0e6;

            font-size: 16px;

            outline: none;
        }


        .search-container input:focus {
            border-color: #c6b5d8;
        }


        /* =========================
           COURSE SECTION
           ========================= */

        .course-container {

            width: 90%;

            max-width: 1200px;

            margin: 10px auto 60px;

            display: grid;

            grid-template-columns:
            repeat(3, 1fr);

            gap: 25px;
        }


        /* =========================
           COURSE CARD
           ========================= */

        .course-card {

            background: #e7dcc6;

            border: 2px solid #cbbebf;

            border-radius: 18px;

            padding: 25px;

            box-shadow:
            0 5px 12px
            rgba(70, 50, 80, 0.12);

            transition: 0.3s;
        }


        .course-card:hover {

            transform: translateY(-7px);

            box-shadow:
            0 10px 20px
            rgba(70, 50, 80, 0.18);
        }


        /* =========================
           COURSE ICON
           ========================= */

        .course-icon {

            width: 60px;

            height: 60px;

            border-radius: 50%;

            background: #c6b5d8;

            display: flex;

            justify-content: center;

            align-items: center;

            font-size: 28px;

            margin-bottom: 18px;
        }


        /* =========================
           COURSE TITLE
           ========================= */

        .course-card h2 {

            color: #59486a;

            margin-bottom: 10px;

            font-size: 23px;
        }


        /* =========================
           DESCRIPTION
           ========================= */

        .course-card p {

            color: #665c69;

            line-height: 1.5;

            margin-bottom: 18px;
        }


        /* =========================
           TOPICS
           ========================= */

        .topics h4 {

            color: #59486a;

            margin-bottom: 8px;
        }


        .topics ul {

            padding-left: 20px;

            line-height: 1.8;

            color: #665c69;

            margin-bottom: 18px;
        }


        /* =========================
           PROGRESS
           ========================= */

        .progress-info {

            display: flex;

            justify-content:
            space-between;

            margin-bottom: 7px;

            font-size: 14px;

            color: #59486a;
        }


        .progress-bar {

            width: 100%;

            height: 10px;

            background: #f5f0e6;

            border-radius: 10px;

            overflow: hidden;

            margin-bottom: 20px;
        }


        .progress {

            height: 100%;

            background: #a693c2;

            border-radius: 10px;
        }


        /* =========================
           BUTTON
           ========================= */

        .learn-btn {

            display: block;

            text-align: center;

            text-decoration: none;

            background: #a693c2;

            color: #f5f0e6;

            padding: 12px;

            border-radius: 10px;

            font-weight: bold;

            transition: 0.3s;
        }


        .learn-btn:hover {

            background: #c6b5d8;

            color: #3f3548;
        }


        /* =========================
           FOOTER
           ========================= */

        footer {

            background: #a693c2;

            color: #f5f0e6;

            text-align: center;

            padding: 20px;
        }


        /* =========================
           RESPONSIVE
           ========================= */

        @media (max-width: 900px) {

            .course-container {

                grid-template-columns:
                repeat(2, 1fr);
            }

        }


        @media (max-width: 600px) {

            nav {

                flex-direction: column;

                gap: 15px;

                padding: 18px 20px;
            }


            nav ul {

                gap: 15px;

                flex-wrap: wrap;

                justify-content: center;
            }


            .header h1 {

                font-size: 30px;
            }


            .search-container input {

                width: 90%;
            }


            .course-container {

                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
     ========================= -->

<nav>

    <div class="logo">
        EX-PRE
    </div>


    <ul>

        <li>
            <a href="index.php">
                Home
            </a>
        </li>

        <li>
            <a href="courses.php">
                Courses
            </a>
        </li>
        <li>
            <a href="revision.php">
                Revision
            </a>
        </li>

        <li>
            <a href="game.php">
                Games
            </a>
        </li>

        <li>
            <a href="profile.php">
                Profile
            </a>
        </li>

    </ul>

</nav>



<!-- =========================
     HEADER
     ========================= -->

<section class="header">

    <h1>
        Courses & Learning
    </h1>

    <p>
        Learn. Practice. Improve.
        Prepare smarter with EX-PRE.
    </p>

</section>



<!-- =========================
     SEARCH
     ========================= -->

<div class="search-container">

    <input
        type="text"
        id="search"
        placeholder="Search for a course..."
        onkeyup="searchCourses()"
    >

</div>



<!-- =========================
     COURSES
     ========================= -->

<section class="course-container"
         id="courseContainer">


<?php

foreach ($courses as $course) {

?>

    <div class="course-card">

        <div class="course-icon">

            <?php
            echo $course["icon"];
            ?>

        </div>


        <h2>

            <?php
            echo $course["title"];
            ?>

        </h2>


        <p>

            <?php
            echo $course["description"];
            ?>

        </p>



        <div class="topics">

            <h4>
                Topics
            </h4>


            <ul>

                <?php

                foreach ($course["topics"] as $topic) {

                    echo "<li>" .
                         $topic .
                         "</li>";

                }

                ?>

            </ul>

        </div>



        <!-- PROGRESS -->

        <div class="progress-info">

            <span>
                Progress
            </span>

            <span>

                <?php
                echo $course["progress"];
                ?>%

            </span>

        </div>


        <div class="progress-bar">

            <div
                class="progress"
                style="width:
                <?php
                echo $course["progress"];
                ?>%;">
            </div>

        </div>



        <!-- BUTTON -->

        <a href="#"
           class="learn-btn">

            <?php

            if ($course["progress"] > 0) {

                echo "Continue Learning";

            } else {

                echo "Start Learning";

            }

            ?>

        </a>

    </div>


<?php

}

?>

</section>



<!-- =========================
     FOOTER
     ========================= -->

<footer>

    <p>
        © 2026 EX-PRE |
        Smart Exam Preparation
    </p>

</footer>



<!-- =========================
     JAVASCRIPT
     SEARCH
     ========================= -->

<script>

function searchCourses() {

    let input =
        document
        .getElementById("search")
        .value
        .toLowerCase();

    let cards =
        document
        .getElementsByClassName("course-card");


    for (let i = 0;
         i < cards.length;
         i++) {

        let title =
            cards[i]
            .getElementsByTagName("h2")[0]
            .innerText
            .toLowerCase();

        if (title.includes(input)) {

            cards[i].style.display =
                "block";

        } else {

            cards[i].style.display =
                "none";

        }

    }

}

</script>


</body>

</html>