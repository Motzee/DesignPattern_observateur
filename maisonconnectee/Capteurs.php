<?php

namespace maisonconnectee ;

use maisonconnectee\Subject ;
use maisonconnectee\Observer ;

class Capteurs implements Subject{
    
    private $observers = [] ;
    private $temperature = 20 ;
    private $hour = "14" ;
    private $day = "lundi" ;
    
    //on va pouvoir se mettre à surveiller n'importe quel objet possédant l'interface Observer
    public function addObserverOn(Observer $obs) {
        $this->observers[] = $obs ;
    }
    
    public function removeObserverOn(Observer $obs) {
        if(($key = array_search($obs, $this->observers, true)) !== FALSE) {
            unset($this->observers[$key]);
        }
    }
    
    public function notifyObserver() {
        foreach($this->observers as $observer) {
            $observer->update($this->temperature, $this->hour, $this->day);
        }
    }
    
    public function newDay() {
        echo "Beginning a new day !" ;
        
        $this->temperature = rand(15, 35) ;
        $this->hour = date("H") ;
        $this->day = date("d") ;
        
        $this->notifyObserver();
    }
    
    public function cyclic() {
        $this->temperature = rand(15, 35) ;
        $this->hour = date("H") ;
        
        $this->notifyObserver();
    }
}
