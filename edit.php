<!DOCTYPE html>
<?php   
if(isset($_GET['pid'])){
    include "connect.php";
    $id = $_GET['pid'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "<html>
    <head>
        <title>Edit User</title>
        <style>
            .container {
                width: 50%;
                margin: 0 auto;
            }
            .button {
                padding: 5px 10px;
                margin: 2px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            .edit-button {
                background-color: #4CAF50;
                color: white;
            }
            .delete-button {
                background-color: #f44336;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Edit User</h2>
            <form action='update.php' method='post'>
                <input type='hidden' name='id' value='" . $row['id'] . "'>
                <label for='username'>Username:</label><br>
                <input type='text' id='username' name='username' value='" . $row['username'] . "'><br>
                <label for='email'>Email:</label><br>
                <input type='email' id='email' name='email' value='" . $row['email'] . "'><br><br>
                <input type='submit' value='Update' class='button edit-button'>
            </form>
        </div>
    </body>
    </html>";
    $conn->close();
}
 ?>