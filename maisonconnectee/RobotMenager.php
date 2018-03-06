<?php

namespace maisonconnectee ;

//le robot ménager pourrait très bien hériter d'une classe parente en plus d'avoir une interface
class RobotMenager implements Observer {
    
    public function nettoyer() {
        echo "<p>Passe un coup d'aspirateur puis un coup de serpillère</p>" ;
    }
    
    public function update(int $temp, string $hour, string $day) {
        //bon je triche : là ça risque de le faire plusieurs fois par jour)
        if($day == "samedi" || $day == "mercredi") {
            $this->nettoyer() ;
        }
    }
}
