<?php
    session_start();
    if($_SESSION['isloggedin']==true)
    {
 ?>

<?php
        if(isset($_GET['d_id']))
        {   
            $delete_id=$_GET['d_id'];

            try
            {
                $conn=new PDO("mysql:host=localhost:3306;dbname=poultry","root","");


                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $ex)
            {
                echo"<script>
                    alert('Database connection error');    
                </script>";
            }

            /// user table theke delete korbo.
            
            $mysqlquery="DELETE FROM user WHERE user_id=$delete_id "; 
            ///echo $mysqlquery;

            $conn->exec($mysqlquery);

            echo "<script>location.assign('loginfo.php');</script>";
        }
?>


<?php
    }
    else
    {
        echo"<script>location.assign(loginpage.php)</script>";
    }
?>
