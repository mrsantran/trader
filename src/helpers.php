<?php

use Santran\Trader\Contracts\Trader as TraderContract;

if (!function_exists('trader')) {
    /**
     * Get the trader service.
     *
     * @return TraderContract
     */
    function trader()
    {
        return app(TraderContract::class);
    }
}
