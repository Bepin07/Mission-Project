<?php 
if ($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST["submit"])) {
    header("Location: index.php");
    exit();
}
?>