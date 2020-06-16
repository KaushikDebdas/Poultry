<!DOCTYPE>
<html>

<head>
    <title> Register Page </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="dropdwn">
        <nav>
            <p> Poultry.COM </p>
            <ul>
                <li><a href="index.html"> <i class="fa fa-home"></i> Home</a></li>
                <li><a href="about.php"><i class="fa fa-user"></i> About Us</a></li>
                <li><a href="#"><i class="fa fa-clone"></i> Services </a></li>
                
                <li><a href="loginpage.php"><i class="fa fa-users"></i> Login</a></li>
                <li><a href="register.php"><i class="fa fa-edit"></i> Signup</a></li>
                <li><a href="contact.php"><i class="fa fa-phone"></i> Contact</a></li>
            </ul>
        </nav>
    </div>
    <div id="main-wrapper">
        <center>
            <h2> Register Form </h2>
            <img src="avatar.png" class="avatar" />
        </center>

        <form class="myform" action="register.php" method="post">
            <label><b> Username: </b> </label> <br>
            <input class="inputvalues" type="text" name="uname" id="uname" placeholder="Enter Your Name" required><br>

            <label><b> Email: </b> </label> <br>
            <input class="inputvalues" type="email" name="uemail" id="uemail" placeholder="Your Email" required><br>
            
            <label><b> Phone Number: </b> </label> <br>
            <input class="inputvalues" type="text" name="uphone" id="uphone" placeholder="01xxxxxxxxx" required><br>

            <label><b> Password: </b> </label> <br>
            <input class="inputvalues" type="password" name="upass" id="upass" placeholder="Your Password" required><br>

            <label><b> Confirm Password: </b> </label> <br>
            <input class="inputvalues" type="password" name="cpass" id="cpass" placeholder="Confirm Your Password" required><br>

            <input id="signup_btn" type="submit" value="Submit"> <br>

            <a href="loginpage.php"><input id="back_btn" type="button" value="Back To Login"> </a><br>

        </form>

        <?php
            
            /// processing
            if(isset($_POST['uname']) && isset($_POST['uemail']) && isset($_POST['uphone']) && isset($_POST['upass']) && isset($_POST['cpass']))
            {
            
                $h=$_POST['uname'];
                $i=$_POST['uemail'];
                $j=$_POST['upass'];
                $k=$_POST['cpass'];
                $p=$_POST['uphone'];

                ///creating database connection

                try
                {
                    ///try to connect with database
                    $conn=new PDO("mysql:host=localhost:3306;dbname=poultry", "root", "");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                }
                catch(PDOException $ex)
                {
                    ///back to register.php
                    echo "<script>
                    
                    alert('Connection Is not ok');
                    location.assign('register.php');
                    
                    </script>";
                }
                
                if($j == $k)    /// jodi pass & cpass same hoy
                {
                    ///checking whether the user already exits
                    $mysqlcode="SELECT * FROM user WHERE email='$i' and password='$j' ";
                    ///echo $mysqlcode;
                    
                    ///executing the query
                    $query_execute=$conn->query($mysqlcode);    /// select er jonno QUERY use korte hoy
                    
                    if($query_execute->rowCount()==1)
                    {
                        
                        echo "<script>
                        
                        alert('User Email Already Exists!!Try Another email!!');
                        location.assign('register.php');
                        
                        </script>";   
                    }
                    else
                    {
                        /// new user
                        /// if DB connection is ok
                        
                        $mysqlcode="INSERT INTO user(username,email,password,phone) Values('$h','$i','$j','$p')" ;
                        
                        /// echo $mysqlcode;
                        try
                        {
                            $conn->exec($mysqlcode);        /// insert er jonno EXEC use korte hoy
                            
                            echo"<script>
                                alert('Registration Complete');
                                location.assign('loginpage.php');
                            </script>";
                        }
                        catch(PDOException $ex)
                        {
                            echo"<script>
                                alert('Error');
                                location.assign('register.php');
                            </script>";
                       }   
                    }
                }  /// done
                else 
                {
                    /// then register korte bolbe 
                    echo "<script>
                    
                        location.assign('register.php');
                    
                    </script>";
                    
                }
                
            }
        
        ?>

    </div>
</body>

</html>