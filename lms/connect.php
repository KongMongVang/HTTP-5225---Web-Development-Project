<?php
    $connect = mysqli_connect(
                'localhost', 
                'root', 
                '', //PUT YOUR PASSWORD. FOR MAC LEAVE PASSWORD EMPTY
                'schools' //YOUR DATABASE NAME
            );
            if(!$connect){
                die('Connection Failed: ' . mysqli_connect_error());
            }
