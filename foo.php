<?php

$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8mb4', 'root', 'root');

// Make your model available
include 'models/FooModel.php';

// Create an instance
$fooModel = new FooModel($db);

// Get the list of Foos
$fooList = $fooModel->getAllFoos();

// Show the view
include 'views/foo-list.php';