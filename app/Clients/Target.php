<?php

namespace App\Clients;

use App\Stock;

/**
 * Class Target
 * @author yourname
 */
class Target implements Client
{
    public function checkAvailablity(Stock $stock): StockStatus
    {
        // Todo
    }
}
