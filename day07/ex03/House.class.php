<?php
    class House {

        // private function getMouseName() {
        //     return "Poop";
        // }
        // private function getHouseMotto() {
        //     return "It was fucken one of yas";
        // }
        // private function getHouseSeat() {
        //     return "Shithole";
        // }

        public function introduce() {
                print("House " . $this->getHouseName() . " of " . $this->getHouseSeat() . " : " ."\"" .$this->getHouseMotto(). "\"" . "\n");
        }
    }
    //House $this->getHouseName of $this->getHouseSeat : "$this->getHouseMotto"
?>