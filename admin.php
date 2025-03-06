<?php
$con = mysqli_connect("sql105.infinityfree.com", "if0_35702551", "beliver2608", "if0_35702551_project");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["ttitle"];
    $description = $_POST["tdescription"];
    $details = $_POST["tdetails"];
    $sql1 = "INSERT INTO tournament (ttitle,tdescription,tdetails) VALUES ('$title','$description','$details')";
    $result1 = mysqli_query($con, $sql1);
    if($result1){
        echo "<script>alert('success');</script>";
        header("refresh:2;url=showcontent.php");
    }
    $ctype = $_POST["ctype"];
    $ctiming = $_POST["ctiming"];
    $clocation = $_POST["clocation"];
    $sql2 = "INSERT INTO classes (ctype,ctiming,clocation) VALUES ('$ctype','$ctiming','$clocation')";
    $result2 = mysqli_query($con, $sql2);
    $etitle = $_POST["etitle"];
    $eplace = $_POST["eplace"];
    $edetails = $_POST["edetails"];
    $sql3 = "INSERT INTO events (etitle,eplace,edetails) VALUES ('$etitle','$eplace','$edetails')";
    $result3 = mysqli_query($con, $sql3);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Admin Panel</title>
    <link rel="icon" href="Images/logo.png">
</head>

<body onload="showcontent('tourna')">
    <nav>
        <div class="navbar">
            <img src="Images/logo.png" alt="" width="30" height="30">
            <h2>iSports Academy</h2>
        </div>
    </nav>
    <!-- admin panel -->
    <div class="adminpanel">
        <div class="titlecard">
            <h2 class="card">ADMIN PANEL FOR ISPORTS ACADEMY</h2>
        </div>
        <div class="slidemenu">
            <h2 class="menulist" onclick="showcontent('tourna')">Tournaments</h2>
            <h2 class="menulist" onclick="showcontent('class')">Classes</h2>
            <h2 class="menulist" onclick="showcontent('events')">Events</h2>
            <h2 class="menulist">Info</h2>
            <h2 class="menulist">settings</h2>
        </div>
        <form method="post" action="admin.php" name="contentform">
            <div class="contentarea">
                <div class="tourna-menu" name="tourna">
                    <label for="" style="font-size: 23px;">Tittle:</label>
                    <input type="text" name="ttitle">
                    <label for="" style="font-size: 23px;">Description:</label>
                    <input type="text" name="tdescription"><br>
                    <label for="" class="details">Details</label><br>
                    <textarea cols="30" rows="10" name="tdetails"></textarea>
                </div>
                <div class="class-menu">
                    <label for="" style="font-size: 20px;">Class type:</label>
                    <input type="text" name="ctype">
                    <label for="" style="font-size: 20px;">Class Timing:</label>
                    <input type="text" name="ctiming"><br>
                    <label for="" class="details">Location/Landmark:</label><br>
                    <textarea cols="30" rows="10" name="clocation"></textarea>
                </div>
                <div class="events-menu">
                    <label for="" style="font-size: 20px;">Event:</label>
                    <input type="text" name="etitle">
                    <label for="" style="font-size: 20px;">Place&Time:</label>
                    <input type="text" name="eplace"><br>
                    <label for="" class="details">Details</label><br>
                    <textarea cols="30" rows="10" name="edetails"></textarea>
                </div>
                <button class="addpostbtn">Add Post</button>
            </div>
        </form>
    </div>
    <div class="loginkey">
        <h1>Enter the secert key to continue</h1>
        <input type="text" class="secertkey">
        <button class="keybtn" onclick="verification()">Verify</button>
    </div>
    <div class="popupmsg">
        <h4>Success</h4>
    </div>
    <script src="admin.js"></script>
</body>

</html>