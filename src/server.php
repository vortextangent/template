<?php

$baseDir = __DIR__ . '/../public';

$request = $_SERVER['REQUEST_URI'];

$fullPath = $baseDir . '/' . $_SERVER['REQUEST_URI'];

$test = realpath($fullPath);

if ($test !== false) {
    return false;
}

require __DIR__ . '/index.php';
