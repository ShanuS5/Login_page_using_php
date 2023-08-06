<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './partials/_links.php' ?>
    <title>TradingExpo | Contact</title>
</head>
<body>
    
    <header>
    <nav>
        <ul>
            <li><a href="../tradingexpo/index.php#home">Home</a></li>
            <li><a href="#" onclick="openform()">Login</a></li>
            <li><a href="../tradingexpo/aboutus.php">About Us</a></li>
            <li><a href="../tradingexpo/Demat.php">Demat</a></li>
            </a></li>
            <li><a href="../tradingexpo/Plan.php">Plan</a></li>
            <!-- <li><a href="https://www.instagram.com"><img src="./instagram" alt=""></a></li>
            <li><a href="https://www.whatsapp.com/"><img src="./twitter" alt=""></a></li>
            <li><a href="https://www.twitter.com/"><img src="./whatsapp" alt=""></a></li> -->
        </ul>
    </nav>
</header>
    <div id="contactinfo">
        <!-- Write Code Here - -->
    </div>
    <div id="form_popup">
        <form action="./partials/_login.php" method="POST">
            <button class="FormCloseBtn" onclick="closeform()">X</button><br><br>
            <input type="text" name="usern" id="usern" placeholder="Username" required><br>
            <input type="password" name="passw" id="passw" placeholder="Password" required><br><br>
            <input type="submit" value="Login"><br><br>
            <p>Haven't Created Account?&nbsp;<a href="./signup.php">Signup</a></p>
        </form>
        <script>
            function openform() {
                document.getElementById("form_popup").style.display = "block";
            }

            function closeform() {
                document.getElementById("form_popup").style.display = "none";
            }
        </script>
    </div>
    
    <?php include './partials/_footer.php' ?>
</body>
</html>