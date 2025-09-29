<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'status',
        'company_name',
        'user_id',
        'budget',
        'budget_used',
        'progress',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
