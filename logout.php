<?php
require 'core.php';
session_destroy();
header('Location: loginform.php');
?>