<?php

namespace maisonconnectee;

interface Observer {
    
    public function update(int $temp, string $hour, string $day) ;
    
}
