<?php

session_start();
     

if(isset($_SESSION['Email']) && ($_SESSION['Password'])){
    
        include("database.php");
        $id= $_GET['id'];

            // echo $id;

            $sql="SELECT * FROM `imformation` WHERE id = $id";
            $result= mysqli_query($connect, $sql);
            $demo= mysqli_fetch_assoc($result);

                $fname= $demo['Fname'];
                $lname= $demo['Lname'];
                $age= $demo['Age'];
                $email= $demo['Email'];
                $password= $demo['Password'];
                $Gender=$demo['Gender'];
                $Role=$demo['Role'];
                $filename=$demo['Image'];

                // echo $filename
               
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form action="update.php" method="POST" class="registration-form" enctype="multipart/form-data">
        
        <input type="text"  name="id" value="<?php echo $id?>" hidden><br><br>
        <?php
                 echo " <td><img src='images/".$filename."' width='100' height='100'> </td><br><br>";
        ?>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name" value="<?php echo $fname?>"><br><br>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name" value ="<?php echo $lname?>"><br><br>

            <label for="age">Age</label>
            <input type="number" id="age" name="age" placeholder="Enter your age" value="<?php echo $age?>"><br><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo $email?>"><br><br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" value="<?php echo $password?>"><br><br>


            <label for="">Select Gender ---</label>
             
            <input type="radio" name="person" id="" value="male" <?php if(isset($Gender) && $Gender=='male')  echo "Checked"?>><label for="">Male</label>
 
             
            <input type="radio" name="person" id="" value="female" <?php  if(isset($Gender) && $Gender=='female') echo "Checked"?>><label for="">Female</label>


            <input type="radio" name="person" id="" value="other"<?php  if(isset($Gender) && $Gender=='other') echo "Checked"?>><label for="">Others</label><br><br>
 
 
             <select name="role" id="">
                <?php
                            if($Role== "Viewer"){
                                echo ' <option value="Viewer" selected>'.$Role.'</option>';
                                echo ' <option value="Editior">Editior</option>';
                                echo '  <option value="Admin">Admin</option>';
                            }
                
                            if($Role== "Editior"){
                                echo ' <option value="Viewer">Viewer</option>';
                                echo ' <option value="Editior" selected>'.$Role.'</option>';
                                echo '  <option value="Admin">Admin</option>';
                            }

                            if($Role== "Admin"){
                                echo ' <option value="Viewer">Viewer</option>';
                                echo ' <option value="Editior">Editior</option>';
                                echo '  <option value="Admin" selected>'.$Role.'</option>';
                            }
                            if($Role== ""){
                                echo ' <option value="Viewer">Viewer</option>';
                                echo ' <option value="Editior">Editior</option>';
                                echo '  <option value="Admin" selected>Admin</option>';
                            }
                ?>
         
                     
 
                    
                    
                    
 
             </select><br><br>

             <input type="file" id="img" name="Image" alt="<?php
                        echo $filename;?>"><br><br>

            <button type="submit" name="update">Update</button>

        </form>
</body>
</html>

<?php
        }
            else{
                header("location:Login_page.php");
            }
        

?>