<?php
function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}

spl_autoload_register('myLoader');

use maisonconnectee\Capteurs ;
use maisonconnectee\Radiateurs ;
use maisonconnectee\MachineACafe ;
use maisonconnectee\RobotMenager ;

$maisonconnectee = new Capteurs() ;

$robotMenager = new RobotMenager() ;
$machineCafe = new MachineACafe() ;
$radiateurs = new Radiateurs() ;

$maisonconnectee->addObserverOn($robotMenager) ;
$maisonconnectee->addObserverOn($machineCafe) ;
$maisonconnectee->addObserverOn($radiateurs) ;

echo "<p>Nouvelle journée ! Appel newDay()</p>" ;
$maisonconnectee->newDay() ;
echo "<p>appel cyclic()</p>" ;
$maisonconnectee->cyclic() ;