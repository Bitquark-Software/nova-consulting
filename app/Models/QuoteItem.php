<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteItem extends Model
{
    protected $fillable = ['quote_id','description','quantity','unit_price','total'];

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }

    // Mutator to calculate total
    public static function booted()
    {
        static::saving(function ($item) {
            $item->total = $item->quantity * $item->unit_price;
        });
    }
}
