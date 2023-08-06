<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './partials/_links.php' ?>
    <title>TradingExpo | About Us</title>
</head>

<body>
    <?php include './partials/_navbar.php' ?>
    <div id="about">
        <div class="content">
            <h2>How this website is going to help the youth?</h2>
            <p>-Nowadays, people are getting influenced to crypto and stock market. And they 
are investing there capital or money in a high amount in expectations of more profit.</p><br>
                <p>-But more of them also make big losses in this because of lack of knowledge about shares,investing,markets up and down and manymore.</p><br><br>
            <h2>What We Do?</h2>
            <p>-So here we are supporting them as serving as a middleman to make their losses less by trading behalf of them and make there profits.</p>
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
    <?php include './partials/_footer.php' ?>
</body>

</html>