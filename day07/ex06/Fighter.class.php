<?php 
    class Fighter {
        private $name; // assuming this is the name of the 'foot soldier/assassin/archer'
        public function __construct($str) {
            if ($str) {
                $this->$name = $str;
            } else {
                $this->$name = NULL;
            }
        }
        public function __toString() {
            if ($this->$name) {
                return ($this->$name); // returning the private variable...
            }
        }
    }
?>