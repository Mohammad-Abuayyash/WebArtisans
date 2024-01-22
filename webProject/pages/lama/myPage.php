<!DOCtype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Lama's Page</title>
    <style>
        
*{
    margin: 0px;
    padding: 0px;
    color: white;
}

body{
    background-color: #1f252e;
    font-family: 'Outfit', sans-serif;
    height: 100vh;
    width: 100%;
}

header{
    display: flex;
    height: 7vh;
    box-shadow: 0px -12px 23px rgb(164, 163, 163);
    justify-content: space-between;
    align-items: center;
    padding: 16px 50px;
}

nav{
    display: flex;
    align-items: center;
}

nav>ul{
    display: flex;
    list-style-type: none;
    align-items: center;
    width: 100%;
    position: relative;
}

.lst-item{
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
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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

.dropdown:hover .dropdown-content{
    display: block;
}


.dropdown-content a:hover {
    background-color: #ddd;
    color: #1f252e;
}


.logo{
    display: flex;
    align-items: center;
    font-size: 20px;
    text-decoration: none;
    font-weight: 650;
    color: white;
}

.logo>div{
    display: inline-block;
    width: 1px;
    height: 7vh;
    background-color: #ddd;
    margin-right: 10px;
}

.logo>img{
    width: 70px;
    height: 70px;
}

.lst-item>a {
 text-decoration: none;
 color: white;

}

.lst-item>a:active,.lst-item>a:hover{
    color: #d057a0;
}

header>i{
 color: #d057a0;
 font-size: 25px;
}


        .lst-item>a:active,
        .lst-item>a:hover {
            color: #d057a0;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: auto;
            margin-bottom: auto;
            padding: 10px;
        }

        main>section {
            width: 35%;
            margin: 40px;
        }

        .img-sec {

            border-top: 3px solid #d057a0;
            overflow: hidden;

            border-radius: 50%;
            background: #1f252e;
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

        .orange-txt {
            color: #d057a0;

        }

        .bio-sec>p {
            font-size: 17px;
        }

        .bio-sec>h1 {
            padding: 10px 0px;
            font-size: 35px;
        }

        @media screen and (max-width:700px) {
            header {

                justify-content: space-between;
                padding: 16px 30px;
            }

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

        .social-media {
            display: flex;
            margin-top: 15px;
            justify-content: center;
        }

        .social-media>a {
            color: rgb(213, 52, 130);
            border-radius: 100px;
            border: 2px solid #d057a0;
            border-radius: 100px;
            text-align: center;
            width: auto;
            height: 30px;
            padding: 5px;
            margin-top: 10px;
            margin-right: 30px;


        }

        .social-media>a>i {
            position: relative;
            top: 0.5px;
            left: 0.3px;
            width: 60px;
        }

        .bx {
            font-size: 30px;
            color: #d057a0;


        }

        .social-media>a:hover>.bx,
        .social-media>a:hover {
            background-color: #d057a0;
            box-shadow: 1px 1px 10px #d057a0;
            color: black;

        }

        .more-info {
            font-family: serif;
        }

        #e {
            border: 2px solid #d057a0;
            text-align: center;
            box-shadow: 2px 2px 20px #d057a0;
            margin-bottom: 10px;
            border-radius: 20px;

        }

        #e:hover {
            background-color: #d057a0;
            color: #1f252e;
        }

        .text {
            font-family: 'Times New Roman', Times, serif;
            font-size: 17px;


        }

        #contact-footer {
            font-size: 25px;
            margin-top: 20px;
            font-family: sans-serif;
            text-align: center;
        }

        a>i {

            position: center;

        }

        .company {
            color: #d057a0;
        }

        .intro {
            font-family: 'Times New Roman', Times, serif;
            font-weight: 20px;
        }

        .star-rating {
            display: inline-block;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
        }

        .star-rating label:hover,
        .star-rating label:hover~label,
        .star-rating input[type="radio"]:checked~label {
            color: goldenrod;

        }

        .button {
            color: rgb(245, 237, 237);
            border: 2px soild #d057a0;
            background-color: #1f252e;
            width: 200px;
            height: 50px;
        }

        input {
            border: 2px solid #f3eef1;
            border-radius: 4px;
            color: rgb(247, 245, 245);
            background-color: #1f252e;

        }

        textarea {
            color: black;
        }

        label {
            font-family: 'Times New Roman', Times, serif;
            justify-content: space-between;
            padding: 8px;
        }

        form {
            position: relative;
            width: 500px;
            padding: 20px;
            text-align: center;
            border-radius: 3px;
            border: none;
            font-size: 20px;
            margin-top: 20px;
            margin-left: 30px;

        }

        fieldset {
            border: 0px solid #391f2f;
            border-radius: 4px;
            padding: 5px;
        }

        .feedback-container {
            margin: auto;
            width:50%;
        }

        .feedback-box {
            border: 20px solid #1f252e;
            padding: 5px;
            text-align: left;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

        }


        .user-name {
            font-weight: bold;

        }

        .user-review {
            color: #b1a5a5;
        }

        .do_flex {
            display: flex;
        }

        .like-button {
            color: rgb(89, 0, 255);
            cursor: pointer;
            font-size: 20px;
        }

        .user-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .fa {
            font-size: 50px;
            cursor: pointer;
            user-select: none;
        }

        .fa:hover {
            color: darkblue;
        }

        .unknown {
            border-radius: 20px;
            width: 30px;
            height: 30px;
        }


        .buttonl {
            --bg: #000;
            --hover-bg: #ff90e8;
            --hover-text: #000;
            color: #fff;
            cursor: pointer;
            border: 1px solid var(--bg);
            border-radius: 4px;
            padding: 0.8em 2em;
            background: var(--bg);
            transition: 0.2s;
        }

        .buttonl:hover {
            color: var(--hover-text);
            transform: translate(-0.25rem, -0.25rem);
            background: var(--hover-bg);
            box-shadow: 0.25rem 0.25rem var(--bg);
        }

        .buttonl:active {
            transform: translate(0);
            box-shadow: none;
        }

        .rated-golden {
            color: goldenrod;
        }
    </style>
</head>

<body>

<script>
        alert('welcome to my page !');

        function myFunctionq(x) {
            x.classList.toggle("fa-thumbs-down");
        }

        function myFunction(clickedStar) {
            if (document.querySelectorAll('.star-rating input[type="radio"]:checked'.length === 5)) {
                alert('Thank you for the 5-star rating!');
            }
        }


    </script>
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
        <i class="bx bxs-moon"></i>
    </header>
    <main>
        <section class="bio-sec">
            <h2>Hi, I'm</h2>
            <h1> <span class="orange-txt">Lama</span> Amer</h1>
            <p class="intro">An imaginative Web Wizard hailing from Jordan. I craft digital experiences as a Web
                Developer, conjuring captivating websites that transcend boundaries. <br> My mission? To delight and
                dazzle both local aficionados and global wanderers with bespoke web solutions, turning visions into
                vibrant online realities.
            </p>

        </section>

        <section class="img-sec">
            <img src="pics/me4.png" alt="person">
        </section>

    </main>
    <main class="more-info">
        <section class="experince">
            <h2 class="orange-txt" id="e"> Experience </h2><br>
            <p class="text">I've gathered rich experience in computer science across several notable organizations.
                Starting at EY Tech, I specialized in software development, mastering coding principles and project
                management. Later at Tech3arabi ,I excelled as a systems analyst, delving deep into system architecture
                and innovative problem-solving. These diverse experiences have significantly contributed to my depth of
                knowledge and proficiency within the realm of computer science</p>
        </section>
        <section class="work-pl">
            <h2 class="orange-txt" id="e"> Working Places</h2><br><br>
            <p class="text">I've held impactful roles across distinguished organizations in the realm of computer
                science. Beginning my journey at<a href="https://www.pwc.com/gx/en.html" class="company"
                    target="_blank"> PWC </a> Tech as a Software Developer, I gained invaluable expertise in coding and
                project management. Transitioning to <a href="https://www.ey.com/en_us" class="company"
                    target="_blank">EY Company </a>, I thrived as a Systems Analyst, specializing in system architecture
                and innovative problem-solving. These experiences have shaped my proficiency and approach in the field
                of computer science.</p>
        </section>
        <section class="pro-pr">
            <h2 class="orange-txt" id="e"> Projects & Prizes</h2><br><br>
            <p class="text">A standout project I led at DEF Innovations involved creating an AI-driven recommendation
                engine, blending machine learning with intuitive interfaces. This innovation earned industry acclaim,
                winning the Best Innovator Award and Industry Excellence Award for its transformative impact on user
                engagement. These accolades validate my commitment to pushing boundaries in computer science.</p>
        </section>
    </main>

    <div class="do_flex">
        <form action="#" method="post">
            <fieldset>
                <legend> Your Review </legend>
                <br>
                <label for="name">Name : </label>
                <input type="text" id="name" name="name" required>
                <br><br>
                <label for="email">Email : </label>
                <input type="email" id="email" name="email" required>
                <br><br>

                <textarea id="review" name="review" cols="35" rows="4" placeholder="share with us your feedback !  "
                    required></textarea>
                <br><br>
                <label for="rate">Rating:</label>
                <div class="star-rating">
                    <input type="radio" id="rating5" name="rating" value="5" onclick="myFunction(this)">
                    <label for="rating5" class="far fa-star">★</label>

                    <input type="radio" id="rating4" name="rating" value="4"><label for="rating4">★</label>
                    <input type="radio" id="rating3" name="rating" value="3"><label for="rating3">★</label>
                    <input type="radio" id="rating2" name="rating" value="2"><label for="rating2">★</label>
                    <input type="radio" id="rating1" name="rating" value="1"><label for="rating1">★</label>
                </div>
                <br><br>
                <button class="buttonl" type="submit">Submit Review</button>

            </fieldset>
        </form>
        <div class="feedback-container">
        <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "webartisans";
    
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
    
                    $teamMember = "Lama";
    
                    $sql = "SELECT first_name, msg_date, message FROM teammessages WHERE team_member = '$teamMember'";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
    
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='feedback-box'>";
                            echo "<img class='unknown' src='pics/unknown.jpg'>";
                            echo "<div><i onclick='myFunction(this)' class='fa fa-thumbs-up'></i></div>";
                            echo "<div class='usr-name'>" . htmlspecialchars($row['first_name']) . "</div>";
                            echo "<div class='usr-msg'>" . htmlspecialchars($row['message']) . "</div>";
                            echo "<div class='usr-date'>" . htmlspecialchars($row['msg_date']) . "</div></div>";
                        }
                    } else {
                    echo "<div>No messages yet for " . $teamMember . "</div>";
                    }
    
                    $conn->close();
                ?>
        </div>

        <br><br>



      </div>
    </div>
        <hr>
    <section>
        <h3 id="contact-footer">For More Information You Can Contact With Me Through Social-Media</h3>
    </section>

    <section>
        <div class="social-media">
            <a href="https://www.linkedin.com/in/lama-amer-292bbb218?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"
                target="_blank"><i class="bx bxl-linkedin"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="bx bxl-instagram"></i></a>
            <a href="https://github.com/ialbluwi/psut-algorithms" target="_blank"><i class="bx bxl-github"></i></a>
        </div>
    </section>



</body>

</html>