<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/ShowController.php',
    'add' => 'app/Controllers/AddController.php',
    'edit' => 'app/Controllers/EditController.php',
    'show' => 'app/Controllers/ShowController.php',
    'validate' => 'app/Controllers/ValidationController.php'
]);