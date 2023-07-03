<?php

class categorie{
    public $nome;
    public $icona;

    function __construct(string $_nome, string $_icona)
    {
        $this->nome = $_nome;
        $this->icona = $_icona;
    }

}