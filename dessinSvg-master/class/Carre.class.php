<?php 
class Carre extends Forme2D {
    
    protected $cote;
    public function __construct($cote){
        parent::__construct();
        $this->cote = $cote;

    }
    
    
    function draw(){
        return' <rect x="'.$this->anchorPoint->getPositionX().'" y="'.$this->anchorPoint->getPositionY().'" width="'.$this->cote.'" height="'.$this->cote.'" style="fill:'.$this->fill.';stroke-width:'.$this->strokeWidth.';stroke:'.$this->strokeColor.'" />';
    }

}