<?php
session_start();
unset($_SESSION['uname']);
session_destroy();
/*if(isset($_SESSION['uname']))
    echo "set";
else
    echo "not set";
*/
header('Location:index.html');
?>
