<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Omar's Page</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        h2,
        p,
        li {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        body {
            background-color: #1f252e;
            font-family: 'Outfit', sans-serif;
            height: 100vh;
            width: 100%;
        }

        header {
            display: flex;
            height: 7vh;
            box-shadow: 0px -12px 23px rgb(164, 163, 163);
            justify-content: space-between;
            align-items: center;
            padding: 16px 50px;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav>ul {
            display: flex;
            list-style-type: none;
            align-items: center;
            width: 100%;
            position: relative;
        }

        .lst-item {
            margin: 15px 24px;
            font-size: 18px;
            font-weight: 600;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 90px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            background-color: #232731;
            padding: 8px 16px;
            text-decoration: none;
            display: block;
            font-size: 15px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            color: #1f252e;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 20px;
            text-decoration: none;
            font-weight: 650;
            color: white;
            align-items: center;
        }

        .logo>div {
            display: inline-block;
            width: 1px;
            height: 7vh;
            background-color: #ddd;
            margin-right: 10px;
        }

        .logo>img {
            width: 70px;
            height: 70px;
        }

        .lst-item>a {
            text-decoration: none;
            color: white;
        }

        .lst-item>a:active,
        .lst-item>a:hover {
            color: #8D3D2E;
        }

        header>i {
            color: #8D3D2E;
            font-size: 25px;
        }

        @media screen and (max-width:700px) {
            header {
                justify-content: space-between;
                padding: 16px 1px;
            }

            .logo>img {
                width: 10vw;
                height: 5vh;
            }

            .logo>div {
                height: 5vh;
                margin-right: 1vw;
            }

            .logo>p {
                margin: 1.5vw;
                font-size: 3vw;
            }

            .lst-item>a,
            .lst-item>div>a,
            p {
                font-size: 3vw;
            }

            .lst-item {
                margin: 1vw;
            }
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: auto;
            margin-bottom: auto;
            padding: 10px;
            position: relative;
        }

        main>section {
            width: 35%;
            margin: 40px;
        }

        .section1 {
            margin: 20px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            background-color: #1f252e;
            border: 2px solid #8D3D2E;
            border-radius: 80px;
            overflow: hidden;
            width: 35%;
            padding: 15px;
        }

        .copyright {
            margin-left: 40px;
            border-radius: 30px;
            overflow: hidden;
            width: 35%;
            padding: 15px;
            text-align: center;
            position: relative;
            left: 28%;
        }

        .cv {
            display: flex;
        }

        @media screen and (max-width:650px) {
            .cv {
                display: block;
            }

            .section1 {
                width: 80%;
            }
        }

        hr {
            color: #8D3D2E;
            box-shadow: 0px -1px 8px #8D3D2E;
        }

        h3 {
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 0.5rem;
        }

        .skills ul {
            display: flex;
            flex-wrap: wrap;
        }

        .skills li {
            background-color: #3498db;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .img-sec {
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.5);
            border-radius: 40px;
            margin-left: 5px;
            border-top: 3px solid #8D3D2E;
            width: 506.8px;
            /* Set the width */
            height: 478.98px;
            /* Set the height */
            border-width: 3px;
            /* Set the border width */
            padding-bottom: 0;
            overflow: hidden;
        }

        .img-sec>img {
            width: 100%;
            position: relative;
            top: 10px;
            left: -10px;
        }

        .bio-sec {
            align-items: center;
            justify-content: center;
        }

        span.orange-txt {
            color: #8D3D2E;
        }

        .bio-sec>p {
            font-size: 17px;
        }

        .bio-sec>h1 {
            padding: 10px 0;
            font-size: 35px;
        }

        @media screen and (max-width: 700px) {
            main {
                display: block;
                margin: 10px;
            }

            main>section {
                width: 80%;
                margin-left: auto;
                margin-right: auto;
            }

            .lst-item {
                margin: 1vw;
            }

            .lst-item>a,
            p {
                font-size: 3.3vw;
            }
        }

        .Experience,
        .Education,
        .Skills {
            color: #8D3D2E;
            border-bottom: 2px solid white;
            text-align: center;
            width: auto;
            height: 30px;
            padding: 5px;
            margin-top: 10px;
            margin-right: 20px;
            margin-left: 10px;
            size: 7px;
        }

        .section1:hover {
            box-shadow: 7px 7px 10px #8D3D2E;
        }

        .social-media {
            display: flex;
            align-items: center;
        }

        .social-media>a {
            color: #8D3D2E;
            border-radius: 15px;
            border: 2px solid #8D3D2E;
            text-align: center;
            width: auto;
            height: 30px;
            padding: 5px;
            margin-top: 10px;
            margin-right: 20px;
        }

        .social-media>a>i {
            position: relative;
            top: 0.5px;
            left: 0.3px;
        }

        .bx {
            font-size: 30px;
            color: #8D3D2E;
        }

        .social-media>a:hover>.bx,
        .social-media>a:hover {
            background-color: #8D3D2E;
            box-shadow: 1px 1px 10px #8D3D2E;
            color: black;
        }

        .dark-mode {
            background-color: #1f252e;
            color: #fff;
        }

        .dark-mode h3 {
            color: #8D3D2E;
        }

        li.msg {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            background-color: #1f252e;
            border: 1px solid #8D3D2E;
            border-radius: 30px;
            padding: 10px;
            margin-bottom: 10px;
            margin-left: 20px;
            margin-right: 20px;
            box-shadow: 1px 1px 10px #8D3D2E;
        }

        li.msg:hover {
            box-shadow: 7px 7px 10px #8D3D2E;
        }

        li.msg img {
            width: 50px;
            height: 50px;
            border-bottom: 50%;
            margin-bottom: 10px;
        }

        li.msg h3.usr-name {
            font-size: 18px;
            margin: 0;
        }

        li.msg p.usr-msg {
            font-size: 14px;
            margin: 5px 0;
        }

        li.msg p.usr-date {
            font-size: 12px;
            color: #888;
            margin: 0;
        }
    </style>
</head>

<body>
    
<body>
    <header>
        <a href="../../home.html" class="logo">
            <img src="../../pics/logo.png">
            <div class="vert-line"></div>
            <p>WebArtisans</p>
        </a>
        <nav>
            <ul>
                <li class="lst-item titlebar"><a class="titlebar" href="../../home.html">Home</a></li>
                <li class="lst-item dropdown">
                    <a href="#" class="dropbtn titlebar">Members</a>
                    <div class="dropdown-content">
                        <a class="dropdowncontent" href="../../pages/mohammad/myPage.php">Mohammad</a>
                        <a class="dropdowncontent" href="../../pages/Abood/myPage.php">Abood</a>
                        <a class="dropdowncontent" href="../../pages/omar/myPage.php">Omar</a>
                        <a class="dropdowncontent" href="../../pages/lama/myPage.php">Lama</a>
                    </div>
                </li>
                <li class="lst-item "><a class="titlebar" href="../../pages/contact/contact.html">Contact us</a></li>
                <li class="lst-item "><a class="titlebar" href="#">About</a></li>
            </ul>
        </nav>
        <i id="moonIcon" class="bx bxs-moon"></i>
    </header>

    <main>
        <section class="img-sec">
            <img src="pics/omar2.png" alt="person">
        </section>
        <section class="bio-sec">
            <p class="Greeting" style="font-size:40px;">Hi, I'm</p>
            <h1 style="display:inline;font-size:60px;"><span class="orange-txt">Omar</span></h1>
            <p class="Greeting" style="font-size:60px;display:inline;"> Alnaimat</p>
            </span>
            </h1>
            <p>As a dedicated cybersecurity student, my journey into the realm of digital security is driven by a
                profound commitment to mastering the intricacies of safeguarding information systems. In an era where
                technology permeates every aspect of our
                lives, the importance of robust cybersecurity practices cannot be overstated. My educational pursuits
                focus on a multifaceted approach, delving into areas such as digital defense, threat detection, and
                ethical hacking.</p>
            <div class="social-media">
                <a href="https://www.linkedin.com/in/omar-aljaafreh-55355b2aa/" target="_blank"><i
                        class="bx bxl-linkedin"></i></a>
                <a href="https://www.instagram.com/_omar_aljaafreh_/" target="_blank"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://github.com/aljaafreh3" target="_blank"><i class="bx bxl-github"></i></a>
            </div>
        </section>
    </main>

    <section class="cv">
        <div class="section1">
            <h3 class="Experience">Experience</h3>
            <ul>
                <li>
                    <h4><span class="orange-txt">Network</span> Security
                        <h4>
                            <p>-This involves protecting the integrity and confidentiality of data as it is transmitted
                                over a network.</p>
                </li>
                <li>
                    <h4><span class="orange-txt">Data</span> Security</h4>
                    <p>-Protecting the confidentiality and integrity of data is essential. Encryption, access controls,
                        and regular backups are key components of data security.</p>
                </li>
            </ul>
        </div>

        <div class="section1">
            <h3 class="Education">Education</h3>
            <ul>
                <li>
                    <h4 class="tst"><span class="orange-txt">Bachelor's</span> Degree in Cybersecurity - Princess Sumaya
                        University for Technology</h4>
                </li>
            </ul>
        </div>

        <div class="section1">
            <h3 class="Skills">Skills</h3>
            <ul class="hobbies">
                <li><b>Encryption</b></li>
                <li><b>Python</b> </li>
                <li><b>Security Architecture</b> </li>
                <li><b>Security Awareness and Training</b></li>
                <li><b>Responsive Web Design</b></li>
            </ul>
        </div>
    </section>
    <br>
    <br>
    <br>
    <ul class="tsst">

    
<?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "webartisans"; 
    
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
    
                    $teamMember = "Omar";
    
                    $sql = "SELECT first_name, msg_date, message FROM teammessages WHERE team_member = '$teamMember'";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        echo "<ul>";
    
                        while ($row = $result->fetch_assoc()) {
                            echo "<li class='msg'>";
                            echo "<img src='../../pics/logo.png' alt='user'>";
                            echo "<h3 class='usr-name'>" . htmlspecialchars($row['first_name']) . "</h3>";
                            echo "<p class='usr-msg' style='font-size:large;'>" . htmlspecialchars($row['message']) . "</p>";
                            echo "<p class='usr-date' style='font-size:large;'>" . htmlspecialchars($row['msg_date']) . "</p></li>";
                        }
                        echo "</ul>";
                    } else {
                    echo "<li>No messages yet for " . $teamMember . "</li>";
                    }
    
                    $conn->close();
                ?>
    </ul>

    <br>
    <br>
    <br>
    <hr>

    <main>
        <footer>
            <p class="copyright">Copyright © Untitled. All rights reserved. Design By WebArtisans Theme. Images
                Unsplash, Pixabay, Freepik, Icon Flaticon</p>
        </footer>
    </main>

    <script>
        function LightMode() {

            var names = document.getElementsByClassName('dropdowncontent');
            for (var i = 0; i < names.length; i++) {
                names[i].style.color = '#ffffff';
                names[i].style.backgroundColor = '#ffffff';
            }
            body.style.backgroundColor = '#fff';
            var paragraphs = document.getElementsByTagName('p');
            for (var i = 0; i < paragraphs.length; i++) {
                paragraphs[i].style.color = '#555';
            }

            var headers = document.querySelectorAll(' h2, h3, h4, h5, h6');
            for (var j = 0; j < headers.length; j++) {
                headers[j].style.color = '#333';
            }

            var section1Elements = document.querySelectorAll('.section1');
            for (var i = 0; i < section1Elements.length; i++) {
                section1Elements[i].style.backgroundColor = '#CACACA';
            }
            var last_section = document.getElementsByClassName('msg');
            for (var i = 0; i < last_section.length; i++) {
                last_section[i].style.backgroundColor = '#CACACA'
            }

            var unOrderList = document.getElementsByClassName('hobbies')
            for (var i = 0; i < unOrderList; i++) {
                unOrderList[i].style.color = 'black';
            }

            var navLinks = document.querySelectorAll('nav ul li a');

            for (var i = 0; i < navLinks.length; i++) {
                navLinks[i].style.color = 'black';

            }
            var section1 = document.querySelector('.section1');

            section1.style.color = 'black'

        }

        function darkMode() {
            var titlebar = document.getElementsByClassName('titlebar')
            for (var i = 0; i < titlebar.length; i++) {
                titlebar[i].style.color = '#ffffff';
            }


            body.style.backgroundColor = '#1f252e';
            var paragraphs = document.getElementsByTagName('p');
            for (var i = 0; i < paragraphs.length; i++) {
                paragraphs[i].style.color = '#ffffff';
            }


            var headers = document.querySelectorAll('h1,h2,h3,h4, h5, h6');
            for (var j = 0; j < headers.length; j++) {
                headers[j].style.color = '#8D3D2E';
            }

            var section1Elements = document.querySelectorAll('.section1');
            for (var i = 0; i < section1Elements.length; i++) {
                section1Elements[i].style.backgroundColor = '#1f252e';
            }
            var last_section = document.querySelectorAll('.msg');
            for (var i = 0; i < last_section.length; i++) {
                last_section[i].style.backgroundColor = '#1f252e'
            }

            var tstElements = document.getElementsByClassName('tst');
            for (var k = 0; k < tstElements.length; k++) {
                tstElements[k].style.color = 'white';
            }



        }


        var moonIcon = document.getElementById('moonIcon');
        var body = document.body;

        moonIcon.addEventListener('click', function () {

            if (body.classList.contains('dark-mode')) {
                body.classList.remove('dark-mode');
                moonIcon.className = 'bx bxs-moon';
                darkMode();
            } else {
                body.classList.add('dark-mode');
                moonIcon.className = 'bx bxs-sun';
                LightMode();
            }
        });
    </script>
</body>


</html>

