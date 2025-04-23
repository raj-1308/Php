<?php
        include("database.php");
        if(isset($_POST['update'])){
            $id=$_POST['id'];
            $fname= $_POST['fname'];
            $lname= $_POST['lname'];
            $Age= $_POST['age'];
            $Email= $_POST['email'];
            $Password= $_POST['password'];
            $Gender=$_POST['person'];
            $Role= $_POST['role'];

            $filename=$_FILES['Image']['name'];
            $filetype= $_FILES['Image']['type'];
            $filetmp= $_FILES['Image']['tmp_name'];
            $fileerror= $_FILES['Image']['error'];
            $filesize= $_FILES['Image']['size'];
    
           
    
                if($fileerror==0){

                    if($_FILES['Image']['size']>500 && $_FILES['Image']['size']<10000000){
                        
                        $random=rand(000,9999);
                        $filename=$random.$filename;
                        $file_ext=explode('.', $filename);
                
                        $file_ext_check= strtolower(end($file_ext));
                        // echo $file_ext_check;
                        $valid_ext= array("png", "jpg", "jpeg");
                        if(in_array($file_ext_check, $valid_ext)){
                            $destination="images/".$filename;
                            $move=move_uploaded_file($filetmp, $destination);
                      
                 ?>
            <!-- <script>
                alert("Your image is uploaded succesfully !");
            </script> -->
            <?php
    
    
             $sql=mysqli_query($connect,"UPDATE `imformation` SET `id`='$id',`Fname`='$fname',`Lname`='$lname',`Age`='$Age',`Email`='$Email',`Password`='$Password' , `Gender`= '$Gender', `Role` = '$Role' ,  `Image` ='$filename'  WHERE id=$id");
    
            if($sql){
                echo "updated Succesful";
                header("location:display.php");
            }
            else{
                echo "Not Connected";
    
            }
        }
      }
        else{
            echo "<br> invalid ";
        }
    
    }
    else{
        echo "file error";
    }
}

    
    ?>