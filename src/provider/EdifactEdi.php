<?php

declare(strict_types=1);

namespace Faker\Provider;

class EdifactEdi extends Base
{
    protected static $ediTypes = [
        'APERAK',
        'COMDIS',
        'IFTSTA',
        'INSRPT',
        'UTILMD',
        'UTILTS',
        'MSCONS',
        'ORDERS',
        'ORDRSP',
        'PRICAT',
        'QUOTES',
        'REQOTE',
    ];
}
