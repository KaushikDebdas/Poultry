<?php

    session_start();

    $_SESSION['isloggedin']=false;

    /// back to login page
    echo"<script>
    
            location.assign('loginpage.php');
            
        </script> ";
?>