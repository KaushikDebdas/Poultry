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
    if(isset($_GET['u_id']))
        $update_id=$_GET['u_id'];
    
    
    try
    {
        $conn=new PDO("mysql:host=localhost:3306;dbname=poultry","root","");
                            
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }
    catch(PDOException $ex)
    {
?>
        <!--outside php -->
    
        <script>
            alert("Database connection error");    
        </script>
                    
    <?php
        
    }
        $mysqlquery="SELECT * FROM chicken WHERE c_id=$update_id";
                                    
        $result = $conn->query($mysqlquery); ///$result object
        ///no of rows, $result->rowCount();
        
        ///reading the whole table

        if($result->rowCount()==1)
        {
            /// 2D array te 1st dimention a 1 ta row thakbe
            /// table ta te 1 ta row thakbe          
            $table=$result->fetchAll();
        
        
            ////print_r($table);
            $row=$table[0];
            
    ?>

        <form action="updatechickendata.php" method="post">
            <!--User Name: <input type="text" id="uname" name="uname" value="<?php/// echo $row[''] ?>"> 
            <br/>
            <br/>-->
            Chicken Name: <input type="text" name="cname" id="cname" value="<?php echo $row['c_name'] ?>"> 
            <br/>
            <br/>
            Chicken Stock: <input type="text" name="cstock" id="cstock" value="<?php echo $row['c_stock'] ?>">
            <br/>
            <br/>
            Egg Stock: <input type="text" name="estock" id="estock"  value="<?php echo $row['e_stock'] ?>">
            <br/>
            <br/>
            Date: <input type="text" name="date" id="date"  value="<?php echo $row['date'] ?>">
            <br/>
            <br/>
            
            <input type="hidden" name="up_id" value="<?php echo $row['c_id']; ?>" >
            
            <input type="submit" value="Update Data">
        </form>

    <?php
            
        }

    ?>
