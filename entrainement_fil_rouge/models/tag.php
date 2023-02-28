<?php
    class Tag {
        public Int $id;
        public String $libelle;
        public function __construct($pId, $pLibelle)
        {
            $this->id = $pId;
            $this->libelle = htmlentities($pLibelle);
        }
        public function __toString()    
        {
            return json_encode($this);
        }
    }
?>