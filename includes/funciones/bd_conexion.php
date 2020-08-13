<?php 
    $conn = new mysqli('localhost', 'root', 'root', 'pdewebcamp');

    if($conn ->connect_error) {
        echo $error -> connect_error ;
    }
?>