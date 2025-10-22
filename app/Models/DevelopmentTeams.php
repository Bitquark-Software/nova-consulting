<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DevelopmentTeams extends Model
{
    protected $fillable = [
        'project_type',
        'product_owners',
        'senior_devs',
        'junior_devs',
        'qa_testers',
        'estimated_budget',
        'start_time',
        'user_id',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
