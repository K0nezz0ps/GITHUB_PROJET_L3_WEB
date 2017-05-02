<?php

    try
        {
            $dsn = 'mysql:host=10.11.10.13; dbname=BDE11404117';

            //$connexion = new PDO('mysql:host='.SQL_SERVEUR.';port='.SQL_PORT.';dbname='.BASE_UTILISATEURS, SQL_USER, SQL_PASSWD);
            $connexion = new PDO($dsn, 'E11202486', '2405050955W');
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connexion->exec("SET CHARACTER SET utf8");

            $this->connexion = $connexion;

            return true;
        }

        catch(Exception $e)
        {
            $this->enregistrer_erreur('erreur connecter');
            $this->erreur = basename(__FILE__) . ' erreur connecter ' . $e->getMessage() . $e->getCode();
            return false;
        }

?>