<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './partials/_links.php' ?>
    <title>TradingExpo | Home</title>
</head>

<body>
    <?php include './partials/_navbar.php' ?>
    <div id="home">
        <div class="heading">
            <h1>Trading<span>Expo</span></h1><br>
            <p>Stock trading involves buying and selling stocks frequently in an attempt to time the
                market. The goal of stock traders is to capitalize on short-term market events to sell stocks for a profit, or buy stocks at a low. Some stock traders are day traders, which means they buy and sell several times throughout the day.</p>
        </div>
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
    <div id="container">
        <div class="cont_heading">
            <h1>Trade Anywhere, Everywhere.</h1><br>
            <a href="./aboutus.php">About us</a>
        </div>
    </div>
    <?php include './partials/_footer.php' ?>
</body>

</html>