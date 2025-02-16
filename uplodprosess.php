<?php
if (isset($_POST['uplod'])) {
    $pic = $_FILES['uplodedfile'];
    $picname = $pic["name"];
    $pictemp = $pic["tmp_name"];

    include "connect.php";

    // Insert file name into the database
    $insert = "INSERT INTO files(filename) VALUES('$picname')";
    $query = mysqli_query($conn, $insert);  // Use mysqli_query()

    if ($query) {
        // Create directory only if it doesn't exist
        if (!file_exists("DATA")) {
            mkdir("DATA");
        }

        // Move uploaded file to the DATA directory
        if (move_uploaded_file($pictemp, "DATA/$picname")) {
            echo "File uploaded successfully!";
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "Database insertion failed.";
    }
}
?>
