<?php

namespace Conversion\Unit;

use Conversion\Unit;

class UnitRegistry
{

    /**
     * @param $unit
     *
     * @return UnitInterface
     * @throws \InvalidArgumentException
     */
    public function getUnit($unit)
    {
        switch ($unit) {
            // WEIGHT
            case Weight\Gram::SYMBOL:
                return new Weight\Gram();
            break;
            case Weight\Kilogram::SYMBOL:
                return new Weight\Kilogram();
            break;
            case Weight\Milligram::SYMBOL:
                return new Weight\Milligram();
            break;
            case Weight\Microgram::SYMBOL:
                return new Weight\Microgram();
            break;
            case Weight\Ounce::SYMBOL:
                return new Weight\Ounce();
            break;
            case Weight\Pound::SYMBOL:
                return new Weight\Pound();
            break;
            // TEMPERATURE
            case Temperature\Celsius::SYMBOL:
                return new Temperature\Celsius();
            break;
            case Temperature\Fahrenheit::SYMBOL:
                return new Temperature\Fahrenheit();
            break;
            case Temperature\Kelvin::SYMBOL:
                return new Temperature\Kelvin();
            break;
            default:
               throw new \InvalidArgumentException(sprintf('Unit "%s" not recognized', $unit));
        }
    }
} 