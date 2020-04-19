<!--<?php
/*
session_start();
if (!isset($_SESSION['username'])) {
header('location:sign-up.php');	
}*/
?>-->



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CODE DECK | Home</title>
    <!--Ion Icons-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="nav-brand">
                    <a href="index.html">
                        <h4 style="color: midnightblue;font-size: 30px;">
                            <span style="font-size: 40px;">C</span>ODE<SPAN style="font-size: 40px;">D</SPAN>ECK<SPAN style="color: crimson;font-size: 55px;"><</SPAN><span style="color:#51c9e7;font-size: 65px;">></span>
                        </h4>
                    </a>
                </div>

                <div class="menu-icons open">
                    <i class="icon ion-md-menu"></i>
                </div>

                <ul class="nav-list">
                    <div class="menu-icons close">
                        <i class="icon ion-md-menu-close"></i>
                    </div>
                    <li class="nav-item">
                        <a href="#" class="nav-link current">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">Developers</a>
                    </li>

                    <li class="nav-item">
                    	<?php

							session_start();
							if (isset($_SESSION['username'])) {
							echo "<a href='sign-up.php' class='nav-link current' target='_blank'>$name</a>";
							//header('location:sign-up.php');	
							}
							else{
								echo "<a href='sign-up.php' class='nav-link current'>sign-up</a>";
							}

						?>
                    </li>
                </ul>

            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="main-message">
                    <h3 style="padding-top: 10px;">Leran to </h3>
                    <h1>program</h1>
                    <p>
                        Programming is the process of creating a set of instructions that tell a computer how to perform a task.
                        Programming can be done using a variety of computer "languages," such as SQL, Java, Python, and C++.
                    </p>
                    <div class="cta">
                        <a href="sign-up.html" class="btn">Sign up</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="experiance-code">
            <div class="container">
                <div class="title-heading">
                    <h3>Experiance</h3>
                    <h1>The fun in coding</h1>
                    <p>This are some of the most popular languages right now ,learing which will benifit you in future. 
                    </p>
                </div>
                <div class="lang-grid">
                    <!--grid item 1-->
                    <div class="lang-grid-item java">
                        <h1 style="font-size: 40px;">JAVA</h1>
                        <p>Java has been one of the most popular programming language for many years.
                            Java is Object Oriented. However it is not considered as pure object oriented as
                            it provides support for primitive data types (like int, char, etc)
                        </p>
                    </div>

                    <!--grid item 2-->
                    <div class="lang-grid-item python">
                        <h1 style="font-size: 40px;">PYTHON</h1>
                        <p>Python is currently the most widely used multi-purpose, high-level programming language.
                            Python programs generally are smaller than other programming languages like Java.
                        </p>
                    </div>
                    <!--grid item 3-->
                    <div class="lang-grid-item react">
                        <h1 style="font-size: 40px;">REACT</h1>
                        <p>React JavaScript library for building user interfaces.
                         It lets you compose complex UIs from small and isolated pieces of code called “components”. React has
                        a few different kinds of components, but we'll start with React.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <div class="testimonial">
                    <div class="testimonial-text-box">
                        <p style="font-size: 50px;">“A language that doesn't affect the way you think about programming is not worth knowing.”</p>
                        <i class="icon ion-md-quote"></i>
                    </div>
                    <div class="testimonial-customer">
                        <img src="images/profile-pic.jpg" alt="">
                        <h1>Martin.G</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="begin-adventure">
            <div class="title-heading">
                <h3>Emerging</h3>
                <h1>Technologies in computer</h1>
                <p>This book deals with computer architecture as well as computer organization
                    and design. 
                </p>
            </div>
            <!--Adventure grid item 1-->
            <div class="tech-grid">
                <div class="tech-grid-item">
                    <p><span style="color: crimson;">BIG DATA</span><br>
                        Big data refers to problems that are associated with processing and storing different types of data. Most of the companies today, rely on big data analytics to gain huge insight about their:
                        customer,
                        product research,
                        marketing initiatives and many more.
                        For your surprise, big data led Germany to win the world cup.
                        Hadoop and Spark are the two most famous frameworks for solving Big Data problems.
                        If you already have some knowledge of Big Data, splendid! If not, now is the time to start. </p>
                </div>
            </div>
            <!--Adventure grid item 2-->
            <div class="tech-grid">
                <div class="tech-grid-item">
                    <p><span style="color: crimson;">COGNATIVE CLOUD COMPUTING</span><br>
                        Cognitive Cloud is an extended ecosystem of traditional Cloud and Cognitive Computing.
                        It’s due to this, you can create Cognitive Computing applications and bring to the masses through cloud deployments. Cognitive computing is considered as the next big evolution in the IT industry.
                        Big brands such as IBM, Google, Microsoft, Cisco have already started implementing this next-gen tech to gear up for the upcoming market.
                    </p>
                </div>
            </div>
            <!--Adventure grid item 3-->
            <div class="tech-grid">
                <div class="tech-grid-item">
                    <p><span style="color: crimson;">BLOCK CHAIN</span><br>
                        This is the tech that powers bitcoins, the whole new parallel currency that has taken over the world.
                        Interestingly, blockchain as a technology has far-reaching potential in everything from healthcare to 
                        elections to real estate to law enforcement.
                    </p>
                </div>
            </div>
            <!--Adventure grid item 4-->
            <div class="tech-grid">
                <div class="tech-grid-item">
                    <p><span style="color: crimson;">ARTIFICIAL INTELIGENCE</span><br>
                        AI existed even before the internet was born, but it is now that the data processing and compute power backbone became strong enough to sustain an entire technology by itself.
                        AI is everywhere today, from your smartphones to your cars to your home to your banking establishment.
                        It is the new normal, something the world cannot do without.  
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy copyrights 2020 CODE-DECKS. All rights reserved.</p>
    </footer>

    <script type="text/javascript" src="scripts.js"></script>

</body>
</html>