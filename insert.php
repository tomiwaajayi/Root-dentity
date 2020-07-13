<?php
    $server = 'localhost';
    $username = 'tomiwaajayi';
    $password = 'dacapo42';
    $database = 'root_dentity';

    $connection = mysqli_connect($server, $username, $password, $database) or die(mysqli_error());

    if(isset($_POST['submit'])){
        if(!empty($_POST['email'])){
            $email = $_POST['email'];

            $query = "insert into root_dentity(email) values('$email')";
            $run = mysqli_query($connection,$query) or die(mysqli_error());

            if($run) {
                echo "We'll keep you updated";
            }
            else {
                echo "There has been an error";
            }
        }

        else {
            echo "All fields are required";
        }
    }
?>