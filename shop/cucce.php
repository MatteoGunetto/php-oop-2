<?php
require_once __DIR__ . './prodotti.php';
require_once __DIR__ . './Categorie.php';

class Cucce extends Prodotti
{
    public $materiale;
    public $forma;

    function __construct(
        Categorie $Categorie,
        string $_nome_prod,
        float $_prezzo,
        bool $_dispo,
        string $_img,
        string $_materiale,
        int $_forma
    ) {
        parent::__construct(
            $Categorie,
            $_nome_prod,
            $_prezzo,
            $_dispo,
            $_img
        );

        $this->materiale = $_materiale;
        $this->forma = $_forma;
    }
}