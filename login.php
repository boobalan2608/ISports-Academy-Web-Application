<?php
$server = "sql105.infinityfree.com";
$user = "if0_35702551";
$passcode = "beliver2608";
$dbname = "if0_35702551_project";
$conn = new mysqli ($server,$user,$passcode,$dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputregname = $_POST["username"];
    $inputpass = $_POST["password"];
    $sql = "SELECT * FROM registerdetails WHERE username = '$inputregname' AND pass = '$inputpass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // echo '<center>';
        // echo '<div style = "text-align:center; color:black; background-color: greenyellow; maargin-top: 50px;">';
        // echo "<h1>Login Successful. Welcome " . $row["username"] . "! Redirecting..!</h1>";
        // echo '</div>';
        // echo '</center>';
        $redirect = "redirect";
        $redirectmsg = "redirectmsg";
        $motionbar = "motionbar"; 
        header("refresh:3;url=home.php");
    }else {
        echo '<center>';
        echo '<div style = "text-align:center; color:black; background-color: greenyellow; maargin-top: 50px;">';
        echo "<h1>Invalid Email or Password! Please Try to Login Again</h1>";
        echo '</div>';
        echo '</center>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN PAGE</title>
  <link rel="icon" href="Images/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    html{
        margin:0;
        padding: 0;
    }
    body {
      /* background: linear-gradient(181deg, rgb(2, 0, 97) 15%, rgb(97, 149, 219) 158.5%); */
      background: url('Images/loginbg.png');
      height: 100vh;
      width: 100%;
      margin: 0;
      background-repeat: no-repeat;
      background-attachment: fixed;
      backdrop-filter: blur(1mm);
      background-size: cover;
    }
    .navdiv{
        margin: 0;
    }
    nav{
        display: flex;
        width: 100%;
        height: 50px;
        align-items: center;
        background-color: white;
        gap: 10px;
        marign-top: 0;
        /* box-shadow: 0 5px 5px white; */
    }
    nav > h2{
        margin: 0;
    }
    .redirect{
      background-color: white;
      animation: box .4s forwards ease-in-out;
    }
    @keyframes box{
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
      content: 'Login Successful Redirecting!';
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
    table {
      width: 300px;
      margin-top: 80px;
      padding: 30px;
      /* border: 1px solid white; */
      background: transparent;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.805);
    }

    // table:hover {
    // }

    td {
      padding: 10px 2px;
    }
    label{
        color: white;
    }
    input {
      width: 100%;
      color:white;
      box-sizing: border-box;
      margin-bottom: 10px;
      border: none;
      background-color: transparent;
      outline: none;
      border-bottom: 1px solid black;
    }

    button {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      background-color: transparent;
      color: white;
      border: 2px solid white;
      border-radius: 25px;
      cursor: pointer;
    }

    button:hover {
      background-color: white;
      color: black;
      transition: .5s;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: white;
    }

    h4 {
      
      color: white;
      text-align: center;
      margin-top: 20px;
    }

    h4 button {
      padding: 10px;
      margin-top: 10px;
      background-color: transparent;
      color: white;
      border: 2px solid white;
      border-radius: 25px;
      cursor: pointer;
    }

    h4 button:hover {
      background-color: white;
      color: black;
    }
    .signup{
      margin: 5px;
      text-decoration: none;
      color: rgb(92, 124, 238);
      transition: .5s;
    }
    .signup:hover{
      text-decoration: underline;
      font-size: 23px;
    }
    form{
      /* margin-top: 8%; */
      padding: 0%;
      display: flex;
      align-items: center;
      justify-content: center;

    }
    .forgotbtn{
        text-decoration:none;
        color: white;
        font-size: 14px;
    }
    .forgotbtn:hover{
        color: blue;
    }
    @media screen and (max-width:500px){
      body{
        margin: 0%;
        padding: 0%;
        background-image: url(Images/images.jpg);
        background-size: cover;
        height: 100vh;
        overflow: hidden;
      }
      h3{
        display: block;
        padding-left: 10px;
        padding-right: 10px;
        border: 1px solid white;
        border-radius: 10px;

      }
      form{
      margin-top: 33%;
      padding: 0%;
      display: flex;
      justify-content: center;
      }
      input{
          color: white;
      }
      .signup{
      color: greenyellow;
    }
    .forgotbtn{
        text-decoration:none;
        color: blue;
        font-size: 15px;
    }
  </style>
</head>
<body>
    <div class="navdiv">
        <nav>
            <img src="Images/logo.png" width="40" height="40">
            <h2 style="color: black;">iSportsAcademy</h2>
        </nav>
    </div>
    <div class="<?php echo $redirect; ?>">
      <h3 class=" <?php echo $redirectmsg; ?>"></h3>
      <div class="<?php echo $motionbar; ?>"></div>
    </div>
  <form method="post" action="login.php" onsubmit="handlesubmit(event)">
  <table>
    <tr>
      <td colspan="2">
        <h2><i class="fa-solid fa-user" style="margin-left: 5px;"></i> Login</h2>
      </td>
    </tr>
    <tr>
      <td>
        <label for="username">Username:</label>
      </td>
      <td>
        <input type="text" id="username" name="username" required>
      </td>
    </tr>
    <tr>
      <td>
        <label for="password">Password:</label>
      </td>
      <td>
        <input type="password" id="password" name="password" required>
      </td>
    </tr>
    <tr>
        <td colspan="2">
            <a href="forgot.php" class="forgotbtn">Forgot password?
        </td>
    </tr>
    <tr>
      <td colspan="2">
        <button type="submit">Login</button>
      </td>
    </tr>
  </table>
  </form>
  <h4>Don't have an account?<a href="register.php" class="signup">Sign up</a></h4>
</body>
</html>
