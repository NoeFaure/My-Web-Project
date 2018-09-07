<?php

$pdo = new PDO('mysql:dbname=writeit_db; host=localhost;', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);