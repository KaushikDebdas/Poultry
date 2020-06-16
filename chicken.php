<?php
    
    session_start();

    if($_SESSION['isloggedin']==true)
    {
?>
        <!DOCTYPE>
        <html>
        <head>
            <title> Chicken </title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

        </head>

        <body>

            <div class="dropdwn">
                        <nav>
                            <p><b>POULTRY.COM</b></p>
                            <ul>
                                <li><a href="Home.php"> <i class="fa fa-home"></i> Home</a></li>
                                <li><a href="about.php"><i class="fa fa-user"></i> About Us</a></li>
                                <li><a href="chicken.php"><i class="fa fa-clone"></i> Services</a></li>
                                <li><a href="contact.php"><i class="fa fa-phone"></i> Contact</a></li>
                                <li><a href="logout.php"><i class="fa fa-users"></i> Log Out </a></li>
                            </ul>
                        </nav>
            </div>

            <h1 align="center"><u> Chicken Details </u> </h1>

            <div id="detailbody">
                <form action="verifychicken.php" method="post">

                    <label> <b> Chicken Name:</b> </label> <br>
                    <input class="inputvalues" type="text" name="cname" id="cname" placeholder="Type Chicken Name" required> <br>

                    <label><b> Chicken Ammount: </b> </label> <br>
                    <input class="inputvalues" type="text" name="cstock" id="cstock" placeholder="Chicken Stock" required><br>

                    <label><b> Egg Stock: </b> </label> <br>
                    <input class="inputvalues" type="text" name="estock" id="estock" placeholder="Egg Stock" required><br>

                    <input type="submit" name="submit" id="add_btn" value="Add">
                    <input type="reset" id="reset_btn" value="Reset">
                    <br>
                    <br>

                    <input type="submit" id="show_btn" value="Show Details"> <br>
                </form>

            </div>
        </body>
        </html>
<?php
    }
    else
    {
        /// back to loginpage.php
        echo"<script>
            location.assign('loginpage.php');
            </script> ";
    }
    
?>

    