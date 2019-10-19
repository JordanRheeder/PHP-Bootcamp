<?php
    class NightsWatch implements IFighter {
        private $fighter;

        public function recruit($person) {
            if ($person instanceof IFighter) {
                $fighter .= $person->fight();
            }
        }
        public function fight() {
            print($fighter);
        }
    }
?>