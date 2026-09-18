<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX-PRE | Smart Exam Preparation</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f0e6;
            color: #3f3548;
        }

        /* NAVBAR */
        nav {
            height: 75px;
            background: #c6b5d8;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 8%;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #5d4672;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: #3f3548;
            font-weight: 600;
        }

        nav ul li a:hover {
            color: #a693c2;
        }

        .login-btn {
            background: #a693c2;
            color: white;
            padding: 10px 22px;
            border-radius: 25px;
            text-decoration: none;
        }

        /* HERO */
        .hero {
            min-height: 550px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px 8%;
            background: linear-gradient(
                135deg,
                #f5f0e6,
                #c6b5d8
            );
        }

        .hero-content {
            width: 52%;
        }

        .hero-content h1 {
            font-size: 55px;
            color: #5d4672;
            margin-bottom: 20px;
        }

        .hero-content h1 span {
            color: #a693c2;
        }

        .hero-content p {
            font-size: 19px;
            line-height: 1.7;
            margin-bottom: 30px;
            color: #574c60;
        }

        .start-btn {
            display: inline-block;
            padding: 14px 30px;
            background: #a693c2;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
        }

        .start-btn:hover {
            background: #8f78ad;
        }

        /* HERO CARD */
        .hero-card {
            width: 350px;
            padding: 30px;
            background: #f5f0e6;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(80,60,90,0.15);
        }

        .hero-card h2 {
            color: #5d4672;
            margin-bottom: 20px;
        }

        .study-item {
            background: #e7dcc6;
            padding: 14px;
            margin: 10px 0;
            border-radius: 12px;
        }

        /* FEATURES */
        .features {
            padding: 70px 8%;
            text-align: center;
            background: #f5f0e6;
        }

        .features h2 {
            font-size: 35px;
            color: #5d4672;
            margin-bottom: 40px;
        }

        .feature-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .feature-card {
            padding: 30px;
            border-radius: 20px;
            background: #c6b5d8;
            transition: 0.3s;
        }

        .feature-card:nth-child(2),
        .feature-card:nth-child(5) {
            background: #e7dcc6;
        }

        .feature-card:nth-child(3),
        .feature-card:nth-child(6) {
            background: #cbbebe;
        }

        .feature-card:hover {
            transform: translateY(-8px);
        }

        .feature-card h3 {
            color: #4e3d5d;
            margin-bottom: 12px;
        }

        .feature-card p {
            line-height: 1.5;
        }

        /* HOW IT WORKS */
        .how {
            padding: 70px 8%;
            text-align: center;
            background: #e7dcc6;
        }

        .how h2 {
            font-size: 35px;
            color: #5d4672;
            margin-bottom: 40px;
        }

        .steps {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .step {
            width: 190px;
            padding: 25px;
            background: #f5f0e6;
            border-radius: 18px;
        }

        .number {
            width: 45px;
            height: 45px;
            margin: auto auto 15px;
            border-radius: 50%;
            background: #a693c2;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        /* FOOTER */
        footer {
            background: #a693c2;
            color: white;
            text-align: center;
            padding: 30px;
        }

        footer h2 {
            margin-bottom: 10px;
        }

        /* MOBILE */
        @media (max-width: 768px) {

            nav ul {
                display: none;
            }

            .hero {
                flex-direction: column;
                text-align: center;
                gap: 40px;
            }

            .hero-content {
                width: 100%;
            }

            .hero-content h1 {
                font-size: 40px;
            }

            .hero-card {
                width: 100%;
                max-width: 350px;
            }

            .feature-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">EX-PRE</div>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">How It Works</a></li>
            <li><a href="#">About</a></li>
        </ul>

        <a href="#" class="login-btn">Login</a>
    </nav>


    <!-- HERO SECTION -->
    <section class="hero">

        <div class="hero-content">

            <h1>
                Prepare Smart.<br>
                <span>Perform Better.</span>
            </h1>

            <p>
                EX-PRE helps you prepare for your exams with
                personalized study plans, course content,
                revision, quizzes and performance tracking.
            </p>

            <a href="#" class="start-btn">
                Start Preparation
            </a>

        </div>


        <div class="hero-card">

            <h2>📚 Today's Preparation</h2>

            <div class="study-item">
                ✓ DSA – AVL Trees
            </div>

            <div class="study-item">
                ✓ Discrete Mathematics
            </div>

            <div class="study-item">
                ○ Digital Logic – K Map
            </div>

            <div class="study-item">
                🔄 Revision – 20 mins
            </div>

        </div>

    </section>


    <!-- FEATURES -->
    <section class="features">

        <h2>Everything You Need to Prepare</h2>

        <div class="feature-container">

            <div class="feature-card">
                <h3>📚 Course Content</h3>
                <p>
                    Access your college, branch and
                    semester-wise syllabus.
                </p>
            </div>

            <div class="feature-card">
                <h3>🗓️ Smart Planner</h3>
                <p>
                    Get a daily study plan based on
                    your examination timetable.
                </p>
            </div>

            <div class="feature-card">
                <h3>🤖 AI Tutor</h3>
                <p>
                    Understand difficult topics with
                    simple explanations and examples.
                </p>
            </div>

            <div class="feature-card">
                <h3>🔄 Revision</h3>
                <p>
                    Revise important and weak topics
                    at the right time.
                </p>
            </div>

            <div class="feature-card">
                <h3>📝 Quiz & Mock Test</h3>
                <p>
                    Practice questions and test your
                    exam preparation.
                </p>
            </div>

            <div class="feature-card">
                <h3>📊 Progress</h3>
                <p>
                    Track syllabus completion,
                    scores and weak areas.
                </p>
            </div>

        </div>

    </section>


    <!-- HOW IT WORKS -->
    <section class="how">

        <h2>How EX-PRE Works</h2>

        <div class="steps">

            <div class="step">
                <div class="number">1</div>
                <h3>Select</h3>
                <p>Choose your college, branch and year.</p>
            </div>

            <div class="step">
                <div class="number">2</div>
                <h3>Plan</h3>
                <p>Get your personalized study schedule.</p>
            </div>

            <div class="step">
                <div class="number">3</div>
                <h3>Learn</h3>
                <p>Study topics with clear explanations.</p>
            </div>

            <div class="step">
                <div class="number">4</div>
                <h3>Revise</h3>
                <p>Revise and practice important topics.</p>
            </div>

            <div class="step">
                <div class="number">5</div>
                <h3>Test</h3>
                <p>Take quizzes and mock examinations.</p>
            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        <h2>EX-PRE</h2>

        <p>
            Smart Exam Preparation Platform
        </p>

        <br>

        <p>
            © 2026 EX-PRE. All Rights Reserved.
        </p>

    </footer>

</body>
</html>