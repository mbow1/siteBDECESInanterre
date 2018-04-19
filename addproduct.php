<?php
session_start();
    try{
            $pdo = new PDO('mysql:host=localhost;dbname=bdd;', 'root', 'exia');
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
