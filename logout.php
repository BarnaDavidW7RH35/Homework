<?php

unset($_SESSION["fn"]);
unset($_SESSION["ln"]);
unset($_SESSION["user"]);
session_unset();
header("Location://localhost/homework/index.php");
?>