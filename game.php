<?php

/* =========================
   GAME DATA
   ========================= */

$games = [

    [
        "icon" => "🧠",
        "title" => "Quick Quiz",
        "description" => "Test your knowledge with quick multiple-choice questions.",
        "difficulty" => "Easy",
        "questions" => "10 Questions"
    ],

    [
        "icon" => "💻",
        "title" => "Coding Challenge",
        "description" => "Solve simple programming problems and improve your coding skills.",
        "difficulty" => "Medium",
        "questions" => "10 Challenges"
    ],

    [
        "icon" => "🔢",
        "title" => "Number Challenge",
        "description" => "Solve mathematical problems as quickly as possible.",
        "difficulty" => "Easy",
        "questions" => "15 Questions"
    ],

    [
        "icon" => "🔤",
        "title" => "Word Challenge",
        "description" => "Find technical words and test your computer science vocabulary.",
        "difficulty" => "Easy",
        "questions" => "10 Words"
    ],

    [
        "icon" => "🧩",
        "title" => "Logic Puzzle",
        "description" => "Solve logical problems and improve your problem-solving skills.",
        "difficulty" => "Hard",
        "questions" => "10 Puzzles"
    ],

    [
        "icon" => "⚡",
        "title" => "Speed Test",
        "description" => "Answer questions quickly and challenge your response speed.",
        "difficulty" => "Medium",
        "questions" => "20 Questions"
    ]

];

?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>EX-PRE | Games</title>


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
   GAME INFO
   ========================= */

.game-info {

    width: 90%;

    max-width: 1100px;

    margin: 30px auto;

    background: #e7dcc6;

    border: 2px solid #cbbebf;

    border-radius: 18px;

    padding: 25px;

    text-align: center;
}


.game-info h2 {

    color: #59486a;

    margin-bottom: 10px;
}


.game-info p {

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


/* =========================
   GAME CARDS
   ========================= */

.game-container {

    width: 90%;

    max-width: 1200px;

    margin: 20px auto 60px;

    display: grid;

    grid-template-columns:
    repeat(3, 1fr);

    gap: 25px;
}


.game-card {

    background: #e7dcc6;

    border: 2px solid #cbbebf;

    border-radius: 18px;

    padding: 25px;

    text-align: center;

    box-shadow:
    0 5px 12px
    rgba(70, 50, 80, 0.12);

    transition: 0.3s;
}


.game-card:hover {

    transform: translateY(-7px);

    box-shadow:
    0 10px 20px
    rgba(70, 50, 80, 0.18);
}


/* =========================
   GAME ICON
   ========================= */

.game-icon {

    width: 75px;

    height: 75px;

    margin: 0 auto 18px;

    border-radius: 50%;

    background: #c6b5d8;

    display: flex;

    justify-content: center;

    align-items: center;

    font-size: 35px;
}


/* =========================
   TITLE
   ========================= */

.game-card h2 {

    color: #59486a;

    margin-bottom: 10px;
}


/* =========================
   DESCRIPTION
   ========================= */

.game-card p {

    color: #665c69;

    line-height: 1.5;

    margin-bottom: 18px;
}


/* =========================
   GAME DETAILS
   ========================= */

.game-details {

    display: flex;

    justify-content:
    space-between;

    margin-bottom: 20px;

    font-size: 14px;
}


.difficulty {

    background: #f5f0e6;

    padding: 7px 12px;

    border-radius: 15px;

    color: #59486a;
}


.questions {

    background: #f5f0e6;

    padding: 7px 12px;

    border-radius: 15px;

    color: #59486a;
}


/* =========================
   PLAY BUTTON
   ========================= */

.play-btn {

    display: block;

    text-decoration: none;

    background: #a693c2;

    color: #f5f0e6;

    padding: 12px;

    border-radius: 10px;

    font-weight: bold;

    transition: 0.3s;
}


.play-btn:hover {

    background: #c6b5d8;

    color: #3f3548;
}


/* =========================
   SCORE BOX
   ========================= */

.score-box {

    width: 90%;

    max-width: 500px;

    margin: 0 auto 50px;

    background: #e7dcc6;

    border: 2px solid #cbbebf;

    border-radius: 18px;

    padding: 20px;

    text-align: center;
}


.score-box h3 {

    color: #59486a;

    margin-bottom: 8px;
}


#score {

    font-size: 25px;

    font-weight: bold;

    color: #a693c2;
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

    .game-container {

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


    .game-container {

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
            <a href="games.php">
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
        Learning Games
    </h1>

    <p>
        Learn, play and improve your knowledge
        with EX-PRE.
    </p>

</section>



<!-- =========================
     INFO
     ========================= -->

<section class="game-info">

    <h2>
        🎮 Learn Through Games
    </h2>

    <p>
        Challenge yourself with quizzes,
        puzzles and coding games while
        preparing for your exams.
    </p>

</section>



<!-- =========================
     SEARCH
     ========================= -->

<div class="search-container">

    <input
        type="text"
        id="search"
        placeholder="Search games..."
        onkeyup="searchGames()"
    >

</div>



<!-- =========================
     GAME CARDS
     ========================= -->

<section
    class="game-container"
    id="gameContainer"
>


<?php

foreach ($games as $game) {

?>

    <div class="game-card">


        <!-- ICON -->

        <div class="game-icon">

            <?php
            echo $game["icon"];
            ?>

        </div>



        <!-- TITLE -->

        <h2>

            <?php
            echo $game["title"];
            ?>

        </h2>



        <!-- DESCRIPTION -->

        <p>

            <?php
            echo $game["description"];
            ?>

        </p>



        <!-- DETAILS -->

        <div class="game-details">

            <span class="difficulty">

                <?php
                echo $game["difficulty"];
                ?>

            </span>


            <span class="questions">

                <?php
                echo $game["questions"];
                ?>

            </span>

        </div>



        <!-- PLAY -->

        <a href="#"
           class="play-btn"
           onclick="playGame('<?php echo $game["title"]; ?>')">

            ▶ Play Game

        </a>


    </div>


<?php

}

?>

</section>



<!-- =========================
     SCORE
     ========================= -->

<div class="score-box">

    <h3>
        Your Game Score
    </h3>

    <div id="score">
        0
    </div>

</div>



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
     ========================= -->

<script>


/* =========================
   SEARCH GAMES
   ========================= */

function searchGames() {

    let input =
        document
        .getElementById("search")
        .value
        .toLowerCase();


    let cards =
        document
        .getElementsByClassName("game-card");


    for (
        let i = 0;
        i < cards.length;
        i++
    ) {

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


/* =========================
   PLAY GAME
   ========================= */

function playGame(gameName) {

    alert(
        "You selected: " +
        gameName +
        "\n\nGame will start soon!"
    );

}

</script>


</body>

</html>