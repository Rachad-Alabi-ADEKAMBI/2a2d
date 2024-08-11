<?php

/*
function getConnexion()
{
    try {
        return new PDO(
            'mysql:host=sql307.infinityfree.com;dbname=if0_37074155_2a2d;charset=UTF8',
            'if0_37074155',
            'Jep4h9xYoBkO'
        );
    } catch (PDOException $e) {
        // Handle database connection error
        die("Connection failed: " . $e->getMessage());
    }
}
*/


function getConnexion()
{
    try {
        return new PDO(
            'mysql:host=localhost;dbname=2a2d;charset=UTF8',
            'root',
            ''
        );
    } catch (PDOException $e) {
        // Handle database connection error
        die("Connection failed: " . $e->getMessage());
    }
}