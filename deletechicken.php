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
    if(isset($_GET['d_id'])) 
        $delete_id=$_GET['d_id'];
        
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
        
    $mysqlquery="delete from chicken where c_id=$delete_id "; 
    ///echo $mysqlquery;
        
    $conn->exec($mysqlquery);

    /// delete howar pore home page a niye jabe
        
    echo "<script>location.assign('chickendetails.php');</script>";    
?>
