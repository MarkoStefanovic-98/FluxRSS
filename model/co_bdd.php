<?php
    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=fluxrss;charset=utf8","root","");
    }
    catch(Exception $e)
    {
         die("erreur de connexion");
    }