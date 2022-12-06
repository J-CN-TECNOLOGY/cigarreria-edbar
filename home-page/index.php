<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
} else {
    header("Location: ../login.php");
}

require_once "controllers/template-controller.php";

$template = new ControllerTemplate();
$template->LoadTemplate();
