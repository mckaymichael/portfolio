<?php

function h($str) {
    return htmlspecialchars($str);
}

function turn_on_error_reporting() {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

?>