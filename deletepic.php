<?php
    $id = $_GET['id'];

    include "connect.php";
    $select = "SELECT * FROM files WHERE id='$id'";
    $query = mysqli_query($conn, $select);  // Use mysqli_query()
    $row = mysqli_fetch_array($query);
    $oldname = $row['filename'];
    $delete = "DELETE FROM files WHERE id='$id'";
     $query = mysqli_query($conn, $delete);  // Use mysqli_query()

    if ($query) {
        // Move uploaded file to the DATA directory
        if (unlink("DATA/$oldname")) {
            echo "File deleted successfully!";
        } else {
            echo "Failed to delete file.";
        }
    } else {
        echo "Database insertion failed.";
    }
?>
