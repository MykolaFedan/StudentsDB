<?php
include'config.php';
    
                           
                            // Create connection
    $conn = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   $sql = "UPDATE shop_feature_values_double SET sort = NULL  WHERE sort = 0 ";

    if (mysqli_query($conn, $sql)) {
        echo "Всі товари  обнулено";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);


?>

