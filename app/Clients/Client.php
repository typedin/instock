<?php

namespace App\Clients;

use App\Stock;

/**
 * Interface Client
 */
interface Client
{
    public function checkAvailablity(Stock $stock): StockStatus;
}
