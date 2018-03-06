<?php

namespace maisonconnectee ;

use maisonconnectee\Observer;

interface Subject {
    
    public function addObserverOn(Observer $obs);
    public function removeObserverOn(Observer $obs);
    public function notifyObserver();
    
}
