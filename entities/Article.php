<?php
class Article
{
private $identifiant;
private $type;
private $date;
private $titre;
private $auteur;
private $im1;
private $im2;
private $im3;
private $texte;
private $citation;


function __construct($id, $type, $date, $titre, $aut, $im1, $im2,$im3, $texte, $citation){
  $this->identifiant = $id;
  $this->type = $type;
  $this->date = $date;
  $this->titre = $titre;
  $this->auteur = $aut;
  $this->im1 = $im1;
  $this->im2 = $im2;
  $this->im3 = $im3;
  $this->texte = $texte;
  $this->citation = $citation;
}

public function getId(){
  return $this->identifiant;
}

public function getType(){
  return $this->type;
}

public function getDate(){
  return $this->date;
}

public function getTitre(){
  return $this->titre;
}

public function getAuteur(){
  return $this->auteur;
}

public function getIm1(){
  return $this->im1;
}

public function getIm2(){
  return $this->im2;
}

public function getIm3(){
  return $this->im3;
}

public function getTexte(){
  return $this->texte;
}

public function getCitation(){
  return $this->citation;
}


}

 ?>
