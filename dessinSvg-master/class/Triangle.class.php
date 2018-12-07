<?php

class Triangle extends Forme2D {
    /**
     * @var integer Position du deuxieme point
     */
    protected $anchorPoint2;
        /**
     * @var integer Position du troisième point
     */
    protected $anchorPoint3;

    /** Contruction de l'objet rectangle
     * 
     * @param void 
     * @return void
     */

    public function __construct(){
        parent::__construct();
        $this->anchorPoint2 = new Point(30,30);
        $this->anchorPoint3 = new Point(30,30);

    }    
    /**
     * Get the value of anchorPoint2
     */ 
    public function getAnchorPoint2()
    {
        return $this->anchorPoint2;
    }

    /**
     * Set the value of anchorPoint2
     *
     * @return  self
     */ 
    public function setAnchorPoint2($x,$y)
    {
        $this->anchorPoint2 = new Point($x,$y);

        return $this;
    }

    /**
     * Get the value of anchorPoint3
     */ 
    public function getAnchorPoint3()
    {
        return $this->anchorPoint3;
    }

    /**
     * Set the value of anchorPoint3
     *
     * @return  self
     */ 
    public function setAnchorPoint3($x,$y)
    {
        $this->anchorPoint3 = new Point($x,$y);

        return $this;
    }


    
    /** Dessin de l'objet triangle
     * 
     * @param void 
     * @return string chaine SVG du triangle
     */
    function draw(){
     return '<polygon points="'.$this->anchorPoint->getPositionX().','.$this->anchorPoint->getPositionY().' '.$this->anchorPoint2->getPositionX().','.$this->anchorPoint2->getPositionY().' '.$this->anchorPoint3->getPositionX().','.$this->anchorPoint3->getPositionY().'" style="fill:'.$this->fill.';stroke:'.$this->strokeColor.';stroke-width:'.$this->strokeWidth.'" />';
    }
}