<?php
        include("database.php");

       
        $id= $_GET['id'];
            echo $id;

            $sql=mysqli_query($connect,"DELETE FROM `imformation` WHERE id=$id");

            if($sql){
                    header('location:display.php');
            }
            else{
                echo 'Eroor occured';
            }
           



?>