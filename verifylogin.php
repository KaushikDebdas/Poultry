<?php

    if( isset($_POST['uemail']) && isset($_POST['upass']) )
    {
        $i = $_POST['uemail'];
        $j = $_POST['upass'];
                    
        ///Crating DB connection
        try
        {
            $conn = new PDO("mysql:host=localhost:3306 ; dbname=poultry", "root" , "");
                        
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex)
        {
                        
            /// back to loginpage.php
            echo"<script>
                    location.assign('loginpage.php');
                </script> ";
        }
                    
            /// DB CONNECT SUCCESS CODE
            /// excecuted DB connection successful
            $mysqlcode =" SELECT * FROM user WHERE email='$i' and password='$j' " ;
                    
            /// EXECUTE QUERY
                    
            $query_execute = $conn->query($mysqlcode);
                    
            if($query_execute->rowCount() == 1)
            {
                /// valid user found
                session_start();
                $_SESSION["isloggedin"] = true ;
                        
                /// go to another page
                
                echo"<script>
                
                        location.assign('Home.php');  
                        
                    </script> ";
            }
            else
            {
                /// invalid email & pass
                /// back to loginpage.php
                echo"<script>
                        
                    alert('Email or Password not correct!!! Try again');
                            
                    location.assign('loginpage.php');
                </script> ";
                        
            }
    }
    else
    {
        /// query not working
        /// back to login page
        echo"<script>
        
            location.assign('loginpage.php');
            
        </script> ";
    }
                    
?>