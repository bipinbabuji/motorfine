<!DOCTYPE html>
<head>
    <title> test image </title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST["submit"])) {
        $file_temp = $_FILES['file']['tmp_name'];   
        $info = getimagesize($file_temp);
    } else {
        print "File not sent to server succesfully!";
        exit;
    }
 {
        $name=  addslashes($_FILES['image']['name']);
        $image=  base64_decode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
        saveimage($name,$image);
    }
    
    function saveimage($name,$image){
        $con=  mysql_connect("localhost","root","","moto_fine_handler");
        $sql="insert into testimage(name,image) values('$name','$image')";
        $query=mysqli_query($con,$sql);
        if($query){
            echo"sucess";
        }
            else {
                echo"not upload";
            }
        }
    
    ?>
</body>
</html>