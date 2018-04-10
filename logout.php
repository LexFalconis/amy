<?php
session_start();
session_destroy();
echo "destr";
header('Location: index.php');