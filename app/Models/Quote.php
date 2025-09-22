<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['code','client_id','created_by','total','notes','status','sent_at'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function items()
    {
        return $this->hasMany(QuoteItem::class);
    }

    public function project()
    {
        return $this->hasOne(Project::class);
    }

    public function calculateTotal()
    {
        $total = $this->items()->get()->sum(function($i){ return $i->quantity * $i->unit_price; });
        $this->total = $total;
        $this->save();
        return $total;
    }
}
