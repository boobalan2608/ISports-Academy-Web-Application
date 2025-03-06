<?php
$con = mysqli_connect("sql105.infinityfree.com", "if0_35702551", "beliver2608", "if0_35702551_project");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$sql = "SELECT * FROM tournament";
$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($con);
    exit();
}

// Array to store rows
$rows = array();

// Fetch each row and store in the array
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// Close connection
mysqli_free_result($result);
mysqli_close($con);

// Accessing rows
// Access first row
$firstRow = $rows[0];
echo "First Row:<br>";
$title1 = $firstRow['ttitle'];
$desc1 = $firstRow['tdescription'];
$details1 = $firstRow['tdetails'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Content</title>
</head>
<body>
    <h2 style="color:white; background-color:black;"><?php echo $title1;?></h2>
    <h2 style="color:white; background-color:black;"><?php echo $desc1;?></h2>
    <h2 style="color:white; background-color:black;"><?php echo $details1;?></h2>
</body>
</html>

