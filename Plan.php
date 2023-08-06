<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './partials/_links.php' ?>
</head>
<body>
    <?php include './partials/_navbar.php'?>
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
        <html>
<title>my website </title>
<body>
    <div class="bd">
<br><br><br><br><br><br><br>
<div class="plan1">
<center>
<a name=my></a>
<h1>SHORT TERM INVESTMENT PLAN </h1>
<div class="hr">
<hr>
</div>
</center>
<br>
</div>
<center>
<table border="3">
<tr>
<th>INVESTMENT AMT </th>
<th>PROFIT RETURN IN% </th>
<th>NO.OF DAYS</th>
</tr>
<tr>
<td>₹100/-</td>
<td>10%</td>
<td>10 days</td>
</tr>
<tr>
<td>₹500/-</td>
<td>10%</td>
<td>15 days</td>
</tr>
<tr>
<td>₹1000/-</td>
<td>10%</td>
<td>20 days</td>
</tr>
<tr>
<td>₹2000/-</td>
<td>10%</td>
<td>30 days</td>
</tr>
<tr>
<td>₹5000/-</td>
<td>10%</td>
<td>45 days</td>
</tr>
</table>
</center>
<br>
<br>
<br>
<center>
<h1>LONG TERM INVESTMENT PLAN </h1>
</center>
<center>
<div class="plan1">
<hr>
        </div>
      </center>
<br>
<center>
<table border="3">
<tr>
<th>INVESTMENT AMT </th>
<th>PROFIT RETURN IN% </th>
<th>NO.OF DAYS</th>
</tr>
<tr>
<td>₹50000/-</td>
<td>10%</td>
<td>3 months</td>
</tr>
<tr>
<td>₹80000/-</td>
<td>20%</td>
<td>6 months</td>
</tr>
<tr>
<td>₹100000/-</td>
<td>50%</td>
<td>12 months</td>
</tr>
</table>
</center>
<br>
<center>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <?php include './partials/_footer.php' ?>
    </div>
</body>
</html>