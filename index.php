<?php
$ip = $_SERVER['REMOTE_ADDR'];

        // create curl resource

        $ch = curl_init();



        // set url

        curl_setopt($ch, CURLOPT_URL, "https://api.ipgeolocation.io/ipgeo?apiKey=8cad561a4307480cac56383f44fc9178&ip=".$ip);



        //return the transfer as a string

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);



        // $output contains the output string

        $output = curl_exec($ch);
        print_r($output)



        // close curl resource to free up system resources

        curl_close($ch); 
?>