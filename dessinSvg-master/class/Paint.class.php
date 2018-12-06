<?php

class Paint {
    protected $width = 800;
    protected $height = 800;
    public $dessins =[];


    public function __construct(){
        $this->width = 800;
        $this->height = 800;
    }


    public function addShape(Forme2D $Forme2D){
        $this->dessins[]= $Forme2D;
    }

    public function render(){
        $svg = '<svg width="'.$this->width.'" height="'.$this->height.'">';
        foreach($this->dessins as $dessin)
        {

            $svg.=$dessin->draw();

            // return' <'.$this->shape.' width="'.$this->largeur.'" height="'.$this->longueur.'" style="fill:'.$this->couleur.';stroke-width:'.$this->strokeWidth.';stroke:'.$this->strokeColor.'" />';
        }
        $svg.= '</svg>';
        return $svg;
        
    }



}