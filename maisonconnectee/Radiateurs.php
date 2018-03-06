<?php

namespace maisonconnectee ;

class Radiateurs implements Observer {
    
    public function chauffer() {
        echo "<p>Chauffe la pièce</p>" ;
    }
    
    public function update(int $temp, string $hour, string $day) {
        if($temp <= 20) {
            $this->chauffer() ;
        }
    }
    
}
