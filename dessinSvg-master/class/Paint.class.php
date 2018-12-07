<?php

class Paint {
    protected $width = 800;
    protected $height = 800;
    public $dessins =[];

      
    /** Contruction de l'objet Paint
     * 
     * @param void
     * @return void
     */
    public function __construct(){
        $this->width = 800;
        $this->height = 800;
    }

    /** Ajout des shapes dans le tableau dessin
     * 
     * 
     * @param object $Forme2D
     * @return self
     */
    //pour une forme(this) l'ajoute dans un tableau dessin
    public function addShape(Forme2D $Forme2D){
        $this->dessins[]= $Forme2D;

        return $this; // retourne l'instance de l'objet permet de faire du chaînage de méthodes
    }
    /** 'Ecriture' des formes dans l'objet SVG crée par ladite function
     * 
     * 
     * @param void
     * @return string $ svg
     */
    // Grace au .= on concatène les strings qui contiennent d'abord, ici les balises de la zone SVG et pour chaque dessin du tableau dessin on concatène la chaine crée par la fonction draw(propre au formes)
    public function render(){
        $svg = '<svg width="'.$this->width.'" height="'.$this->height.'">';
        foreach($this->dessins as $dessin)
        {

            $svg.=$dessin->draw();
        }
        $svg.= '</svg>';
        return $svg;
        
    }



}