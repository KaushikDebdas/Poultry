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

<!DOCTYPE>
<html>
    <head>
        <title> Product Details</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <h1 align="center"><b><u>Chicken & Egg Information</u></b></h1>
        <div id="accountbody">
            <table>
                <thread>
                    <tr>
                        <th>ID</th>
                        <!--<th>User Name</th>-->
                        <th>Chicken Name</th>
                        <th>Chicken Ammount</th>
                        <th>Egg Ammount</th>
                        <th>Date & Time</th>
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
                    ?>
                        <script>
                            alert("Database connection error");    
                        </script>
                    
                    <?php
                    }
                        $mysqlquery="select * from chicken";
                    //$mysqlquery="SELECT username,c_id,c_name,c_stock,e_stock,date FROM user JOIN chicken" ;
                                    
                        $result=$conn->query($mysqlquery); ///$result object

                        ///no of rows, $result->rowCount();
        
                        ///reading the whole table
                    
                        $table = $result->fetchAll();
        
                        ////print_r($table);
        
                        ///processing
                        for($i=0;$i<count($table);$i++)
                        {
                            ///$row 1D array
                            $row=$table[$i];    
                    ?>
                            <tr>  
                                <td> <?php echo $row['c_id'] ?> </td>
                                <td> <?php echo $row['c_name'] ?> </td>
                                <td> <?php echo $row['c_stock'] ?> </td>
                                <td> <?php echo $row['e_stock'] ?> </td>
                                <td> <?php echo $row['date'] ?> </td>
                                
                                <td>
                                    <input type="button" value="Update" onclick="updatefn(<?php echo $row['c_id'] ?>);">
                                    <input type="button" value="Delete" onclick="deletefn(<?php echo $row['c_id'] ?>);">
                                </td>  
                            </tr>
                                
                    <?php
                        }
                    
                    ?>
                    
                </tbody>
                
                
            </table>
        </div>
        
        <script>
            function deletefn(del_id)
            {
                /// var diye variable ney JS a
                /// confirm nameeee function diye permission ney
                var choice=confirm("Do you want to delete this?");
                if(choice)
                {
                    location.assign("deletechicken.php?d_id="+del_id);
                }
            }
            
            function updatefn(upd_id)
            {
                location.assign("updatechicken.php?u_id="+upd_id);
            }
        </script>
        
    </body>
</html>