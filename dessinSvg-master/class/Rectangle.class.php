<?php

class Rectangle extends Forme2D {
    
    /**
     * @var integer longueur du rectangle
     */
    protected $longueur;
    /**
     * @var integer largeur du rectangle
     */
    protected $largeur;


     /** Contruction de l'objet rectangle
     * 
     * @param integer $largeur largeur du rectangle
     * @param integer $longueur longueur du rectangle
     * @return void
     */
    public function __construct($largeur,$longueur){
        parent::__construct();
        $this->largeur = $largeur;
        $this->longueur = $longueur;
        ///$this->shape = $shape;
    }
            /** Dessin de l'objet rectangle
     * 
     * @param void 
     * @return string chaine SVG du rectangle
     */
    
    function draw(){
        return' <rect x="'.$this->anchorPoint->getPositionX().'" y="'.$this->anchorPoint->getPositionY().'" width="'.$this->largeur.'" height="'.$this->longueur.'" style="fill:'.$this->fill.';stroke-width:'.$this->strokeWidth.';stroke:'.$this->strokeColor.'" />';
    }

}