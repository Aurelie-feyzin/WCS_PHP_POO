<?php declare(strict_types=1);

/**
 * Class Speedometer
 */
class Speedometer
{

    /**
     * @var float
     */
    private const ONE_KM_TO_MILE = 0.62137119;

    private static function checkValueIsPositive(float $value): ?float{
        if ($value < 0) {
            $value = null;
            throw new InvalidArgumentException("<span style='color:darkorange;'>Attention la distance saisie est négative </span>");
        }
        return $value;
    }

    public static function kmToMiles(float $km):float
    {
        try {
           self::checkValueIsPositive($km);
       } catch (InvalidArgumentException $e) {
           echo $e->getMessage();
       }
        return $km * self::ONE_KM_TO_MILE;
    }

    public static function milesToKm(float $miles):float
    {
        try {
            self::checkValueIsPositive($miles);
        } catch (InvalidArgumentException $e) {
            echo $e->getMessage();
        }
        return $miles * (1/self::ONE_KM_TO_MILE);
    }
}
