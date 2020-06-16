<?php
    
    session_start();

    if($_SESSION['isloggedin']==true)
    {
        /// show the home page
        /// way 1 echo diye likhte hobe.. but boro code echo diye likhle baje dekhabe.tai way 2
        /// way 2 show front end code
        /// php the tag close kore. majhe page er code likhhbo..then abr php open korbo..then close korbo
?>
        <!--YOUR PAGE CODE-->
        <!DOCTYPE>
        <html>
        <head>
            <title> Home </title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
            
        </head>

        <body>
            <!--HEADER PART-->
            <div class="dropdwn">
                <nav>
                    <p><b>POULTRY.COM</b></p>
                    <ul>
                        <li><a href="Home.php"> <i class="fa fa-home"></i> Home</a></li>
                        <li><a href="about.php"><i class="fa fa-user"></i> About Us</a></li>
                        <li><a href="chicken.php"><i class="fa fa-clone"></i> Services  </a>
                            
                        </li>
                        
                        <li><a href="contact.php"><i class="fa fa-phone"></i> Contact</a></li>

                        <li><a href="logout.php"><i class="fa fa-users"></i> Log Out </a></li>
                    </ul>
                </nav>
            </div>
            <!--CENTER PART-->
            <div class="body">
                <h4 align="center"> WELCOME TO Poultry.com </h4>
                <center>
                    <img src="background.jpg">
                </center>
                <p>
                    <h3 align="center">About Poultry Farming</h3><br>
                <p>Poultry farming is the process of raising domesticated birds such as chickens, ducks, turkeys and geese for the purpose of farming meat or eggs for food. Poultry – mostly chickens – are farmed in great numbers. Farmers raise more than 50 billion chickens annually as a source of food, both for their meat and for the eggs.</p>
                    <p>Commercial hens usually begin laying eggs at 16–21 weeks of age, although production gradually declines soon after from approximately 25 weeks of age. This means that in many countries, by approximately 72 weeks of age, flocks are considered economically unviable and are slaughtered after approximately 12 months of egg production, although chickens will naturally live for 6 or more years. In some countries, hens are force moulted to re-invigorate egg-laying. 
                </p>
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
