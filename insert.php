<?php
        $server = 'us-cdbr-east-02.cleardb.com';
        $username = 'ba6d0da3008d55'; 
        $password = '849378c3';
        $database = 'heroku_b87aacc503cb869';

        $connection = mysqli_connect($server, $username, $password, $database) or die(mysqli_error());

    if(isset($_POST['submit'])) {

        if (!empty($_POST['email'])){
            $emailer = $_POST['email'];
            $query = "SELECT * from emails where email='". $emailer . "'";

            $run = mysqli_query($connection,$query);

            if(mysqli_num_rows($run) > 0){
                http_response_code(403);
                return ;
            }

            $query = "INSERT INTO emails (email) VALUES ('$emailer')";
            $run = mysqli_query($connection,$query) or mysqli_error($connection);

            if($run) {
                echo "Great! You'd be the first to know when we launch!";
            }else {
                echo "There has been an error";
            }
        }else{
            echo "All fields are required";
        }

    }
?>