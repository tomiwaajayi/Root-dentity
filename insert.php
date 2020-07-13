<?php
        $server = 'us-cdbr-east-02.cleardb.com';
        $username = 'b8eb712ab68b29';
        $password = '7dbd4ce1';
        $database = 'heroku_19e4725a27d848b';


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