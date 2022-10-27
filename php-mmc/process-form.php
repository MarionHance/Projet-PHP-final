<?php
$pdo = new PDO('mysql:host=localhost;dbname=contactmmc', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$pdo->exec("INSERT INTO contactadmin (prenom, nom, email, tel, sujet, msg) VALUES ('$_POST[prenom]', '$_POST[nom]','$_POST[email]', '$_POST[tel]', '$_POST[sujet]','$_POST[msg]')");

?> 