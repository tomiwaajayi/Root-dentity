<?php
        $server = 'e11wl4mksauxgu1w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
        $username = 'g0fz6s9hey8x87nd';
        $password = 'gl4ovqtwhl8w195l';
        $database = 'ly0k57b6ruhdkxuu';


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