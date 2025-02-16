<?php
if (isset($_POST['editpic'])) {
    $id = $_POST['id'];
    $pic = $_FILES['pic'];
    $picname = $pic["name"];
    $pictemp = $pic["tmp_name"];

    include "connect.php";
    $select = "SELECT * FROM files WHERE id='$id'";
    $query = mysqli_query($conn, $select);  // Use mysqli_query()
    $row = mysqli_fetch_array($query);
    $oldname = $row['filename'];
    $insert = "UPDATE files SET filename='$picname' WHERE id='$id'";
    $query = mysqli_query($conn, $insert);  // Use mysqli_query()

    if ($query) {
        // Create directory only if it doesn't exist
        if (!file_exists("DATA")) {
            mkdir("DATA");
        }

        // Move uploaded file to the DATA directory
        if (move_uploaded_file($pictemp, "DATA/$picname")) {
            unlink("DATA/$oldname");
            echo "File uploaded successfully!";
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "Database insertion failed.";
    }
}
?>
