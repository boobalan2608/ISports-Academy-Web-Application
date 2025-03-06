<?php
session_start();

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rname = $_POST['regname'];
    $ruser = $_POST['reguser'];
    $ph = $_POST['regph'];
    $gender = $_POST['gender'];
    $remail = $_POST['regemail'];
    $rpass = $_POST['regpass'];
    
    $con = mysqli_connect("sql105.infinityfree.com", "if0_35702551", "beliver2608", "if0_35702551_project");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query_username = "SELECT * FROM registerdetails WHERE username = '$ruser'";
    $result_username = mysqli_query($con, $query_username);
    if (!$result_username) {
        die("Query failed: " . mysqli_error($con));
    }

    if (mysqli_num_rows($result_username) > 0) {
        $message = "Username already taken! Please choose another one.";
    } else {
        $sql = "INSERT INTO registerdetails (regname, username, phone, gender, email, pass) VALUES ('$rname', '$ruser', '$ph','$gender', '$remail', '$rpass')";
        $v = mysqli_query($con, $sql);
        if ($v) {
            $redirect = "redirect";
            $redirectmsg = "redirectmsg";
            $motionbar = "motionbar"; 
            header("refresh:3;url=course.html");
        } else {
            $message = "Registration failed";
        }
    }

    mysqli_close($con);
}
?>
<html>
<head>
    <title>Register Form</title>
    <link rel="icon" href="Images/logo.png">
</head>
<body style="color:white">
    <?php if (!empty($message)) { ?>
    <script> alert('<?php echo $message; ?>');</script>
<?php } ?>
    <div class="dive">
        <nav>
            <h2>Welcome to Register Page</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/index.php#infohead">About Us</a></li>
                <li><a href="/index.php#body">Contact US</a></li>
            </ul>
        </nav>
    </div>
    <div class="<?php echo $redirect; ?>">
      <h3 class=" <?php echo $redirectmsg; ?>"></h3>
      <div class="<?php echo $motionbar; ?>"></div>
    </div>
    <center>
        <div>
            <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' id="myform">
                <table class="mt">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" placeholder="Enter Name" id="ip1" onkeypress="next(event, 'ip2')" class="clr" name="regname" required></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" placeholder="Enter Username" id="ip2" onkeypress="next(event, 'ip3')" class="clr" name="reguser" required></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" placeholder="Enter Phonenumber" id="ip3" class="clr" name="regph" maxlength="10" required onclick="next(event, 'gender')"></td>
                        <p id="error" style="color: red;"></p>
                    </tr>
                    <tr width="100%">
                        <td>Gender</td>
                        <td>
                            <select name="gender" id="gender" style="width:100%;" onclick="next(event, 'ip4')">
                            <option>--Select--</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Transgender</option>
                            </select>
                        </td>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" required placeholder="Enter Email " id="ip4" onkeypress="next(event, 'ip5')" class="clr" name="regemail" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" placeholder="Enter Password" id="ip5" class="clr" name="regpass" required></td>
                    </tr>
                    <tr>
                        <td><button type="button" id="button" onclick="check(event)" style="position: relative; left: 100px">Register</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <h5>Already have an account? <a href="login.php" class="log">Login</a></h5>
    </center>
</body>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .dive {
        /* margin-top: 300px;
        display: flex;
        flex-wrap: wrap; */
        background-color:  transparent;
    }

    body {
        background-image: url('Images/signup1.png');
        background-repeat: no-repeat;
        background-size: 100%;
        background-origin: initial;
        /* backdrop-filter: blur(5px); */
    }

    #button {
        border-radius: 12px;
        margin-top: 33px;
        margin-left: 40px;
        height: 40px;
        width: 100px;
        font-size: 14px;
        color: white;
        background: transparent;
        outline: none;
        border: 2px solid white;
        cursor: pointer;
        transition: .3s;
    }

    #button:hover {
        background: white;
        color: #000000;
    }

    .mt {
        margin-top: 100px;
        height: 400px;
        width: 400px;
        position: relative;
        background: transparent;
        border: 2px solid white;
        border-radius: 20px;
        padding: 10px;
    }
    .mt:hover{
        box-shadow: 1px 1px 10px white,-1px -1px 10px white;
    }
    tr {
        height: 40px;
    }

    input {
        border: none;
        border-bottom: 1px solid white;
        background-color: transparent;
        outline: none;
        width: 100%;
        box-sizing: border-box;
    }

    .clr {
        color: white;
    }

    .log {
        color: white;
        margin-top:10px;
        text-decoration: underline;
    }

    td {
        color: white;
        font-size: 15px;
    }

    h5 {
        display: inline;
    }

    ul,
    li,
    h2 {
        display: inline;
    }

    nav {
        margin-top: 10px;
        text-align: center;
        color: black;
        height: 40px;
    }

    ul {
        margin-left: 40%;
    }

    li {
        padding: 10px;
    }

    li:hover {
        color: black;
    }

    h2 {
        color: white;
        padding: 20px;
    }

    a{
        color: white;
        text-decoration: none;
    }
    a:hover{
        color: black;
    }
    .log{
        margin-top: 10px;
        margin-left:2px;
        transition:.5s;
    }
    .log:hover{
        color: white !important;
        font-size:20px;
    }
    #gender{
        border:none;
        outline:none;
        background-color:transparent;
        border-bottom:1px solid white;
        color:white;
    }
    option{
        color:black;
    }
    .redirect{
      background-color: white;
      animation: boxin .4s forwards ease-in-out;
    }
    @keyframes boxin{
      from{
        transform: translateX(-100%);
      }
      to{
        transform: translateX(-0%);
      }
    }
    .redirectmsg{
      display: block;
      color: rgb(0, 0, 0);
    }
    .redirectmsg::after{
      content: 'Registration Success ! Redireting..';
    }
    .motionbar{
      height: 6px;
      width: 100%;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
      background-color: rgb(2, 197, 2);
      animation: motion 20s forwards .7s;
    }
    @keyframes motion{
      from{
        width: 100%;
      }
      to{
        width: 0%;
      }
    }
</style>
<script>
    function next(event, nextInputId) {
            if (event.keyCode === 13) { // Check if Enter key is pressed (key code 13)
                event.preventDefault(); // Prevent default form submission
                document.getElementById(nextInputId).focus(); // Move focus to the next input field
            }
        }
    function check(event) {
        event.preventDefault();
        var input1Value = document.getElementById('ip1').value;
        var input2Value = document.getElementById('ip2').value;
        var input3Value = document.getElementById('ip3').value;
        var input4Value = document.getElementById('ip4').value;
        var input5Value = document.getElementById('ip5').value;
        var button = document.getElementById('button');
        var ph = document.getElementById('ip3').value;
        var emailinput = document.getElementById('ip4').value;
        var emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var form = document.getElementById('myform');

        if (input1Value && input2Value && input3Value && input4Value && input5Value) {
            if (/^\d{10}$/.test(ph)) {
                if (emailReg.test(emailinput)) {
                    button.disabled = false;
                    form.submit();
                } else {
                    alert("Invalid Email! Please enter a valid Email!");
                }
            } else {
                alert("Please enter a 10-digit Phone Number");
            }
        } else {
            alert("Please Fill All Fields!");
        }
    }
</script>
</html>