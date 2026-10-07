<?php
// Redirect to Laravel's public directory
$uri = $_SERVER['REQUEST_URI'] ?? '/';
if (substr($uri, -1) !== '/') {
    header("Location: " . basename(__DIR__) . "/public/");
} else {
    header("Location: public/");
}
exit;
