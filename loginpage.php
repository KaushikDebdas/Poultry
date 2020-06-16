<!DOCTYPE>
<html>

<head>
    <title> Login Page </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="style.css">
    

</head>

<body>
    <div class="dropdwn">
        <nav>
            <p> Poultry.COM </p>
            <ul>
                <li><a href="Home.php"> <i class="fa fa-home"></i> Home</a></li>
                <li><a href="about.php"><i class="fa fa-user"></i> About Us</a></li>
                <li><a href="#"><i class="fa fa-clone"></i> Services </a></li>
                <li><a href="loginpage.php"><i class="fa fa-users"></i> Login</a></li>
                <li><a href="register.php"><i class="fa fa-edit"></i> Signup</a></li>
                <li><a href="#"><i class="fa fa-phone"></i> Contact</a></li>
            </ul>
        </nav>
    </div>
    <div id="main-wrapper">
        <center>
            <h2> Login Form </h2>
            <img src="avatar.png" class="avatar">
        </center>

        <form class="myform" action="verifylogin.php" method="post">
            <label><b> UserEmail: </b> </label> <br>
            <input class="inputvalues" type="email" name="uemail" id='uemail' placeholder="Type Your Email" required><br>

            <label><b> Password: </b> </label> <br>
            <input class="inputvalues" type="password" name="upass" id='upass' placeholder="Type Your Password" required><br>

            <input type="submit" id="login_btn" value="Log In"> <br>
            <a href="register.php"><input type="button" id="register_btn" value="Register"> </a> <br>

        </form>

        
    </div>
</body>

</html>
