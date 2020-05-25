<?php

namespace App\Clients;

use App\Retailer;
use Illuminate\Support\Str;

/**
 * Class ClientFactory
 */
class ClientFactory
{
    /**
     * Instanciate a new Client according to the retailer.
     *
     * @param \App\Retailer $retailer
     * @return Client
     * @throws ClientException
     */
    public function make(Retailer $retailer): Client
    {
        $class = "App\\Clients\\" . Str::studly($retailer->name);

        if (! class_exists($class)) {
            throw new ClientException("Client not found for " . $retailer->name);
        }

        return new $class();
    }
}
