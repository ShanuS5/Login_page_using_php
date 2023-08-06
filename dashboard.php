<?php include './partials/_dbconnect.php'; ?>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) 
{
    header("location: index.php ");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './partials/_links.php' ?>
    <title>TradingExpo</title>
</head>
<body>
    <?php include './partials/_navbar.php' ?>
    <div id="welcome">
        <h1>Welcome,<?php echo $_SESSION['username'] ?></h1>
    </div>
    <br><br><br><br><br><br><br><br>
    <?php include './partials/_footer.php' ?>
</body>
</html>