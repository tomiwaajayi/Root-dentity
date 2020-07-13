<?php
        $server = 'localhost';
        $username = 'tomiwaajayi';
        $password = 'dacapo42';
        $database = 'root_dentity';


        $connection = mysqli_connect($server, $username, $password, $database) or die(mysqli_error());


    if(isset($_POST['submit'])) {

        if (!empty($_POST['email'])){
            $emailer = $_POST['email'];
            $query = "INSERT INTO emails (email) VALUES ('$emailer')";
            $run = mysqli_query($connection,$query) or mysqli_error($connection);

            if($run) {
                echo "We'll keep you updated";
            }else {
                echo "There has been an error";
            }
        }else{
            echo "All fields are required";

        }

    }

?>