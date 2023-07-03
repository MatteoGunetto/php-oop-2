<?php
require_once __DIR__.'./Categorie.php';
class Prodotti{
    public $Categorie;
    public $nome_prodotto;
    public $prezzo;
    public $disponibilita;
    public $img_path;

    function __construct(
        Categorie $Categorie,
        string $_nome_prod,
        float $_prezzo,
        bool $_dispo,
        string $_img)
    {
        $this->Categorie = $Categorie;
        $this->nome_prodotto = $_nome_prod;
        $this->prezzo = $_prezzo;
        $this->disponibilita = $_dispo;
        $this->img_path = $_img;
    }
    // public function getCategoria()
    // {
    //     return $this->categoria;
    // }
    // public function getNomeProdotto()
    // {
    //     return $this->nome_prodotto;
    // }
    // public function getPrezzo()
    // {
    //     return $this->prezzo;
    // }
    // public function getDispo()
    // {
    //     return $this->disponibilita;
    // }
    // public function getImgPath()
    // {
    //     return $this->img_path;
    // }
}
?>