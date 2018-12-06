<?php

class Cercle extends Forme2D {
    
    protected $rayon;
    public function __construct($rayon){
        parent::__construct();
        $this->rayon = $rayon;

    }
    
    
    function draw(){
        return' <circle cx="'.$this->anchorPoint->getPositionX().'" cy="'.$this->anchorPoint->getPositionY().'" r="'.$this->rayon.'" style="fill:'.$this->fill.';stroke-width:'.$this->strokeWidth.';stroke:'.$this->strokeColor.'" />';
    }

}