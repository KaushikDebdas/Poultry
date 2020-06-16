<?php
    session_start();
    
    if($_SESSION['isloggedin']==true)
    {
        
?>
        <!DOCTYPE html>
        <html>

        <head>
            <title> About Us </title> <!-- LIVE PREVIEW -->
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

            <div class="wrapper">
                <div class="section-header">
                    <h2> Our Team Members</h2>
                </div>

                <div class="team-member">
                    <img src="IMG_0713.jpg" alt="Kaushik" width="15%">
                    <h1>Kaushik Debdas</h1>
                    <p>CEO & Founder</p>
                    <p>Student at Unted International University.</p>
                    <p>kaushikdebdas27@gmail.com</p>
        
                </div>

                <div class="team-member">
                    <img src="IMG_3078.jpg" alt="Tanzeen" width="15%" float="right">
                    <h1>Khurshida Jahan Tanzeen</h1>
                    <p>CEO & Founder</p>
                    <p>Student at Unted International University.</p>
                    <p>mayaboty123@gmail.com</p>
    
                </div>

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
