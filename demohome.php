<?php
// Establish database connection
$con = mysqli_connect("sql105.infinityfree.com", "if0_35702551", "beliver2608", "if0_35702551_project");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Fetch data from the database
$sql = "SELECT * FROM tournament";
$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($con);
    exit();
}

// Fetch all rows from the result set into an array
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close connection
mysqli_free_result($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>iSports Academy Dashboard</title>
    <link rel="icon" href="Images/logo.png">
</head>

<body>
    <header>
        <nav>
            <div class="navbar-list">
                <img src="Images/logo.png" width="40" height="40" alt="logo">
                <h1>iSports Academy</h1>
            </div>
            <a class="menubar"><i class="fas fa-bars"></i></a>
        </nav>
        <div class="slidemenu">
            <div class="slidemenubar">
                <!-- Add sliding menu items here -->
            </div>
        </div>
    </header>

    <main>
        <section class="section" id="schedules">
            <!-- Add schedules content here -->
        </section>

        <section class="section" id="events">
            <!-- Add events content here -->
        </section>

        <section class="section" id="tournaments">
            <!-- Add tournaments content here -->
            <?php foreach ($rows as $row): ?>
                <div class="tournament">
                    <h2><?php echo $row['ttitle']; ?></h2>
                    <p><?php echo $row['tdescription']; ?></p>
                    <p><?php echo $row['tdetails']; ?></p>
                </div>
            <?php endforeach; ?>
        </section>

        <section class="section" id="coaches">
            <!-- Add coaches content here -->
        </section>

        <section class="section" id="fees">
            <!-- Add fees content here -->
        </section>
    </main>

    <footer>
        <?php include "footer.html"; ?>
    </footer>

    <script src="script.js"></script>
</body>

</html>
