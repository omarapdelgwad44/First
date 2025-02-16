<?php
/*
session_start();
$_SESSION['variable']
session_destroy();
*/


/*
// Start SESSION1 and store data
session_name("SESSION1");
session_start();
$_SESSION["user"] = "John Doe";
session_write_close();  // Save SESSION1 before switching

// Start SESSION2 and store data
session_name("SESSION2");
session_start();
$_SESSION["user"] = "omarrr";
session_write_close();  // Save SESSION2 before switching

// Reopen SESSION1 to retrieve its data
session_name("SESSION1");
session_start();
echo $_SESSION["user"];  // Output: John Doe

session_write_close();  // Save SESSION1 again

// Reopen SESSION2 to retrieve its data
session_name("SESSION2");
session_start();
echo $_SESSION["user"];  // Output: omarrr

session_write_close();  // Save SESSION2 again

*/
?>