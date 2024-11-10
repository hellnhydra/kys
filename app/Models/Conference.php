<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date'];
    

    public function subsystem()
    {
        return $this->belongsTo(Subsystem::class);
    }
}