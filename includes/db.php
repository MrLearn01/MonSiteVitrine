<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=msi', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}
