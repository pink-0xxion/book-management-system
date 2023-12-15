<?php
session_start();
session_destroy();
header('locaation:http://localhost:8090/book/Login.php');
?>