<?php declare(strict_types=1);

require_once 'Speedometer.php';

function testSpeedometer($values)
{
    foreach ($values as $value){
        try {
            echo $value . 'km correspondent à ' . Speedometer::kmToMiles($value) . 'miles <br>';
            echo $value . 'miles correspondent à ' . Speedometer::milesToKm($value). 'km <br>';
        } catch (TypeError $e) {
            echo "<span style='color:red;'>Exception capturé dans index </span>". $e->getMessage() .'<br>';
        } finally {
            echo '<br>';
        }

    }
}

testSpeedometer([10, 0, -10, 'a', null, [1, 'b'], 50]);
