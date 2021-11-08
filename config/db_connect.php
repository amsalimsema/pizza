<?php

// connect to database
$conn = mysqli_connect('localhost', 'sema', 'test123', 'ninja_pizza');

// check the connection
if (!$conn) {
    echo 'Connection error:' . mysqli_connect_error();
}
