<?php

session_start();
session_destroy();
header('Location: http://easyit.rs/test/login.php');
exit;