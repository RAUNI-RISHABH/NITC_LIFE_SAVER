<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['user']);
// Delete all session variables


// Jump to login page
header('Location: donor_login.php');

?>