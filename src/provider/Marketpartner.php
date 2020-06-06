<?php

declare(strict_types=1);

namespace Faker\Provider;

class Marketpartner extends Base
{
    public static function getMarketPartnerType(): string
    {
        return static::randomElement(static::$type);
    }

    protected static $type = \Constants::MARKETPARTNERTYPES;
    protected static $energy = \Constants::MARKETPARTNERENERGY;
    protected static $partnerIdType = \Constants::MARKETPARTNERIDTYPES;
    protected static $marketpartner = [
        [
            'partnerId' => 4041409000006,
            'organization' => 'EnBW Energie Baden-Württemberg AG',
            'type' => 'provider',
            'zip' => '76131',
            'city' => 'Karlsruhe',
            'street' => 'Durlacher Allee',
            'houseNumber' => '93',
            'accountHolder' => 'Team Datenaustausch',
            'phone' => '+49 721 72586-484',
            'reminderEmailAddress' => 'noReply@powercloud.de',
            'partnerIdType' => 'iln'
        ],
        [
            'partnerId' => 9904198000008,
            'organization' => 'EnBW Energie Baden-Württemberg AG',
            'type' => 'msb',
            'zip' => '76131',
            'city' => 'Karlsruhe',
            'street' => 'Durlacher Allee',
            'houseNumber' => '93',
            'accountHolder' => 'Team Datenaustausch',
            'phone' => '+49 721 72586-484',
            'reminderEmailAddress' => 'noReply@powercloud.de',
            'partnerIdType' => 'bdew'
        ],
        [
            'partnerId' => 9900770000002,
            'organization' => 'Netz Leipzig GmbH',
            'type' => 'net',
            'zip' => '04277',
            'city' => 'Leipzig',
            'street' => 'Arno-Nitzsche-Straße',
            'houseNumber' => '35',
            'accountHolder' => 'Johann Rösler',
            'phone' => '+49 341 121 6080',
            'reminderEmailAddress' => 'noReply@powercloud.de',
            'partnerIdType' => 'bdew'
        ],
    ];
}
