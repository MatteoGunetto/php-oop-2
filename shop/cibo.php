<?php
require_once __DIR__ . './prodotti.php';
require_once __DIR__ . './categorie.php';

class Giochi extends Prodotti
{
    public $materiale;

    function __construct(
        Categorie $_categoria,
        string $_nome_prod,
        float $_prezzo,
        bool $_dispo,
        string $_img,
        string $_materiale
    ) {
        parent::__construct(
            $_categoria,
            $_nome_prod,
            $_prezzo,
            $_dispo,
            $_img
        );

       $this->materiale=$_materiale;
    }
}