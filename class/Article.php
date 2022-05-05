<?php


class Article {
    public int $ART_ID;
    public string $ART_NAME;
    public string $ART_DESCRIPTION;
    public float $ART_PRIX_HT;
    public float $ART_PRIX_TTC;
    public string $ART_IMAGE;
    public string $ART_TAILLE;
    public string $ART_QTT;


public function __construct(int $ART_ID, string $ART_NAME, string $ART_DESCRIPTION, float $ART_PRIX_HT, float $ART_PRIX_TTC, string $ART_IMAGE, string $ART_TAILLE,string $ART_QTT)
{
    $this->ART_ID = $ART_ID;
    $this->ART_NAME = $ART_NAME;
    $this->ART_DESCRIPTION = $ART_DESCRIPTION;
    $this->ART_PRIX_HT = $ART_PRIX_HT;
    $this->ART_PRIX_TTC = $ART_PRIX_TTC;
    $this->ART_IMAGE = $ART_IMAGE;
    $this->ART_TAILLE = $ART_TAILLE;
    $this->ART_QTT = $ART_QTT;
}

}