<!DOCTYPE>
<html>

<head>
    <title> About </title>
</head>

<body>
    <form actin="card.php" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name" id="name">
        </br>
        </br>
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" id="submit" value="upload">
    </form>
    
    <?php
        //if(isset($_POST['name']) && isset($_FILES['file']) )
        //{
            $uname = $_POST['name'];
            $fname = $_FILES['file'];
            $name = $fname['name'];
            $type = $fname['type'];
            $temp_name = $fname['tmp_name'];

            //var_dump($j) ;
            if(!empty($fname))
            {
                $loc = "New folder/";
                
                if(move_uploaded_file($temp_name, $loc.$fname))
                {
                    echo "file uploaded Successfully";
                }
                else
                {
                    echo "Failed";
                }
                
            }
            else
            {
                echo "File Not Found";
            }
        //}
    ?>
</body>

</html>