<?php
session_start();
if (isset($_SESSION['Username'])) {
    echo 'Welcom';
} else {
    header('Location: index.php');
}