<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button class="toggle-btn" type="button" onclick="login()">LogIn</button>
            <button class="toggle-btn" type="button" onclick="register()">Register</button>
        </div>
        <div id="social-ico">
            <!--<li><a href=""><img src="" alt="facebook"></a></li>
                <li><a href=""><img src="" alt="twitter"></a></li>
                <li><a href=""><img src="" alt="youtube"></a></li>
                <a href=""><img src="Images-L/fb.png" alt="facebook">
                <a href=""><img src="Images-L/in.png" alt="twitter">
                <a href=""><img src="Images-L/yt.png" alt="youtube">-->



        </div>
        <form id="login"  action="connect.php" method="post" class="input-grp">
            <input type="text" class="input-field" placeholder="Email Id" name="email" required>
            <br>
            <input type="text" class="input-field" placeholder="password" name="password" required>
            <br>
            <!-- <input type="text" class="input-field" placeholder="Confirm Password" name="cpas" required> -->
            <button type="submit" class="submit-btn">Log in</button>
        </form>




        <form id="register" action="connect.php" method="post" class="input-grp">
            <input for='email' type="text" class="input-field" placeholder="Email Id" name="email" required>
            <input for='pas' type="text" class="input-field" placeholder="Password" name="pas" required>
            <input type="submit" value="submit" class='submit-btn'>
            <!-- <input type="text" class="input-field" placeholder="Confirm Password" name="cpas" required> -->
            <!-- <button type="submit" class="submit-btn">register</button> -->
            <!-- <div class="alert alert-success" role="alert"><h1>Now login</h1></div> -->
        </form>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "-450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>


