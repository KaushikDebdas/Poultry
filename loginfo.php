<?php
    session_start();
    
    if($_SESSION['isloggedin']==true)
    {
?>

<!DOCTYPE>
<html>
    <head>
        <title>Account Details</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <a href="Home.php"> <b>Home</b></a>
        <h1 align="center"><b><u>Account Information</u></b></h1>
        <div id="accountbody">
            <table>
                <thread>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Update/Delete</th>
                    </tr>
                </thread>
                
                <tbody>
                    
                    <?php
                        try
                        {
                            $conn=new PDO("mysql:host=localhost:3306;dbname=poultry","root","");
                            
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        }
                        catch(PDOException $ex)
                        {
                            echo"<script>alert('Database connection error');</script>";
                        }
                        
                        $mysqlquery = "SELECT * FROM user";
        
                        ///$queryresult er moddhe save kortesi jei query ta execute korche            
                        $queryresult = $conn->query($mysqlquery);
        
                        ///no of rows, $queryresult->rowCount(); user table a kotogula row ache sheta bole dibe 
                    
                        ///fetchAll() = reading the whole table
                        $table = $queryresult->fetchAll();
                    
                        ////print_r($table);

                        ///processing
                        for($i=0;$i<count($table);$i++)
                        {
                            ///$row 1D array
                            $row=$table[$i];    
                    ?>
                        <tr>
                            <td> <?php echo $row['user_id'] ?> </td>
                            <td> <?php echo $row['username'] ?> </td>
                            <td> <?php echo $row['email'] ?> </td>
                            <td> <?php echo $row['phone'] ?> </td>
                            <td>
                                <input type="button" value="Update" onclick="updatefn(<?php echo $row['user_id'] ?>);">
                                <input type="button" value="Delete" onclick="deletefn(<?php echo $row['user_id'] ?>);">
                            </td>
                            
                        </tr>
                                
                    <?php
                        }
                    
                    ?>
                    
                </tbody>
                
                
            </table>
        </div>
        <a href="logout.php"> Click Here to Logout </a>
        
        <script>
            function deletefn(del_id)
            {
                var choice=confirm("Do you want to delete this?");
                if(choice)
                {
                    location.assign("delete.php?d_id="+del_id);
                }
            }
            
            function updatefn(upd_id)
            {
                location.assign("update.php?u_id="+upd_id);
            }
        </script>
        
    </body>
</html>


<?php
    }
    else
    {
        echo"<script>location.assign('loginpage.php')</script>";
    }
?>
