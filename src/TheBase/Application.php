<?php
/**
 * This file is part of the wengo/basesdk.
 *
 * (c) basesdk <398711943@qq.com>
 *
 */

namespace Yituo\TheBase;

use Yituo\Core\ServiceContainer;

/**
 * Class Application.
 *
* @property \Yituo\TheBase\Balances\Client                                $balances
*/
class Application extends ServiceContainer {
    protected $providers = [
        Balances\ServiceProvider::class,
    ];
}