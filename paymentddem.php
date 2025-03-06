<?php
$con = mysqli_connect("sql105.infinityfree.com", "if0_35702551", "beliver2608", "if0_35702551_project");
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["paymentss"])) {
    $file = $_FILES["paymentss"];
    $utr = $_POST['utrno'];
    
    // Check if file is uploaded successfully
    if ($file["error"] === UPLOAD_ERR_OK) {
        // Read the file content
        $imageData = file_get_contents($file["tmp_name"]);
        
        // Establish database connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // Insert the image data into the database
        $sql = "INSERT INTO payment (utrno,paymentss) VALUES (?,?)";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $utr, $imageData);
        $result = mysqli_stmt_execute($stmt);
        
        if ($result) {
            echo "<script>alert('Image uploaded successfully.');</script>";
        } else {
            echo "Error uploading image: " . mysqli_error($con);
        }
        
        // Close database connection
    } else {
        echo "File upload error: " . $file["error"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT AREA</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="payment.css">
    <link rel="icon" href="Images/logo.png">
</head>

<body>
    <div class="payment">
        <div class="head">
            <h2 class="payhead">Payment</h2>
        </div>
        <div class="options">
            <h2>Select the payment option</h2>
            <img src="Images/upi.png" alt="" width="40" height="40" class="upiimg" onclick="goto('upi')">
            <h3 onclick="goto('upi')" id="gotoupi">UPI</h3>
            <img src="Images/bank.png" alt="" width="35" height="35" class="bankimg" onclick="goto('bank')">
            <h3 onclick="goto('bank')" id="gotobank">BANK</h3>
            <img src="Images/qrcode.jpg" alt="" width="40" height="40" class="qrimg" onclick="goto('qr')">
            <h3 onclick="goto('qr')" id="gotoqr">QRCODE</h3>
        </div>
        <h5 style="margin-left: 10px;">pay with:</h5>
        <div class="payment-method">
            <input type="radio" id="upi" name="payment" value="UPI" onclick="upipayment()">
            <label for="upi">UPI</label>
            <input type="radio" id="bank" name="payment" value="BANK" onclick="bankpayment()">
            <label for="bank">BANK</label>
            <input type="radio" id="qr" name="payment" value="QR" onclick="qrpayment()">
            <label for="qr">Qrcode</label>
        </div>
        <div class="upimethod">
            <h2 style="margin-bottom: 20px; padding: 0px 20px 10px 10px;">Select the UPI Method: </h2>
            <div class="paymethod1" onclick="toggle('paytm')">
                <h3 style="color: #00B9F1; font-weight: bold; padding: 5px; cursor: pointer;">Paytm</h3>
                <h4 class="paytmid" id="paytmid">UPI ID: 6381724349@paytm<i class="fa-solid fa-copy"
                        onclick="copy('paytm')" style="cursor: pointer;"></i></h4>
            </div>
            <div class="paymethod2" onclick="toggle('gpay')">
                <h3 style="color: rgb(45, 169, 79); padding: 5px; cursor: pointer;">GPay</h3>
                <h4 class="gpayid" id="gpayid">UPI ID: 6381724349@okaxis<i class="fa-solid fa-copy"
                        onclick="copy('gpay')" style="cursor: pointer;"></i></h4>
            </div>
            <div class="paymethod3" onclick="toggle('phonepe')">
                <h3 style="color: rgb(97, 2, 84); padding: 5px; cursor: pointer;">PhonePe</h3>
                <h4 class="phonepeid" id="phonepeid">UPI ID: 6381724349@ybl<i class="fa-solid fa-copy"
                        onclick="copy('phonepe')" style="cursor: pointer;"></i></h4>
            </div>
        </div>
        <div class="bankmethod">
            <label class="bmdetails">Holder Name:</label><br>
            <h3 class="bankholder">Boobalan D<i class="fa-solid fa-copy" onclick="copybank('holder')"
                    style="cursor: pointer;"></i></h3>
            <label class="bmdetails">Bank/AC No:</label><br>
            <h3 class="bankno">916381724349<i class="fa-solid fa-copy" onclick="copybank('no')"
                    style="cursor: pointer;"></i></h3>
            <label class="bmdetails">IFSC CODE:</label><br>
            <h3 class="bankifsc">PYTM0123456<i class="fa-solid fa-copy" onclick="copybank('ifsc')"
                    style="cursor: pointer;"></i></h3>
            <label class="bmdetails">Bank Name</label><br>
            <h3 class="bankname">PAYTM PAYMENTS BANK LTD<i class="fa-solid fa-copy" onclick="copybank('name')"
                    style="cursor: pointer;"></i></h3>
        </div>
        <div class="qrmethod">
            <div class="qrcode">
                <h3>SCAN ME 😀</h3>
                <img src="Images/qrcode.png" alt="" width="300" height="250" class="qrcodeimg">
            </div>
        </div>
        <div class="paybtn">
            <button class="btn-53">
                <div class="original">Processed</div>
                <div class="letters">
                    <span>P</span>
                    <span>A</span>
                    <span>Y</span>
                    <span>M</span>
                    <span>E</span>
                    <span>N</span>
                    <span>T</span>
                </div>
            </button>
        </div>
        <form action="payment.php" method="post" enctype="multipart/form-data">
            <div class="paymentverify">
                <h1 class="paymentcard">Verify Your Payment</h1>
                <div class="photocard">
                    <h2 class="pvhead">Drop Your Payment Screenshot</h2>
                    <input type="file" id="paymentproof" name="paymentss" required>
                    <label for="paymentproof" class="uploadbtn">UPLOAD</label>
                </div>
                <div class="utrcard">
                    <h2 class="UTR">Paste Your UTR Code(Ref.No)</h2>
                    <input type="text" class="UTRNO" name="utrno" required>
                </div>
                <input type="submit" class="paymentbtn">
            </div>
        </form>
    </div>
</body>
<script src="payment.js"></script>

</html>