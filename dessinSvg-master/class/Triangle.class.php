<?php


<polygon points="50,160 55,180 70,180"

class Triangle extends Forme2D {
    
    protected $anchorPoint2;
    protected $anchorPoint3;


    public function __construct($anchorPoint,$anchorPoint2,$anchorPoint3){
        parent::__construct();
        $this->anchorPoint2 = $anchorPoint2;
        $this->anchorPoint3 = $anchorPoint3;

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

    function draw(){
        return' <polygon points="'.$this->anchorPoint->getPositionX().','.$this->anchorPoint->getPositionY().' '.$this->$anchorPoint2->getPositionX().','.$this->anchorPoint2>getPositionY().' '.$this->$anchorPoint3->getPositionX().','.$this->anchorPoint3>getPositionY().'" style="fill:'.$this->fill.';stroke-width:'.$this->strokeWidth.';stroke:'.$this->strokeColor.'" />';
    }
}