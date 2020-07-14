<?php
        $server = 'us-cdbr-east-02.cleardb.com';
        $username = 'ba6d0da3008d55'; 
        $password = '849378c3';
        $database = 'heroku_b87aacc503cb869';

        $connection = mysqli_connect($server, $username, $password, $database) or die(mysqli_error());


    if(isset($_POST['submit'])) {

        if (!empty($_POST['email'])){
            $emailer = $_POST['email'];
            $query = "INSERT INTO emails (email) VALUES ('$emailer')";
            $run = mysqli_query($connection,$query) or mysqli_error($connection);

            if($run) {
                header("Location: index.php");
                // echo "We'll keep you updated";
            }else {
                echo "There has been an error";
            }
        }else{
            echo "All fields are required";

        }

    }

?>