<?php
require_once __DIR__.'./categorie.php';
class Prodotti{
    public $categorie;
    public $nome_prodotto;
    public $prezzo;
    public $disponibilita;
    public $img_path;

    function __construct(
        categorie $categorie,
        string $_nome_prod,
        float $_prezzo,
        bool $_dispo,
        string $_img)
    {
        $this->categorie = $categorie;
        $this->nome_prodotto = $_nome_prod;
        $this->prezzo = $_prezzo;
        $this->disponibilita = $_dispo;
        $this->img_path = $_img;
    }
}
?>