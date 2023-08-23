<?php

$conn = mysqli_connect("localhost", "root", "", "coupon");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

?>