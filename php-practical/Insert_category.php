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
                $query = "INSERT INTO category1 (Title,metaTitle,Url,content) VALUES('$Title','$metaTitle','$Url','$content')";
                $run  = mysqli_query($con,$query);

                if($run)
                {
                    print_r($run);
                    $_SESSION['sucess'] = "Data Inserted";
                    header('Location: Blog_category.php');	
                }
                 else
                {
                    $_SESSION['failure'] = "Data is not Inserted";
                     header('Location: Add_Category.php');	
                 }
            }
            else
            {
                echo "not inserted";
            }
        }else{
            $_SESSION[''] = "Please insert data properly";
            header('Location: Blog_category.php?failure="Please insert data properly"');	
        }

    }
    


	
?>