<?php

setcookie("user", "Alex Porter", time() + 3600);
if (isset($_COOKIE["user"])) {
    echo "Value is: " . $_COOKIE["user"];
    header("Location: cookie2.php");
} else {
    echo "Cookie is not set!";
}


?>