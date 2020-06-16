<?php
    session_start();
    if($_SESSION['isloggedin']==true)
    {
 ?>

<?php
    if( isset($_POST['uname']) && isset($_POST['uemail']) && isset($_POST['uphone']) )
    {
        $newname= $_POST['uname'];
        $newemail= $_POST['uemail'];
        $newphone= $_POST['uphone'];
        
        $myid = $_POST['up_id']; 

        ///echo $myid;
        
        try
        {
            $conn=new PDO("mysql:host=localhost:3306;dbname=poultry","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex)
        {
            echo"<script>alert('Database connection error');</script>";
        }

        $mysqlquery="UPDATE user SET username='$newname', email='$newemail' , phone='$newphone' WHERE user_id=$myid ";
        
        ///echo $mysqlquery;
        
        $conn->exec($mysqlquery);
        
        echo "<script>location.assign('loginfo.php')</script>";
        
    }
?>

<?php
    }
    else
    {
        echo"<script>location.assign(loginpage.php)</script>";
    }
?>