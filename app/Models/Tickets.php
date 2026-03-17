<?php

namespace App\Models;

use App\Enums\TicketStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tickets extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'user_id',
        'position',
        'assigned_to_id'
    ];

    protected $casts = [
        'status' => TicketStatus::class,
    ];

    public function client(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assignedTo(): BelongsTo {
        return $this->belongsTo(User::class, 'assigned_to_id');
    }
}
