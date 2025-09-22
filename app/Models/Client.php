<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    protected $fillable = ['user_id','contact_name','email','phone','notes'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
