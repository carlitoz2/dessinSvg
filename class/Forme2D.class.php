<?php
 
abstract class Forme2D{

    // PROPRIETES

    protected $strokeWidth; // Epaisseur bordure
    protected $fill; // couleur de remplissage
    protected $opacity; // opacité
    protected $opacityStroke; // opacité du trait
    protected $strokeColor; // couleur du trait
    //protected $anchorPoint; 

    // METHODES

    public function __construct(){
        $this->strokeWidth = 1;
        $this->fill = 'blue';
        $this->opacity = 1 ;
        $this->opacityStroke = 1;
        $this->strokeColor = 'red';      
        $this->anchorPoint = new Point(30,30);
        //$this->anchorPoint->getPositionY();
    }

    abstract function draw();

    /**************************
     * GETTERS AND SETTERS*
    ***************************/


    /****************************
     * Get the value of strokeWidth
     */ 
    public function getStrokeWidth()
    {
        return $this->strokeWidth;
    }

    /**
     * Set the value of strokeWidth
     *
     * @return  self
     */ 
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }

    /**
     * Get the value of fill
     */ 
    public function getFill()
    {
        return $this->fill;
    }

    /**
     * Set the value of fill
     *
     * @return  self
     */ 
    public function setFill($fill)
    {
        $this->fill = $fill;

        return $this;
    }

    /**
     * Get the value of opacity
     */ 
    public function getOpacity()
    {
        return $this->opacity;
    }

    /**
     * Set the value of opacity
     *
     * @return  self
     */ 
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }

    /**
     * Get the value of opacityStroke
     */ 
    public function getOpacityStroke()
    {
        return $this->opacityStroke;
    }

    /**
     * Set the value of opacityStroke
     *
     * @return  self
     */ 
    public function setOpacityStroke($opacityStroke)
    {
        $this->opacityStroke = $opacityStroke;

        return $this;
    }

    /**
     * Get the value of strokeColor
     */ 
    public function getStrokeColor()
    {
        return $this->strokeColor;
    }

    /**
     * Set the value of strokeColor
     *
     * @return  self
     */ 
    public function setStrokeColor($strokeColor)
    {
        $this->strokeColor = $strokeColor;

        return $this;
    }

    /**
     * Get the value of anchorPoint
     */ 
    public function getAnchorPoint()
    {
        return $this->anchorPoint;
    }

    /**
     * Set the value of anchorPoint
     *
     * @return  self
     */ 
    public function setAnchorPoint($x,$y)
    {
        $this->anchorPoint = new Point($x,$y);

        return $this;
    }
}