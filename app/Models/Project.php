<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['code','quote_id','name','description','budget','spent','status','progress'];

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }
}
