<?php
    class Produit{
        public Int $id;
        public String $titre;
        public String $sousTitre;
        public String $image;
        public String $marque;
        public Float $prix;
        public String $description;
        public Utilisateur $createur;
        public function __construct($pId, $pTitre, $pSousTitre, $pImage, $pPrix, $pMarque, $pDescription, $pCreateur)
        {
            $this->id = $pId;
            $this->titre = htmlentities($pTitre);
            $this->sousTitre = htmlentities($pSousTitre);
            $this->image = $pImage;
            $this->prix = floatval(htmlentities($pPrix));
            $this->marque = htmlentities($pMarque);
            $this->description = htmlentities($pDescription);
            $this->createur = $pCreateur;
        }
        public function __toString()    
        {
            return json_encode($this);
        }
    }
?>