<?php
    class Utilisateur {
        public Int $id;
        public String $nom;
        public String $prenom;
        public function __construct($pId, $pNom, $pPrenom)
        {
            $this->id = $pId;
            $this->nom = htmlentities($pNom);
            $this->prenom = htmlentities($pPrenom);
        }
        public function __toString()    
        {
            return json_encode($this);
        }
    }
?>