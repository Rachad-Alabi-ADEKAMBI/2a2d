<?php

/*
function getConnexion()
{
    try {
        return new PDO(
            'mysql:host=sql307.infinityfree.com;dbname=ongadcom_2a2d;charset=UTF8',
            'ongadcom_root ',
            'D4Pj&ofxAbng8oLu'
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