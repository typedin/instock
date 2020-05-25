<?php

namespace App;

use App\Clients\BestBuy;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';

    protected $casts = [
        'in_stock' => 'boolean'
    ];

    public function track()
    {
        $status = $this->retailer
           ->client()
           ->checkAvailablity($this);

        $this->update([
            'in_stock' => $status->available,
            'price' => $status->available
        ]);
    }

    public function retailer()
    {
        return $this->belongsTo(Retailer::class);
    }
}
