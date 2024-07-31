<?php

/*
function getConnexion()
{
    try {
        return new PDO(
            'mysql:host=localhost;dbname=id22223827_immobilier_benin;charset=UTF8',
            'id22223827_immobilier_benin',
            'Immobilier_benin92i?'
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
            'mysql:host=localhost;dbname=geu;charset=UTF8',
            'root',
            ''
        );
    } catch (PDOException $e) {
        // Handle database connection error
        die("Connection failed: " . $e->getMessage());
    }
}