<?php
        session_start();
     

        if(isset($_SESSION['Email']) && ($_SESSION['Password'])){
         include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        th{
            padding:10px 10px;
        }
    </style>
</head>
<style>
    .btn{
        padding: auto;
        margin: 10px;
    }
    .btn a{
        margin-left:500px;
        
    }
</style>
<body>
    <table border="1" align="center">
        
            <tr >
                    <th>ID</th>
                    <th>Image</th>
                    <th>Fname </th>
                    <th>Lname </th>
                    <th>Age </th>
                    <th>Email </th>
                    <th>Password </th>
                    <th>Gender</th>
                    <th>Role</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
            </tr>
          
                <?php
                    include("database.php");
                    $sql="SELECT * FROM imformation";
                    $result = mysqli_query($connect,$sql);
                    while($row= mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $Role=$row['Role'];

                        $filename=$row['Image'];
                        echo "<tr>";
                        echo "
                        
                        <td>".$row['id']. "</td>
                        <td><img src='images/".$filename."' width='100' height='100'> </td>
                        <td>".$row['Fname']. "</td>
                        <td>".$row['Lname']. "</td>
                        <td>".$row['Age']. "</td>
                        <td>".$row['Email']. "</td>
                        <td>".$row['Password']. "</td>
                         <td>".$row['Gender']. "</td>
                          <td>".$row['Role']. "</td>";
                        
                       
                       
                       

                        if($Role=="Viewer"){
                            
                                    echo " <td><a href='View.php?id=$id'><button >View</button></a></td>";
                        }
                        if($Role=="Editior"){
                                  
                                   echo " <td><a href='View.php?id=$id'><button >View</button></a></td>";
                                   echo " <td><a href='Edit.php? id=$id'><button>Edit</button></a></td>";
                        }
                        if($Role=="Admin"){
                            echo " <td><a href='View.php?id=$id'><button >View</button></a></td>";
                            echo " <td><a href='Edit.php? id=$id'><button>Edit</button></a></td>";
                            echo " <td><a href='delete.php? id=$id'><button>Delete</button></a></td>";

                        }
                        echo "</tr>";
                    }
                
                
                ?>
                

                
                

           
            
    </table>
                    <div class="btn">
                    <a href="logout.php"><button type="submit" name="logout">Logout</button></a>

                    </div>

   
</body>
</html>

<?php
        }
            else{
                header("location:Login_page.php");
            }
        

?>