<?php
session_start();
if ($_GET["log"]=="x"){
session_destroy();  
} else {
  echo "err";
}

echo "destr";
header('Location: index.php');