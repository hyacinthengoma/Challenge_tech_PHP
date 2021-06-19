<?php
if (empty(session_id())) {
    session_start();
}
try {
    $db = new PDO('mysql:host=localhost;dbname=wild_code_school;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
}
