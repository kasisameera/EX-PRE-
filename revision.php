<?php

/* =========================
   REVISION DATA
   ========================= */

$revisionTopics = [

    [
        "icon" => "💻",
        "subject" => "Programming",
        "topics" => [
            "C Programming Basics",
            "Java OOP Concepts",
            "Python Fundamentals",
            "Important Programs"
        ],
        "last_revised" => "2 days ago",
        "progress" => 75
    ],

    [
        "icon" => "🌐",
        "subject" => "Web Development",
        "topics" => [
            "HTML Tags",
            "CSS Properties",
            "JavaScript Basics",
            "PHP Fundamentals"
        ],
        "last_revised" => "4 days ago",
        "progress" => 60
    ],

    [
        "icon" => "🧠",
        "subject" => "Data Structures",
        "topics" => [
            "Stacks & Queues",
            "Linked Lists",
            "Trees",
            "Graphs"
        ],
        "last_revised" => "1 day ago",
        "progress" => 50
    ],

    [
        "icon" => "🗄️",
        "subject" => "DBMS",
        "topics" => [
            "ER Model",
            "Normalization",
            "SQL Queries",
            "Transactions"
        ],
        "last_revised" => "5 days ago",
        "progress" => 45
    ],

    [
        "icon" => "🔗",
        "subject" => "Computer Networks",
        "topics" => [
            "OSI Model",
            "TCP/IP",
            "Network Devices",
            "Protocols"
        ],
        "last_revised" => "3 days ago",
        "progress" => 65
    ],

    [
        "icon" => "🤖",
        "subject" => "AI & Machine Learning",
        "topics" => [
            "AI Basics",
            "Machine Learning",
            "Supervised Learning",
            "ML Algorithms"
        ],
        "last_revised" => "1 week ago",
        "progress" => 30
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>EX-PRE | Revision</title>


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
   REVISION INFO
   ========================= */

.revision-info {

    width: 90%;
    max-width: 1100px;

    margin: 30px auto;

    background: #e7dcc6;

    border: 2px solid #cbbebf;

    border-radius: 18px;

    padding: 25px;

    text-align: center;
}


.revision-info h2 {

    color: #59486a;

    margin-bottom: 10px;
}


.revision-info p {

    color: #665c69;

    line-height: 1.6;
}


/* =========================
   SEARCH
   ========================= */

.search-container {

    text-align: center;

    margin: 25px;
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
   REVISION CARDS
   ========================= */

.revision-container {

    width: 90%;

    max-width: 1200px;

    margin: 20px auto 60px;

    display: grid;

    grid-template-columns:
    repeat(3, 1fr);

    gap: 25px;
}


.revision-card {

    background: #e7dcc6;

    border: 2px solid #cbbebf;

    border-radius: 18px;

    padding: 25px;

    box-shadow:
    0 5px 12px
    rgba(70, 50, 80, 0.12);

    transition: 0.3s;
}


.revision-card:hover {

    transform: translateY(-6px);

    box-shadow:
    0 10px 20px
    rgba(70, 50, 80, 0.18);
}


/* =========================
   ICON
   ========================= */

.subject-icon {

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
   SUBJECT
   ========================= */

.revision-card h2 {

    color: #59486a;

    margin-bottom: 12px;
}


/* =========================
   TOPICS
   ========================= */

.revision-card ul {

    padding-left: 20px;

    line-height: 1.8;

    color: #665c69;

    margin-bottom: 18px;
}


/* =========================
   LAST REVISED
   ========================= */

.last-revised {

    background: #f5f0e6;

    padding: 10px;

    border-radius: 8px;

    margin-bottom: 15px;

    color: #59486a;

    font-size: 14px;
}


/* =========================
   PROGRESS
   ========================= */

.progress-info {

    display: flex;

    justify-content: space-between;

    margin-bottom: 7px;

    color: #59486a;

    font-size: 14px;
}


.progress-bar {

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
   REVISION BUTTON
   ========================= */

.revise-btn {

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


.revise-btn:hover {

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

    .revision-container {

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


    .revision-container {

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
        Revision Center
    </h1>

    <p>
        Revise important topics and strengthen
        your preparation.
    </p>

</section>



<!-- =========================
     REVISION INFO
     ========================= -->

<section class="revision-info">

    <h2>
        📚 Smart Revision
    </h2>

    <p>
        Review important concepts, revise difficult
        topics and track your revision progress
        with EX-PRE.
    </p>

</section>



<!-- =========================
     SEARCH
     ========================= -->

<div class="search-container">

    <input
        type="text"
        id="search"
        placeholder="Search subject..."
        onkeyup="searchSubjects()"
    >

</div>



<!-- =========================
     REVISION CARDS
     ========================= -->

<section
    class="revision-container"
    id="revisionContainer"
>


<?php

foreach ($revisionTopics as $revision) {

?>

    <div class="revision-card">


        <!-- ICON -->

        <div class="subject-icon">

            <?php
            echo $revision["icon"];
            ?>

        </div>



        <!-- SUBJECT -->

        <h2>

            <?php
            echo $revision["subject"];
            ?>

        </h2>



        <!-- TOPICS -->

        <ul>

            <?php

            foreach ($revision["topics"] as $topic) {

                echo "<li>" .
                     $topic .
                     "</li>";

            }

            ?>

        </ul>



        <!-- LAST REVISED -->

        <div class="last-revised">

            Last Revised:

            <strong>
                <?php
                echo $revision["last_revised"];
                ?>
            </strong>

        </div>



        <!-- PROGRESS -->

        <div class="progress-info">

            <span>
                Revision Progress
            </span>

            <span>

                <?php
                echo $revision["progress"];
                ?>%

            </span>

        </div>


        <div class="progress-bar">

            <div
                class="progress"
                style="width:
                <?php
                echo $revision["progress"];
                ?>%;">
            </div>

        </div>



        <!-- BUTTON -->

        <a href="#"
           class="revise-btn">

            Start Revision

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
     JAVASCRIPT SEARCH
     ========================= -->

<script>

function searchSubjects() {

    let input =
        document
        .getElementById("search")
        .value
        .toLowerCase();


    let cards =
        document
        .getElementsByClassName("revision-card");


    for (
        let i = 0;
        i < cards.length;
        i++
    ) {

        let subject =
            cards[i]
            .getElementsByTagName("h2")[0]
            .innerText
            .toLowerCase();


        if (subject.includes(input)) {

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