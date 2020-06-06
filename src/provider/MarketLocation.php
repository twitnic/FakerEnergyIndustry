<?php

declare(strict_types=1);

namespace Faker\Provider;

class MarketLocation extends Base
{
    public static function generateMaLo(
        string $marketPartnerIdType
    ): string {

        switch ($marketPartnerIdType) {
            case('dvgw'):
                break;
            case('bdew'):
                break;
            default:
                throw new \Exception(
                    "Server responded with 724 - This line should be unreachable"
                );
        }


        return static::randomElement(static::$type);
    }
}
