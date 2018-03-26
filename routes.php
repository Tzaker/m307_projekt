<?php

$router = new Router();

$router->define([
    'add' => 'app/Controllers/AddController.php',
    'edit' => 'app/Controllers/EditController.php'
]);