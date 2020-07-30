<?php 
   
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
       

       // move_uploaded_file($image_tmp,"images/$image");

        $con = mysqli_connect("localhost","root","","mobileshopiee");

        $query = "insert into user_message (name,email,message) values ('$name','$email','$message')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {       

        echo "Inserted successfully";
        
        }
        else {       

        echo "Insertion Failed";

             
        }
?>