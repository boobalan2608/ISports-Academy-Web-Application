<?php 
$con = mysqli_connect("sql105.infinityfree.com", "if0_35702551", "beliver2608", "if0_35702551_project");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $query = "INSERT INTO contact (username, email, message) VALUES ('$username', '$email', '$message')";
    $sql = mysqli_query($con, $query);
    if ($sql) {
        $redirect = "redirect";
        $redirectmsg = "redirectmsg";
        $motionbar = "motionbar";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IS Academy</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="regstyle.css">
    <link rel="icon" href="Images/logo.png">
</head>
<body onscroll="sidemenu.style.left='-50%'">
    <nav class="navbar">
        <h2 style="color:black;">iSports Academy</h2>
        <div class="navbarlist">
            <p class="list-items"><a href=".contact">Contact</a></p>
            <p class="list-items"><a href=".infohead">About us</a></p>
            <p class="user" onclick="loginpage()"><i class="fa-solid fa-user"></i></p>
        </div>
        <div class="menubar" onclick="show()">
            <p style="color:black;">
                <i class="fa-solid fa-bars"></i>
            </p>
        </div>
        <p class="phuser" onclick="loginpage()"><i class="fa-solid fa-user"></i></p>
    </nav>
    </div>
    <div class="sidemenubar">
        <div>
            <p style="text-align:right; color:black;">
                <i class="fa-solid fa-xmark" style=" border: 2px solid white;" onclick="hidemenubar()"></i>
            </p>
        </div>
        <div class="sidemenu-list">
            <p class="side-list-items"><a href="login.php">Login</a></p>
            <p class="side-list-items"><a href=".infohead">Collections</a></p>
            <p class="side-list-items"><a href=".contact">Contact US</a></p>
        </div>
    </div>
    </div>
    <div class="popupalert">
    <div class=" <?php echo $redirect; ?>">
      <h3 class="<?php echo $redirectmsg; ?>"></h3>
      <div class="<?php echo $motionbar; ?>"></div>
    </div>
    </div>
    <!--Header-->
        <div class="header">
            <div>
                <img  class="headimg" src="Images/logo.png">
            </div>
            <div class="headerdescription">
                <h1 style="font-size: 90px; margin-bottom: 10px;" class="headtlt">iSports <span>Academy</span></h1>
                <h1 style="font-size: 41px; margin-bottom: 10px; margin-left:-20px; text-align:center;" class="phheadtlt">iSports <span>Academy</span></h1>
                <h2 class="titledesc">Imaginary Sports Academy offers a holistic approach to physical and mental well-being through karate,yoga and Archery with live sessions and expert Coaching</h2>
                <h2 class="phtitledesc">Holistic Approach | Live Sessions | Expert Coaching</h2>
                <ul style="margin-top: 20px;" type="square" class="phlistitem">
                    <li style="font-size: 16px; margin-top: 15px; font-weight: bold;text-align: justify;">Emphasizes a holistic approach to physical and mental well-being</li>
                    <li style="font-size: 16px; margin-top: 15px; font-weight: bold; text-align: justify;">Ensures high-quality instruction & expert coaches</li>
                    <li style="font-size: 16px; margin-top: 15px; font-weight: bold;text-align: justify;">Explore different interests and find the practices that best suit their preferences and goals.</li>
                </ul>
                <!-- <p>Get Ready to go! <a href="#">Here</a></p> -->
                <div class="startbutton" onclick="startbtn()">
                    <div class="box">S</div>
                    <div class="box">T</div>
                    <div class="box">A</div>
                    <div class="box">R</div>
                    <div class="box">T</div>
                </div>
                <!-- <button class="headbtn">Get Start</button> -->
            </div>
            <img src="Images/wave.png" class="waveimg" width="200" height="200">
        </div>
        <h2 style="text-align: center; padding: 10px;">Welcome to our iSports Academy! Here You can Enhance Your Skills!</h2>
        <!--body content-->

        <div class="bodycontent">
            <div class="img1"> 
                <img src="Images/indexkarate.png">
                <h4>Karate is the canvas, and you are the artist. Join the class and paint a masterpiece of strength, courage, and personal growth</h4>
            </div>
            <div class="img1">
                <img src="Images/indexarcher.jpeg">
                <h4>Archery isn't just a sport; it's a meditation. Join the archery class and find serenity in the draw, focus in the release, and success in hitting your life goals</h4>
            </div>
            <div class="img1">
                <img src="Images/indexyoga.png">
                <h4>In the practice of yoga, discover the art of finding stillness in motion. Join the yoga class and let each asana be a step toward a more balanced and serene existence</h4>
            </div>
        </div> 
        <!--get start-->
        <div class="getstartbtn">
            <button class="regbutton" role="button" onclick="btn()"><span class="text">Get Start</span><span style="margin-top: 7px; font-size: 25px;">Journey</span></button>
        </div>
        <!--infomation area-->
        <h2 class="infohead" id="infohead">Here the More information about our products </h2>
        <div class="informationarea">
            <div class="infocontent1">
                <img src="Images/indexkarate.png"  width="850" height="310">
                <h4> Learning karate offers numerous physical, mental, and emotional benefits, making it a valuable pursuit for individuals seeking                            personal development, self-defense skills, and improved well-being. Karate training typically involves a combination of                                  physical conditioning, technique practice, and mental discipline.</h4>
    
            </div>
            <div class="infocontent2">
                <img src="Images/indexyoga.png" width="300">
                <h4>Learning Silambam offers a holistic experience that encompasses physical, mental, and cultural dimensions, making it a rewarding pursuit for individuals seeking self-improvement, cultural enrichment, and practical self-defense skills. Silambattam is essentially another term for Silambam, the traditional Indian martial art originating from Tamil Nadu. Silambam focuses on fighting with a long stick, also known as silambam.</h4>
                
            </div>
            <div class="infocontent3">
                <img src="Images/indexarcher.jpeg" width="300" height="300">
                <h4>Archery is a versatile and rewarding activity that offers numerous physical, mental, and social benefits. Whether someone is interested in competitive sports, outdoor recreation, or personal development, archery provides a fulfilling and enjoyable pursuit. Archery is the sport, practice, or skill of using a bow to shoot arrows. It's an ancient activity that has been practiced for hunting, warfare, and sport for thousands of years.
                </h4>
                
            </div>
        </div>
        <!-- contact us -->
    <div class="body" id="body">
        <div class="contact"><h3>Contact us</h3></div>
        <div class="container">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">Thiruvalluvar School</div>
                        <div class="text-two">Pinchanoor,GYM.</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+916381724349</div>
                        <div class="text-two">+919345982447</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">iSportsAcademy@gmail.com</div>
                        <div class="text-two">ArimasportsAcademy@gmail.com</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Send us a message</div>
                    <p>If you have any work from me or any types of quries related to my tutorial, you can send me
                        message
                        from here.
                        It's my pleasure to help you.</p>
                    <form action="index.php" method="post" name="contact" id="contactform">
                        <div class="input-box">
                            <input type="text" placeholder="Enter your name" name="username" />
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Enter your email" name="email"/>
                        </div>
                        <div class="input-box message-box">
                            <textarea placeholder="Enter your message" name="message"></textarea>
                        </div>
                        <div class="button">
                            <input type="button" value="Send Now" onclick= "document.getElementById('contactform').submit(); hidepopup()"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <?php include "fotter.html"; ?>
</body>
<script src="home.js"></script>
</html>