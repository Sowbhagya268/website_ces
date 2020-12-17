<?php

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['Name'];
       $Email = $_POST['Email'];
       $Subject = 'CES Queries';
       $Queries = $_POST['Queries'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Queries))
       {
            echo "error";
       }
       else
       {
           $to = "harshusow268@gmail.com";

           if(mail($to,$Subject,$Queries,$Email))
           {
                echo "success";
           }
       }
    }

    else
    {
        header("location:indexpage.php");
    }
?>
