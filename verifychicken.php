 <?php

    /// step1: DATA INSERT korte hobe
    /// step2: Forward the user to the CHICKEN page

    if(isset($_POST['cname']) && isset($_POST['cstock']) && isset($_POST['estock']) )
    {
        $a = $_POST['cname'];
        $b = $_POST['cstock'];
        $c = $_POST['estock'];
        
        
        ///creating database connection
        
        try
        {
            ///try to connect with database
            $conn=new PDO("mysql:host=localhost:3306;dbname=poultry", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }
        catch(PDOException $ex)
        {
            ///back to login.php
            echo "<script>location.assign('loginpage.php');</script>";
        }
        
        /// connection ok hoile add button press korbo. then data CHICKEN table a add hobe
        /// Insert Data into chicken table

        
        $mysqlquery="INSERT INTO chicken(c_name,c_stock,e_stock) VALUES('$a','$b','$c')";
        
        //echo $mysqlquery;
        
        try
        {
            $conn->exec($mysqlquery);
                
            echo"<script>alert('Successfully Add');location.assign('chicken.php');</script>";
        }
        catch(PDOException $ex)
        {
            echo "<script>alert('Error');location.assign('chicken.php');</script>";
        } 
       
        
    }
            
?>

 