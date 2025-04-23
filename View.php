

<?php
        session_start();
        if(isset($_SESSION['Email']) && ($_SESSION['Password'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include("database.php");
         $id = $_GET['id'];

        //     echo $id;

                $sql="SELECT * FROM `imformation` WHERE id = $id";
                $result= mysqli_query($connect,$sql);
                $demo= mysqli_fetch_assoc($result);

                $fname = $demo['Fname'];
                $lname= $demo['Lname'];
                $age= $demo['Age'];
                $email= $demo['Email'];
                $password=$demo['Password'];
                $Gender= $demo['Gender'];
                $Role= $demo['Role'];
                $filename=$demo['Image'];
                
                

?>

        <form action="" method="POST" class="registration-form">
                <?php
                 echo " <td><img src='images/".$filename."' width='100' height='100'> </td><br><br>";
        ?>
      
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name" value="<?php echo $fname;?>" readonly><br><br>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name"  value="<?php echo $lname;?>" readonly><br><br>

            <label for="age">Age</label>
            <input type="number" id="age" name="age" placeholder="Enter your age"  value="<?php echo $age?>" readonly><br><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo $email?>" readonly><br><br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password"  value="<?php echo $password?>" readonly><br><br>


            <label for="">Select Gender ---</label>
             
             <input type="radio" name="person" id="" value="male" <?php if(isset($Gender) && $Gender=='male')  echo "Checked"?> readonly><label for="">Male</label>
 
             
             <input type="radio" name="person" id="" value="female" <?php  if(isset($Gender) && $Gender=='female') echo "Checked"?> readonly><label for="">Female</label>
 
          
             <input type="radio" name="person" id="" value="other"<?php  if(isset($Gender) && $Gender=='other') echo "Checked"?> readonly><label for="">Others</label><br><br>
 
 
             <select name="role" id="">
     
 
                     <option value="Viewer" ><?php  echo $Role; ?></option>
            
 
             </select><br><br>
            
        </form>

</body>
</html>

<?php
        }
        else{
            header("location:Login_page.php");
        }

?>