<?php

include 'dbconn.php';

session_start();


if(isset($_POST['submit']))
{

    if(isset($_POST['mobile']) && !empty($_POST['mobile']))
    {

       
        if(is_numeric($_POST['mobile']))
        {            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
            $Conpassword = $_POST['Conpassword'];
            $information = $_POST['information'];
            $submit = $_POST['submit'];

            $passowrd_hash = md5($password);
            $passowrd_hash = md5($Conpassword);

            if($password_hash == $password_hash)
            {
                $query = "INSERT INTO user1 (fname,lname,email,mobile,passowrd_hash,information) VALUES('$fname','$lname','$email','$mobile','$passowrd_hash','$information')";
                $run  = mysqli_query($con,$query);

                if($run)
                {
                    print_r($run);
                    $_SESSION['sucess'] = "Data Inserted";
                    header('Location: Blog_post.php');	
                }
                 else
                {
                    $_SESSION['failure'] = "Data is not Inserted";
                     header('Location: register.php');	
                 }
            }
            else
            {
                echo "not inserted";
            }
        }else{
            $_SESSION[''] = "Please insert data properly";
            header('Location: Blog_post.php?failure="Please insert data properly"');	
        }

    }
    

}

	
?>