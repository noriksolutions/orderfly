<?php
session_start();
session_destroy();
session_unset();
mysqli_close($conn);
header("Location: index.php");
?>
