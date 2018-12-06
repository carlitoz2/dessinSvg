<?php

class Rectangle extends Forme2D {
    
    protected $longueur;
    protected $largeur;
    public function __construct($largeur,$longueur){
        parent::__construct();
        $this->largeur = $largeur;
        $this->longueur = $longueur;
        ///$this->shape = $shape;
    }
    
    
    function draw(){
        return' <rect x="'.$this->anchorPoint->getPositionX().'" y="'.$this->anchorPoint->getPositionY().'" width="'.$this->largeur.'" height="'.$this->longueur.'" style="fill:'.$this->fill.';stroke-width:'.$this->strokeWidth.';stroke:'.$this->strokeColor.'" />';
    }

}