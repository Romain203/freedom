<?php
global $pdo;
if (isset($pdo)) { 
    return;
}
$pdo = new PDO("mysql:host=localhost;dbname=freedom;charset=utf8", "root");