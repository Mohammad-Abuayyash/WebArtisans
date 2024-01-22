<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mo_style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Mohammad's Page</title>
</head>

<body id="body">
    <header>
        <a href="../../home.php" class="logo">
            <img src="../../pics/logo.png">
            <div class="vert-line"></div>
            <p>WebArtisans</p>
        </a>
        <nav>
            <ul>
                <li class="lst-item">
                    <a href="../../home.php">Home</a>
                </li>
                <li class="lst-item dropdown">
                    <a href="#" class="dropbtn">Members</a>
                    <div class="dropdown-content">
                        <a href="../../pages/mohammad/myPage.php">Mohammad</a>
                        <a href="../../pages/Abood/myPage.php">Abood</a>
                        <a href="../../pages/omar/myPage.php">Omar</a>
                        <a href="../../pages/lama/myPage.php">Lama</a>
                    </div>
                </li>
                <li class="lst-item">
                    <a href="../../pages/contact/contact.html">Contact us</a>
                </li>
                <li class="lst-item">
                    <a href="#">About</a>
                </li>
            </ul>
        </nav>
        <i class="bx bxs-moon" id="themeLogo"></i>
    </header>
    <main>

        <section class="intro-sec">
            <section class="img-sec">
                <img src="pics/myPhoto.png" alt="person">
            </section>
            <section class="bio-sec">
                <h1>Hi, I'm</h1>
                <h1> <span class="orange-txt">Mohammad</span> Abuayyash</h1>
                <p> I'm Junior Web Developer / Full Stack Developer. Who's been in this industry for 3 years.
                    I've been taking alot of Professional Courses like "<a
                        href="https://www.coursera.org/professional-certificates/meta-front-end-developer"
                        target="_blank">Meta Frontend developer</a>", which consists of 8 courses.
                </p>
                <div class="social-media">
                    <a href="https://www.linkedin.com/in/mohammad-abu-ayyash-304780222/" target="_blank">
                        <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a href="https://github.com/BmoxX" target="_blank"><i class="bx bxl-github"></i></a>
                </div>
            </section>
        </section>

        <section class="skill-sec">
            <section class="experience">
                <h5 class="orange-txt">Experience</h5>
                <p>Participated in IEEEXtreme 17.0 Programming Competition,
                    1-year in frontend development, 2 years in problem solving.
                </p>
            </section>
            <section class="tech-skills">
                <h5 class="orange-txt">Skills</h5>
                <section class="frontend-skills">
                    <label>Frontend: </label>
                    <ul>
                        <li>Html</li>
                        <li>Css</li>
                        <li>Javascript</li>
                        <li>React</li>
                    </ul>
                </section>
                <section class="backend-skills">
                    <label>Backend: </label>
                    <ul>
                        <li>C/C++</li>
                        <li>C#</li>
                        <li>Java</li>
                        <li>Php</li>
                        <li>Python</li>
                    </ul>
                </section>
            </section>
            <section class="intrests">
                <h5 class="orange-txt">Intrests</h5>
                <ul>
                    <li>Full Stack Web development</li>
                    <li>Full Stack development</li>
                    <li>Backend development</li>
                    <li>IOS/Andriod Application development</li>
                </ul>
            </section>
        </section>

        <section class="project-sec">
            <h2 class="orange-txt">My Projects</h2>
            <section class="projects-intro">
                <div class="project view-all-projs">
                    <div class="proj-prob">
                        <p class="marginBot">There are my few selected
                            projects where I designed the User Interface.</p>
                        <a href="https://github.com/BmoxX?tab=repositories" target="_blank">View All &rarr;</a>
                    </div>
                </div>
                <div class="project">
                    <img src="pics/littleLemon.jpg" alt="littleLemon" class="marginBot">
                    <div class="proj-prob">
                        <p class="marginBot">Simple restaurant Website for Meta frontend developer course</p>
                        <a href="https://github.com/BmoxX/Little-Lemon" target="_blank">View &rarr;</a>
                    </div>
                </div>
                <div class="project">
                    <img src="pics/spotify.jpeg" alt="spotify clone" class="marginBot">
                    <div class="proj-prob">
                        <p class="marginBot">Simple Spotify clone using Flutter</p>
                        <a href="https://github.com/BmoxX/Spotify-Clone" target="_blank">View &rarr;</a>
                    </div>
                </div>
                <div class="project">
                    <img src="pics/VeriTag.png" alt="VeriTag" class="marginBot">
                    <div class="proj-prob">
                        <p class="marginBot">Simple Fingerprinting & Ownership Verification Windows Application</p>
                        <a href="https://github.com/Mohammad-Abuayyash/VeriTAG">View &rarr;</a>
                </div>
            </section>
        </section>



        <section id="users-messages">
            <h2>Few words from my clients</h2>
            <p>I've always feel honored when I get good remarks from my clients. Look what they have to say about me.
            </p>
            <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "webartisans";
    
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
    
                    $teamMember = "Mohammad";
    
                    $sql = "SELECT first_name, msg_date, message FROM teammessages WHERE team_member = '$teamMember'";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        echo "<ul>";
    
                        while ($row = $result->fetch_assoc()) {
                            echo "<li class='msg'>";
                            echo "<img src='../../pics/user.jpg' alt='user'>";
                            echo "<h3 class='usr-name'>" . htmlspecialchars($row['first_name']) . "</h3>";
                            echo "<p class='usr-msg'>" . htmlspecialchars($row['message']) . "</p>";
                            echo "<p class='usr-date'>" . htmlspecialchars($row['msg_date']) . "</p></li>";
                        }
                        echo "</ul>";
                    } else {
                    echo "<li>No messages yet for " . $teamMember . "</li>";
                    }
    
                    $conn->close();
                ?>
        </section>
    </main>
    <footer class="contact-me">
        <h2 class="marginBot">Contact me and let's talk about your project</h2>
        <form>
            <input type="email" placeholder="Your email address">
            <button type="submit">Contact</button>
        </form>
        <div class="left-circle circle"></div>
        <div class="right-circle circle"></div>
    </footer>

    <script type="text/javascript">


    </script>
</body>

</html>