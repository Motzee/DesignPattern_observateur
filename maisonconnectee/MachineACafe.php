<?php

namespace maisonconnectee ;

class MachineACafe implements Observer {
    
    public function faireLeCafe() {
        echo "<p>Prépare un café</p>" ;
    }
    
    public function update(int $temp, string $hour, string $day) {
        if($hour % 2 == 0) {
            $this->faireLeCafe() ;
        }
    }
    
}
