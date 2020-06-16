<!DOCTYPE>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <h1 align="center">REGISTER FORM</h1>

            <form action="" method="post">
                
                <b>USERNAME</b><br>
                <input class="inputclass" type="text" name="uname" id="uname" placeholder="Enter Username" required><br>
                
                <b>USER EMAIL</b><br>
                <input class="inputclass" type="text" name="uemail" id="uemail" placeholder="Enter Useremail" required><br>
                
                <b>PHONE NUMBER</b><br>
                <input class="inputclass" type="text" name="phone" id="phone" placeholder="Enter Phone Number" required><br>
                
                <b>PASSWORD</b><br>
                <input class="inputclass" type="password" name="pass" id="pass" placeholder="Enter Password" required><br>
                
                <b>CONFIRM PASSWORD</b><br>
                <input class="inputclass" type="password" name="cpass" id="cpass" placeholder="Enter Confirm Password" required><br>
                
                <input type="submit" value="REGISTER" id="register"><br>
                Already have an account? <a href="login.php">Click here to Login.</a>
            </form>
        
    </div>

</body>

</html>