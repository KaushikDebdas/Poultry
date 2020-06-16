<?php
    
    session_start();

    if($_SESSION['isloggedin']==true)
    {
?>


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
<?php
    if( isset($_POST['cname']) && isset($_POST['cstock']) && isset($_POST['estock'])  && isset($_POST['date']) )
    {
        $newname= $_POST['cname'];
        $newcstock= $_POST['cstock'];
        $newestock= $_POST['estock'];
        $newdate= $_POST['date'];
        
        
        $myid = $_POST['up_id']; 

        ///echo $myid;
        
        try
        {
            $conn=new PDO("mysql:host=localhost:3306;dbname=poultry","root","");


            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex)
        {
            ?>

            <script>
                alert("Database connection error");    
            </script>
            <?php
        }

        $mysqlquery=" UPDATE chicken SET c_name='$newname', c_stock='$newcstock' , e_stock='$newestock' , date='$newdate' where c_id=$myid ";
        
        ///echo $mysqlquery;
        
        $conn->exec($mysqlquery);
        
        echo "<script>location.assign('chickendetails.php')</script>";
        
    }

?>