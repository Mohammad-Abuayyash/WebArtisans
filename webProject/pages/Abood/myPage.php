<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdelrahman's Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #1F252E;
    font-family: 'Outfit', sans-serif;
    height: 100vh;
    width: 100%;
}

header{
    display: flex;
    height: 7vh;
    box-shadow: 0px -14px 20px rgb(164, 163, 163);
    justify-content: space-between;
    align-items: center;
    padding: 16px 50px;
    z-index: 1;
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

header>i{
    color: #7d2ae8;
    font-size: 25px;
}

.lst-item{
    margin: 15px 24px;
    font-size: 18px;
    font-weight: 600;
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
    color: #7d2ae8;
}

.bx {
    font-size: 30px;
    color: #7d2ae8;
}


@media screen and (max-width:700px) {
    header{
        justify-content: space-between;
        padding: 16px 1px;
    }
    
    .logo>img{
        width: 10vw;
        height: 5vh;
    }

    .logo>div{
        height: 5vh;
        margin-right: 1vw;
    }

    .logo>p{
        margin: 1.5vw;
        font-size: 3vw;

    }
    
    .lst-item>a,.lst-item>div>a,p {
        font-size: 3vw;
    }

    .lst-item{
        margin: 1vw;
    }
    

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
    background-color: #262c3a;
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


        .btn-talk {
            color: #fff;
            text-decoration: none;
            padding: 8px 35px;
            background: #7d2ae8;
            border-radius: 10px;
            border: 2px solid #7d2ae8;
            font-weight: 500;
            transition: .3s;

        }

        .btn-talk:hover {
            color: #7d2ae8;
            background: transparent;
        }

        .home {
            display: flex;
            padding: 30px 50px;
            justify-content: center;
            align-items: center;
            height: 70vh;
        }

        .content {
            max-width: 500px;
            color: white;
            height: fit-content;
        }

        .content h1 span {
            color: #7d2ae8;
        }

        .content h2 {
            font-size: 2em;
        }

        .content p {
            padding: 10px 0 40px 0;

        }

        p span {
            color: #7d2ae8;
        }

        .btn-group a {
            color: #fff;
            text-decoration: none;
            padding: 10px 40px;
            background: #7d2ae8;
            border-radius: 10px;
            border: 2px solid #7d2ae8;
            font-weight: 500;
            transition: .3s;
        }

        .btn-group a:hover:nth-child(1) {
            color: #7d2ae8;
            background: transparent;
        }

        .btn-group a:nth-child(2) {
            color: #7d2ae8;
            background: transparent;
            margin-left: 30px;
            padding: 10px 30px;
        }

        .btn-group a:hover:nth-child(2) {
            color: #fff;
            background: #7d2ae8;
        }

        .social-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            background: #7d2ae8;
            border-radius: 50%;
            margin-right: 22px;
            text-align: center;
            line-height: 35px;
            border: 1px solid #fff;
            outline: 2px solid #7d2ae8;
            transition: .3s;
        }



        .social-icons a:hover {
            transform: translateY(-5px);
        }

        .social-icons a i {
            color: #fff;
        }

        div.img{
            justify-content: center;
        }

        div.img>img{
            float: right;
            box-shadow: 0px 5px 20px #7d2ae8;
            border: 3px solid black;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            margin-bottom: 50px;
            overflow: hidden;
        }

        .my-skills{
            display: flex;
            padding: 30px 50px;
            justify-content: space-between;
            align-items: flex-start;
        }

        .experience {
            width: 33%;

        }

        .experience h2 {
            color: #7d2ae8;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .skills h2 {
            color: white;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .myinformation h2 {
            color: white;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .experience p {
            color: white;
            margin-bottom: 10px;
        }

        .experience-skills ul {
            list-style-type: none;
            padding: 0;
        }

        .skills li {
            display: inline-block;
            color: white;
            background-color: #7d2ae8;
            padding: 8px;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        .skills {
            width: 33%;
            text-align: center;
        
        }

        hr {
            border: 1px solid #7d2ae8;
            position: relative;
            top: 0;

        }

        .myinformation {
            width: 33%;
            text-align: center

        }

        .myinformation p {
            display: inline-block;
            color: white;
            background-color: #7d2ae8;
            padding: 8px;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        .msg {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 10px;
            background-color:  #1F252E;
            border-radius: 10px;
          
        }
        
        .msg img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 20px;
        }
        
        .usr-name {
            color: #7d2ae8;
            font-size: 16px;
          
          display:flex;
          padding-left: 400px;
        top: 6800px;
        }
        
        .usr-msg {
            color: white;
            font-size: 14px;
            margin: 5px 0;
        }
        
        .usr-date {
            color: #7d2ae8;
            font-size: 12px;
            margin: 0;
        }
        
        
        ul {
            padding: 0;
            list-style-type: none;
        }
        
        .msg-container {
            background-color: #1F252E;
              
            border-radius: 10px;
            overflow: hidden;
        }</style>
</head>

<body>
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
    <section class="home">
        <div class="content">
            <h2>Hi, I'm</h2>
            <h1> <span class="orange-txt">Abdelrahman </span>Abusaifain</h1>
            <p><span>I'm a Jordanian web designer and developer,</span> strives to leverage my skills to create
                meaningful digital experiences. Fueled by a desire to help people, my goals encompass crafting
                user-friendly solutions that enhance online interactions and make a positive impact.</p>
            <div class="btn-group">
                <a href="https://github.com/Abdelrahmanabusaifain20200482/abdelrahman-abusaifain">My cv</a>
                <a href="https://github.com/Abdelrahmanabusaifain20200482/coffee-menu">See Projects</a>
            </div>
        </div>
        <div class="img">
        <img id="personImage" src="pics/p.png" alt="person" onmouseover="changeImage('pics/p2.png')" onmouseout="changeImage('pics/p.png')">
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </section>
    <hr>
    <section class="my-skills">

        <div class="experience">
            <h2>Experience</h2>
            <p>Web Developer at XYZ Company</p>
            <p>Graphic Designer at ABC Agency</p>
            <p>ASM club 4 year</p>
        </div>
        <div class="skills">
            <h2>Skills</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>c#</li>
            </ul>
        </div>
        <div class="myinformation">
            <h2>My Information</h2>
            <p><strong>Location:</strong> Jordan</p>
            <p><strong>Email:</strong> abd.abood018@gmail.com</p>
            <p><strong>Phone:</strong> +962 798399402</p>
        </div>
    </section>
    <hr>
    <section id="users-messages">
    
            <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "webartisans"; 
    
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
    
                    $teamMember = "Abdelrahman";
    
                    $sql = "SELECT first_name, msg_date, message FROM teammessages WHERE team_member = '$teamMember'";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        echo "<ul>";
    
                        while ($row = $result->fetch_assoc()) {
                            echo "<li class='msg'>";
                            echo "<img src='../../pics/logo.png' alt='user'>";
                            echo "<h3 class='usr-name'>" . htmlspecialchars($row['first_name']) . "</h3>";
                            echo "<p class='usr-msg'>" . htmlspecialchars($row['message']) . "</p>";
                            echo "<p class='usr-date'>" . htmlspecialchars($row['msg_date']) . "</p></li><hr>";
                            

                        }
                        echo "</ul>";
                    } else {
                    echo "<li>No messages yet for " . $teamMember . "</li>";
                    }
    
                    $conn->close();
                ?>
        </section>
        <script>
    function changeImage(source) {
       var image= document.getElementById('personImage').src = source;
        image.classList.add('hover-style');

    }

    function handleMouseOut() {
            var image = document.getElementById('personImage');
            image.classList.remove('hover-style');
        }
      
    
</script>




<script>

document.addEventListener("DOMContentLoaded", function () {
  
    var experienceDiv = document.querySelector('.experience');
    var newParagraph = document.createElement('p');
    newParagraph.textContent = 'Software Engineer at Code Creatives Company - 2020 to Present';
    experienceDiv.appendChild(newParagraph);
});

</script>
</body>

</html>