<?php
    session_start();
    if($_SESSION['isloggedin']==true)
    {
 ?>

<?php
        
    if(isset($_GET['u_id']))
    {    
        $update_id=$_GET['u_id'];
    try
    {
        $conn=new PDO("mysql:host=localhost:3306;dbname=poultry","root","");
                            
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }
    catch(PDOException $ex)
    {
        echo"<script>alert('Database connection error');</script>";                     
    }

        $mysqlquery="select * from user where user_id=$update_id";
        
        ///$queryresult er moddhe save kortesi jei query ta execute korche 
        $queryresult=$conn->query($mysqlquery); 
        ///no of rows, $queryresult->rowCount(); user table a kotogula row ache sheta bole dibe
        
        
        if($queryresult->rowCount()==1)
        {
            /// 2D array te 1st dimention a 1 ta row thakbe
            /// table ta te 1 ta row thakbe
            $table=$queryresult->fetchAll();
            
            ////print_r($table);
            $row=$table[0];
            
?>
        <form action="updatedata.php" method="post">
            User Name: <input type="text" id="uname" name="uname" value="<?php echo $row['username'] ?>"> 
            <br/>
            <br/>
            Email: <input type="text" id="uemail" name="uemail" value="<?php echo $row['email'] ?>"> 
            <br/>
            <br/>
            Phone: <input type="text" id="uphone" name="uphone" value="<?php echo $row['phone'] ?>">
            <br/>
            <br/>
            
            <input type="hidden" name="up_id" value="<?php echo $row['user_id']; ?>" >
            
            <input type="submit" value="Update Data">
        </form>

<?php
            
        }
    }

?>

<?php
    }
    else
    {
        echo"<script>location.assign(loginpage.php)</script>";
    }
?>

