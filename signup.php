<?php include './partials/_dbconnect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './partials/_links.php' ?>
    <title>TradingExpo | Signup</title>
</head>

<body>
    <?php include './partials/_navbar.php' ?>
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
    <div id="signup">
        <div class="signupbox">
            <form action="./partials/_signup.php" method="POST">
                <input type="text" name="name" id="name" placeholder="Name" required><br>
                <input type="text" name="usern" id="usern" placeholder="Username" required><br>
                <input type="email" name="email" id="email" placeholder="Email I'd" required><br>
                <input type="password" name="passw" id="passw" placeholder="Password" required><br><br>
                <input type="submit" value="Create Account">
            </form>
        </div>
    </div>
    <?php include './partials/_footer.php' ?>
</body>

</html>