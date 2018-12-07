<?php
 
abstract class Forme2D{

    // PROPRIETES

    /**
     * @var integer epaisseur de la bordure
     */
    protected $strokeWidth; // Epaisseur bordure

    /**
     * @var string couleur de remplissage
     */
    protected $fill; // couleur de remplissage


    /**
     * @var integer opacité de la forme
     **/
    protected $opacity; // opacité

    /**
     * @var integer opacité du trait
     */
    protected $opacityStroke; // opacité du trait

    /**
     * @var string couleur du trait
     */
    protected $strokeColor; // couleur du trait

        /**
     * @var integer,integer  point d'ancrage
     */
    protected $anchorPoint; 



  
    /** Contruction de l'objet form 2D
     * 
     * @param void
     * @return void
     */
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

        /**
     * Get point d'ancrage
     *
     * @return  integer,integer
     */ 
    public function getAnchorPoint()
    {
        return $this->anchorPoint;
    }
    
    /**
     * Get epaisseur de la bordure
     *
     * @return  integer
     */ 
    public function getStrokeWidth()
    {
        return $this->strokeWidth;
    }

    /**
     * Set epaisseur de la bordure
     *
     * @param  integer  $strokeWidth  epaisseur de la bordure
     *
     * @return  self
     */ 
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }

    /**
     * Get couleur de remplissage
     *
     * @return  string
     */ 
    public function getFill()
    {
        return $this->fill;
    }

    /**
     * Set couleur de remplissage
     *
     * @param  string  $fill  couleur de remplissage
     *
     * @return  self
     */ 
    public function setFill(string $fill)
    {
        $this->fill = $fill;

        return $this;
    }

    /**
     * Get opacité de la forme
     *
     * @return  integer
     */ 
    public function getOpacity()
    {
        return $this->opacity;
    }

    /**
     * Set opacité de la forme
     *
     * @param  integer  $opacity  opacité de la forme
     *
     * @return  self
     */ 
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }

    /**
     * Get couleur du trait
     *
     * @return  string
     */ 
    public function getStrokeColor()
    {
        return $this->strokeColor;
    }

    /**
     * Set couleur du trait
     *
     * @param  string  $strokeColor  couleur du trait
     *
     * @return  self
     */ 
    public function setStrokeColor(string $strokeColor)
    {
        $this->strokeColor = $strokeColor;

        return $this;
    }


}