<?php
session_start();
session_unset();
session_destroy();
header("Location: act3_2.php");
exit;
