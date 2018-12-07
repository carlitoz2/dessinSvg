<?php
class Ellipse extends Forme2D {
    
    protected $rayX;
    protected $rayY;
    public function __construct($rayX,$rayY){
        parent::__construct();
        $this->rayX = $rayX;
        $this->rayY = $rayY;

    }
        /** Dessin de l'objet ellipse
     * 
     * @param void 
     * @return string chaine SVG de l'ellipse
     */
    function draw(){
        return' <ellipse cx="'.$this->anchorPoint->getPositionX().'" cy="'.$this->anchorPoint->getPositionY().'" rx="'.$this->rayX.'" ry="'.$this->rayY.'" style="fill:'.$this->fill.';stroke-width:'.$this->strokeWidth.';stroke:'.$this->strokeColor.'" />';
    }

}