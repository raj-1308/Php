<?php
        include("database.php");
        
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $Age= $_POST['age'];
        $Email= $_POST['email'];
        $Password= $_POST['password'];
        $Gender= $_POST['person'];
        $Role= $_POST['role'];

        //$filename= $_POST["image"];

        $filename=$_FILES['Image']['name'];
        $filetype= $_FILES['Image']['type'];
        $filetmp= $_FILES['Image']['tmp_name'];
        $fileerror= $_FILES['Image']['error'];
        $filesize= $_FILES['Image']['size'];
        
        $random=rand(000,9999);
        $filename=$random.$filename;
        $file_ext=explode('.', $filename);

        $file_ext_check= strtolower(end($file_ext));
        echo $file_ext_check;
        $valid_ext= array("png", "jpg", "jpeg");

            if($fileerror==0){
                if($_FILES['Image']['size']>500 && $_FILES['Image']['size']<10000000){
                    if(in_array($file_ext_check, $valid_ext)){
                        $destination="images/".$filename;
                        if(move_uploaded_file($filetmp, $destination)){

                        
                  
        ?>
        <script>
            alert("Your image is uploaded succesfully !");
        </script>
        <?php


        $sql= mysqli_query($connect, "INSERT INTO `imformation` (`id`, `Image`,`Fname`, `Lname`, `Age`, `Email`, `Password`, `Gender`, `Role`) VALUES ('','$filename','$fname','$lname','$Age','$Email','$Password', '$Gender', '$Role')");

        if($sql){
            echo "Inset Succesful";
            header("location:Login_page.php");
        }
        else{
            echo "Not Connected";

        }
    }
    }
  }
    else{
        echo "<br> invalid ";
    }

}else{
    echo "file error";
}

?>
