<?php

include 'dbconn.php';

session_start();


if(isset($_POST['submit']))
{

    if(isset($_POST['Title']) && !empty($_POST['Title']))
    {        
            $Title = $_POST['Title'];
           
            $metaTitle = $_POST['metaTitle'];
            $Url = $_POST['Url'];
            $content = $_POST['content'];
             $submit = $_POST['submit'];

            if($Url == $Url)
            {
                $query = "UPDATE category1 SET Title='GYM' WHERE id=1";
                $run  = mysqli_query($con,$query);

                if($run)
                {
                    print_r($run);
                    $_SESSION['sucess'] = "Data update";
                    header('Location: Blog_category.php');	
                }
                 else
                {
                    $_SESSION['failure'] = "Data is not updated;
                     header('Location: Add_Category.php');	
                 }
            }
            else
            {
                echo "not updated";
            }
        }else{
            //$_SESSION[''] = "Please insert data properly";
           // header('Location: Blog_category.php?failure="Please insert data properly"');	
        }

    }
    


	
?>