<?php
    class UnholyFactory {
        private $temp;

        public function __construct() {
            $this->temp = array();// empty array                 // now doesn't use $... ?why
        }

        public function absorb($fighter) {
            if ($fighter instanceof Fighter) {
                $this->$name = $fighter->__toString();
                if (in_array($this->$name, $this->temp) == FALSE) {
                    print("(Factory absorbed a fighter of type ".$this->$name .")" .PHP_EOL);
                    $this->temp[get_class($fighter)] = $this->$name;
                }
                else {
                    print("Factory already absorbed a fighter of type " . $this->$name . ")" . PHP_EOL);
                }
            }
        }
            public function fabricate($rf) {
                if (in_array($rf, $this->temp) == FALSE) {
                    print("(Factory hasn't absorbed any fighter of type $rf)\n");
                    return NULL;
                }
                else {
                    print("(Factory fabricates a fighter of type $rf)\n");
                    $this->$key = array_search($rf, $this->temp);
                    $this->$classname = $var.$this->$key;
                    return (new $this->$classname());
                }
            }
        }
?>