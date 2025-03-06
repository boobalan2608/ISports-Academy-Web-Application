<?php
$con = mysqli_connect("sql105.infinityfree.com", "if0_35702551", "beliver2608", "if0_35702551_project");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$sql1 = "SELECT * FROM tournament";
$result1 = mysqli_query($con, $sql1);
$sql2 = "SELECT * FROM classes";
$result2 = mysqli_query($con, $sql2);
$sql3 = "SELECT * FROM events";
$result3 = mysqli_query($con, $sql3);

if (!$result1) {
    echo "Error: " . mysqli_error($con);
    exit();
}

// Array to store rows
$rows = array();

// Fetch each row and store in the array
while ($row = mysqli_fetch_assoc($result1)) {
    $rows[] = $row;
}

// Close connection
mysqli_free_result($result1);
mysqli_close($con);

// Accessing rows
// Access first row
$firstRow = $rows[0];
$title1 = $firstRow['ttitle'];
$desc1 = $firstRow['tdescription'];
$details1 = $firstRow['tdetails'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="home.css">
    <title>iSports Academy Dashboard</title>
    <link rel="icon" href="Images/logo.png">
</head>

<body onload="showcontent('details')">
    <nav class="navbar">
        <div class="navbar-list">
            <img src="Images/logo.png" width="40"
                height="40" alt="logo">
            <h1 style = "color:white;">iSports Academy</h1>
        </div>
        <span><a class="menubar"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAExJREFUSEtjZKAxYKSx+QyjFhAM4QEJov8EnYVfAYqjsfmA5hZQ6AFU7QMSBzT3Ac3jgOYW0DyIhr4FNI8Dmlsw9ONg1AcoIUDz0hQAbegGGXzv/l0AAAAASUVORK5CYII="  style="color:white;"/></a></span>
    </nav>
    <div class="slidemenu">
        <div class="slidemenubar">
            <a href="#" class="xmark" style="color:white;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAAAXNSR0IArs4c6QAAAItJREFUSEvt1LENwkAMRuEvA1DRoFQsxDTpaMI0VCnZgR1YgBnSoaOIEDqi4CJQ2NI1p996uif7GitVsxJHgsKmI+o6bHDGbSk5ArpjhwMuCVpqoORS3dPWp6k7of/G50u2qG3fe38O2qOcWg3Y4ohrJTDW7nNhc4+mWfnrYQjtceRFCZr9VEN65poe35YiG0NdjzEAAAAASUVORK5CYII=" style="rotate:45deg;"/></a>
            <a href="https://bcaproject.free.nf/index.php#infohead" class="slidemenu-list">About</a>
            <a href="https://bcaproject.free.nf/index.php#body" class="slidemenu-list">Contact us</a>
            <a href="/payment.php" class="slidemenu-list">Payment</a>
            <div class="logout">
                <a href="/" class="logoutbtn">Logout <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAM1JREFUSEvdlT0KwkAQRl/OIQhiobcJeA1bG2+gZ9BzeIbUNnaiIHgHG+UDN4ToOsvEVci2M/O9+UlmCjK/IrM+PweUwAqYOis7AAtgF+LbFVyAgVM8hB2BcQxwfxq8rXuJbwv1H7AB5sAtMiezRdZ8JVABM+D6xvkrAOlKXBDBms8EBAerEtnVJrVr23D+P8DKPGToblEKoNOQrR+t82dqAVIqlE+9Ifq3Ks7A0OqDYT8Bo9i61sFZAxMnZA8sPx0cp248zHtYkhPJDngAqgQ2GSwkQI0AAAAASUVORK5CYII=" style="position:absolute;bottom:205px;right:110px;"/></a>
            </div>
        </div>
    </div>

    <div class="sri" onclick="showcontent('details')">
        <h1 onclick="showcontent('details')" class="srielement"><i class='bx bxs-calendar'></i> Schedules</h1>
    </div>
    <div class="sri" onclick="showcontent('events')">
        <h1 onclick="showcontent('events')" class="srielement"><i class='bx bx-medal'></i> Events </h1>
    </div>
    <div class="sri" onclick="showcontent('tor')">
        <h1 onclick="showcontent('tor')" class="srielement"><i class='bx bx-trophy'></i> Tournaments</h1>
    </div>
    <div class="sri" onclick="showcontent('coach')">
        <h1 onclick="showcontent('coach')" class="srielement"><img src="Images/coach.png" width="70" height="70" style="mix-blend-mode: multiply;position:absolute;top: 42px; left: 2px;color:#e0009d;"> Coaches </h1>
    </div>
    <div class="sri" onclick="showcontent('fees')">
        <h1 onclick="showcontent('fees')" class="srielement"><i class='bx bxl-paypal'></i> Fees & Payments</h1>
    </div>

    <div class="Schedule">
        <h1 class="h">Places</h1>
        <div class="details">
            <div class="lfs">
                <img src="Images/school.jpg" alt="image" width="100" height="100" class="school">
                <h1 class="s1"> LITTLE FLOWER MATRICULATION SCHOOL </h1>
                <h1 class="title"> Timings </h1>
                <h1 class="ltime"> <span style="color:rgb(3, 148, 10);">Morning :</span> 6:00 AM to 7:30 AM </h1>
                <h1 class="lday"> <span style="color:rgb(3, 148, 10);">Days :</span> Thursday, Saturday, Sunday </h1>
            </div>
            <div class="GTM">
                <img src="Images/school.jpg" alt="image" width="100" height="100" class="school">
                <h1 class="s1"> THIRUVLLUVAR HIGHER SECONDARY SCHOOL </h1>
                <h1 class="title"> Timings </h1>
                <h1 class="ltime"> <span style="color:rgb(3, 148, 10);">Morning :</span> 6:00 AM to 7:30 AM </h1>
                <h1 class="lday"> <span style="color:rgb(3, 148, 10);">Days :</span> Tuesday, Saturday, Sunday </h1>
            </div>
            <div class="tvs">
                <img src="Images/school.jpg" alt="image" width="100" height="100" class="school">
                <h1 class="s1"> GTM COLLEGE GROUND </h1>
                <h1 class="title"> Timings </h1>
                <h1 class="ltime"> <span style="color:rgb(3, 148, 10);">Morning :</span> 6:00 AM to 7:30 AM </h1>
                <h1 class="lday"> <span style="color:rgb(3, 148, 10);">Days :</span> Tuesday, Friday, Sunday </h1>
            </div>
            <div class="vn">
                <img src="Images/school.jpg" alt="image" width="100" height="100" class="school">
                <h1 class="s1"> Variyaar Nagar Down</h1>
                <h1 class="title"> Timings </h1>
                <h1 class="ltime"> <span style="color:rgb(3, 148, 10);">Evening :</span> 5:30 PM to 7:00 PM </h1>
                <h1 class="lday"> <span style="color:rgb(3, 148, 10);">Days :</span> Tuesday, Friday, Sunday </h1>
            </div>
        </div>

        <div class="events">
            <h1 class="h1">Event Updates</h1>
            <div class="details1">
                <div class="lfs1">
                    <h1 class="ru"> Upcomeing Events</h1>
                </div>
                <div class="GTM1">
                    <h1 class="ru"> RECENT UPDATES</h1>
                    <img src="Images/belt.jpg" alt="image" width="200" height="100" class="schools1">
                    <h1 class="upgrade">Belt Upgrade Test</h1>
                    <h1 class="p"> <span style="color:rgb(3, 148, 10);">Place :</span> GTM College Ground</h1>
                    <h1 class="dt"> <span style="color:rgb(3, 148, 10);"> Date & Time :</span> Morning 5:30 AM to 9:00
                        AM / 22-02-2023 </h1>
                </div>
                <div class="tvs1">
                    <h1 class="ru"> RECENT UPDATES</h1>
                    <img src="Images/parents.jpg" alt="image" width="200" height="100" class="schools1">
                    <h1 class="upgrade">Parents Meeting</h1>
                    <h1 class="p"> <span style="color:rgb(3, 148, 10);">Place :</span> Indoor Class</h1>
                    <h1 class="dt1"> <span style="color:rgb(3, 148, 10);"> Date & Time :</span> Evening 5:30 PM to 7:00
                        PM / 21-01-2022 </h1>
                </div>
                <div class="vn1">
                    <h1 class="ru"> RECENT UPDATES</h1>
                    <img src="Images/online-class.jpg" alt="image" width="200" height="100" class="schools1">
                    <h1 class="upgrade">Online Karate Class</h1>
                    <h1 class="p"> <span style="color:rgb(3, 148, 10);">Place :</span>Google Meet </h1>
                    <h1 class="dt1"> <span style="color:rgb(3, 148, 10);"> Date & Time :</span> Morning 5:30 AM to 7:00
                        AM / 20-12-2021 </h1>
                </div>
            </div>
        </div>
        <div class="tor">
            <h1 class="h1">Tournaments Updates</h1>
            <div class="details1">
                <div class="lfs1">
                    <h1 class="ru"> Upcomeing Tournaments</h1>
                    <h1 class="upgrade"><?php echo $title1; ?></h1>
                    <h1 class="p"> <span style="color:rgb(3, 148, 10);"></span><?php echo $desc1; ?></h1>
                    <h1 class="dt"> <span style="color:rgb(3, 148, 10);"><?php echo $details1; ?></h1>
                </div>
                <div class="GTM1">
                    <h1 class="ru"> RECENT UPDATES</h1>
                    <img src="Images/price.jpg" alt="image" width="200" height="100" class="schools1">
                    <h1 class="upgrade"> Tournament Event</h1>
                    <h1 class="p"> <span style="color:rgb(3, 148, 10);">Place :</span> Thirupathur</h1>
                    <h1 class="dt"> <span style="color:rgb(3, 148, 10);"> Date :</span> 18-02-2024</h1>
                </div>
                <div class="tvs1">
                    <h1 class="ru"> RECENT UPDATES</h1>
                    <img src="Images/fight.jpg" alt="image" width="200" height="100" class="schools1">
                    <h1 class="upgrade"> Tournament Event</h1>
                    <h1 class="p"> <span style="color:rgb(3, 148, 10);">Place :</span>Delhi </h1>
                    <h1 class="dt"> <span style="color:rgb(3, 148, 10);"> Date :</span> 20-12-2023 </h1>
                </div>
                <div class="vn1">
                    <h1 class="ru"> RECENT UPDATES</h1>
                    <img src="Images/tornament.jpg" alt="image" width="200" height="100" class="schools1">
                    <h1 class="upgrade"> Tournament Event</h1>
                    <h1 class="p"> <span style="color:rgb(3, 148, 10);">Place :</span> Chennai</h1>
                    <h1 class="dt"> <span style="color:rgb(3, 148, 10);"> Date :</span> 22-02-2023 </h1>
                </div>
            </div>
        </div>
        <div class="coach">
            <h1 class="h1">Coaches Details</h1>
            <div class="details1">
                <div class="lfs1">
                    <h1 class="ru"> Shihan</h1>
                    <img src="Images/sampath.jpg" alt="image" width="200" height="150" class="schools1">
                    <h1 class="upgrade1"> M. Sampath Kumar</h1>
                    <h1 class="p1">Founder & President - Hikowashi</h1>
                    <h1 class="dt">Asian Judge - KAI</h1>
                </div>
                <div class="GTM1">
                    <h1 class="ru"> Renshi</h1>
                    <img src="Images/yuvaraj.jpeg" alt="image" width="200" height="150" class="schools1">
                    <h1 class="upgrades"> R. Yuvaraj</h1>
                    <h1 class="p1">Founder & President - Arima</h1>
                    <h1 class="dt2"> National Refree & Judge - HKAI</h1>
                </div>
                <div class="tvs1">
                    <h1 class="ru"> Sensei</h1>
                    <img src="Images/rajesh.jpg" alt="image" width="200" height="150" class="schools1">
                    <h1 class="upgrades"> R. Rajesh</h1>
                    <h1 class="p1">National Refree - KAI</h1>
                    <h1 class="dt2"> 4th Don Black Belt </h1>
                </div>
                <div class="vn1">
                    <h1 class="ru"> Sensai</h1>
                    <img src="Images/srihari.jpg" alt="image" width="200" height="150" class="schools1">
                    <h1 class="upgrades"> S. Sri Hari</h1>
                    <h1 class="p1">National Judge - KAI</h1>
                    <h1 class="dt2">2nd Don Black Belt </h1>
                </div>
            </div>
        </div>

        <div class="fees">
            <h1 class="h1">Fees Details</h1>
            <div class="details1">
                <div class="fee">
                    <h1 class="month">Monthly Fees Details</h1>
                    <h1 class="fd">1. Sunday only - Rs. 300/-</h1>
                    <h1 class="fd">2. Saturday & Sunday only - Rs. 500/-</h1>
                    <h1 class="fd">3. Weekly 3 Days Class - Rs. 800/-</h1>
                    <h1 class="fd">4. Everday in Month - Rs. 1000/-</h1>
                </div>
                <div class="pay">
                    <h1 class="month">Payment</h1>
                    <h1 class="mp">Click Here to Make Your Payment</h1>
                    <div class="ch" onclick="window.open('payment.php')">
                        <h1 class="click" onclick="window.open('payment.php')">Click Here</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:20px; width:20px; height:20px;"></div>
        <?php include "homefotter.html"; ?>
    <script src="homepage.js"></script>
</body>

</html>