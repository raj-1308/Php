

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    *{
        padding:auto;
        margin:auto;
        background-color:pink;
    }
    .container{
        text-align:center;
        margin-top:150px;
        
    }
</style>
<body>

    <div class="container">
        <h2>Registration Form</h2><br><br>
        <form action="get.php" method="POST" class="registration-form" enctype="multipart/form-data">

   

            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name" required><br><br>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name" required><br><br>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="Enter your age" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br><br>


            <label for="">Select Gender ---</label>
             
            <input type="radio" name="person" id="" value="male"><label for="">Male</label>

            
            <input type="radio" name="person" id="" value="female"><label for="">Female</label>

         
            <input type="radio" name="person" id="" value="other"><label for="">Others</label><br><br>
            


            <select name="role" id="">
                    <option value="">Select the Role--</option>

                    <option value="Viewer">Viewer</option>
                    <option value="Editior">Editior</option>
                    <option value="Admin">Admin</option>

            </select><br><br>

            <label for="">Select image :</label>
            <input type="file" id="img" name="Image"><br><br>
          

            <button type="submit" name="submit">Register</button>
        </form>
    </div>

</body>
</html>
